<?php

$time = microtime();
$time = explode(' ', $time);
$time = $time[1] + $time[0];
$start = $time; 
header("Cache-Control: no-cache, must-revalidate");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
include "config/config.php";
print "Done Config\n";
include "include/tools.php";
print "Done Tools\n";
include "include/functions.php";
print "Done Functions\n";

//include "version.php";
include "include/init.php";
print "Done Init\n";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta http-equiv="refresh" content="<?php echo REFRESHAFTER?>">
  <title>Direwolf Dashboard for G4NAB </title>
  <link rel="stylesheet" href="include/style.css"> 
</head>
 

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary static-top">
    <div class="container">
      <a class="navbar-brand" href="#">Direwolf  Dashboard for </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">      
          
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container-fluid">
    <div class="row">
      <?php
        include "include/sysinfo.php";
        include "include/disk.php";
        include "include/log.php";
      ?>
    </div>
  </div>
<!--  <div class="container-fluid">
    <div class="row">
      <div class="col-4">
        
      </div>
      <div class="col-8">
        
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
   
      </div>
    </div>
  </div>
  <div class="container-fluid">
    
  </div>-->
 
  <footer class="footer-copyright">
    <div class="container-fluid">
    <span class="navbar navbar-dark bg-primary fixed-bottom text-muted">
      
        <span class="float:left;">
          <?php
            $lastReload = new DateTime();
            $lastReload->setTimezone(new DateTimeZone(TIMEZONE));
              echo "Direwolf Dashboard v.".VERSION." | Last Reload ".$lastReload->format('Y-m-d, H:i:s')." (".TIMEZONE.")";
            $time = microtime();
            $time = explode(' ', $time);
            $time = $time[1] + $time[0];
            $finish = $time;
            $total_time = round(($finish - $start), 4);
              echo '<!--Page generated in '.$total_time.' seconds.-->';
          ?>
        </span>
        <span class="float:right;">
          <strong>Copyright &copy; <script>document.write( new Date().getFullYear() );</script> <a href="https://g4nab.co.uk">g4nab.co.uk</a>.</strong> All rights reserved.
        </span>
      
      </span>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <!--Pureknob Gauge Javascript -->
  <script src="dist/js/pureknob.js"></script>

</body>

</html>



