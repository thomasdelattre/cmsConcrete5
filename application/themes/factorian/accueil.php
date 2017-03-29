<?php $view->inc('elements/header.php'); ?>

<div style="width:100%">
<?php 
$a=new Area('Diaporama');
$a->display($c);
?>
</div>

<div class="col-md-8 col-md-offset-2 row groupPetitBloc">
	<div class="col-md-4 petitBloc">
		<?php 
		$a=new Area('Col1');
		$a->display($c);
		?>
	</div>
	<div class="col-md-4 petitBloc">
		<?php 
		$a=new Area('Col2');
		$a->display($c);
		?>
	</div>
	<div class="col-md-4 petitBloc">
		<?php 
		$a=new Area('Col3');
		$a->display($c);
		?>
	</div>
</div>

<div id="bandeauContact" class="row col-md-12" style="color:white">
	<?php 
	$a=new Area('CTA');
	$a->enableGridContainer();
	$a->display($c);
	?>
</div>


<div class="col-md-8 col-md-offset-2 row groupPetitBloc">
	<label class="col-md-12" id="labelExemple">We do awesome works for our clients.<br>Check some of ou works.</label>
	<div class="col-md-4 petitBloc">
		<?php 
		$a=new Area('Col4');
		$a->display($c);
		?>
	</div>
	<div class="col-md-4 petitBloc">
		<?php 
		$a=new Area('Col5');
		$a->display($c);
		?>
	</div>
	<div class="col-md-4 petitBloc">
		<?php 
		$a=new Area('Col6');
		$a->display($c);
		?>
	</div>
	<a href="#" id="labelExemple" class="col-md-12">View all works</a>

</div>
<?php $view->inc('elements/footer.php'); ?>