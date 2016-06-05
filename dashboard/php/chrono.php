<?php 

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=mtsptk;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$id = 108;
$reponse = $bdd->query("SELECT date_rdv, heure FROM rendez_vous_started AS rdv WHERE (rdv.id_joueur_1 = '$id'  OR rdv.id_joueur_2 = '$id')");

while ($donnees = $reponse->fetch())
{
	echo $donnees['date_rdv'];
	echo $donnees['heure'];
}
?>