<?php
//API URL
$url = 'http://40.71.87.181/server.php';

//create a new cURL resource
$ch = curl_init($url);
switch ($_POST['op']) {
	case 'getmesure':
$data = array(
    'op' => $_POST['op'],
    'cni' => $_POST['cni']
);
		break;

	
}
//setup request to send json via POST

$payload = json_encode($data);

//attach encoded JSON string to the POST fields
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

//set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

//return response instead of outputting
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

//execute the POST request
$result = curl_exec($ch);

//close cURL resource
curl_close($ch);
$_POST = json_decode($result, true);
//echo $result;
//Start the session
session_start();

//Dump your POST variables
$_SESSION['POST'] = $_POST;

//Redirect the user to the next page
header("Location: index.php");
//echo "</br>";
//echo $_POST['result'][0]['CNI'];
?>
