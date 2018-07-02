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
