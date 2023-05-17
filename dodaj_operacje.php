<?php

$idk=$_POST['f_idk'];
$idt=$_POST['f_idt'];
$data=date("d-m-Y");

include 'dbconfig.php';

    $baza = mysqli_connect($server,$user,$pass,$base) or ('cos nie tak z połączeniem z BD');
    $zapytanie = "INSERT INTO `operacje` (`id`, `idKlient`, `idTowar`, `data`) VALUES (NULL, '$idk', '$idt', '$data');";
    $result = $baza->query($zapytanie) or die ('bledne zapytanie');
    $baza->close();
?>