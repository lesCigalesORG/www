<div id="lescigales_lastregistered">
	<h2>Derniers inscrits</h2>
	<ul><?php 
$lastRegistered = file_get_contents('http://admin.lescigales.org/websites/last/10.rest');
$lastRegistered = explode("\n", $lastRegistered);
$maxlen = 30;
foreach ($lastRegistered as $website) {
	if ($website == '') {
		break;
	}
	if (strlen($website) > $maxlen) {
		$websiteName = substr($website, 0, $maxlen - 3) . '...';
	} else {
		$websiteName = $website;
	}
	echo '<li><a href="http://'.$website.'/" target="_blank">'.$websiteName.'</a></li>';
}
$stats = file_get_contents('http://admin.lescigales.org/websites/progression.rest');
$invitations = file_get_contents('http://admin.lescigales.org/invitations/count.rest');
$st = explode(':', $stats);
?>
<!-- <li class="right"><a class="reverse" href="#" title="Voir plus d'inscrits">Voir plus d'inscrits</a></li> -->
<li class="first info">Hier: <?php echo $st[0]; ?> - Aujourd'hui: <?php echo $st[1]; ?></li>
<li class="info">Invitations restantes: <?php echo $invitations; ?></li>
</ul>

</div>
<?php
/*
$stats = file_get_contents('http://c8.lescigales.org/services/stats.rest');
$stats = explode("\n", $stats);
?>
<div id="lescigales_lastregistered">
	<h2>En chiffres</h2>
	<ul><?php
		foreach ($stats as $s) {
			echo $s, '<br />';
		}
	?></ul>
</div>

*/
