<?php
/**
 * Created by PhpStorm.
 * User: xnet1872
 * Date: 21/06/2017
 * Time: 21:39
 */


$bool1 = true;

$bool2 = false;

$var4=0;

echo "Bool1:".$bool1. "<br/>";

echo "Bool2:".$bool2."<br/>";

$var1 = 23;

$var2 = "cat";

echo isset($var1)."<br/>";

echo isset($var2)."<br/>";

echo isset($var3)."<br/>";

unset($var1);

echo isset($var1)."<br/>";

echo isset($var2)."<br/>";

echo isset($var3)."<br/>";

echo empty($var1)."<br/>";

echo empty($var4);