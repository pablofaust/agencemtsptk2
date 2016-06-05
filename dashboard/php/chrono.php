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

$reponse = $bdd->query("SELECT annee_rdv, mois_rdv, jour_rdv, heure_rdv 
						FROM rendez_vous_started AS rdv 
						WHERE  (rdv.id_joueur_1 = '$id' OR rdv.id_joueur_2 = '$id')
						");

			while ($donnees = $reponse->fetch())
			{
				$annee_evenement = $donnees['annee_rdv'];
				$mois_evenement = $donnees['mois_rdv'];
				$jour_evenement = $donnees['jour_rdv'];
				$heure_evenement = $donnees['heure_rdv'];
				$in = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12);
				$out = array('Jan', 'fev', 'mar', 'apr', 'may', 'jun', 'jul', 'aug', 'sep', 'oct', 'nov', 'dec');
				$mois_evenement = str_replace($in, $out, $mois_evenement);

			}
?>

<div id="compte_a_rebours"><noscript>Fin de l'évènement le 1er janvier 2017.</noscript></div>
<script type="text/javascript">
function compte_a_rebours()
{
	var compte_a_rebours = document.getElementById("compte_a_rebours");

	var date_actuelle =  new Date();
	var date_evenement =  new Date("<?php echo $mois_evenement; ?> <?php echo $jour_evenement; ?> <?php echo $heure_evenement; ?>:00:00  <?php echo $annee_evenement; ?>");
	var total_secondes = (date_evenement - date_actuelle) / 1000;

	var prefixe = "Compte à rebours terminé dans ";
	if (total_secondes < 0)
	{
		prefixe = "Compte à rebours terminé il y a "; // On modifie le préfixe si la différence est négatif

		total_secondes = Math.abs(total_secondes); // On ne garde que la valeur absolue

	}

	if (total_secondes > 0)
	{
		var jours = Math.floor(total_secondes / (60 * 60 * 24));
		var heures = Math.floor((total_secondes - (jours * 60 * 60 * 24)) / (60 * 60));
		minutes = Math.floor((total_secondes - ((jours * 60 * 60 * 24 + heures * 60 * 60))) / 60);
		secondes = Math.floor(total_secondes - ((jours * 60 * 60 * 24 + heures * 60 * 60 + minutes * 60)));

		
		var mot_jour = "j ";
		var mot_heure = ":";
		var zero_heure = "";
		var mot_minute = ":";
		var zero_minute = "";
		var mot_seconde = "";
		var zero_seconde = "";

		if (jours == 0)
		{
			jours = '';
			mot_jour = '';
		}
		
		if (heures == 0)
		{
			heures = '';
			mot_heure = '0:';
		}
		
		if (heures < 10  )
		{
			zero_heure = '0';
		}

		if (minutes == 0)
		{
			minutes = '';
			mot_minute = '0:';
		}
		if (minutes < 10  )
		{
			zero_minute = '0';
		}

		if (secondes < 10  )
		{
			zero_seconde = '0';
		}

		if (secondes == 0)
		{
			secondes = '';
			mot_seconde = '0';
			
		}
	

		

		compte_a_rebours.innerHTML = jours + mot_jour + zero_heure + heures  + mot_heure  + zero_minute + minutes  + mot_minute + zero_seconde +  secondes +  mot_seconde;
	}
	else
	{
		compte_a_rebours.innerHTML = 'Compte à rebours terminé.';
	}

	var actualisation = setTimeout("compte_a_rebours();", 1000);
}
compte_a_rebours();
</script>