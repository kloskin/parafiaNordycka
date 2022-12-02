<?php

$host0='localhost';
$login0='root';
$haslo0='';
$baza0='projekt';


$dbconnect=mysqli_connect($host0,$login0,$haslo0,$baza0);

$dbconnect-> query('SET NAMES utf8');


if(!$dbconnect){
    echo 'błąd';
}else{}
?>