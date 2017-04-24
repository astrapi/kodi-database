<?php
include('../includes/config.php');
$query="select movie.c00 as strTitle, movie.c22 as strPath, art.url from movie inner join art on movie.idMovie = art.media_id where url = '' and media_type = 'movie' and type = 'fanart'";
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
