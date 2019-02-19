<?php
class Car{

public $make;
public $model;
public $nr_of_passengers;
public $is_auto;

function __construct($mk, $md ,$nr, $is_automatic){
  $this->make = $mk;
  $this->model = $md;
  $this->nr_of_passengers = $nr;
  $this->is_auto = $is_automatic;

}

function set_gear_type($is_automatic){
  $this->is_auto = $is_automatic;
}

function get_nr_of_pax(){
  return $this->nr_of_passengers;
}

function get_is_auto(){
  return $this->is_auto;
}


}

?>
