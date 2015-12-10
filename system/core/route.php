<?php
class Route
{

    /**
     *
     */
    static function start()
{

$controller_name = 'home';
$action_name = 'index';

$routes = explode('/', $_SERVER['REQUEST_URI']);

if ( !empty($routes[1]) )
{
$controller_name = $routes[1];
}

if ( !empty($routes[2]) )
{
$action_name = $routes[2];
}

$modelName =     $controller_name .'_Model';
$controller = new $controller_name;
$model = new $modelName;
$action = $action_name;
if(method_exists($controller, $action))
{
$controller->model= new $modelName;
$controller->$action();
}
else
{
    //todo
}

}

}