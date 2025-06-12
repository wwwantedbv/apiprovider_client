<?php
require dirname(__DIR__) . '/vendor/autoload.php';

Flight::route('/', function(){
    echo "Hello, world!";
});

Flight::start();
