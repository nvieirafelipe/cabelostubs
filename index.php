<?php
require 'vendor/autoload.php';

$app = new \Slim\Slim();
$app->contentType('application/json;charset=utf-8');

$app->get('/:status', function ($status) use ($app) {
  $app->response()->status((int) $status);
});

$app->run();

?>