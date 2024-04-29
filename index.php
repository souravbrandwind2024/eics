<?php

require 'php/Router.php';

$router = new Router();

$router->get('/', function(){
    include 'home.php';
});

$router->run();