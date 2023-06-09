<?php

$nazwa=$_POST['f_nazwa'];
$ulica=$_POST['f_ulica'];
$numer=$_POST['f_numer'];
$kod=$_POST['f_kod'];
$miejscowojsc=$_POST['f_miejscowosc'];

include 'dbconfig.php';

    $baza = mysqli_connect($server,$user,$pass,$base) or ('cos nie tak z połączeniem z BD');
    $zapytanie = "INSERT INTO `klienci` (`id`, `nazwa`, `ulica`, `numer`, `kod pocztowy`, `miejscowość`) VALUES (NULL, '$nazwa', '$ulica', '$numer', '$kod', '$miejscowojsc');";
    $result = $baza->query($zapytanie) or die ('bledne zapytanie');
    $baza->close();
?>