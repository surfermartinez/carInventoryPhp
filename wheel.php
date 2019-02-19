<?php
 class Wheel{
   private $diameter;
   private $width;
   private $material = "rubber";
   private $unit = "inch";

   function __construct($new_diameter, $new_width){
   $this->diameter = $new_diameter;
   $this->width = $new_width;

   }

   function set_material($new_material){
     $this->material = $new_material;
   }

   function get_material(){
     echo "The mateial of this Wheel is ". $this->material;
   }

   function set_width($new_width){
     $this->width = $new_width;
   }

   // this function changes the diameter and the width of the object
   function set_wheel_size($new_diameter, $new_width){
     $this->diameter = $new_diameter;
     $this->width = $new_width;
   }

   function get_width(){
     return $this->width;
   }

   function get_width_and_unit(){
     return $this->width . " " . $this->unit;
    }

   function set_diameter($new_diameter){
     $this->diameter = $new_diameter;
    }

   function get_diameter(){
     return $this->diameter;
    }

    function get_diameter_and_unit(){
      return $this->diameter . " " . $this->unit;
    }

 }


 ?>
