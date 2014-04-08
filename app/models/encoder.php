<?php

class Encoder extends AppModel
{
	var $name = 'Encoder';
	var $useTable = false;
	var $_schema = array('email');
	var $validate = array('email' => array(	'Entrez un email valide' => VALID_EMAIL,
																					'Vous devez rentrer un email' => VALID_NOT_EMPTY));
}
