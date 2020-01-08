<?php
include('template.php'); //include template.php which contains the connection to the database 

$_POST = json_decode(file_get_contents('php://input'), true); //php://input: This is a read-only stream that allows us to read raw data from the request body. file_get_contents() function: This function in PHP is used to read a file into a string.json_decode() function: This function takes a JSON string and converts it into a PHP variable that may be an array or an object. use the json_decode() function to decode the JSON string.-->

$Operation = $_POST['op']; //read op attribute to determine what operation is
//we forwarded to the appropriate algorithm through switch() case  syntax
   switch ($Operation) {
   	//first operation: get mesure of temperature -->
      case "getmesure":
      //Empty() is a function, that returns true if given an empty array. 
      //! empty ($_POST) evaluates to true if we don't  mention the cni
          if(!empty($_POST['cni'])){
          	//Retrieving data using prepared queries :select the last temperature value stored in the table temperature where cin=*** 
          $requete = $pdo->prepare("SELECT * FROM `temperature` WHERE `cni` LIKE :cin ORDER BY `temperature`.`heure` DESC LIMIT 0,1");
          //Binds a parameter to the specified variable name
          $requete->bindParam(':cin', $_POST['cni']);

        } //execute request by method execute()
        if( $requete->execute() ){
        	//returns an array containing all of the result set rows
        	// An empty array is returned if there are zero results to fetch, or FALSE on failure.
          $resultats = $requete->fetchAll();
          $success = true; 
          $data = $resultats;

        } else {
        	//else :display an error message
          $msg = "Une erreur s'est produite";
        }
          break;
   //second operation: add information of patient in table "patient" -->
    case "addpatient":

if( !empty($_POST['CNI'])  ){
	//using  INSERT query to insert all  the necessary information of a patient "cni,nom,prenom,email,mot de passe ,sexe,poid,taille,sang,maladie-chronique" 
$requete = $pdo->prepare("INSERT INTO `patient` (`CNI`,`nom`, `prénom`,`email`,`mdp`,`sexe`,`poids`,`taille`,`sang`,`maladie_chronique`,`mutuelle`) VALUES (:cni,:nom,:prenom,:email,:mdp,:sexe,:poids,:taille,:sang, :maladie_chronique,:mutuelle);");
//  bindParam() to bind PHP variables to the parameter markers: 
//bound variables pass their value as input and receive the output value, if any, of their associated parameter markers
$requete->bindParam(':cni', $_POST['CNI']);
$requete->bindParam(':nom', $_POST['nom']);
$requete->bindParam(':prenom',$_POST['prénom']);
$requete->bindParam(':email', $_POST['email']);
$requete->bindParam(':mdp', $_POST['mdp']);
$requete->bindParam(':sexe', $_POST['sexe']);
$requete->bindParam(':poids', $_POST['poids']);
$requete->bindParam(':taille', $_POST['taille']);
$requete->bindParam(':sang', $_POST['sang']);
$requete->bindParam(':maladie_chronique', $_POST['maladie_chronique']);
$requete->bindParam(':mutuelle', $_POST['mutuelle']);

}//execute request
if( $requete->execute() ){
	$resultats = $requete->fetchAll();
  $success = true;
	$data = $resultats;
} else {
	$msg = "Une erreur s'est produite";
}
       break;

// third  operation: get all the  information of patient -->
  case "getpatient":
  //Empty() is a function, that returns true if given an empty array. 
   //! empty ($_POST) evaluates to true if we don't  mention the cni
    if( !empty($_POST['CNI']) ){
	////Retrieving data using prepared queries :select all information about patient stored in the table patient  where cin=**** 
	$requete = $pdo->prepare("SELECT * FROM `patients` WHERE `CNI` LIKE :var");
	$requete->bindParam(':var', $_POST['CNI']);
}
  //execute request by method execute()
    if( $requete->execute() ){
	$resultats = $requete->fetchAll();
	$success = true;
	$data  = $resultats;
} else {
	$msg = "Une erreur s'est produite";
}
    break;
    //fourth operation add add the measurements captured by the temperature sensor and the heartbeat  
    case "addmesure":
    //verificate and  check if the fields'cni,temperature,battement_couer' are not empty
    if(!empty($_POST['CNI']) && !empty($_POST['température']) || !empty($_POST['battements_coeur']))
    {
    //using  INSERT query to insert  the captured values in the table mesures 
    $requete = $pdo->prepare("INSERT INTO `mesures` (`CNI`,`température`, `battements_coeur`) VALUES (:cni,:temp,:battement);");
	$requete->bindParam(':cni', $_POST['CNI']);
	$requete->bindParam(':temp', $_POST['température']);
	$requete->bindParam(':battement', $_POST['battements_coeur']);

}
  if( $requete->execute() ){
  	$resultats = $requete->fetchAll();
  	$success = true;
  	$data = $resultats;
  } else {
  	$msg = "Une erreur s'est produite";
  }
      break;
//last operation : to login into the web application 
      //check the email and the  password from  database 
      case "login":
      //check if  the "email" is empty
        if( !empty($_POST['email'])){
          //using  select query to insert  the captured values in the table mesures 
          $requete = $pdo->prepare("SELECT * FROM `patient` WHERE email=:email and mdp=:motdepasse");
            //call PDOStatement::bindParam() to bind PHP variables to the parameter markers: bound variables pass their value as input and receive the output value, if any, of their associated parameter markers
          $requete->bindParam(':email', $_POST['email']);
          $requete->bindParam(':motdepasse', $_POST['mdp']);
}          //execute request
          if( $requete->execute() ){
            $resultats = $requete->fetchAll();
            $success = true;
            $data = $resultats;
          } else {
            $msg = "Une erreur s'est produite";
          }

        break;
        //display the message"choose op" if you have not chosen any operation
default:
        $msg = "Choose op";
}
//the reponse_json() method of the Body mixin takes a Response stream and reads it to completion. It returns a promise that resolves with the result of parsing the body text
reponse_json($success, $data, $msg);
