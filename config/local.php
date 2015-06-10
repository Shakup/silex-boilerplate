<?php

$app['debug']        = true;

$app['timezone']     = 'Europe/Paris';

$app['cache.enable'] = false;	

$app['db.enable']    = true;

$app['db.options']   = [
	'driver'	=> 'pdo_mysql',
	'host'		=> '127.0.0.1',
	'dbname'	=> 'name',
	'user'		=> 'user',
	'password'	=> '****'
];