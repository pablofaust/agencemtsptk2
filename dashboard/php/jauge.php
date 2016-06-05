<?php 

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=mtsptk;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$id = $_SESSION['id'];
$reponse = $bdd->query("SELECT points_mtsptk FROM membres AS m WHERE m.id = '$id'");

while ($donnees = $reponse->fetch())
{
	echo $donnees['points_mtsptk'];
	
}
?>