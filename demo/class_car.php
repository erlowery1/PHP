<?php
class Car{
    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $door = 4;
    function MoveWheels(){
        $this->wheels= 10;
    }
    
    function CreateDoors(){
        $this->door= 6;
    }
}
$truck = new Car();
$bmw = new Car();
echo "bmw wheels: " . $bmw->wheels."<br>";
echo "truck wheels: " . $truck-> wheels = 10 . "<br>";
$truck->CreateDoors();
echo "truck doors: " . $truck->door;
?>