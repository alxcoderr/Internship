<?php

class Car { //creating a class or template or blueprint

    //Properties
    private $brand; //declaring variable brand.
    private $color; //declaring variable color.
    public $vehicleType = "Car"; //definition of variable vehicleType.

    //Constructor
    public function __construct($brand, $color = "none") { //creating a constructor and also assigning a default color value of none
        $this->brand = $brand; //assigning the value inputted into the function to the brand(private) variable.
        $this->color = $color; //assigning the value inputted into the function to the color(private) variable.
    }

    //Method
    public function getCarInfo(){
        return "Brand: " . $brand . ". Color:" . $color;
    }
}

$car01 = new Car("Lambo", "green"); //creating an object, car01.
$car02 = new Car("Rolls Royce", "black"); //creating an object, car02.
echo $car01->vehicleType;