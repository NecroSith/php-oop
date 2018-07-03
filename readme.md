# РАБОТА С БД с RedBean ORM
### Подключение библиотеки RedBean
```php
require('libs/rb-mysql.php');
```
### Подключение к БД через RedBean
```php
R::setup('mysql:host=localhost;dbname=films', 'root', '');
```
### Создание нового бина в таблице
```php
$film = R::dispense('films');
```
### Создание нового бина с данными для таблицы (без записи!)
```php
$film = R::dispense('films');
$film->name = "Фокстрот 2";
```
### Запись данных в таблицу
```php
R::store($film);
```
### Вывод записей из таблицы
```php
$films = R::find('films');

foreach ($films as $film) {
	print_r($film);
	echo "Название: " . $film->name . "<br>";
	echo "Жанр: " . $film->genre . "<br>";
	echo "Год: " . $film->year . "<br>";
	echo "Описание: " . $film->description . "<br>";
}
```