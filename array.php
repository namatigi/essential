<?php
/**
 * Created by PhpStorm.
 * User: xnet1872
 * Date: 21/06/2017
 * Time: 20:06
 */

$array1 = array(4,9,8,10,20,30);

echo $array1[0] ."<br/>";

echo $array1[3]."<br/>";

$array2 = array(6,"fox","dog",array("x","y","z"));

echo $array2[3][0]."<br/>";

$array2[3]="cat";

echo $array2[3];