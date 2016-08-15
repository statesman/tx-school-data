(function($, _) {
  "use strict";

  /* top-level vars */

  // path to data file
  var SCHOOL_DATA = '../data/school-rating-data.json';

  // template var
  _.templateSettings.variable = "school";

  // latest year (used to grab summary demo stats)
  // var ACTIVE_YEAR = "2016";

  // cache DOM refs
  var $RESULTS = $(".results");
  var $TYPEAHEAD = $(".typeahead");
  var $RESULTS_WAIT = $(".results-wait");
  var $INTERACTIVE_WAIT = $(".interactive-wait");
  var $INTERACTIVE_READY = $(".interactive-ready");

  // set up results template
  var resultsTemplate = _.template($(".results-template").html());

  // load school index for typeahead
  $.getJSON(SCHOOL_DATA, function(data) {

    var substringMatcher = function(arr_obj) {
      return function findMatches(q, cb) {
        var matches, substringRegex;

        // an array that will be populated with substring matches
        matches = [];

        // regex used to determine if a string contains the substring `q`
        substringRegex = new RegExp(q, 'i');

        // iterate over the array of objects and add matches --
        // "obj.name - obj.district" -- to the `matches` array
        _.each(arr_obj, function(d, i) {

          var str = d.name + " - " + d.dist_name;

          if (substringRegex.test(str)) {
            matches.push({
              "name": d.name,
              "id": i,
              "district": d.dist_name
            });
          }
        });
        cb(matches);
      };
    };

    $TYPEAHEAD.typeahead({
      hint: true,
      highlight: true,
      minLength: 3,
    },
    {
      name: 'schools',
      source: substringMatcher(data),
      display: function(d) {
        return [
          d.name,
          " - ",
          d.dist_name].join("");
      }
    }).bind('typeahead:select', function(ev, suggestion) {
      fetchRecord(suggestion);
    });

    function fetchRecord(q) {
      $RESULTS_WAIT.show();
      console.log(q);
      var matchingRecord = data[q.id];
      console.log(matchingRecord);
      $RESULTS.html(resultsTemplate(matchingRecord));
      $RESULTS_WAIT.hide();
    }

    $INTERACTIVE_WAIT.hide();
    $INTERACTIVE_READY.show();

  });

}(jQuery, _));
