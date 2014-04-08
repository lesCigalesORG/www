<?php

class AnnuaireController extends AppController
{
	var $name = 'Annuaire';
  var $helpers = array('Cache');

	function search($query = null)
	{
		$this->cacheAction = false;
		if (! empty($this->data) && isset($this->data['Annuaire']['fqdn'])) {
			$this->redirect('/annuaire/'.$this->data['Annuaire']['fqdn']);
		} else if ($query != null) {
      $pattern = "%$query%";
			$conditions = array('OR' => array('fqdn LIKE' => $pattern,
                                        'title LIKE' => $pattern,
                                        'description LIKE' => $pattern));
			$this->data['Annuaire']['fqdn'] = $query;
			$this->set('query', $query);
		} else {
			$this->set('query', '');
			$conditions = array();
		}
// 		$this->cacheAction = '1 hour';
		$fields = array('id', 'fqdn', 'title', 'description', 'website_vhost_id');
		$this->paginate['limit'] = 10;
		$this->paginate['order'] = array('Annuaire.fqdn' => 'asc');
		$sites = $this->paginate('Annuaire', $conditions);
		$this->set('sites', $sites);
	}

}
