<?php
echo "testing init.php"
$configs = getDWConfig();
if (!defined("TIMEZONE"))
    define("TIMEZONE", "UTC");

$logLines = getDWLog();

?>
