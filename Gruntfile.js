var fs = require("fs");
var request = require("request");
var config = require("./project.config");

module.exports = function(grunt) {
  'use strict';

  /* project-specific config */

  // URL endpoint
  var sitePath = config.sitePath;

  // stage URL for humans
  var stage_url = ['https://s3-us-west-2.amazonaws.com/dev.apps.statesman.com', sitePath, 'index.html'].join("/");

  // prod URL for humans
  var prod_url = ['http://apps.statesman.com', sitePath].join("/");


  /* project configurations */
  grunt.initConfig({

    // Copy FontAwesome files to the fonts/ directory
    copy: {
      fonts: {
        src: 'node_modules/font-awesome/fonts/**',
        dest: 'public/fonts/',
        flatten: true,
        expand: true
      }
    },

    // Transpile LESS
    less: {
      options: {
        sourceMap: true,
        paths: ['node_modules/bootstrap/less']
      },
      prod: {
        options: {
          compress: true,
          cleancss: false
        },
        files: {
          "public/dist/style.css": "src/less/style.less"
        }
      }
    },

    // Run our JavaScript through JSHint
    jshint: {
      js: {
        src: ['src/js/**.js']
      }
    },

    // Squish all that js into one file
    uglify: {
      options: {
        sourceMap: true
      },
      prod: {
        files: {
          'public/dist/scripts.js': [
            'node_modules/jquery/dist/jquery.js',
            'node_modules/underscore/underscore.js',
            'node_modules/typeahead.js/dist/typeahead.jquery.js',
            'node_modules/bootstrap/js/button.js',
            'node_modules/bootstrap/js/collapse.js',
            'node_modules/bootstrap/js/dropdown.js',
            'node_modules/bootstrap/js/transition.js',
            'src/js/main.js'
          ]
        }
      }
    },

    // Lint our Bootstrap usage
    bootlint: {
      options: {
        relaxerror: ['W005']
      },
      files: 'public/**.php',
    },

    // Watch for changes in LESS and JavaScript files,
    // relint/retranspile when a file changes
    watch: {
      options: {
        livereload: true
      },
      markup: {
        files: ['public/*.php', 'public/includes/*.inc']
      },
      scripts: {
        files: ['src/js/*.js'],
        tasks: ['jshint', 'uglify']
      },
      styles: {
        files: ['src/less/**/*.less'],
        tasks: ['less']
      }
    }

  });

  // Register a custom task to hit slack
  grunt.registerTask('slack', function(where_dis_go) {

    //check to see if there's a .slack file
    // (this file has the webhook endpoint)
    if (grunt.file.isFile('.slack')) {

      // homeboy here runs async, so
      var done = this.async();

      // prod or stage?
        var s3Path = where_dis_go === "prod" ? prod_url : stage_url;

        var payload = {
            "text": "hello yes i am pushing code to *" + sitePath +  "*: " + s3Path,
            "channel": "#bakery",
            "username": "SchoolDataBot",
            "icon_emoji": ":school:"
        };

        // send the request
        request.post(
            {
                url: fs.readFileSync('.slack', {encoding: 'utf8'}),
                json: payload
            },
            function callback(err, res, body) {
                done();
                if (body !== "ok") {
                    return console.error('upload failed:', body);
                }
            console.log('we slacked it up just fine people, good work');
        });
    }
    // if no .slack file, log it
    else {
        grunt.log.warn('No .slack file exists. Skipping Slack notification.');
    }
  });

  // Load the task plugins
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-copy');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-ftpush');
  grunt.loadNpmTasks('grunt-bootlint');
  grunt.loadTasks('tasks/');


  grunt.registerTask('default', ['copy', 'less', 'jshint', 'bootlint', 'uglify']);
  grunt.registerTask('stage', ['default', 'deployS3:stage', 'slack:stage']);
  grunt.registerTask('prod', ['default', 'deployS3:prod', 'slack:prod']);

};
