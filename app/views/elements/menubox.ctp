<?php
$sites = file_get_contents('http://admin.lescigales.org/websites/count.rest');
$sites = number_format($sites, 0, ',', ' ');

$menubox =<<<EOF
      <div id="lescigales_menubox">
				<table>
					<tr>
						<th>Les Cigales</th>						
						<td>
							<a href="/hebergement" title="H&eacute;bergement" class="start">H&eacute;bergement</a>
							<a href="http://admin.lescigales.org/" title="Control panel" class="">Control panel</a>
							<a href="/contact" title="Contactez l'hébergeur" class="">Contact</a>
							<a href="/a-propos" title="Qui sommes nous ?" class="end">&Agrave; propos</a>
						</td>
					</tr>
					<tr>
						<th>Communaut&eacute;</th>
						<td>
							<a class="start" href="/annuaire" title="Annuaire des hébergés">Annuaire</a>
							<a class="" target="_blank" href="http://forum.lescigales.org/" title="Forum">Forum</a>
							<a class="" target="_blank" href="/chat" title="Dialogue en ligne avec l'hébergeur">Chat</a>
							<a class="end" target="_blank" href="http://forum.lescigales.org/viewforum.php?id=14" title="Nouvelles de l'hébergement" class="end">Nouvelles</a>

						</td>
					</tr>
					<tr>
						<th>Services</th>
						<td>
							<a href="/hebergement-gratuit" title="Hébergement gratuit" class="start">Hébergement gratuit</a>
							<a href="/conditions" title="Conditions d'utilisation" class="">Conditions</a>
							<a href="http://faq.lescigales.org/Accueil" target="_blank" title="Foire aux questions" class="end"><acronym title="Foire Aux Questions">FAQ</acronym></a>

						</td>
					</tr>
					<tr>
						<th>Sites</th>
						<td>
							<a href="/sites" title="Nombre de sites hébergés" class="start">$sites sites</a>
							<a class="" href="http://mail.lescigales.org/" target="_blank" title="Webmail">Webmail</a>
							<a class="" href="http://upload.lescigales.org/" target="_blank" title="Partage de fichiers rapide">Upload</a>
							<a class="end" href="http://sql.lescigales.org/" target="_blank" title="Gestionnaire MySQL phpMyAdmin">MySQL</a>

<!--							<a href="#/derniers" title="" >Les derniers</a>
							<a href="#/hasard" title="">Au hasard</a> 
							<a href="#/gagnants" title="" class="end">Gagnants</a>-->
						</td>
					</tr>					<!--	
					<tr>
						<th>Entreprises</th>
						<td>
							<a href="#/societe" title="" class="start end">Soci&eacute;t&eacute;</a>
						</td>
					</tr>						-->
				</table>
			</div><!-- menuBox -->			
EOF;

$string = str_replace("\n", '', $menubox);
$string = str_replace("\t", '', $string);
$string = preg_replace('/[ ]+/', ' ', $string);
$string = preg_replace('/<!--[^-]*-->/', '', $string);
echo $string;
