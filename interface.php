<?php

interface vehicle_interface{
  public function vehicle_type();
}

interface parking_interface{
    public function total_space();
    public function occupied_space();
    public function available_space();
}