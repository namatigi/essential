<?php
/**
 * Created by PhpStorm.
 * User: xnet1872
 * Date: 20/06/2017
 * Time: 15:55
 */


$firstString = "The quick brown fox";

$secondString = " jumbed    over     the lazy dog.";


$thirdString = $firstString;

$thirdString .= $secondString;

echo $thirdString ."<br/>";



//lowercase:
echo strtolower("I AM LEARNING PHP");
echo "<br/>";

//upper case.
echo strtoupper($thirdString);
echo "<br/>";

//first-letter
echo ucfirst("alex mangu");
echo "<br/>";

//upper case words.
echo ucwords($thirdString);
echo "<br/>";


//string length

echo strlen($thirdString);
echo "<br/>";

//trim
echo $fourthString = $firstString . trim($secondString)."<br/>";


//find;
echo strstr($thirdString,"brown")."<br/>";

//replace by string.

echo str_replace("quick","super-fast",$thirdString);


