<?php

class ToolsController extends AppController
{
	var $name = 'Tools';
	var $uses = array('Encoder');
	var $helpers = array('Form');
	var $components = array('Captcha');
	
	function beforeFilter()
	{
    parent::beforeFilter();
		$this->Session->activate();
	}

	function captcha()
	{
		$this->Captcha->render();
	}

	function email_encoder()
	{
		if (! empty($this->data)) {
			if ($this->Encoder->create($this->data) && $this->Encoder->validates()) {
				/* Validated ! */
				$this->set('validEmail', $this->data['Encoder']['email']);
			}
		}
	}

  function chat()
  {
  }

}
