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