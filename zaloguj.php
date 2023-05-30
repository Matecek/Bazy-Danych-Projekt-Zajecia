<?php
session_start();  // rozpoczęcie sesji
 
include 'dbconfig.php';
$baza = @new mysqli($server,$user,$pass,$base); // połączenie z baza danych

if ($baza->connect_errno!=0){ 
    echo "Error: ".$baza->connect_errno;
}else{
    // wyciągniecie danych z forlumarza
    $login=$_POST['f_login'];
    $haslo=SHA1($_POST['f_pass']);
    
    $zapytanie="SELECT * FROM `users` WHERE `login`='$login' AND `pass`='$haslo'"; // wypisanie użytkownika z podanymi danymi
    
    if ($result = $baza->query($zapytanie)){
        $ile_users = $result->num_rows;  // sprawdzenie ile jest użytkowników o takich danych
        if($ile_users==1){  // sprawdzenie czy sa takie dane w bazie
            $wiersz = $result->fetch_assoc();
            $_SESSION['user'] = $wiersz['imie'];

            unset($_SESSION['error']);
            $result->free_result();
            header('Location: index.php');


            echo $imie;
        }else{  // wypisanie błędu o złych danych
            $_SESSION['error'] = "Nieprawidłowy login lub hasło!";
            header('Location: index.php');
        }
    
    }
}        
        $baza->close();
 
?>
