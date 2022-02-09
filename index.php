<?php

$time = microtime();
$time = explode(' ', $time);
$time = $time[1] + $time[0];
$start = $time;
header("Cache-Control: no-cache, must-revalidate");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
include "config/config.php";
include "init/tools.php";
include "init/functions.php";
include "init/init.php";
/*include "version.php";
*/
echo "test1";
echo $DWLOGPATH;

?>
