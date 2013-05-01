<?php
	$con = mysql_connect('quinix.info', 'quinix_admin', 'neagu139') or die(mysql_error());
	$db = mysql_select_db('quinix_dev', $con);
?>