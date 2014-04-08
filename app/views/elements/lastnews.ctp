<div id="lescigales_randomsite">
	<h2>Dernières nouvelles</h2>
	<ul><?php 
$lastNews = file_get_contents('http://forum.lescigales.org/extern.php?show=5&fid=14');
//$lastNews = iconv("ISO-8859-1", "UTF-8", $lastNews);
echo $lastNews;
/* Insert a link to see all news */
?><li class="right"><a class="reverse" href="http://forum.lescigales.org/viewforum.php?id=14" title="Voir toutes les news">Voir toutes les news</a></li></ul></div>
