<?php

define ('MODE','DEV');
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__FILE__));
define('DIRECTORY_SEPARATOR','DS');
define('ASSETS_PATH','assets');
require_once 'system/libs/autoload.php';

Route::start();
