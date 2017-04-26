<?php
include('../../config.php');

$query="select strFilename, strSize from files order by strFilename";
$result1 = $mysqli_astrapi1->query($query) or die($mysqli_astrapi1->error.__LINE__);
$result2 = $mysqli_astrapi2->query($query) or die($mysqli_astrapi2->error.__LINE__);

$movies1 = array();
while($row = $result1->fetch_assoc()) {
	$movies1[] = $row['strFilename'];
}

$movies2 = array();
while($row = $result2->fetch_assoc()) {
	$movies2[] = $row['strFilename'];
}

$result = array_diff($movies1, $movies2);

$arr = array();
while ( list ( $key, $val ) = each ( $result ) )
{
	$query3="select strFilename, strPath, strSize from files where strFilename='" . $val . "';";
	$result3 = $mysqli_astrapi1->query($query3) or die($mysqli_astrapi1->error.__LINE__);

	while($row = $result3->fetch_assoc()) {
		$arr[] = $row;
	}
}

# JSON-encode the response
$json_response = json_encode($arr);

// # Return the response
echo $json_response;
?>

