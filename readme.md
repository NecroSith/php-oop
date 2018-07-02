# Класс PDO в PHP
### Создание подключения
```php
$db = new PDO('mysql:host=[адрес сервера];dbname=[название БД]', '[логин к серверу]', '[пароль]');
```
### Создание запроса
```php
$sql = "SELECT * FROM films"; 
$result = $db->query($sql);
```
### Вывод результатов запроса по одной записи
```php
print_r($result->fetch(PDO::FETCH_ASSOC));
```
### Вывод всех записей
```php
while ($film = $result->fetch(PDO::FETCH_ASSOC)) {
	print_r($film);
	echo "Название фильма: " . $films['name'];
	echo "Жанр фильма: " . $films['genre'];
}
```
### Получение сразу всех записей 
```php
$films = $result->fetchAll(PDO::FETCH_ASSOC);

foreach ($films as $film) {
	echo "Название фильма: " . $film['name'];
	echo "Жанр фильма: " . $film['genre'];
}
```
### Создание переменной под каждую колонку таблицы и вывод на экран
```php
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
```
### Выборка записей без защиты от SQL инъекций
```php
$username = 'admin';
$password = '666';

$sql = "SELECT * FROM loginData WHERE login = '{$username}' AND password = '{$password}' LIMIT 1";
$result = $db->query($sql);

// print_r($result->fetch(PDO::FETCH_ASSOC));

if ($result->rowCount() == 1) {
	$user = $result->fetch(PDO::FETCH_ASSOC);
	echo "Имя пользователя: {$user['login']} <br>" ;
	echo "Пароль: {$user['password']} <br>" ;
	echo "<br> <br>";
```
### Выборка записей с защитой от SQL инъекций в ручном режиме
```php
$username = 'admin';
$password = '666';

$username = $db->quote($username);
$username = strtr($username, array('_' => '_', '%' => '\%'))

$password = $db->quote($password);
$passworde = strtr($password, array('_' => '_', '%' => '\%'))

if ($result->rowCount() == 1) {
	$user = $result->fetch(PDO::FETCH_ASSOC);
	echo "Имя пользователя: {$user['login']} <br>" ;
	echo "Пароль: {$user['password']} <br>" ;
	echo "<br> <br>";
```
### Выборка записей с защитой от SQL инъекций в автоматическом режиме с плейсхолдерами
```php
$sql = "SELECT * FROM loginData WHERE login = :username AND password = :password LIMIT 1";
$stmt = $db->prepare($sql);

$username = 'admin';
$password = '666';

$stmt->bindValue(':username', $username);
$stmt->bindValue(':password', $password);
$stmt->execute();
```
##### или 
```php
$stmt->execute(array(':username' => $username, ':password' => $password));

$stmt->bindColumn('login', $login);
$stmt->bindColumn('password', $pass);

$stmt->fetch();

echo "Имя пользователя: {$login} <br>" ;
echo "Пароль: {$pass} <br>" ;
```
### Выборка записей с защитой от SQL инъекций в автоматическом режиме через последовательность параметров
```php
$sql = "SELECT * FROM loginData WHERE login = ? AND password = ? LIMIT 1";
$stmt = $db->prepare($sql);

$username = 'admin';
$password = '666';

$stmt->bindValue(1, $username);
$stmt->bindValue(2, $password);
$stmt->execute();
```
##### или 
```php
$stmt->execute(array($username, $password));

$stmt->bindColumn('login', $login);
$stmt->bindColumn('password', $pass);

$stmt->fetch();

echo "Имя пользователя: {$login} <br>" ;
echo "Пароль: {$pass} <br>" ;
```
### Защита от кросс-сайт скриптинга
```php
$username = htmlentities($username);
$password = htmlentities($password);
```
### Вставка данных в БД
```php
$sql = "INSERT INTO loginData (login, password) VALUES (:name, :pass)";
$stmt = $db->prepare($sql);

$username = "hacker";
$password = "11235";

$stmt->bindValue(':name', $username);
$stmt->bindValue(':pass', $password);
$stmt->execute();

// echo "ID вставленной записи: " . $db->lastInsertId();
```
### Обновление данных в БД
```php
$sql = "UPDATE loginData SET login = :name WHERE id = :id";
$stmt = $db->prepare($sql);

$username = "V";
$id = "1";

$stmt->bindValue(':name', $username);
$stmt->bindValue(':id', $id);
$stmt->execute();

echo "Было затронуто строк: " . $stmt->rowCount();
```
### Удаление данных из БД
```php
$sql = "DELETE FROM films WHERE name = :name";
$stmt = $db->prepare($sql);

$title = "Аватар";

$stmt->bindValue(':name', $title);

$stmt->execute();

echo "Было затронуто строк: " . $stmt->rowCount();
```