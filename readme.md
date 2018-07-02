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
## Получение сразу всех записей 
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