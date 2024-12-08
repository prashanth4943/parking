<?php

// use vehicle as GlobalVehicle;

class Vehicle implements vehicle_interface{
    private $vehicle_type;

    public function __construct($vehicle){
      $this->vehicle_type = $vehicle;
    }

    public function vehicle_type(){
        return $this->vehicle_type;
    }

}