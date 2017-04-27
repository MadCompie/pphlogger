<?php
// $Id: dspNewPw.php 562 2002-04-28 23:17:48Z cvs_iezzi $

setcookie("username", "", time() - 3600);
setcookie("password", "", time() - 3600);

include 'main_location.inc';

$view = 'new password';
include INC_HEAD;
?>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div align="center">
  <table cellpadding="2" cellspacing="0" class="color2" border="0">
   <tr>
    <td class="color3"><b>PPhlogger <?php echo $strLinkNewPw; ?></b></td>
   </tr>
   <tr>
   	<td><?php
		if (isset($wrongpw)) {
			echo $strMsgNoValidUser;
		}
		else echo $strForVerification.':<br />';
		?>
		<form action="<?php echo ACT_CREATENEWPW; ?>" method="post">
		<?php echo $strUsername; ?>: <input class="myInput" type="text" name="your_username" /><br />
		&nbsp;&nbsp;&nbsp;<?php echo $strEmail; ?> <input class="myInput" type="text" name="your_email" />
		<input class="myInput" type="submit" value="<?php echo $strGetIt; ?>" name="submit" />
		</form>
	</td>
   </tr>
  </table>  
</div>

<?php
include INC_FOOT;
?>