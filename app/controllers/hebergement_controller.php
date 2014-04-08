<?php

class HebergementController extends AppController
{
	var $name = "Hebergement";
	var $components = array('RequestHandler', 'Session', 'SwiftMailer');
	
	function gratuit()
	{
		
		$this->set('inscrits', sizeof($this->Hebergement->findAll()));
		if (!empty($this->data)) {
			$this->data['Hebergement']['addr'] = $this->RequestHandler->getClientIp();
//			pr($this->data);
			$user_email = $this->data['Hebergement']['email'];
			$emails = $this->Hebergement->findAll("email = '$user_email'");

			if (sizeof($emails)) {
				$this->set('error_message','Cet email est d&eacute;j&agrave; enregistr&eacute;');
			} 
			//else 
			if ($this->Hebergement->save($this->data)) {
				$this->Session->setFlash('Votre email a bien &eacute;t&eacute; enregistr&eacute;, merci de votre participation');
				$this->Session->setFlash('mail de confirmation sent');
				
				$this->SwiftMailer->from = 'cakephp@lescigales.org';
				$this->SwiftMailer->to = 'julien.perez+cakephp@epsylonia.net';

				$this->SwiftMailer->connect();
				$html = '<html><body><b>This is HTML email</b><br />';
				$html .= '<img src="'.$this->SwiftMailer->mailer->addImage('img/header.jpg');
				$html .= '" alt="header de fou">oh yeah.</body></html>'."\r\n";
				$this->SwiftMailer->mailer->addPart($html, 'text/html');
				$sender = 'Looser <cakephp@lescigales.org>';
				$recipient = 'Julien Perez <julien.perez+recipient@epsylonia.net>';
//				$sender = 'Julien Perez <julien.perez+sender@epsylonia.net>';
				$msg = 'This is cool'."\n\n";
				$this->SwiftMailer->mailer->send($recipient, $sender, $msg);
//				$this->SwiftMailer->mailer->send("Looser <toad@lescigales.org>", "Julien Perez <julien.perez@epsylonia.net>", "Simple message");
				$this->SwiftMailer->close();
//				$this->SwiftMailer->sendView("www.lescigales.org - Confirmation mail", 'confirmation', 'both');
				
 				$this->redirect('/hebergement/gratuit');
			}
		}
	}


}