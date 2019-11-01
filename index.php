<?php 

require_once("vendor/autoload.php");

use \Slim\Slim;
use \LiraHaus\Page;

$app = new Slim();

$app->config('debug', true);

$app->get('/', function() {

	$page = new Page();
	$page->setTpl("index");

});

$app->get('/sobre', function() {

	$page = new Page();
	$page->setTpl("sobre");

});


$app->get('/quartos', function() {

	$page = new Page();
	$page->setTpl("quartos");

});



$app->get('/contato', function() {

	$page = new Page();
	$page->setTpl("contato");

});

$app->run();

 ?>