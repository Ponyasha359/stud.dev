<?php
class Route
{

static function start()
{
// ���������� � �������� �� ���������
$controller_name = 'home';
$action_name = 'index';

$routes = explode('/', $_SERVER['REQUEST_URI']);

// �������� ��� �����������
if ( !empty($routes[1]) )
{
$controller_name = $routes[1];
}

// �������� ��� ������
if ( !empty($routes[2]) )
{
$action_name = $routes[2];
}

// ������� ����������

$controller = new $controller_name;
$action = $action_name;
if(method_exists($controller, $action))
{
// �������� �������� �����������
$controller->$action();
}
else
{
// ����� ����� �������� ���� �� ������ ����������
}

}

}