<?php

$time = microtime();
$time = explode(' ', $time);
$time = $time[1] + $time[0];
$start = $time;
header("Cache-Control: no-cache, must-revalidate");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
include "config/config.php";
include "include/tools.php";
include "include/functions.php";
include "include/init.php";
/*include "version.php";
*/
echo "test1";

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta http-equiv="refresh" content="<?php// echo REFRESHAFTER?>">
  <title>Direwolf Dashboard for APRS<?php //echo getConfigItem(MYCALL, "MYCALL", $configs); ?></title>
  <link rel="stylesheet" href="include/bootstrap.css" 
</head>
  </html>

<!--
<body>
  <!-- Navigation 
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary static-top">
    <div class="container">
      <a class="navbar-brand" href="#">Direwolf Dashboard - <?php// echo getConfigItem(MYCALL, "MYCALL", $configs); ?></a>
  <!--    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="log.php">Log</a>
          <li class="nav-item">
            <a class="nav-link" href="">Initialise (not yet operational)</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="mailto:<?php echo CONTACTEMAIL ?>">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
-->
  <!-- Page Content -->
  <?php //checkSetup(); ?>
  <div class="container-fluid">
    <div class="row">
      <?php
        include "include/sysinfo.php";
        include "include/disk.php";
      ?>
    </div>
  </div>
  //put the log read here
 <?php //include "log.php"; ?>
  <footer class="footer-copyright">
    <span class="navbar navbar-dark bg-primary fixed-bottom text-muted">
      <div class="container-fluid">
        <span class="float:left;">
          <?php /*
            $lastReload = new DateTime();
            $lastReload->setTimezone(new DateTimeZone(TIMEZONE));
              echo "Direwolf Dashboard v.".VERSION." | Last Reload ".$lastReload->format('Y-m-d, H:i:s')." (".TIMEZONE.")";
            $time = microtime();
            $time = explode(' ', $time);
            $time = $time[1] + $time[0];
            $finish = $time;
            $total_time = round(($finish - $start), 4);
              echo '<!--Page generated in '.$total_time.' seconds.-->';
    */      ?>
        </span>
        <span class="float:right;">
          <strong>Copyright &copy; <script>document.write( new Date().getFullYear() );</script> <a href="https:g4nab.co.uk">g4nab.co.uk</a>.</strong> All rights reserved.
        </span>
      </div>
    </span>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <Pureknob Gauge Javascript -->
  <script src="dist/js/pureknob.js" type="text/javascript"></script>

</body>

</html>

