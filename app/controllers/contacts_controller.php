<?php

class ContactsController extends AppController
{
	var $name = 'Contacts';
	var $helpers = array('Form');
	var $uses = array('Contact');
	var $components = array('Email');

	function beforeFilter()
	{
    parent::beforeFilter();
// 		$this->cacheAction = false;
		$this->Session->activate();
	}

	function send()
	{
//		$this->Session->activate();
		if (! empty($this->data)) {
// 			pr($this->data);
			if ($this->Contact->create($this->data) && $this->Contact->validates()) {

				/* Check captcha */
/*				pr($this->Session->read());*/
				$captcha = $this->Session->read('Captcha.key');

				if (! strlen($captcha)) {
					$this->Contact->invalidate('captcha', "Vous devez générer un captcha pour pouvoir continuer");
					return $this->render('/pages/contact');
				}

				if (strcmp($this->data['Contact']['captcha'], $captcha) != 0) {
					$this->Contact->invalidate('captcha', 
																		"Le code est incorrect, veuillez taper ce que vous voyez ci-dessus");
					return $this->render('/pages/contact');
				}

				/* Send an email with all information */
				$subject = array('Je voudrais avoir des informations',
												'Je viens reporter un problème technique',
												'Je viens signaler un site illégal',
												'J\'ai une autre requête');
				$subject = $subject[$this->data['Contact']['subject']];
				$this->Email->to = 'julien.perez@epsylonia.net';
				$this->Email->from = $this->data['Contact']['name'].' <'.$this->data['Contact']['email'].'>';
				if ($this->data['Contact']['subject'] != 3) {
					$this->Email->subject = 'lesCigales.ORG Contact - '.$subject;
				} else {
					$this->Email->subject = 'lesCigales.ORG Contact - '.$this->data['Contact']['subject2'];
				}
				$this->Email->sendAs = 'text';
// 				$this->Email->template = 'contacts/send';
				$emailContent = $this->data['Contact']['message'];
				$emailContent .= "\n\nSent by ".env('HTTP_HOST')." - remote: ".env('REMOTE_ADDR');
				$emailContent .= " - captcha: ".$this->data['Contact']['captcha']." - real captcha: ";
				$emailContent .= $captcha."\n";
// 				$this->set('message', $this->data['Contact']['message']);
				$this->Email->send($emailContent);

				/* We delete the captcha after successfull */
				$this->Session->delete('Captcha.key');

 				die($this->redirect('/contact-succes'));
			}
		}
		return $this->render('/pages/contact');
	}

}
