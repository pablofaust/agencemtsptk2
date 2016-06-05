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
$reponse = $bdd->query("SELECT id_joueur_1, id_joueur_2, confirmation_joueur_1, confirmation_joueur_2 FROM rendez_vous_started AS rdv WHERE rdv.id_joueur_1 = '$id' OR rdv.id_joueur_2 = '$id'");

while ($donnees = $reponse->fetch())
{
	if ($id == $donnees ['id_joueur_1'])
	{
		if ($donnees ['confirmation_joueur_2'] == 1)

		{
			echo '<div class="bouton bouton-statut-partenaire joueur-1">
				<p>Validation par <strong>Chloé</strong> :</p>
				<div class="icone-statut-partenaire" style="background-image: url("';
			echo $url;
			echo ' dashboard/img/croix.png")"></div>
			</div>';
		}
}

	else 

	{
		if ($donnees ['confirmation_joueur_1'] == 1)

		{
			echo "<div class='bouton bouton-statut-partenaire joueur-2'>
				<p>Validation par <strong>Chloé</strong> :</p>
				<div class='icone-statut-partenaire' style='background-image: url('";
			echo $url;
			echo " dashboard/img/croix.png')'></div>
			</div>";
		}
	}
	
}
?>