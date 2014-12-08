<?php

return array(
    'driver' => 'smtp',
    'host' => '127.0.0.1',
    'port' => 1025,
    'from' => array('address' => "keith.webster@gmail.com", 'name' => "Keith Webster"),
    'username' => null,
    'password' => null,
    'sendmail' => '/usr/sbin/sendmail -bs',
    'pretend' => false,
);
