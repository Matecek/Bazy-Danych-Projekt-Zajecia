<?php

$imie=$_POST['f_imie'];
$nazwisko=$_POST['f_nazwisko'];
$miejscowosc=$_POST['f_miejscowosc'];
$ulica=$_POST['f_ulica'];
$numer=$_POST['f_numer'];
 
include 'dbconfig.php';

    $baza = mysqli_connect($server,$user,$pass,$base) or ('cos nie tak z połączeniem z BD');
    $zapytanie = "INSERT INTO `klienci1` (`id`, `imie`, `nazwisko`, `miejscowosc`, `ulica`, `numer`) VALUES (NULL, '$imie', '$nazwisko', '$miejscowosc', '$ulica', '$numer');";
    $result = $baza->query($zapytanie) or die ('bledne zapytanie');
    $baza->close();
?>
