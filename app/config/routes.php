<?php
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/views/pages/home.thtml)...
 */

Router::connect('/chat', array('controller'=>'tools','action'=>'chat'));
Router::connect('/contacts/send', array('controller'=>'contacts','action'=>'send'));
Router::connect('/annuaire/*', array('controller'=>'annuaire', 'action'=>'search'));
Router::connect('/', array('controller'=>'pages','action'=>'display', 'hebergement'));
Router::connect('/tools/email_encoder', array('controller'=>'tools','action'=>'email_encoder'));
Router::connect('/tools/:action', array('controller'=>'tools'));
Router::connect('/*', array('controller'=>'pages', 'action'=>'display'));

