<?php
include('../../config.php');
include('../../db.php');

$query="select count(id) as row_count, id, strFilename, strPath, substring_index(strFilename, '.',1) as strName from files group by substring_index(strFilename, '.',1) having row_count > 1";
$result = $mysqli_astrapi->query($query) or die($mysqli_astrapi->error.__LINE__);

$arr = array();
if($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {

		$query2="select * from files where substring_index(strFilename, '.',1) = '" . $row['strName'] . "';";
		$result2 = $mysqli_astrapi1->query($query2) or die($mysqli_astrapi1->error.__LINE__);

		if($result2->num_rows > 0) {
			while($row2 = $result2->fetch_assoc()) {
				$arr[] = $row2;	
			}
		}
	}
}

# JSON-encode the response
$json_response = json_encode($arr);

// # Return the response
echo $json_response;
?>

