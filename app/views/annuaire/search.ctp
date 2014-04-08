<?php
$this->pageTitle = 'Annuaire - page: '.$paginator->counter('%page% sur %pages%');
if (! empty($query)) {
  $this->pageTitle .= ' - recherche: '.htmlspecialchars($query);
}

?>
<div id="lescigales_maincontent" style="width: 750px;">

<div id="annuaire" style="">
<h1>Annuaire des sites hébergés (<?php echo $paginator->counter('%count%'); ?> sites trouvés)</h1>

<?php 
echo $form->create('Annuaire', array('url' => '/annuaire')); 
echo $form->input('Annuaire.fqdn', array('label'=>'Recherche ')); 
echo $form->submit('Lancer la recherche');
?>
</form>

<div class="nav">
<?php echo $paginator->prev('<< Précédent', array('url'=>array($query))); ?>&nbsp;
<?php echo $paginator->numbers(array('url'=>array($query))); ?>&nbsp;
<?php echo $paginator->next('Suivant >>', array('url'=>array($query))); ?>
</div>

<?php 
$count = 0;
foreach ($sites as $site) {
// 	pr($site);
	$site = $site['Annuaire'];
	if (! ($count%2)) {
		$class='even';
	} else {
		$class='odd';
	}
	$link = 'http://'.$site['fqdn'];
	?>
	<fieldset class="<?php echo $class; ?>">
	<div>
	<span class="link"><a href="<?php echo $link; ?>" title="<?php echo $link; ?>" target="_blank"><?php echo $link; ?></a></span>
	<span class="title"><?php echo $site['title']; ?></span>
	<span class="desc"><?php echo $site['description']; ?></span>
	</div>
	<a href="<?php echo $link; ?>" title="<?php echo $link; ?>" target="_blank"><img src="<?php echo $site['url']; ?>" /></a>
	</fieldset>
	<?php
	$count++;
}
?>

<div class="nav">
<?php echo $paginator->prev('<< Précédent'); ?>&nbsp;
<?php echo $paginator->numbers(); ?>&nbsp;
<?php echo $paginator->next('Suivant >>'); ?>
</div>

<?php 
echo $form->create('Annuaire', array('url' => '/annuaire')); 
echo $form->input('Annuaire.fqdn', array('label'=>'Recherche ')); 
echo $form->submit('Lancer la recherche');
?>
</form>

<p>Un grand merci au service <a href="http://www.shrinktheweb.com">Shrink the web</a> pour leur fantastique outil de génération de miniatures de sites :)</p>



</div><!-- texte -->
</div><!-- contenuPrincipal -->