<?php
$login=$_POST['f_login'];
$haslo=SHA1($_POST['f_pass']);
$name=$_POST['f_name'];
 
include 'dbconfig.php';

    $baza = mysqli_connect($server,$user,$pass,$base) or ('cos nie tak z połączeniem z BD');
    $zapytanie = "INSERT INTO `users` (`id`, `login`, `pass`, `imie`) VALUES (NULL, '$login', '$haslo', '$name');";
    $result = $baza->query($zapytanie) or die ('bledne zapytanie');
    $baza->close();
?>