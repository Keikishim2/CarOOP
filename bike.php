<?php

class Bike
{
    public $price;
    public $max_speed;
    public $miles;
    public function __construct($input_price, $input_max_speed){
        $this->price = $input_price;
        $this->max_speed = $input_max_speed;
        $this->miles = 0;
    }
    public function displayInfo(){
        echo "Bike price is" . ' ' .$this->price . '<br>';
        echo "Maximum speed is:" . ' ' .$this->max_speed . '<br>';
        echo ("Total miles driven are:" . ' ' . $this->miles . '<br> <br>');
    }
    public function drive($num){
        echo ("Driving <br>");
        for($i=0;$i<$num;$i++)
        $this->miles = $this->miles + 10;
    }
    public function reversing($num){
        echo ("Reversing <br>");
        for($i=0;$i<$num;$i++){
            if ($this->miles > 0)
                $this->miles = $this->miles - 5;
        }
    }
    public function move($drive, $reversing){
        $this->drive($drive);
        $this->reversing($reversing);
        $this->displayInfo();
    }
}

$bike1 = new Bike(200, "25mph");
$bike2 = new Bike(100, "30mph");
$bike3 = new Bike(300, "10mph");

$bike1->move(3,1);
$bike2->move(2,2);
$bike3->move(0,3);

?>