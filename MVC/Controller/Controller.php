<?php
include_once("Model/Model.php");

Class Controller{

 public $model;

 public function Controller()

 {

  $this->model=new Model();

 }

 public function show()

 {

  $result = $this->model->insert_data();

  include 'View/View.php';

 }

}

?>