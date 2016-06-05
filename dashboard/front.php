<div class="container dashboard">
	<div class="row clearfix">
		
		<div class="col-sm-6 col-md-4 puzzle puzzle-1">

			<div class="puzzle-background hidden-xs hidden-sm" style="background-image: url('<?php echo $url ?>dashboard/img/puzzle-1-desktop.png')"></div>

			<div class="puzzle-background hidden-sm hidden-md hidden-lg" style="background-image: url('<?php echo $url ?>dashboard/img/puzzle-1.png')"></div>

			<div class="puzzle-background hidden-xs hidden-md hidden-lg" style="background-image: url('<?php echo $url ?>dashboard/img/puzzle-1-tablet.png')"></div>

			<a href="../home"><div class="logo" style="background-image: url('<?php echo $url ?>dashboard/img/logo.png')"></div></a>

		</div>

		<div class="col-sm-6 col-md-4 puzzle puzzle-2">

			<div class="puzzle-background hidden-xs hidden-sm" style="background-image: url('<?php echo $url ?>dashboard/img/puzzle-2-desktop.png')"></div>

			<div class="puzzle-background hidden-sm hidden-md hidden-lg" style="background-image: url('<?php echo $url ?>dashboard/img/puzzle-2.png')"></div>

			<div class="puzzle-background hidden-xs hidden-md hidden-lg" style="background-image: url('<?php echo $url ?>dashboard/img/puzzle-2-tablet.png')"></div>


			<div class="bouton">
				<div class="bouton-valider">
					<a href="#">
					<div class="bouton-solid">
						<h1>Valider la mission</h1>
					</div>
					</a>
				</div>
			</div>

			<div class="bouton">
				<div class="bouton-indices">
					<a href="#">
					<div class="bouton-solid">
						<h2>Obtenir des indices</h2>
					</div>
					</a>
				</div>
			</div>

		</div>

		<div class="col-sm-6 col-md-4 puzzle puzzle-3">

			<div class="puzzle-background hidden-xs hidden-sm" style="background-image: url('<?php echo $url ?>dashboard/img/puzzle-3-desktop.png')"></div>
			
			<div class="puzzle-background hidden-sm hidden-md hidden-lg" style="background-image: url('<?php echo $url ?>dashboard/img/puzzle-3.png')"></div>

			<div class="puzzle-background hidden-xs hidden-md hidden-lg" style="background-image: url('<?php echo $url ?>dashboard/img/puzzle-3-tablet.png')"></div>

			<div class="bouton bouton-chrono">
				<p><?php include $route.'/dashboard/php/chrono.php' ?></p>
			</div>

			<div class="bouton bouton-id">
				<p><?php echo $_SESSION['id']; ?></p>
			</div>

		</div>

		<div class="col-sm-6 col-md-4 puzzle puzzle-4">

			<div class="puzzle-background hidden-xs hidden-sm" style="background-image: url('<?php echo $url ?>dashboard/img/puzzle-4-desktop.png')"></div>
			
			<div class="puzzle-background hidden-sm hidden-md hidden-lg" style="background-image: url('<?php echo $url ?>dashboard/img/puzzle-4.png')"></div>

			<div class="puzzle-background hidden-xs hidden-md hidden-lg" style="background-image: url('<?php echo $url ?>dashboard/img/puzzle-4-tablet.png')"></div>

			<div class="bouton bouton-bienvenue">
				<p>Bienvenue, <strong><?php include $route.'/dashboard/php/prenom.php' ?></strong>.</p>
			</div>

			<div class="bouton bouton-mtsptk">
				<div class="texte">
					<p><?php include $route.'/dashboard/php/jauge.php' ?>%</p>
				</div>
				<div class="jauge" style="background-image: url('<?php echo $url ?>dashboard/img/rayures.png');width: <?php include $route.'/dashboard/php/jauge2.php' ?>%"></div>
			</div>

			<div class="bouton bouton-legende-mtsptk">
				<p>(jauge MTSPTK)</p>
			</div>

		</div>

		<div class="col-sm-6 col-md-4 puzzle puzzle-5">

			<div class="puzzle-background hidden-xs hidden-sm" style="background-image: url('<?php echo $url ?>dashboard/img/puzzle-5-desktop.png')"></div>
			
			<div class="puzzle-background hidden-sm hidden-md hidden-lg" style="background-image: url('<?php echo $url ?>dashboard/img/puzzle-5.png')"></div>

			<div class="puzzle-background hidden-xs hidden-md hidden-lg" style="background-image: url('<?php echo $url ?>dashboard/img/puzzle-5-tablet.png')"></div>

			<a href="img/carte.png"><div class="bouton bouton-carte">
				<div class="carte" style="background-image: url('<?php echo $url ?>dashboard/img/carte.png')"></div>
			</div></a>

			<?php include $route.'/dashboard/php/statut_partenaire.php' ?>

		</div>

		<div class="col-sm-6 col-md-4 puzzle puzzle-6">

			<div class="puzzle-background hidden-xs hidden-sm" style="background-image: url('<?php echo $url ?>dashboard/img/puzzle-6-desktop.png')"></div>
			
			<div class="puzzle-background hidden-sm hidden-md hidden-lg" style="background-image: url('<?php echo $url ?>dashboard/img/puzzle-6.png')"></div>

			<div class="puzzle-background hidden-xs hidden-md hidden-lg" style="background-image: url('<?php echo $url ?>dashboard/img/puzzle-6-tablet.png')"></div>

			<div class="bouton bouton-report">
				<p>Et si j'ai besoin de reporter ?</p>
			</div>
		</div>


	</div>
</div>