<?php
    session_start();

    require_once "dbconfig.php";

    $polaczenie = @new mysqli($server, $user, $pass, $base);

    if ($polaczenie->connect_errno!=0){
        echo "Error: ".$polaczenie->connect_errno;
    }else{
        $login=$_POST['login'];
        $haslo=$_POST['haslo'];
        
        $sql = "SELECT * FROM uzytkownicy WHERE user='$login' AND pass='$haslo'";

        if ($result = @$polaczenie->query($sql)){
            $ilu_userow = $result->num_rows;
            if($ilu_userow>0){
                $_SESSION['zalogowany'] = true;
                $wiersz = $result->fetch_assoc();
                $_SESSION['id'] = $wiersz['id'];
                $_SESSION['user'] = $wiersz['user'];

                unset($_SESSION['blad']);
                $result->close();
                header('Location: index.php');

            }else{
                echo "Nieprawidłowy login lub hasło";
            }
            
        }
        
        $polaczenie->close();
    }

    //echo $login."<br/>";
    //echo $haslo;
    
?>