<?php
$configs = getDWConfig();
if (!defined("TIMEZONE"))
    define("TIMEZONE", "UTC");
echo $configs;
$logLines = getDWLog();
echo $logLines;
?>
