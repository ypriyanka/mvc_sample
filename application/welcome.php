<?php
ini_set("display_errors",1);
require_once "/var/www/mvc_sample/model/model.php";
require_once "/var/www/mvc_sample/view/view.php";
require_once "/var/www/mvc_sample/controller/controller.php";


$model = new Model();
$controller = new Controller($model);
$view = new View($controller, $model);
$view->output();
?>