<?php
$hote = 'localhost';
$nom_bdd = 'telesurveillance';
$utilisateur = 'root';
$mot_de_passe ='';

try {
	//On test la connexion à la base de donnée
    $pdo = new PDO('mysql:host='.$hote.';dbname='.$nom_bdd, $utilisateur, $mot_de_passe);

} catch(Exception $e) {
	//Si la connexion n'est pas établie, on stop le chargement de la page.
	reponse_json($success, $data, 'Echec de la connexion à la base de données');
    exit();

}