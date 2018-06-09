<?php
include('config.php');
$mysqli_astrapi 	= new mysqli($db_host1, $db_user1, $db_password1, $db_database1);
$mysqli_astrapi->set_charset("utf8");

$mysqli_kodi = new mysqli($db_host2, $db_user2, $db_password2, $db_database2);
$mysqli_kodi->set_charset("utf8");
?>
