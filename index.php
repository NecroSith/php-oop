<?php 

/*class Robot {
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
$robot1->report();*/

$db = new PDO('mysql:host=localhost;dbname=films', 'root', '');

$sql = "SELECT * FROM films";

$result = $db->query($sql);

// print_r($result->fetch(PDO::FETCH_ASSOC));

// $films = $result->fetchAll(PDO::FETCH_ASSOC);

// foreach ($films as $film) {
// 	echo "Название фильма: " . $film['name'];
// 	echo "Жанр фильма: " . $film['genre'];
// }

$result->bindColumn('id', $id);
$result->bindColumn('name', $name);
$result->bindColumn('genre', $genre);
$result->bindColumn('year', $year);

while ($film = $result->fetch(PDO::FETCH_ASSOC)) {
	echo "ID: {$id} <br>" ;
	echo "Название: {$name} <br>" ;
	echo "Жанр: {$genre} <br>" ;
	echo "Год: {$year} <br>" ;
	echo "<br> <br>";
}

 ?>