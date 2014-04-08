<?php

class CaptchaComponent extends Object
{
	var $components = array('Session');

	function startup(&$controller)
	{
		$this->controller = $controller;
	}

	function render()
	{
		App::import('Vendor', 'kcaptcha/kcaptcha');
		$kcaptcha = new KCAPTCHA();
		$key = $kcaptcha->getKeyString();
		$this->Session->write('Captcha.key', $key);
		exit(0);
	}
}
