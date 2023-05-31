<?php
$login=$_POST['f_login'];
$haslo=SHA1($_POST['f_pass']);
 
include 'dbconfig.php';
$baza = mysqli_connect($server,$user,$pass,$base) or ('coś nie tak z połączniem z BD');
 
$zapytanie="SELECT * FROM `users` WHERE `login`='$login' LIMIT 1";
 
$result = $baza->query($zapytanie) or die ('bledne zapytanie');
while($wiersz = $result->fetch_assoc())
                {
            if($haslo==$wiersz['pass']){
                session_start();
                $_SESSION['user']=$wiersz['imie'];
            }
                };     

                };   
        $baza->close();


        if(!isset($_SESSION['user'])) {
            echo "Bledne logowanie";

            $komunikat = date('l jS \of F Y h:i:s A').";".$login."\n";

            $plik = fopen("login_error.txt", "a");
            fwrite($plik,$komunikat);
            fclose($plik);
            }                
?>
