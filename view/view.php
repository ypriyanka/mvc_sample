<?php
ini_set("display_errors",1);
require_once "/var/www/mvc_sample/model/model.php";
require_once "/var/www/mvc_sample/controller/controller.php";
class View
{
    private $model;
    private $controller;
 
    public function __construct($controller,$model) {
        $this->controller = $controller;
        $this->model = $model;
    }
     
    public function output(){
    		$f=fopen("../view/hai.html","r+");
		
			while(!feof($f))
					{
						echo fgets($f);  //to read file line by line
					}
		
			fclose($f);
     	
      
    }
}
?>