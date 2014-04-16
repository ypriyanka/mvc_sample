
<?php
ini_set("display_errors",1);
require_once "/var/www/mvc_sample/model/model.php";
require_once "/var/www/mvc_sample/view/view.php";

class Controller
{
    private $model;
 
    public function __construct($model) {
        $this->model = $model;
    }
}

