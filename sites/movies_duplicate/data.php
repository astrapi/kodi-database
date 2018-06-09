<?php
include('../../config.php');
include('../../db.php');

$query="select count(id) as row_count, strTitle as strQuery from files group by strTitle having row_count > 1 and not strQuery = '-'";
$result = $mysqli_astrapi->query($query) or die($mysqli_astrapi->error.__LINE__);

$arr = array();
if($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {

		$query2="select * from files where strTitle = '" . $row['strQuery'] . "';";
		$result2 = $mysqli_astrapi->query($query2) or die($mysqli_astrapi->error.__LINE__);

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

