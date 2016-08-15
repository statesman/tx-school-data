<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <?php
  // update these fields
  $meta = array(
    "title" => "Texas school accountability ratings | Statesman.com",
    "description" => "How did your school do on the 2016 Texas accountability ratings? Find out here.",
    "thumbnail" => "http://projects.statesman.com/site_path/assets/share.jpg",
    "shortcut_icon" => "http://media.cmgdigital.com/shared/media/2015-08-28-16-58-55/web/site/www_mystatesman_com/images/favicon.ico",
    "apple_touch_icon" => "http://media.cmgdigital.com/shared/theme-assets/242014/www.statesman.com_fa2d2d6e73614535b997734c7e7d2287.png",
    "url" => "http://projects.statesman.com/news/2016-08-16-tx-school-data/",
    "twitter" => "aasinteractive",
    "authors" => array(
        array("name" => "Cody Winchester", "twitter" => "cody_winchester"),
        array("name" => "Dan Hill", "twitter" => "danhillreports"),
        array("name" => "Adam Humphrey", "twitter" => "humphrinator")
    ),
    "publish_date" => "Aug. 16, 2016",
    "related_story" => array(
        "url" => "http://www.statesman.com/news/news/local/four-austin-middle-schools-stumble-in-texas-educat/nsGFq/",
        "headline" => "Four Austin middle schools stumble in Texas education ratings"
    )
  );
?>

  <title>Interactive: <?php print $meta['title']; ?> | Austin American-Statesman</title>
  <link rel="shortcut icon" href="<?php print $meta['shortcut_icon']; ?>" />
  <link rel="apple-touch-icon" href="<?php print $meta['apple_touch_icon']; ?>" />

  <link rel="canonical" href="<?php print $meta['url']; ?>" />

  <meta name="description" content="<?php print $meta['description']; ?>">

  <meta property="og:title" content="<?php print $meta['title']; ?>"/>
  <meta property="og:description" content="<?php print $meta['description']; ?>"/>
  <meta property="og:image" content="<?php print $meta['thumbnail']; ?>"/>
  <meta property="og:url" content="<?php print $meta['url']; ?>"/>

  <meta name="twitter:card" content="summary" />
  <meta name="twitter:site" content="@<?php print $meta['twitter']; ?>" />
  <meta name="twitter:title" content="<?php print $meta['title']; ?>" />
  <meta name="twitter:description" content="<?php print $meta['description']; ?>" />
  <meta name="twitter:image" content="<?php print $meta['thumbnail']; ?>" />
  <meta name="twitter:url" content="<?php print $meta['url']; ?>" />

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="dist/style.css">

  <link href='http://fonts.googleapis.com/css?family=Lusitana:400,700|Merriweather:400,300,300italic,400italic,700,700italic,900,900italic|Merriweather+Sans:400,300,300italic,400italic,700italic,700,800,800italic' rel='stylesheet' type='text/css'>

  <?php /* CMG advertising and analytics */ ?>
  <?php include "includes/advertising.inc"; ?>
  <?php include "includes/metrics-head.inc"; ?>

</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

        <a class="navbar-brand" href="http://www.statesman.com/" target="_blank">
        <img class="visible-xs visible-sm" width="103" height="26" src="assets/logo-short-black.png" />
        <img class="hidden-xs hidden-sm" width="273" height="26" src="assets/logo.png" />
        </a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="visible-xs small-social"><a target="_blank" href="https://www.facebook.com/sharer.php?u=<?php echo urlencode($meta['url']); ?>"><i class="fa fa-facebook-square"></i></a><a target="_blank" href="https://twitter.com/intent/tweet?url=<?php echo urlencode($meta['url']); ?>&via=<?php print urlencode($meta['twitter']); ?>&text=<?php print urlencode($meta['title']); ?>"><i class="fa fa-twitter"></i></a></li>
      </ul>
        <ul class="nav navbar-nav navbar-right social hidden-xs">
          <li><a target="_blank" href="https://www.facebook.com/sharer.php?u=<?php echo urlencode($meta['url']); ?>"><i class="fa fa-facebook-square"></i></a></li>
          <li><a target="_blank" href="https://twitter.com/intent/tweet?url=<?php echo urlencode($meta['url']); ?>&via=<?php print urlencode($meta['twitter']); ?>&text=<?php print urlencode($meta['title']); ?>"><i class="fa fa-twitter"></i></a></li>
        </ul>
    </div>
  </div>
</nav>

  <article class="container">

    <div class="row">
      <div class="col-xs-12">
      <h1 id="pagetitle">Texas school accountability scores 2016</h1>
      <p class="author">Interactive by <?php $len = count($meta['authors']) - 1; foreach($meta['authors'] as $i => $row) { print "<a href='http://twitter.com/" . $row['twitter'] . "' target='_blank'>" . $row['name'] . "</a>"; if ($i !== $len) { if ($i === $len-1) { print " and "; } else { print ", "; }}; }?>

      <br>
      Published <?php print $meta['publish_date']; ?></p>

      <p>Nearly 94 percent of Texas schools met state proficiency goals in 2016, according to new <a href="https://rptsvr1.tea.texas.gov/perfreport/account/index.html" target="_blank">accountability data</a> released Monday by the The Texas Education Agency.</p>

      <p>In Central Texas, all campuses in Bastrop, Del Valle, Dripping Springs, Eanes, Elgin, Georgetown, Hutto, Lake Travis, Leander, Pflugerville, Round Rock and San Marcos met standards.</p>

      <p>Hemphill Elementary in the Hays school district and Manor Excel Academy in the Manor district received &ldquo;Improvement Required&rdquo; ratings.</p>

      <p>In the yearly report the TEA measures state elementary, middle and high schools based on four performance index categories:</p>

      <ol>
        <li><strong>Student achievement:</strong> Student performance across all subjects</li>
        <li><strong>Student progress:</strong> Student performance improvement</li>
        <li><strong>Closing performance gaps:</strong> Academic achievement of economically disadvantaged students and the two lowest-performing racial student groups</li>
        <li><strong>Postsecondary readiness:</strong> Measure of a school’s ability to prepare its students for the next level of education, or the workforce.</li>
      </ol>

      <p>In addition to the performance index report, schools are also eligible for distinctions should they perform particularly well in a specific area.</p>

      <?php if ($meta['related_story'])
        print "<p class='bold'>Read more: <a href='" . $meta['related_story']['url'] . "' target='_blank'>" . $meta['related_story']['headline'] . " &raquo;</a></p>"
      ?>

      <p>Type a school name in the search bar below to find its accountability scores from 2013 to 2016.</p>
      </div>
    </div>

    <div class="row">
        <div class="col-xs-12 interactive">
            <h1 class="interactive-wait"><i class="fa fa-circle-o-notch fa-spin"></i></h1>
            <div class="interactive-ready">
                <input type="text" class="form-control input-lg typeahead" placeholder="Find your school's ratings" />
                <h1 class="results-wait"><i class="fa fa-circle-o-notch fa-spin"></i></h1>
                <div class="results"></div>
            </div>
        </div>
    </div>

  </article>

  <script type="text/html" class="results-template">
      <div class="search-result">
          <h2><%= school.name  %></h2>
          <h3 class="subhed"><small><%= school.dist_name %></small></h3>

          <div class="year-labels">
          <% _.each(school.ratings, function(ratingYear) {
            if (ratingYear.rating === "M") { %>
              <div class="muted-label text-success">
                  <p class="hed"><%= ratingYear.year %>&ensp;<i class="fa fa-check-circle"></i></p>
                  <p class="txt">Met standard</p>
              </div>
            <% } else if (ratingYear.rating === "I") { %>
              <div class="muted-label text-danger">
                  <p class="hed"><%= ratingYear.year %>&ensp;<i class="fa fa-times-circle"></i></p>
                  <p class="txt">Improvement required</p>
              </div>
            <% } else if (ratingYear.rating === "A") { %>
              <div class="muted-label text-info">
                  <p class="hed"><%= ratingYear.year %>&ensp;<i class="fa fa-minus-circle"></i></p>
                  <p class="txt">Met alternative standard</p>
              </div>
            <% } else if (ratingYear.rating === "X" || ratingYear.rating === "Z") { %>
              <div class="muted-label">
                  <p class="hed"><%= year %>&ensp;<i class="fa fa-minus-circle"></i></p>
                  <p class="txt">Not rated</p>
              </div>
            <% }
            });
          %>
          </div>
          <div class="section categories">
              <div class="legend-row row">
                <div class="col-sm-6">
                  <div class="legend-text col-xs-2"><strong>Legend:</strong></div>
                  <div class="col-xs-10 bar-goal-legend">TEA target score</div>
                  <div class="legend-text col-xs-2"></div>
                  <div class="col-xs-5 bar-value-legend"></div>
                  <div class="col-xs-5">Score given to school</div>
                </div>
                <div class="col-sm-6">
                  <div class="col-xs-12"></div>
                </div>
              </div>
              <% _.each(["Student Achievement (Index 1)","Student Progress (Index 2)","Closing Performance Gaps (Index 3)","Postsecondary Readiness (Index 4)"],
                    function(title, i) { %>
              <h3><%= title %></h3>
              <p class="leadish italic"><%= ["Student performance across all subjects.",
                "Student performance improvement.",
                "Academic achievement of economically disadvantaged students and the two lowest-performing racial student groups.",
                "Measure of a school’s ability to prepare its students for the next level of education, or the workforce."][i] %></p>
              <div class="index-chart">

                  <div class="row">
                      <div class="col-xs-10 col-xs-offset-2">
                          <div class="bar-scale-wrapper">
                              <span class="small muted pull-left">0%</span>
                              <span class="small muted pull-right">100%</span>
                              <div class="clearfix"></div>
                              <div class="bar-scale"></div>
                          </div>
                      </div>
                  </div>

                  <div class="clearfix"></div>

                  <% _.each(school[i + 1].scores, function(scoreYear) { %>
                  <div class="row bar-group">
                      <div class="col-xs-2 bar-year-label">
                          <%= scoreYear.year %>
                      </div>
                      <div class="col-xs-10">
                          <% if (scoreYear.score === null) { %>
                          <div class="bar italic" style="margin-top:2px;">No data this year</div>
                          <% } else { %>
                          <div class="bar">
                              <div class="bar-value" style="width: <%= scoreYear.score %>%;"></div>
                              <div class="bar-goal" style="width: <%= scoreYear.target %>%;"></div>
                          </div>
                          <% } %>
                      </div>
                  </div>
                  <% }); %>
              </div>
              <% }); %>

          </div>
      </div>
  </script>

    <!-- bottom matter -->
    <?php include "includes/banner-ad.inc";?>
    <?php include "includes/legal.inc";?>
    <?php include "includes/project-metrics.inc"; ?>
    <?php include "includes/metrics.inc"; ?>

    <script src="dist/scripts.js"></script>

  <?php if($_SERVER['SERVER_NAME'] === 'localhost'): ?>
    <script src="//localhost:35729/livereload.js"></script>
  <?php endif; ?>
</body>
</html>
