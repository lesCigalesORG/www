<?php
/*
 * Created on 15-Feb-07
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 
class PhpinfoController extends AppController
{
	var $name = 'Phpinfo';
	
	function php4()
	{
		ob_start();
		phpinfo();
		$this->set('output', ob_get_contents());
		ob_end_clean();
	}
	
	function php5()
	{
	}
}
