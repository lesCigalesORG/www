<?php

class Hebergement extends AppModel
{
	var $name = "Hebergement";
	
	var $validate = array('email' => VALID_NOT_EMPTY,
						  'email' => VALID_EMAIL);
}