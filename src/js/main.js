(function($, _) {
  "use strict";

  // path to data file
  var SCHOOL_DATA = '../data/films.json';


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

        // iterate over the array of objects and for any obj.value that
        // contains the substring `q`, add it to the `matches` array
        _.each(arr_obj, function(d) {
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
      minLength: 1,
    },
    {
      name: 'schools',
      source: substringMatcher(data),
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
      var matchingRecord = _.findWhere(data, {"id": q.id});
      $RESULTS.html(resultsTemplate(matchingRecord));
      $RESULTS_WAIT.hide();
    }

    $INTERACTIVE_WAIT.hide();
    $INTERACTIVE_READY.show();

  });

}(jQuery, _));
