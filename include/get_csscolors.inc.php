<?php
// $Id: get_csscolors.inc.php 1759 2003-08-18 19:15:45Z cvs_iezzi $

/* get the columns names and fill them into an array */
# list_fields not present in mysqli
#$res = mysqli_list_fields(PPHL_DB_NAME, PPHL_TBL_CSS);

$res = mysqli_query($link, "SHOW COLUMNS FROM ".PPHL_TBL_CSS.";");
for($i = 0; $i < mysqli_num_fields($res); $i++) $csscolors[$i] = mysqli_field_name($res, $i);

/* fill the css color array */
$sql = "SELECT * FROM ".PPHL_TBL_CSS." WHERE id = $cssid";
$res = mysqli_query($link, $sql);
$cnt_csscolors = count($csscolors);
if (!@mysqli_num_rows($res)) {
	$cssid = resetCssIDs();
	$sql = "SELECT * FROM ".PPHL_TBL_CSS." WHERE id = $cssid";
	$res2 = mysqli_query($link, $sql);
	
	for($i = 3; $i < $cnt_csscolors; $i++) {
		${$csscolors[$i]} = mysqli_result($res2, 0, $i); //get all colors
	}
} else {
	for($i = 3; $i < $cnt_csscolors; $i++) {
		${$csscolors[$i]} = mysqli_result($res, 0, $i); //get all colors
	}
}
?>
