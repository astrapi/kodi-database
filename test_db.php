<?php
$db_host1               = 'db01.simpsons.lan';

$db_user1               = 'astrapi';
$db_password1           = 'astrapi';
$db_database1           = 'astrapi_movies';


$mysqli = new mysqli($db_host1, $db_user1, $db_password1, $db_database1);

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}



#$mysqli_astrapi1    = new mysqli($db_host1, $db_user1, $db_password1, $db_database1);
#$mysqli_astrapi1->set_charset("utf8");

#$query="select * from files order by strTitle";
#$result = $mysqli_astrapi1->query($query) or die($mysqli_astrapi1->error.__LINE__);

#if (!$mysqli_astrapi1->query($query)) {
#    printf("Errormessage: %s\n", $mysqli_astrapi1->error);
#}

?>
