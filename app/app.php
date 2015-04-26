<?php

date_default_timezone_set( $app['timezone'] );

// Define requirements

use Silex\Provider\HttpCacheServiceProvider;
use Silex\Provider\TwigServiceProvider;
use Silex\Provider\DoctrineServiceProvider;
use Silex\Provider\SessionServiceProvider;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

// Get Routes

require PATH_APP . '/routes.php';

// Registers services

$app->register(new HttpCacheServiceProvider());

$app->register(new SessionServiceProvider());

$app->register(new TwigServiceProvider(), [
	'twig.options' => [
		'cache'            => $app['cache.enable'],
		'strict_variables' => true
	],
	'twig.path'    => [PATH_ROOT . '/var/cache']
]);

if ( $app['db.enable'] === true ) {
	$app->register(new DoctrineServiceProvider());
}



$app['session']->start();