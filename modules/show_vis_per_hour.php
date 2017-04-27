<?php
 /* -------------------------------------------------------------------------------
    PowerCounter  (c)2000-2003 Philip Iezzi
    $Id: show_vis_per_hour.php 1602 2003-06-19 20:49:06Z cvs_iezzi $
	
    show_vis_per_hour.php Shows the hourly access graphic
    
    ------------------------------------------------------------------------------ */

define('PPHL_SCRIPT_PATH', '../');
include PPHL_SCRIPT_PATH."main_location.inc";
include INC_GETUSERDATA;



include MOD_IMGVISPERHOUR;
if (!isset($visperhour_mode)) $visperhour_mode = 'log_hour_month';
if ($visperhour_mode == 'log_hour_month' && isset($yyyymm)) module_img_visitors_per_hour($visperhour_mode,$yyyymm);
else module_img_visitors_per_hour($visperhour_mode);
?>