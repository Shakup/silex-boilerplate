<?php
namespace Controller;
	
use Silex\Application;
use Silex\ControllerProviderInterface;

class HomeController implements ControllerProviderInterface {

	public function connect( Application $app )
	{
		$controller = $app['controllers_factory'];
		$controller->match('/', [$this, 'action'])->bind('home');
		$controller->method('GET');

		return $controller;
	}

	public function action( Application $app )
	{
		return $app['twig']->render('home.twig');
	}

}