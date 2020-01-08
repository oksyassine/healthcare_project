<?php
header('Content-Type: application/json');
$success = false;
$data = array();
$msg=null;
require('pdo.php');

function reponse_json($success, $data, $msgErreur=null) {
	$array['success'] = $success;
	$array['msg'] = $msgErreur;
	$array['result'] = $data;
	echo json_encode($array);
}
