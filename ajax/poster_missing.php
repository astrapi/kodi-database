<?php
include('../includes/config.php');
$query="select m.idMovie as idMovie, m.c00 as strTitle, (select a.url from art as a where media_id = m.idMovie and media_type = 'movie' and type = 'poster') as strPoster, (select a.url from art as a where media_id = m.idMovie and media_type = 'movie' and type = 'fanart') as strFanart from movie as m;";
$result = $mysqli_kodi->query($query) or die($mysqli_kodi->error.__LINE__);

$arr = array();
if($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		$arr[] = $row;	
	}
}
# JSON-encode the response
$json_response = json_encode($arr);

// # Return the response
echo $json_response;
?>
