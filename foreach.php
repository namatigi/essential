<?php
/**
 * Created by PhpStorm.
 * User: xnet1872
 * Date: 21/06/2017
 * Time: 23:07
 */


$ages = array(4,10,20,40,50);


foreach($ages as $age){
    echo $age . ",";
}


echo "<br/>";

$members = array("leonard"=>"mangu","johnlevi"=>"mangu");


foreach($members as $key=>$value){
    echo $key . " " . $value;
    echo "<br/>";
}