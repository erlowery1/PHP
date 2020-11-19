<?php
class Car{
    static $wheels = 4;
    var $hood = 1;
    function MoveWheels(){
        Car::$wheels= 10;
    }
}
$bmw = new Car();
Car::MoveWheels(); // calls to the staic method and resets the value. instead of instance name its the class name and use the $ sign 
echo Car::$wheels; //:: accesses the static property


?>