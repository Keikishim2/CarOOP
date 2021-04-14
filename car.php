<?php
class car{
    public $price;
    public $speed;
    public $fuel;
    public $mileage;
    public $tax;


    public function construct($p, $s, $f, $m){
        $this->price = $p;
        $this->speed = $s;
        $this->fuel = $f;
        $this->mileage = $m;
        
        if($this->price > 10000){
            $this->tax = .15;
        } else {
            $this->tax = .12;
        }
    }

    public function display_all(){
        return 'Price: $'.$this->price.'<br>
			Speed: '.$this->speed.' mph<br>
			Fuel level: '.$this->fuel.'<br>
			Mileage: '.$this->mileage.' mpg<br>
			Tax: '.$this->tax.'<br>';
    }
}

echo '<h3>Car 1</h3>';
$car1 = new car (2000, 35, 'Full', 15);
echo $car1->display_all();

echo '<h3>Car 2</h3>';
$car2 = new car (3000, 5, 'Not Full', 105);
echo $car2->display_all();

echo '<h3>Car 3</h3>';
$car3 = new car (12000, 95, 'Mostly Full', 20);
echo $car3->display_all();

echo '<h3>Car 4</h3>';
$car4 = new car (9000, 25, 'Empty', 30);
echo $car4->display_all();

echo '<h3>Car 5</h3>';
$car5 = new car (2000, 15, 'Half Full', 150);
echo $car5->display_all();






?>