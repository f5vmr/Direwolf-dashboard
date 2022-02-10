<?php
/*
$time = microtime();
$time = explode(' ', $time);
$time = $time[1] + $time[0];
$start = $time;
header("Cache-Control: no-cache, must-revalidate");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
*/
include "config/config.php";
include "include/tools.php";
include "include/functions.php";
include "include/init.php";
//include "include/disk.php";
//include "include/sysinfo.php";
/*include "version.php";
*/
?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta http-equiv="refresh" content="<?php echo REFRESHAFTER?>">
  <title>Direwolf Dashboard</title>
  <link rel="stylesheet" href="include/style.css" 
</head>
 <nav class="navbar navbar-expand-lg navbar-dark bg-primary static-top">
    <div class="container">
      <a class="navbar-brand" href="#">Direwolf Dashboard - <?php //echo getConfigItem(SVXLOGICSECTION, "CALLSIGN", $configs); ?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
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

</html>




