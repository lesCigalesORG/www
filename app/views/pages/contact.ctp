

<div id="lescigales_rightmenus">

  <div class="lescigales_rightbox even">
    <h2>Soci&eacute;t&eacute;</h2>
	<ul>
      <li>J&amp;J Associates, s.r.o.</li>
      <li>SRO au capital de 6,600 &euro;</li>
      <li>ICO: 36 700 771</li>
      <li>Enregistrée au registre du commerce de la cour de BA I, sous la référence 43182/B</li>
    </ul>
  </div>

  <div class="lescigales_rightbox even">
    <h2>Si&egrave;ge</h2>
    <ul>
      <li>Gessayova, 13</li>
      <li>Bratislava 851 03, Slovaquie</li>
    </ul>
  </div>
  <div class="lescigales_rightbox even">
    <h2>Emails</h2>
    <ul>
			<li><a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#100;&#105;&#114;&#101;&#99;&#116;&#105;&#111;&#110;&#64;&#108;&#101;&#115;&#99;&#105;&#103;&#97;&#108;&#101;&#115;&#46;&#111;&#114;&#103;" title="Direction générale">Direction générale</a></li>
			<li><a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#99;&#111;&#109;&#109;&#101;&#114;&#99;&#105;&#97;&#108;&#64;&#108;&#101;&#115;&#99;&#105;&#103;&#97;&#108;&#101;&#115;&#46;&#111;&#114;&#103;" title="Service commercial">Service commercial</a></li>
			<li><a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#116;&#101;&#99;&#104;&#110;&#105;&#113;&#117;&#101;&#64;&#108;&#101;&#115;&#99;&#105;&#103;&#97;&#108;&#101;&#115;&#46;&#111;&#114;&#103;" title="Service technique">Service technique</a></li>
			<li><a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#116;&#111;&#97;&#100;&#64;&#108;&#101;&#115;&#99;&#105;&#103;&#97;&#108;&#101;&#115;&#46;&#111;&#114;&#103;" title="Directeur technique">Directeur technique</a></li>
    </ul>
  </div>
  <div class="lescigales_rightbox even">
		<h2>Forum</h2>
		<ul>
			<li><a href="http://forum.lescigales.org/" title="Forum" target="_blank">http://forum.lescigales.org</a></li>
		</ul>
	</div><!-- rightbox -->
  <div class="lescigales_rightbox even">
		<h2>Chat en ligne</h2>
		<ul>
			<li><a href="http://chat.lescigales.org/" title="Chat en ligne" target="_blank">http://chat.lescigales.org</a></li>
		</ul>
	</div><!-- rightbox -->

  
</div>

<div id="lescigales_maincontent">

<div id="lescigales_text">
<h1>Contact</h1>

<p>
Pour contacter la joyeuse &eacute;quipe de lesCigales.ORG, rien de plus simple: utilisez le formulaire ci-dessous, nous essayerons d'y répondre dans les plus brefs délais.
</p>

<p><strong>Note</strong>: si vous êtes déjà membre de notre hébergement, une facon plus rapide de nous contacter est de vous logguer sur votre panneau de contrôle et de nous écrire directement depuis celui-ci à l'adresse suivante: <a href="http://admin.lescigales.org/">http://admin.lescigales.org/</a>.</p>

<?php echo $form->create('Contact', array('url' => '/contacts/send')); ?>
<fieldset>
	<?php echo $form->input('Contact.name', array('label'=>'Votre nom complet:','class'=>'in')); ?>
</fieldset>
<fieldset>
	<?php echo $form->input('Contact.email', array('label'=>'Votre email:','class'=>'in')); ?>
</fieldset>
<fieldset>
	<?php
	echo $form->label('Contact.subject', 'Votre requête:');
	echo $form->select('Contact.subject', array('Je voudrais avoir des informations',
																							'Je viens reporter un problème technique',
																							'Je viens signaler un site illégal',
																							'Je viens faire un échange de lien',
																							'J\'ai une autre requête'), null, array(), false);
	?>
</fieldset>
<fieldset>
	<?php echo $form->input('Contact.subject2', array('label'=>'.. autre:', 'class'=>'in')); ?>
</fieldset>

<fieldset>
<div class="input"><label>&nbsp;</label>
<cake:nocache>
<img src="<?php echo $html->url('/tools/captcha'); ?>" />
</cake:nocache>
</div></fieldset>

<fieldset>
<?php echo $form->input('Contact.captcha', array('label'=>'Code de vérification:', 'class'=>'in')); ?>
</fieldset>

<fieldset>
	<?php echo $form->input('Contact.message', array('label'=>'Votre message:', 'type'=>'textarea','rows'=>'4')); ?>
</fieldset>

<fieldset>
  <label>&nbsp;</label>
</fieldset>

<fieldset>
  <label>&nbsp;</label>
  <input class="bouton out" type="submit" value="Postez votre courrier" />
</fieldset>

</form>


</div><!-- texte -->
</div><!-- contenuPrincipal -->