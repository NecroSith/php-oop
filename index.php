<?php 

class Robot {
	public $name;
	public $age;
	public $goal;
	public $chargeTime;

	public function __construct($name, $age, $goal, $chargeTime) {
		$this->name = $name;
		$this->age = $age;
		$this->goal = $goal;
		$this->chargeTime = $chargeTime;
	}

	public function report() {
		echo "Hi! I am " . $this->name . "! I was created " . $this->age . " earth major cycles ago. I am " . $this->goal . ". My battery charge will be depleted in " . $this->chargeTime . "hours when fully charged";
	}

}

$robot1 = new Robot('Bobo', '15', 'partymaker', '200');
$robot1->report();


 ?>