<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
	<head>
    <title>lesCigales.ORG : <?php echo $title_for_layout; ?></title>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="Content-Style-Type" content="text/css" />
		<meta name="description" content="Hébergeur mutualisé. Venez nous essayer avec notre première offre gratuite: 100 Mo, PHP4, PHP5 et Perl, 2 bases MySQL, IMAP/SSL, POP3/SSL." />
		<meta name="keywords" content="hébergement, hebergement, hébergeur, hebergeur, gratuit, mutualise, mutualisé, php, php5, php6, perl, mysql, postgresql, web, apache, linux, cluster" />
		<meta name="robots" content="index,follow" />
		<meta http-equiv="refresh" content="15;url=http://<?php echo env('SERVER_NAME');?>/">
    <link rel="stylesheet" type="text/css" href="<?php echo $this->webroot; ?>themes/provence/screen.css" media="screen" title="provence" />		
    <link rel="stylesheet" type="text/css" href="<?php echo $this->webroot; ?>themes/provence/screenAlt.css" media="screen" title="provence" />		
    <link rel="stylesheet" type="text/css" href="<?php echo $this->webroot; ?>themes/provence/print.css" media="print" />		
    <link rel="shortcut icon" type="images/x-icon" href="<?php echo $this->webroot; ?>themes/provence/images/favicon.ico" />		
	</head>	
<body>
  <div id="lescigales_container">
	<!-- div id="conteneur" -->
		
      <div id="lescigales_header">
				<a href="http://<?php echo env('SERVER_NAME'); ?>" title="Aller &agrave; la page d'accueil"></a>
			</div>

      <div id="lescigales_menu">
        <a href="/" title="Accueil">Accueil</a><a href="/a-propos" title="Qui sommes nous ?">&Agrave; propos</a><a href="/contact" title="Nous contacter">Contact</a><a id="goContenu" href="#contenu" title="Aller au contenu">Aller au contenu</a>
			</div>
			
      <div id="lescigales_register">
			<!--div id="register"-->
				<a id="sInscrire" href="http://admin.lescigales.org/users/register" title="S'inscrire">S'inscrire</a>
				<a id="monCompte" href="http://admin.lescigales.org/" title="Acc&egrave;der &agrave; mon compte">Mon compte</a>
			</div>
					
    <div id="lescigales_content">
		<!--div id="contenu"-->
			<a name="contenu"></a>

			<?php if ($session->check('Message.flash'))
					{
						$session->flash();
					}
					echo $content_for_layout;
			?>
		<?php echo $this->element('menubox', array('cache' => '1 hour')); ?>
		</div><!-- content -->
				

      <div id="lescigales_footer">
	        <a href="http://validator.w3.org/check?uri=referer" title="Respecte la norme XHTML 1.0"><acronym title="eXtensible Hypertexte Markup Language">xhtml</acronym></a>

        <a href="http://jigsaw.w3.org/css-validator/validator?uri=http://<?php echo $_SERVER['SERVER_NAME']; ?>" title="Respecte la norme CSS 2.0"><acronym title="Cascading Style Sheets">css</acronym></a>
        <em><a href="http://www.epsylonia.net/" target="_blank">J&amp;J Associates, s.r.o.</a></em> &copy; 2008 - Tous droits r&eacute;serv&eacute;s
      </div>
		
	</div><!-- conteneur -->

		<?php echo $cakeDebug?>
</body>
</html>

