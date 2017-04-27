<?php
// $Id: load_css.php 1759 2003-08-18 19:15:45Z cvs_iezzi $

define('PPHL_SCRIPT_PATH', '../');
include PPHL_SCRIPT_PATH."main_location.inc";

$sql = "UPDATE ".PPHL_TBL_SETTINGS." SET value = $N_css WHERE setting = 'cssid'";
$res = mysql_query($sql);
Header("Location: $HTTP_REFERER");
?>