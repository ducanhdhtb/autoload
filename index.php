<?php 	
require('autoload.php');

$test = new test();
echo "<br>";
$check = new check();
echo "<br>";

$controller = new controller();

use Main\Sub as mynamespace;
$a = new mynamespace\demo;
$a->hi();






 ?>