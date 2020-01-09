<?php

$response = array();
$jsonData = file_get_contents('patient.json');
$data = json_decode($jsonData, true);

$date = $data['heure'];
$temp = $data['value'];
$cni = $data['cni'];

$con = new mysqli("localhost", "root", "", "telesurveillance");



if (!$con) {
	$response['message']="Error connecting to database...";
	$response['error']=true;
	die('Error: '.mysql_error());
}

// INSERT INTO temperature(`date`, `cni`, `value`)
// 			VALUES ("TIMESTAMP('2019-12-09 23:02:13')", "CD589657", 30)
// 			ON DUPLICATE KEY UPDATE value=38.4, date=TIMESTAMP('2019-12-09 23:02:13');

else{
	$sql = "INSERT INTO temperature(`heure`, `cni`, `value`)
			VALUES ('$date', \"$cni\", $temp)
			;";
	if(!mysqli_query($con, $sql)){
		$response['message']="Error executing query...";
		$response['error']=true;
		die('Error: '.mysqli_error($con));
	}else{
		$response['message']="Data added";
		$response['error']=false;
	}
}
//echo json_encode($response);


?>
