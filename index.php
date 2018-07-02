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

// $db = new PDO('mysql:host=localhost;dbname=films', 'root', '');

// $sql = "SELECT * FROM films";

// $result = $db->query($sql);

// print_r($result->fetch(PDO::FETCH_ASSOC));

// $films = $result->fetchAll(PDO::FETCH_ASSOC);

// foreach ($films as $film) {
// 	echo "Название фильма: " . $film['name'];
// 	echo "Жанр фильма: " . $film['genre'];
// }

// $result->bindColumn('id', $id);
// $result->bindColumn('name', $name);
// $result->bindColumn('genre', $genre);
// $result->bindColumn('year', $year);

// while ($film = $result->fetch(PDO::FETCH_ASSOC)) {
// 	echo "ID: {$id} <br>" ;
// 	echo "Название: {$name} <br>" ;
// 	echo "Жанр: {$genre} <br>" ;
// 	echo "Год: {$year} <br>" ;
// 	echo "<br> <br>";
// }


// $db = new PDO('mysql:host=localhost;dbname=films', 'root', '');

// $username = 'admin';
// $password = '666';

// $sql = "SELECT * FROM loginData WHERE login = '{$username}' AND password = '{$password}' LIMIT 1";

// $result = $db->query($sql);

// // print_r($result->fetch(PDO::FETCH_ASSOC));

// if ($result->rowCount() == 1) {
// 	$user = $result->fetch(PDO::FETCH_ASSOC);
// 	echo "Имя пользователя: {$user['login']} <br>" ;
// 	echo "Пароль: {$user['password']} <br>" ;
// 	echo "<br> <br>";
// }

// $username = $db->quote($username);
// $username = strtr($username, array('_' => '_', '%' => '\%'))

// $password = $db->quote($password);
// $passworde = strtr($password, array('_' => '_', '%' => '\%'))

// $db = new PDO('mysql:host=localhost;dbname=films', 'root', '');

// $sql = "SELECT * FROM loginData WHERE login = :username AND password = :password LIMIT 1";
// $stmt = $db->prepare($sql);

// $username = 'admin';
// $password = '666';

// $stmt->bindValue(':username', $username);
// $stmt->bindValue(':password', $password);
// $stmt->execute();

// $stmt->execute(array(':username' => $username, ':password' => $password));

// $stmt->bindColumn('login', $login);
// $stmt->bindColumn('password', $pass);

// $stmt->fetch();

// echo "Имя пользователя: {$login} <br>" ;
// echo "Пароль: {$pass} <br>" ;

// $db = new PDO('mysql:host=localhost;dbname=films', 'root', '');

// $sql = "SELECT * FROM loginData WHERE login = ? AND password = ? LIMIT 1";
// $stmt = $db->prepare($sql);

// $username = 'admin';
// $password = '666';

// $username = htmlentities($username);
// $password = htmlentities($password);

// $stmt->bindValue(1, $username);
// $stmt->bindValue(2, $password);
// $stmt->execute();

//$stmt->execute(array($username, $password));

// $stmt->bindColumn('login', $login);
// $stmt->bindColumn('password', $pass);

// $stmt->fetch();

// echo "Имя пользователя: {$login} <br>" ;
// echo "Пароль: {$pass} <br>" ;

// $db = new PDO('mysql:host=localhost;dbname=films', 'root', '');

// $sql = "INSERT INTO loginData (login, password) VALUES (:name, :pass)";
// $stmt = $db->prepare($sql);

// $username = "hacker";
// $password = "11235";

// $stmt->bindValue(':name', $username);
// $stmt->bindValue(':pass', $password);
// $stmt->execute();

// echo "ID вставленной записи: " . $db->lastInsertId();

// $db = new PDO('mysql:host=localhost;dbname=films', 'root', '');

// $sql = "UPDATE loginData SET login = :name WHERE id = :id";
// $stmt = $db->prepare($sql);

// $username = "V";
// $id = "1";

// $stmt->bindValue(':name', $username);
// $stmt->bindValue(':id', $id);
// $stmt->execute();

// echo "Было затронуто строк: " . $stmt->rowCount();

$db = new PDO('mysql:host=localhost;dbname=films', 'root', '');

$sql = "DELETE FROM films WHERE name = :name";
$stmt = $db->prepare($sql);

$title = "Аватар";

$stmt->bindValue(':name', $title);

$stmt->execute();

echo "Было затронуто строк: " . $stmt->rowCount();

 ?>