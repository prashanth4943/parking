<?php

class Floor{
    private $floor;
    private $space;
     public function __construct($floor , $space){
      $this->floor = $floor;
      $this->space = $space;
     }

     public function which_floor(){
        return $this->floor;
     }
     public function how_much_space(){
      return $this->space;
     }
}