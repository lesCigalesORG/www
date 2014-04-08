<?php

$lines = array(
	array(
// 		array('www.serveur-dedie.com/', 'Serveur dédié', 'Serveur dédié'), // no backlink
// 		array('www.phpfrance.com/', 'PHP France', 'PHP France'),
// 		array('www.lesrubriques.com/vrpartenaires/enter.php?ref=http://www.lescigales.org/',
// 					'Les rubriques', 'Les rubriques'),
// 		array('www.voiloo.net/', 'Annuaire voiloo', 'Voiloo'), // annuaire a la con, à virer
		array('www.abc-webmasters.net/', 'Annuaire gratuit pour webmasters', 'ABC Webmasters'), // lien sur une page partenaire de merde, c est quoi la blague ?
		array('www.rapid-catalogues.com/', "Créer un site catalogue gratuit avec Rapid'Catalogues", "Rapid'Catalogues"),
		array('www.webtask.org/', 'WebTask', 'WebTask'),
    array('www.easy4blog.com/', 'Blog', 'Blog'), // danois nicolas <leanoise@msn.com>
	),
	/* Images */
// 	array(
// 		array('www.webrankinfo.com/', 'Référencement', 'Référencement', '/img/webrankinfo-80-15.png'),
// 		array('www.e3b.org/', 'Hébergeur canadien ami ;)', 'Hébergeur canadien ami ;)', '/img/e3b.png'),
// 	),
	/* Format: url, title, LABEL */
	array(
		array('www.azote.org/', 'Nom de domaine gratuit', 'Nom de domaine gratuit'),
// 		array('www.creation-site-internet.com/', 'Création site internet', 'Création site internet'),
		array('www.akisiweb.com/', 'Création site internet', 'Création site internet'),
		array('www.solu-site-creation.com/', 'referencement et creation de sites web', 'Création site internet'),
// 		array('www.impressionbache.com/', 'Impression Grand Format', 'Impression Bache'),
		array('www.okmetrics.com/', 'Veille de Buzz et analyse Long Tail', 'Analyse Buzz & Long Tail'),
	),
	array(
		array('www.hostingpics.net/', 'Hébergement images', 'Hébergeur d\'image'),
// 		array('www.webwep.com/', 'Referencement Google', 'Referencement Google'),
// 		array('www.creation-sites-internets.com/', 'creation de site internet', 'creation site internet'),
// 		array('www.position-site.com/', 'Agence référencement internet', 'Agence référencement internet'),
//     array('www.upzat.com', 'hebergeur d\'images', 'Hébergeur d\'images'),
//     array('www.awsclic.com', "gagner de l'argent", "Gagner de l'argent"),
		array('www.lescigales.org/contact', 'Votre lien ici', '<b>Votre lien ici</b>'),
	),
);
?>

<div id="partners_footer">
<?php
foreach ($lines as $sites) {
	$first = true;
	echo '<p>';
	foreach ($sites as $site) {
		if (! $first && ! isset($site[3])) {
			echo ' - ';
		} else if (! $first) {
			echo ' ';
		} else {
			$first = false;
		}
		if (isset($site[3])) {
			echo '<a href="http://'.$site[0].'" target="_blank" title="'.$site[1].'">';
			echo '<img src="',$site[3],'" border="0" title="',$site[1],'" alt="',$site[1],'" />';
			echo '<a/>';
		} else {
			echo '<a href="http://'.$site[0].'" target="_blank" title="'.$site[1].'">'.$site[2].'<a/>';
		}
	}
	echo '</p>';
}
?>
</div>
