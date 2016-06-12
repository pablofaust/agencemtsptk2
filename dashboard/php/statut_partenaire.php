<?php 
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=mtsptk;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
/*$reponse = $bdd->query("SELECT id_joueur_1, id_joueur_2, confirmation_joueur_1, confirmation_joueur_2 FROM rendez_vous_started AS rdv WHERE rdv.id_joueur_1 = '$id' OR rdv.id_joueur_2 = '$id'");*/
$reponse = $bdd->prepare('SELECT id_joueur_1, id_joueur_2, confirmation_joueur_1, confirmation_joueur_2 FROM rendez_vous_started AS rdv WHERE rdv.id_joueur_1 = :id OR rdv.id_joueur_2 = :id');
$reponse->execute(array(
	'id' => $_SESSION['id']));

while ($donnees = $reponse->fetch())
{
	
	$partenaire = 0;

	if ($_SESSION['id'] == $donnees ['id_joueur_1'])
	{
		$partenaire=$donnees ['id_joueur_2'];

		if ($donnees ['confirmation_joueur_2'] == 1)
		{
			echo "<div class='bouton bouton-statut-partenaire'>
				<p>Validation par <strong></strong> :</p>
				<div class='icone-statut-partenaire' style='background-image: url('".$url."dashboard/img/croix.png')'></div>
			</div>";
			
		}
	}
	else 
	{
		$partenaire=$donnees ['id_joueur_1'];

		if ($donnees ['confirmation_joueur_1'] == 1)
		{
			echo "<div class='bouton bouton-statut-partenaire'>
				<p>Validation par <strong></strong> :</p>
				<div class='icone-statut-partenaire' style='background-image: url('".$url."dashboard/img/croix.png')'></div>
			</div>";
	}
	
}
}

?>