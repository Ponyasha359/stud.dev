<?php
class Route
{

static function start()
{
// контроллер и действие по умолчанию
$controller_name = 'home';
$action_name = 'index';

$routes = explode('/', $_SERVER['REQUEST_URI']);

// получаем имя контроллера
if ( !empty($routes[1]) )
{
$controller_name = $routes[1];
}

// получаем имя экшена
if ( !empty($routes[2]) )
{
$action_name = $routes[2];
}

// создаем контроллер

$controller = new $controller_name;
$action = $action_name;
if(method_exists($controller, $action))
{
// вызываем действие контроллера
$controller->$action();
}
else
{
// здесь также разумнее было бы кинуть исключение
}

}

}