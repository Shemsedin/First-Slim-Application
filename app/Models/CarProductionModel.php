<?php

namespace FirstApp\Models;

class CarProductionModel {
  
  function __invoke() {
    $carMake      = new CarMakeModel();
    $carModelName = new CarModelNameModel();
    
    return new CarModel($carMake, $carModelName);
  }
}
