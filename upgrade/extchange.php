<?php
 /* ---------------------------------------------------------------
    EXTchange 0.01 - File extension changer
    (c)2001 Philip Iezzi <philippo@iezzi.ch>, http://www.iezzi.ch
    
	$Id: extchange.php 3026 2009-02-02 23:30:41Z piezzi $
	
    This script recursively scans through your directories
    and changes file extensions.
	If you run this script from this place (/upgrade/extchange.php)
	please do NOT change the $start_dir = '..' setting!
    --------------------------------------------------------------- */

    /*-----------------------------------------*/
      $old_ext = 'php3';  // your old extension
      $new_ext = 'php'; // your new extension
      $start_dir = '..';   // directory to start
      $run = false; // set this to true to run script
    /*-----------------------------------------*/


function directoryList ($url) {
	$surl = $url;
	$i = 0;
	if (substr($url,0,1) == '/') $surl = substr($url,1);
	$d = opendir($surl);
	while($entry=readdir($d)) {
		if ($entry != "." && $entry != "..") {
			$outp[$i] = $entry;
			++$i;
		}
	}
	closedir($d);
	return $outp;
}

function list_files($path) {
	global $old_ext, $new_ext;
	$path_array = directoryList($path);
	$cnt_path_array = count($path_array);
	for($i=0; $i < $cnt_path_array; $i++) {
		if ($path > '') $p = '/';
		else $p = '';
		$fd = $path.$p.$path_array[$i];
		if (@is_dir($fd)) list_files($fd);
		else if (preg_match('~\.'.$old_ext.'$~i~', $fd)) {
			$fd_new = substr($fd, 0, strlen($fd)-strlen($old_ext)).$new_ext;
			rename ($fd, $fd_new); 
			echo $fd.' >>> '.$fd_new.'<br />';
		}
	}
}

if ($run) {
    list_files($start_dir);
}
