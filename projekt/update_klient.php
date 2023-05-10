<?php

$id=$_POST['f_id'];
$nazwa=$_POST['f_nazwa'];
$ulica=$_POST['f_ulica'];
$numer=$_POST['f_numer'];
$kod=$_POST['f_kod'];
$miejscowojsc=$_POST['f_miejscowosc'];
 
include 'dbconfig.php';

    $baza = mysqli_connect($server,$user,$pass,$base) or ('cos nie tak z połączeniem z BD');
    $zapytanie = "UPDATE `klienci` SET `nazwa` = '$nazwa', `ulica` = '$ulica', `numer` = '$numer', `kod pocztowy` = '$kod', `miejscowość` = '$miejscowojsc' WHERE `klienci`.`id` = '$id'";
    $result = $baza->query($zapytanie) or die ('bledne zapytanie');
    $baza->close();
?>
