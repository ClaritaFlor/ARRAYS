<?php
$uno = array("A", "B", "C");
var_dump($uno);
$uno = array("A", "B", "C");
$uno[]="D";
var_dump($uno);

$array = array(
    "foo" => "bar",
    "bar" => "foo",
);
var_dump($array);
// a partir de PHP 5.4
$array = [
    "foo1" => "bar1",
    "bar1" => "foo1",
];
var_dump($array);
?>