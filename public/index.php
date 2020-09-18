<?php
include_once ('Router.php');
require __DIR__ . '/vendor/autoload.php';


use core\Router;


$router = new Router;
echo var_export($router);