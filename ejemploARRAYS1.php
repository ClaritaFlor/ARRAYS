<?php
// a partir de PHP 5.4
$vector1 = [
    "a" => "manzana",
    "b" => "pera",
];
var_dump($vector1);
$vector2 = [
    "c" => "platano",
    "d" => "sandia",
];
var_dump($vector2);
$union=$vector1+$vector2;
echo "Union de \$vector1 y \$vector2: \n";
var_dump($union);
?>