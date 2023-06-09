<?php

$idKlient=$_POST['f_idk'];
$idTowar=$_POST['f_idt'];
$data=date("Y-m-d");


include 'dbconfig.php';

    $baza = mysqli_connect($server,$user,$pass,$base) or ('cos nie tak z połączeniem z BD');
    $zapytanie = "INSERT INTO `operacje` (`id`, `idKlient`, `idTowar`, `data`) VALUES (NULL, '$idKlient', '$idTowar', '$data');";
    $result = $baza->query($zapytanie) or die ('bledne zapytanie');
    $baza->close();
?>