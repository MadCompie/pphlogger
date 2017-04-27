<?php
// $Id: changehits.php 1759 2003-08-18 19:15:45Z cvs_iezzi $

define('PPHL_SCRIPT_PATH' , '../');
include PPHL_SCRIPT_PATH."main_location.inc";
include INC_GETUSERDATA;

if ($password == $pw) {
	$count = abs(chop($new_hits));
	$sql= "UPDATE ".PPHL_TBL_USERS." SET hits='".$count."' where id='".$id."'";
	$res = mysqli_query($GLOBALS['mysql_link'], $sql);
	echo mysqli_error();
}

Header("Location: $HTTP_REFERER");
exit;
?>