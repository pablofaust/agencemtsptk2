<?php session_start(); ?>
<?php if(!isset($route)) include_once '../config.php'; ?>


<?php include $route.'/assets/header.php' ?>
<body>
	
<?php include $route.'/dashboard/front.php' ?>

</body>
<?php include $route.'/assets/footer.php' ?>
