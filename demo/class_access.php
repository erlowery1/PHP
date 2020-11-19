<?php
class Car{
    public $wheels = 4; //avail to whole program
    protected $hood = 1; //only this class and subclass
    private $engine = 1; //only this class
    var $door = 4;
    
     function showProperty(){
        echo $this->hood;
    }
}
$bmw = new Car();
$semi = new Semi();

class Semi extends Car{
    
}

echo $s->showProperty();
?>

