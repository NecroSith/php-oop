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
### Обновление записей в базе
```php
$film = R::load('films', 39);

$film->name = "Фокстрот 3";
$film->genre = "боевик";
$film->year = "2010";

R::store($film);
```
### Заморозка БД для предовтращения программного внесения изменений с структуру таблицы после продакшна. Подключать после коннекшна
```php
R::freeze(TRUE);
```
### Удаление записей из БД
```php
$film = R::load('films', 39);

R::trash($film);
```