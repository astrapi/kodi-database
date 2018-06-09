<?php
include('../../config.php');
include('../../db.php');

$query="select substring_index(c22,'/',-1) as strFilename, c00 as strTitle from movie";
$result = $mysqli_kodi->query($query) or die($mysqli_kodi->error.__LINE__);

$arr = array();
if($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {

		$query2="select strFilename from files where strFilename = '" . $row['strFilename'] . "';";
		$result2 = $mysqli_astrapi->query($query2) or die($mysqli_astrapi->error.__LINE__);

		if($result2->num_rows == 0) {
			#while($row2 = $result2->fetch_assoc()) {
					$arr[] = $row;
#print $row['strFilename'] . "\n";

		}
	}
}

# JSON-encode the response
$json_response = json_encode($arr);

// # Return the response
echo $json_response;
?>

