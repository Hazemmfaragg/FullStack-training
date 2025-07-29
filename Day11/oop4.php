<?php
class Vehicle{
    public $model="BMW";
    public $make="Germany";

    public function info(){
        echo "model: ".$this->model ."<br>";
        echo "make: ".$this->make ."<br>";
    }
}


class Car extends Vehicle{
    public $fueltype="90";
   public function info(){
        echo "model: ".$this->model ."<br>";
        echo "make: ".$this->make ."<br>";
        echo "fueltype: ".$this->fueltype ."<br>";
        
    }


}

$car= new Car();

echo $car->info();









?>


