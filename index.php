<?php
include('Client.php');
$db =new PDO("mysql:host=127.0.0.1;dbname=expernetbdd","root","");

$requete = $db->query("select * from client");

//$requete->setFetchMode(PDO::FETCH_ASSOC);

//$resultat=$requete->fetchAll();
//var_dump($resultat);
$requete->setFetchMode(PDO::FETCH_CLASS,'Client');
$obj=$requete->fetch();

echo $obj;
header('Location: liste_client.php');
?>