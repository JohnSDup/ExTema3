<?php

$X = array (10, 20, 30, 40, 50,60);

print_r($X);
echo "<br>";

unset ($X[3]);

print_r($X);
echo "<br>";

//Corregido el orden 
$X = array_values($X);
echo "<br>";
print_r($X);




?>