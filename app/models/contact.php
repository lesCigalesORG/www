<?php

class Contact extends AppModel
{
	var $name = 'Contact';
	var $useTable = false;
	var $_schema = array('subject', 'name', 'email', 'subject2', 'message');
	var $validate = array('name' => array('Veuillez entrer votre nom complet' => VALID_NOT_EMPTY),
												'email' => array('Vous devez entrer un email valide' => VALID_EMAIL,
																				'Veuillez entrer votre adresse email' => VALID_NOT_EMPTY
																				),
												'message' => array('Vous devez tapper un message' => VALID_NOT_EMPTY),
												'captcha' => array('Vous devez entrer le code de vérification' => VALID_NOT_EMPTY)
												);
}
