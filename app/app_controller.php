<?php

class AppController extends Controller
{
  /**
    * Doesnt work for static files + bugs
    */
//   function beforeFilter()
//   {
//     $allowed = array('www.lescigales.org', 'www2.lescigales.org');
//     // Check for correct vhost
//     if (! in_array(env('HTTP_HOST'), $allowed)) {
//       $this->redirect('http://www.lescigales.org/');
//     }
//   }

	function beforeRender()
	{
		if (Configure::read('debug') == 0) {
			ob_start();
		}
	}

	function afterFilter()
	{
		if (Configure::read('debug') == 0) {
			$output = ob_get_contents();
			ob_end_clean();
			echo $this->_clean($output);
		}
	}

	function _clean($string)
	{
		$string = str_replace("\n", '', $string);
		$string = str_replace("\t", '', $string);
		$string = preg_replace('/[ ]+/', ' ', $string);
		$string = preg_replace('/<!--[^-]*-->/', '', $string);
		return $string;
	}
}
