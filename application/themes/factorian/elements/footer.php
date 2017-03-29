<div class="col-md-12" id="bandeauInformation" style="color:#A4A4A4;">
		<div class="col-md-2 col-md-offset-2">
            <?php 
		      $a=new Area('Footer-Col1');
		      $a->display($c);
            ?>
        </div>
		<div class="col-md-2">
			<?php 
		      $a=new Area('Footer-Col2');
		      $a->display($c);
		      ?>
		</div>
		<div class="col-md-2">
			<?php 
                $a=new Area('Footer-Col3');
                $a->display($c);
		      ?>
		</div>
		<div class="col-md-2">
			<?php 
		          $a=new Area('Footer-Col4');
                $a->display($c);
		      ?>
		</div>
	</div>

	<div class="col-md-12 " id="footer" style="color:#fff">
		<?php 
		$a=new Area('Copyright');
		$a->display($c);
		?>
	</div>
	<?php Loader::element('footer_required');?>
	</div>
</body>
</html>