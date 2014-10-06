<?php
require 'Slim/Slim.php';
\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim(array(
    'mode' => 'production',
    'debug' => false
));

$app->get('/', function() use ($app) {
    $app->render('Homepage.php');
});

$app->run();