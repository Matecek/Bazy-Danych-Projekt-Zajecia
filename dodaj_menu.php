<?php

$nazwaM=$_POST['f_nazwaM'];
$opis=$_POST['f_opis'];
$wielkosc=$_POST['f_wielkosc'];
$cena=$_POST['f_cena'];
 
include 'dbconfig.php';

    $baza = mysqli_connect($server,$user,$pass,$base) or ('cos nie tak z połączeniem z BD');
    $zapytanie = "INSERT INTO `menu` (`id`, `nazwa`, `opis`, `wielkosc`, `cena`) VALUES (NULL, '$nazwaM', '$opis', '$wielkosc', '$cena');";
    $result = $baza->query($zapytanie) or die ('bledne zapytanie');
    $baza->close();
?>
