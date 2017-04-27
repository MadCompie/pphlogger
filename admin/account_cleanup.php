<?php
// $Id: account_cleanup.php 1759 2003-08-18 19:15:45Z cvs_iezzi $

define('PPHL_SCRIPT_PATH', '../');
include PPHL_SCRIPT_PATH."main_location.inc";

$sql = "SELECT id FROM ".PPHL_TBL_USERS." WHERE del_usr = 1";
$res = mysqli_query($link, $sql);
while ($row = mysqli_fetch_array($res)) {
	$id = $row['id'];
	$sql = "DELETE FROM ".PPHL_TBL_USERS." WHERE id = ".$id;
	mysqli_query($link, $sql);
	if (mysqli_affected_rows()) {
		$sql = "DROP TABLE IF EXISTS ".PPHL_DB_PREFIX.$id.$tbl_logs.", ".PPHL_DB_PREFIX.$id.$tbl_mpdl;
		mysqli_query($link, $sql);
		$sql = "DELETE FROM ".PPHL_TBL_CACHE." WHERE id = ".$id;
		mysqli_query($link, $sql);
	}
}

Header("Location: $adm_view[2]");
exit;
?>