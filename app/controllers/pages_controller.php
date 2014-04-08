<?php

class PagesController extends AppController
{
	 var $name = 'Pages';
	 var $helpers = array('Html', 'Cache');
	 var $uses = null;
	var $cacheAction = '1 hour';

	function beforeFilter()
	{
    parent::beforeFilter();
		$this->Session->activate();
	}

/**
 * Displays a view
 *
 */
	 function display() {
		  if (!func_num_args()) {
				$this->redirect('/');
		  }

		  $path=func_get_args();

		  if (!count($path)) {
				$this->redirect('/');
		  }

		  $count  =count($path);
		  $page   =null;
		  $subpage=null;
		  $title  =null;

		  if (!empty($path[0])) {
				$page = $path[0];
		  }

		  if (!empty($path[1])) {
				$subpage = $path[1];
		  }

		  if (!empty($path[$count - 1])) {
				$title = ucfirst($path[$count - 1]);
		  }

		  $this->set('page', $page);
		  $this->set('subpage', $subpage);
		  $this->set('title', $title);
		  $this->render(join('/', $path));
	 }

}
?>