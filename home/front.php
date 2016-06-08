<div class="container home-welcome">

	<div class="logo-img">
		<div class="logo-block" style="background-image: url('<?php echo $url ?>home/img/logo.png')"></div>
	</div>

	<div class="divider">
	</div>

	<div class="home-punchline">
		<h1>Votre mission est sur le point de commencer...</h1>
	</div>

	<div class="divider">
	</div>

	<form method="post" action="home/php/form.php">
		<div class="agent-id">
			<input type="text" name="pseudo" id="pseudo" placeholder="Numéro d'agent">
		</div>

		<div class="agent-password">
			<input type="password" name="pass" id="pass" placeholder="Code d'accès">
		</div>

		<a href="../dashboard"><div class="home-access">
			<input class="valider" type="submit" value="Démarrer">
		</div></a>
	</form>

</div>