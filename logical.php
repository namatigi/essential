<?php
/**
 * Created by PhpStorm.
 * User: xnet1872
 * Date: 21/06/2017
 * Time: 22:27
 */

$a=100;
$b=200;


if($a>$b){
    echo "a is larger than b";
}else if($a==$b){
    echo "a is equal to b";
}else{
    echo "a is less than b ";
}

echo "<br/>";

$c=20;
$d=1;

if(($a>$b) && ($c>$d)){
    echo "a is larger than b AND ";
    echo "c is larger than d";
}else{
    echo "Neither a is larger than b nor c is larger than d";
}

echo "<br/>";

if (($a>$b) || ($c>$d)){
    echo "a is larger than b OR ";
    echo "c is larger than d";
}


echo "<br/>";


if (!isset($a)){
    $a=100;
}
echo $a;


echo "<br/>";


if(is_int($a)){
    settype($a,"string");
}

echo gettype($a);


echo "<br/>";


$number=10;

switch($number){
    case 1:echo "number is 1";break;
    case 2:echo "number is 2";break;
    case 3:echo "number is 3";break;
    case 4:echo "number is 4";break;
    case 5:echo "number is 5";break;
    default:echo "number not found";break;
}