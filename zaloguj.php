<?php
session_start();
 
include 'dbconfig.php';
$baza = @new mysqli($server,$user,$pass,$base);

if ($baza->connect_errno!=0){
    echo "Error: ".$baza->connect_errno;
}else{
    $login=$_POST['f_login'];
    $haslo=SHA1($_POST['f_pass']);
    
    $zapytanie="SELECT * FROM `users` WHERE `login`='$login' AND `pass`='$haslo'";
    
    if ($result = $baza->query($zapytanie)){
        $ile_users = $result->num_rows;
        if($ile_users>0){
            $wiersz = $result->fetch_assoc();
            $_SESSION['user'] = $wiersz['imie'];

            unset($_SESSION['error']);
            $result->free_result();
            header('Location: index.php');


            echo $imie;
        }else{
            $_SESSION['error'] = "Nieprawidłowy login lub hasło!";
            header('Location: index.php');
        }
    
    }
}        
        $baza->close();
 
?>
