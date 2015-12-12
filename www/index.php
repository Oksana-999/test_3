<?php
//ФРОНТКОНТРОЛЛЕР
//Контроллер отвечает за обработку запросов пользователя.
// Контроллер не должен содержать SQL-запросов.
require_once __DIR__ . '/autoload.php';
include __DIR__ . '/views/news/add.php';

$ctrl = isset($_GET['ctrl']) ? $_GET['ctrl'] : 'News';
$act = isset($_GET['act']) ? $_GET['act'] : 'All';

$controllerClassName = $ctrl . 'Controller';  //Создаём имя класса контроллера

$controller = new $controllerClassName/*()*/;
$method = 'action' . $act;
$controller->$method();


if (isset($_POST['news']) && isset($_POST['text']))
{
    $controllerPostName = 'AddController';
    $controllerPost = new $controllerPostName();
    $method_post = 'actionAdd';
    $controllerPost->$method_post();

    $controllerClassName = 'NewsController';  //Создаём имя класса контроллера
    $controller = new $controllerClassName();
    $method = 'actionAll';
    $controller->$method();
    //$controller->actionAll();  //можно и так, без  $method = 'actionAll';


}
