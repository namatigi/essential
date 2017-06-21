<?php
/**
 * Created by PhpStorm.
 * User: xnet1872
 * Date: 21/06/2017
 * Time: 21:58
 */


$var1 = "2 brown foxes";

$var2 =$var1 + 3;

echo $var2."<br/>";


echo gettype($var1)."<br/>";

echo gettype($var2)."<br/>";

settype($var2,"string");

echo gettype($var2)."<br/>";

$var3 = (int) $var1;

echo gettype($var3)."<br/>";


echo is_array($var1)."<br/>";

echo is_bool($var1)."<br/>";

echo is_float($var1)."<br/>";

echo is_int($var1)."<br/>";

echo is_null($var1)."<br/>";

echo is_numeric($var1)."<br/>";

echo is_string($var1)."<br/>";
