<?php
function format_time($seconds) {
	$secs = intval($seconds % 60);
	$mins = intval($seconds / 60 % 60);
	$hours = intval($seconds / 3600 % 24);
	$days = intval($seconds / 86400);
	$uptimeString = "";

	if ($days > 0) {
		$uptimeString .= $days;
		$uptimeString .= (($days == 1) ? "&nbsp;day" : "&nbsp;days");
	}
	if ($hours > 0) {
		$uptimeString .= (($days > 0) ? ", " : "") . $hours;
		$uptimeString .= (($hours == 1) ? "&nbsp;hr" : "&nbsp;hrs");
	}
	if ($mins > 0) {
		$uptimeString .= (($days > 0 || $hours > 0) ? ", " : "") . $mins;
		$uptimeString .= (($mins == 1) ? "&nbsp;min" : "&nbsp;mins");
	}
	if ($secs > 0) {
		$uptimeString .= (($days > 0 || $hours > 0 || $mins > 0) ? ", " : "") . $secs;
		$uptimeString .= (($secs == 1) ? "&nbsp;s" : "&nbsp;s");
	}
	return $uptimeString;
}

function startsWith($haystack, $needle) {
    return $needle === "" || strrpos($haystack, $needle, -strlen($haystack)) !== false;
}

function searchForKey($field, $needle, $array) {
	foreach ($array as $key => $val) {
		if ($val[$field] === $needle) {
			return $key;
		}
	}
	return null;
}

function getMHZ($freq) {
	return substr($freq,0,3) . "." . substr($freq,3,3) . "." . substr($freq,6) . " Mhz";
}

function isProcessRunning($processname) {
	exec("pgrep " . $processname, $pids);
	if(empty($pids)) {
	    // process not running!
	    return false;
	} else {
		// process running!
		return true;
	}
}

function createConfigLines() {
	$out ="";
	foreach($_GET as $key=>$val) {
		if($key != "cmd") {
			$out .= "define(\"$key\", \"$val\");"."\n";
		}
	}
	return $out;
}

function checkSetup() {
   $el = error_reporting();
   error_reporting(E_ERROR | E_WARNING | E_PARSE);
?>

<?php
   // For future use with a setup page
   if (file_exists ("setup.php") && ! defined("DISABLESETUPWARNING")) {
   ?>
   <div class="alert alert-danger" role="alert"><?php echo _("You need to remove setup.php, or you forgot to configure it! Please delete the file or configure this dashboard by calling <a href=\"setup.php\">setup.php</a>!"); ?></div>
   <?php
   }
   error_reporting($el);
}

function convertTimezone($timestamp) {
   $date = new DateTime($timestamp);
   $timezone = new DateTimeZone(TIMEZONE);
   $date->setTimeZone($timezone);
   return $date->format('Y-m-d H:i:s');
}

?>
