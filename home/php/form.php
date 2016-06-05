<?php 
//verification infos données

// Hachage du mot de passe//
$pass_hache = sha1($_POST['pass']);

//chargement BDD
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=mtsptk;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}


// Vérification des identifiants
$req = $bdd->prepare('SELECT id, prenom FROM membres WHERE pseudo = :pseudo AND pass = :pass');
$req->execute(array(
    'pseudo' => $_POST['pseudo'],
    'pass' => $pass_hache));

$resultat = $req->fetch();

if (!$resultat)
{
    echo 'Mauvais identifiant ou mot de passe !';
}
else
{
    session_start();
    $_SESSION['id'] = $resultat['id'];
    $_SESSION['pseudo'] = $_POST['pseudo'];
    $_SESSION['prenom'] = $resultat['prenom'];
    header('Location: ../../dashboard/index.php');      
}
?>