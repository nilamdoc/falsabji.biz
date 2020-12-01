<?php

namespace app\config\bootstrap;

use lithium\data\Connections;

 Connections::add('default_FalSabji', array(
 	'type' => CONNECTIONFALSABJI_TYPE,
 	'host' => array(CONNECTIONFALSABJI,
		),
//	'replicaSet' => true,
 	'database' => CONNECTIONFALSABJI_DB,
	'login' => CONNECTIONFALSABJI_USER,
	'password' => CONNECTIONFALSABJI_PASS,	
	//'classes' => array('server' => 'Mongo')
//	'setSlaveOkay' => true,
//	'readPreference' => Mongo::RP_NEAREST	
 ));

