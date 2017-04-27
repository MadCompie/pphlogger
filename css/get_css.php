<?php
// $Id: get_css.php 1934 2003-11-27 08:27:14Z cvs_iezzi $

define('PPHL_SCRIPT_PATH' , '../');
include PPHL_SCRIPT_PATH."main_location.inc";
if(isset($this_css)) $cssid = $this_css;
include INC_GETCSSCOLORS;
include INC_COLORARRAY;

/*
 * load the common css file and replace all @...@ strings with its color-values
 */
$css_file = 'common.css';
$css_style = fread($fp = fopen($css_file, 'r'), filesize($css_file));
fclose($fp);
while(preg_match('/(@.+@)/U',$css_style, $matches) == TRUE){
	$matchvar = str_replace('@','',$matches[1]);
	$css_style = str_replace($matches[1], getHEX($$matchvar), $css_style);
}

// workaround for problems with zlib.output_compression = On
@ob_end_clean();
@ini_set('zlib.output_compression', 'Off');
header('Content-Transfer-Encoding: none');

header("Content-Type: text/css");
header("Pragma: no-cache");
header("Expires: 0");
header("Content-Length: ".strlen($css_style));
//print "\r\n\r\n";
print $css_style;
?>