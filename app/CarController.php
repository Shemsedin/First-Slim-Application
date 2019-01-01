<?php

namespace FirstApp;

class CarController {
  
  protected $container;
  
  // This constructor passes the DIC in so we can get our PenFactory out of it later
  function __construct($container) {
    $this->container = $container;
  }
  
  function __invoke($request, $response, $args) {
    // Create our car from CarProduction model in DIC
    $car = $this->container->get('carModel');
    // Assign args (variables that will be available on rendered view).
    $args['carMake']      = $car->getCarMake();
    $args['carModelName'] = $car->getCarModelName();
    
    // Get the default template renderer out of DIC and pass the response and $args to a template file.
    return $this->container->get('renderer')
      ->render($response, 'showCar.phtml', $args);
  }
}
