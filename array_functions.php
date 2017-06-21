<?php
/**
 * Created by PhpStorm.
 * User: xnet1872
 * Date: 21/06/2017
 * Time: 21:15
 */

$array = array(4,1,10,29,3,90,34);

echo "Count: " . count($array)."<br/>";

echo "Max value: " . max($array)."<br/>";

echo "Min value: ". min($array)."<br/>";

sort($array);print_r($array);echo "<br/>";

rsort($array);print_r($array); echo "<br/>";

echo $string1  = implode(" * ",$array)."<br/>";

print_r(explode("*",$string1));echo "<br/>";

echo in_array(4,$array);