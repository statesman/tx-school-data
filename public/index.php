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
    ),
    "publish_date" => "Aug. 16, 2016",
    "related_story" => array(
        "url" => "http://www.mystatesman.com/news/news/local/jobs-schools-bring-growing-asian-population-north/nrk9D/",
        "headline" => "Jobs, schools bring growing Asian population to Austin area"
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
        <li class="visible-xs small-social"><a target="_blank" href="https://www.facebook.com/sharer.php?u=<?php echo urlencode($meta['url']); ?>"><i class="fa fa-facebook-square"></i></a><a target="_blank" href="https://twitter.com/intent/tweet?url=<?php echo urlencode($meta['url']); ?>&via=<?php print urlencode($meta['twitter']); ?>&text=<?php print urlencode($meta['title']); ?>"><i class="fa fa-twitter"></i></a><a target="_blank" href="https://plus.google.com/share?url=<?php echo urlencode($meta['url']); ?>"><i class="fa fa-google-plus"></i></a></li>
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
      <p class="author">Interactive by <?php $len = count($meta['authors']) - 1; foreach($meta['authors'] as $i => $row) { print "<a href='http://twitter.com/" . $row['twitter'] . "' target='_blank'>" . $row['name'] . "</a>"; if ($i !== $len) print " and "; }?>
      <br>
      Published <?php print $meta['publish_date']; ?></p>

      <p>About XX.X percent of Texas schools met state proficiency goals in 2016, according to new <a href="https://rptsvr1.tea.texas.gov/perfreport/account/index.html" target="_blank">accountability data</a> released Monday by the The Texas Education Agency. Around Austin, all schools in XXXXXX ISD, YYYYYY ISD and ZZZZZZ ISD met the state’s 2016 goals while some schools in AAAAAA ISD and BBBBBB ISD failed to do so.</p>

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
      </div>
    </div>

    <div class="row">
        <div class="col-xs-12 interactive">
            <h1 class="interactive-wait"><i class="fa fa-circle-o-notch fa-spin"></i></h1>
            <div class="interactive-ready">
                <input type="text" class="form-control input-lg typeahead" placeholder="Find your school's rating" />
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
              <div class="muted-label text-success">
                  <p class="hed">2016&ensp;<i class="fa fa-check-circle"></i></p>
                  <p class="txt">Met standard</p>
              </div>
              <div class="muted-label text-danger">
                  <p class="hed">2015&ensp;<i class="fa fa-times-circle"></i></p>
                  <p class="txt">Improvement required</p>
              </div>
              <div class="muted-label text-info">
                  <p class="hed">2014&ensp;<i class="fa fa-minus-circle"></i></p>
                  <p class="txt">Met alternative standard</p>
              </div>
              <div class="muted-label text-success">
                  <p class="hed">2014&ensp;<i class="fa fa-check-circle"></i></p>
                  <p class="txt">Met standard</p>
              </div>
          </div>
          <div class="section categories">
              <h3>Accountability ratings</h3>

              <p class="leadish italic">Student Achievement (Index 1)</p>

              <div class="index-chart">

              <div class="row">
                  <div class="col-xs-11 col-xs-offset-1">
                      <div class="bar-scale-wrapper">
                          <span class="small muted pull-left">0%</span>
                          <span class="small muted pull-right">100%</span>
                          <div class="clearfix"></div>
                          <div class="bar-scale"></div>
                      </div>
                  </div>
              </div>

              <div class="clearfix"></div>

              <!-- didn't meet goal this year -->
              <div class="row bar-group">
                  <div class="col-xs-1 bar-year-label">
                      2016
                  </div>
                  <div class="col-xs-11 bar-wrapper">
                      <div class="bar">
                          <div class="bar-value" style="width: 47%;"></div>
                          <div class="bar-goal" style="width: 50%;"></div>
                      </div>
                  </div>
                  </div>

              <!-- met goal this year -->
              <div class="row bar-group">
                  <div class="col-xs-1">
                      2015
                  </div>
                  <div class="col-xs-11">
                  <div class="bar">
                      <div class="bar-value" style="width: 56%;"></div>
                      <div class="bar-goal" style="width: 43%;"></div>
                  </div>
                  </div>
              </div>

              <!-- no data this year -->
              <div class="row bar-group">
                  <div class="col-xs-1">
                      2014
                  </div>
                  <div class="col-xs-11">
                  <div class="bar italic" style="margin-top:2px;">
                      No data this year
                  </div>
                  </div>
                  </div>

              <!-- met goal this year -->
              <div class="row bar-group">
                  <div class="col-xs-1">
                      2013
                  </div>
                  <div class="col-xs-11">
                  <div class="bar">
                      <div class="bar-value" style="width: 56%;"></div>
                      <div class="bar-goal" style="width: 43%;"></div>
                  </div>
                  </div>
              </div>
          </div>


              <p class="leadish italic">Student Progress (Index 2)</p>
              CHART
              <p class="leadish italic">Closing Performance Gaps (Index 3)</p>
              CHART
              <p class="leadish italic">Postsecondary Readiness (Index 4)</p>
              CHART
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
