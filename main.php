<?php

// require_once "interface.php";
// require_once "ParkingSpace.php";
// require_once "Vehicle.php";
// require_once "Floor.php";


// $car = new Vehicle('car');
// $floor = new Floor("first" , 50);
// // print_r($car->vehicle_type());
// // print_r($car);
// // print_r($floor);

// $park = new ParkingSpace($car , $floor);
// print_r($park->total_space());

require_once "interface.php";
require_once "ParkingSpace.php";
require_once "Vehicle.php";
require_once "Floor.php";

// Create a vehicle and assign a floor
$car = new Vehicle('car');
$first_floor = new Floor("first", 50);
$second_floor = new Floor("second", 30);

// Park the vehicle on the first floor
$park1 = new ParkingSpace($car, $first_floor);
echo "Total space on first floor: " . $park1->total_space() . "\n";
$park1->park_vehicle();
echo "Occupied space: " . $park1->occupied_space() . "\n";
echo "Available space: " . $park1->available_space() . "\n";

// Park another vehicle on the second floor
$park2 = new ParkingSpace($car, $second_floor);
$park2->park_vehicle();
echo "Total space on second floor: " . $park2->total_space() . "\n";

