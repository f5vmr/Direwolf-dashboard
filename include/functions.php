<?php

function getDWConfig() {
        // loads DW.conf into array for further use
        $conf = array();
        $configs = fopen(DWCONFPATH.DWCONFFILENAME, 'r')) 
		{
                if ($configs) {
		 while (($line = fgets($configs)) !== false) 
		 {
        // process the line read.
    		}	
                        array_push($conf, trim( $line, " \t\n\r\0\x0B"));
                }
		fclose($configs);
	}
        return $conf;
}

function getConfigItem($key, $configs) {
        // retrieves the corresponding config stanza within a config file
        $pos = array_search($configs) + 1;
        $len = count($configs);
        while(startsWith($configs[$pos],$key." ") === false && $pos <= ($len) ) {
                if (startsWith($configs[$pos]," ")) {
                        return null;
                }
                $sectionpos++;
        }

        return substr($configs[$pos], strlen($key) + 1);
}
function getGitVersion(){
	// retrieves the current Git version of the dashboard, if available
	if (file_exists(".git")) {
		exec("git rev-parse --short HEAD", $output);
		return 'GitID #<a href="https://github.com/f5vmr/Direwolf-dashboard/commit/'.$output[0].'" target="_blank">'.$output[0].'</a>';
	} else {
		return 'GitID unknown';
	}
}

function getDWLog() {
	// retrieves the current Direwolf log file
        $logLines = array();
        if ($log = fopen(DWLOGPATH.DWLOGPREFIX, 'r')) {
                while ($logLine = fgets($log)) {
                        array_push($logLines, $logLine);
                }
                fclose($log);
		echo "Log File found";
        }
        return $logLines;
}

function getSize($filesize, $precision = 2) {
	// this is for the system info card
	$units = array('', 'K', 'M', 'G', 'T', 'P', 'E', 'Z', 'Y');
	foreach ($units as $idUnit => $unit) {
		if ($filesize > 1024)
			$filesize /= 1024;
		else
			break;
	}
	return round($filesize, $precision).' '.$units[$idUnit].'B';
}

?>
