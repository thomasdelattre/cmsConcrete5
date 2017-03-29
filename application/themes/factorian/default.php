<?php $view->inc('elements/header.php'); ?>

<?php 
$a=new Area('Contenu');
$a->enableGridContainer();
$a->display($c);
?>
<?php $view->inc('elements/footer.php'); ?>
