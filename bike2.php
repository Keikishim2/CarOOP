<?php

class Bike
{
    public $price;
    public $max_speed;
    public $miles;
    public function __construct($type, $price, $max_speed, $miles) {
		$this->type = $type;
		$this->price = $price;
		$this->max_speed = $max_speed;
		$this->miles = $miles;
		echo "Drive at: " . $this->type . "<br/>";
	}
	public function __get($property)
    {
        if (property_exists($this, $property))
    {
        return $this->property;
        }
    }
    public function __set($property, $value) 
    {
        if (property_exists($this, $property)) 
    {
        $this->$property = $value;
    }
        return $this;
    }

  	// Method for moving Bike forward, adding miles
    public function drive($miles) 
    {
        $this->miles += $miles;
        return $this;
    }
    public function reverse($miles) 
    {
        $this->miles -= $miles;	
        return $this;	
    }
    public function displayInfo() 
    {
        echo "<br/>STATS<br/>";
        echo "Price: " . $this->price . "<br/>";	
        echo "Max Speed: " . $this->max_speed . "<br/>";	
        echo "Miles: " . $this->miles . "<br/>";
    }

}
$bike_1 = new Bike("Bike1", 100, "25mph", 0);
$bike_1->drive(10)->drive(10)->drive(10)->reverse(5)->displayInfo();

$bike_2 = new Bike("Bike2", 200, "35mph", 0);
$bike_2->drive(10)->drive(10)->reverse(5)->reverse(5)->displayInfo();

$bike_3 = new Bike("Bike3", 300, "45mph", 0);
$bike_3->reverse(5)->reverse(5)->reverse(5)->displayInfo();



?>