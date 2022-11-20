<?php

use app\core\Router;

require '../vendor/autoload.php';

session_start();

//dd($_SERVER);
//dd(trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)));
//dd(RequestType::get());

Router::run();