<?php
// $Id: load_css.php 1759 2003-08-18 19:15:45Z cvs_iezzi $

include "main_location.inc";
include INC_GETUSERDATA;

if ($password == $pw) {
	$sql = "UPDATE ".PPHL_TBL_USERS." SET cssid = $N_css WHERE id = $id";
	$res = mysqli_query($GLOBALS['mysql_link'], $sql);
	setcookie("css_style", "", time() - 3600);
	Header("Location: $HTTP_REFERER");
	exit;
} else if ($guest) {
	setcookie("css_style", $N_css, $lifetime);
	Header("Location: $HTTP_REFERER");
	exit;
} else { //wrong password
	Header('Location: '.$HTTP_REFERER.'?wrongpw=1');
	exit;
}
?>