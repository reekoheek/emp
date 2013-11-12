<?php
require '../vendor/autoload.php';

use \App\LXC\Host;

$app = new \Bono\App(array(
    'autorun' => false
));

$app->get('/', function() use ($app) {
    echo 'hello world';
});

$app->run();
