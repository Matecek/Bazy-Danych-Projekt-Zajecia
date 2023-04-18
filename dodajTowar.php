<?php

$nazwaT=$_POST['f_nazwaT'];
$opis=$_POST['f_opis'];
$ilosc=$_POST['f_ilosc'];
$cena=$_POST['f_cena'];
 
include 'dbconfig.php';

    $baza = mysqli_connect($server,$user,$pass,$base) or ('cos nie tak z połączeniem z BD');
    $zapytanie = "INSERT INTO `towary` (`id`, `nazwa`, `opis`, `ilosc`, `cena`) VALUES (NULL, '$nazwaT', '$opis', '$ilosc', '$cena');";
    $result = $baza->query($zapytanie) or die ('bledne zapytanie');
    $baza->close();

echo '<h1>Towar został dodany do bazy danych!</h1>';
?>

<button type="button"><a href="index.php">Wróć</a></button>