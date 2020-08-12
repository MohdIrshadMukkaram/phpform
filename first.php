<?php
echo "Hello PHP here!";
eCho "<h1>Amazing</h1>";
$x = 155;
print "X value is: $x<br>";
eCho "X value is: $x<br>";
$a = "Actually ";
$b = "PHP is weird<br>";
eCho $a.$b;
echo var_dump($a).'<br>';
eCho var_dump($b).'<br>';
eCho var_dump($x).'<br>';
print add(75).'<br>';
function add($y){
	return $GLOBALS['x']+$y;
}
echo add(25);
$cars = array('Valvo','BMW'  ,'Ferari' );
eCho $cars;
?>