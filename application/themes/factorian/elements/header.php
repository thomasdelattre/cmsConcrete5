<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo $view->getThemePath();?>/css/style.css">
	<script src="<?php echo $view->getThemePath();?>/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!-- Bootstrap Core CSS -->
	<link href="<?php echo $view->getThemePath();?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<title></title>
	<?php Loader::element('header_required');?>
</head>
<body >
<div class="<?= $c->getPageWrapperClass(); ?> ">
	<nav id="menu" class="navbar navbar-default">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header col-md-5">
				<a class="navbar-brand " href="#" >FACTORIAN</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div id="menu" class="collapse navbar-collapse" id="bs-example-navbar-collapse-1 col-md-7">
				
				
                    <?php 
                    $a=new GlobalArea('Menu');
                    $a->display($c);
                    ?>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>