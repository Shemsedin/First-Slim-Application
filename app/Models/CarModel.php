<?php

namespace FirstApp\Models;

class CarModel {
  
  public $make;
  
  public $model;
  
  public function __construct($make, $model) {
    $this->make  = $make;
    $this->model = $model;
  }
  
  public function getCarMake() {
    return $this->make->carMake;
  }
  
  public function getCarModelName() {
    return $this->model->modelName;
  }
}
