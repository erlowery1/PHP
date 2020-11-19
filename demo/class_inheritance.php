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
$bmw = new Car();

class Plane extends Car{

    var $wheels = 20;


}
$jet = new Plane();
echo "jet wheels: " . $jet->wheels . "<br>";
echo "bmw wheels: " . $bmw->wheels . "<br>";
$jet->MoveWheels();
echo " jet wheels: " . $jet-> wheels;
//if (class_exists('Plane')){
//    echo "yes it exists!";
//}else{
//    "sorry, it doesnt exist";
//}
?>


