<?php

$id=$_POST['f_id'];
$nazwa=$_POST['f_nazwaT'];
$opis=$_POST['f_opis'];
$ilosc=$_POST['f_ilosc'];
$cena=$_POST['f_cena'];
 
include 'dbconfig.php';

    $baza = mysqli_connect($server,$user,$pass,$base) or ('cos nie tak z połączeniem z BD');
    $zapytanie = "UPDATE `towary` SET `nazwa` = '$nazwa', `opis` = '$opis', `ilosc` = '$ilosc', `cena` = '$cena' WHERE `towary`.`id` = '$id';";
    $result = $baza->query($zapytanie) or die ('bledne zapytanie');
    $baza->close();
?>
