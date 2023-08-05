<?php
$controller = $_GET['c'].'Controller';
$method = $_GET['m'];
require_once('./controllers/'.$controller.'.php');
$objet= new $controller();
$objet->$method();
