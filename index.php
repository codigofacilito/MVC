<?php

//Si quieres saber como se realizo todo el codigo te recomiendo que veas el curso profecional de php 
//En esta dirección --> https://codigofacilito.com/cursos/php-profesional
if (!isset($_REQUEST['controller'])) {
  require_once 'controller/animal_controller.php';
  $controller=new AnimalController();
  $controller->indexAnimal();
} else {
  $controller=$_REQUEST['controller'];
  $action=$_REQUEST['action'];
  require_once 'controller/'.$controller.'_controller.php';
  $controller =ucwords($controller).'Controller';
  $controller=new $controller;
  call_user_func(array($controller,$action));
}
 ?>
