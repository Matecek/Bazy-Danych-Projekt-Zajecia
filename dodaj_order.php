<?php

$idKlient=$_POST['f_klient'];
$idMenu=$_POST['f_menu'];
$data=date("Y-m-d");


include 'dbconfig.php';

    $baza = mysqli_connect($server,$user,$pass,$base) or ('cos nie tak z połączeniem z BD');
    $zapytanie = "INSERT INTO `orders` (`id`, `idKlient`, `idMenu`, `data`) VALUES (NULL, '$idKlient', '$idMenu', '$data');";
    $result = $baza->query($zapytanie) or die ('bledne zapytanie');
    $baza->close();
?>