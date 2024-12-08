<?php

class ParkingSpace implements parking_interface
{
    private $floors = []; // Array to track each floor's spaces
    private $vehicle;
    private $current_floor;

    public function __construct(Vehicle $vehicle, Floor $floor)
    {
        $this->vehicle = $vehicle;
        $this->current_floor = $floor->which_floor();
        // Initialize floor if not already added
        if (!isset($this->floors[$this->current_floor])) {
            $this->floors[$this->current_floor] = [
                'total' => $floor->how_much_space(),
                'occupied' => 0,
            ];
        }
    }

    public function total_space()
    {
        return $this->floors[$this->current_floor]['total'];
    }

    public function occupied_space()
    {
        return $this->floors[$this->current_floor]['occupied'];
    }

    public function available_space()
    {
        $floor_data = $this->floors[$this->current_floor];
        return $floor_data['total'] - $floor_data['occupied'];
    }

    public function park_vehicle()
    {
        if ($this->available_space() > 0) {
            $this->floors[$this->current_floor]['occupied']++;
            echo "Vehicle parked on floor: " . $this->current_floor . "\n";
        } else {
            echo "No space available on floor: " . $this->current_floor . "\n";
        }
    }
}
