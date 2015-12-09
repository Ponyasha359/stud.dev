<?php
function autoload($className) {
    //config files
    if (file_exists(ROOT . 'system/config/'.strtolower($className).'.php')){
        require_once(ROOT . 'system/config/'.strtolower($className).'.php');
    }

    //core files
    else if (file_exists(ROOT .DS . 'system'.DS .'core'.DS . strtolower($className) . '.php')) {
        require_once(ROOT .DS . 'system'.DS .'core'.DS . strtolower($className) . '.php');
    }

    //lib files
    else if (file_exists(ROOT . '/system/libs/' . strtolower($className) . '.php')) {
        require_once(ROOT .DS . 'system'.DS .'libs'.DS . strtolower($className) . '.php');
    }

    //app files
    else if (file_exists(ROOT .DS . 'application'.DS .'controller'.DS . strtolower($className) . '.php')) {
        require_once(ROOT .DS . 'application'.DS .'controller'.DS . strtolower($className) . '.php');
    }
    else if (file_exists(ROOT .DS . 'application'.DS .'model'.DS . strtolower($className) . '.php')) {
        require_once(ROOT .DS . 'application'.DS .'model'.DS . strtolower($className) . '.php');
    }else {
        echo 'FILE {'.$className.'}NOT FOUND';
        echo '<br>';
        echo ROOT .DS . 'system'.DS .'core'.DS . strtolower($className) . '.php';
    }
}

spl_autoload_register('autoload');