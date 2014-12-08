<?php

return array(
	'driver' => 'smtp',
	'host' => 'smtp.mandrillapp.com',
	'port' => 587,
	'from' => array('address' => "keith.webster@gmail.com", 'name' => "Keith Webster"),
	'username' => getenv('MANDRILL_USERNAME'),
	'password' => getenv('MANDRILL_APIKEY'),
	'sendmail' => '/usr/sbin/sendmail -bs',
	'pretend' => false,
);
