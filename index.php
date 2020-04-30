<?php
    require_once('core/core.php');

    $class = isset($_REQUEST['class'])? $_REQUEST['class']: 'Login';
    $view = isset($_REQUEST['view'])? $_REQUEST['view']: 'login';

    $class= $class.'Controller';

    require_once('controllers/'.$class.'.php');

    $object = new $class();
    $object->$view();
?>