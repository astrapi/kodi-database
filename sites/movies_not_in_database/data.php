<?php
include('../../config.php');

$query="select * from files where strTitle = '-'";
$result = $mysqli_astrapi1->query($query) or die($mysqli_astrapi1->error.__LINE__);

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

