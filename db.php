<?php 

require('libs/rb-mysql.php');

R::setup('mysql:host=localhost;dbname=films', 'root', '');

R::freeze(TRUE);

 ?>