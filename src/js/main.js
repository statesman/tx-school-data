(function($, _) {
  "use strict";

  /* top-level vars */

   var data_path = 'assets/data/';
   var search_index = 'assets/data/search_index.json';

  // cache DOM refs
  var $RESULTS = $(".results");
  var $TYPEAHEAD = $(".typeahead");
  var $RESULTS_WAIT = $(".results-wait");
  var $INTERACTIVE_WAIT = $(".interactive-wait");
  var $INTERACTIVE_READY = $(".interactive-ready");

   // template var
   _.templateSettings.variable = "school";

   var resultsTemplate = _.template($(".results-template").html());

   // load school index for typeahead
  $.getJSON(search_index, function(data) {

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

          var str = d.name + " - " + d.district;

          if (substringRegex.test(str)) {
            matches.push({
              "name": d.name,
              "id": d.id,
              "district": d.district
            });
          }
        });
        cb(matches);
      };
    };

    $TYPEAHEAD.typeahead({
      hint: true,
      highlight: true,
      minLength: 3
    },
    {
      name: 'schools',
      source: substringMatcher(data),
      limit: 100,
      display: function(d) {
        return [
          d.name,
          " - ",
          d.district].join("");
      }
    }).bind('typeahead:select', function(ev, suggestion) {
      fetchRecord(suggestion);
    });

    function fetchRecord(q) {
      $RESULTS_WAIT.show();
      $.getJSON(data_path + q.id + '.json', function(matchingRecord) {
        $RESULTS.html(resultsTemplate(matchingRecord));
        $RESULTS_WAIT.hide();
      });
     }

    $INTERACTIVE_WAIT.hide();
    $INTERACTIVE_READY.show();

  });

}(jQuery, _));
