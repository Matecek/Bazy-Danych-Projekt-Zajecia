
<h2 class="center">Klienci</h2>

<table border="1" class="baza">
    <thead><td>Lp.</td><td>Nazwa</td><td>Ulica</td><td>Numer</td><td>Kod i Miasto</td><td>Operacje</td></thead>

<?php

    session_start();
    include 'dbconfig.php';

    $baza = mysqli_connect($server,$user,$pass,$base) or ('cos nie tak z połączeniem z BD');

    $zapytanie="SELECT * FROM klienci ORDER BY nazwa ASC";
    $result = $baza->query($zapytanie) or die ('bledne zapytanie');
    $n=0;
        while($wiersz = $result->fetch_assoc())
            {
            $n++;			
            echo "<tr>";
            echo "<td>".$n."</td>";
            echo "<td>".$wiersz['nazwa']."</td>";
            echo "<td>".$wiersz['ulica']."</td>";
            echo "<td>". $wiersz['numer']."</td>";
            echo "<td>".$wiersz['kod pocztowy']." ".$wiersz['miejscowość']."</td>";
            echo "<td>"; 
//edycja
            if(isset($_SESSION['user'])){    
                echo "<form method='POST' action='edit_klient.php' id='editKlient'>";
                echo "<input type='text' value='".$wiersz['id']."' name='f_id' hidden>";
                echo "<button type='submit'> E </button>";
                echo "</form>";
//usuwanie               
                echo"<form method='POST' action='del_klient.php' id='delKlient'>";
                echo "<input type='text' value='".$wiersz['id']."' name='f_id' hidden>";
                echo "<button type='submit'> X </button>";
                echo "</form>";
                    
                echo "</td>";
                echo "</tr>";
                }
            }

    $baza->close();
?>
</table>

<?php
if(isset($_SESSION['user'])){
echo "<hr>";
echo "<h2 class='center'>Dodaj klienta</h2>";
echo "<form method='POST' action='dodaj_klienta.php' id='dodajKlienta'>";
    echo "<table border='1' class='baza'>";
    echo "<thead><td>Nazwa</td><td>Ulica</td><td>Numer</td><td>Kod Pocztowy</td><td>Miejscowość</td><td>Operacja</td></thead>";
    echo "<tr><td><input type='text' name='f_nazwa'></td>";
    echo "<td><input type='text' name='f_ulica'></td>";
    echo "<td><input type='text' name='f_numer'></td>";
    echo "<td><input type='text' name='f_kod'></td>";
    echo "<td><input type='text' name='f_miejscowosc'></td>";
    echo "<td><button type='submit'>Dodaj Klienta</button></td></tr>";
echo "</table>";
echo "</form>";
}
?>

<script type="text/javascript">
//Usuwanie klienta
$(document).ready(function(){
    $('#delKlient').submit(function(){       
        
        $.ajax({url: 'del_klient.php',
            type: 'POST',
            data: $("#delKlient").serialize(),
            cache: false,
            success: function(response) {
                //alert(response);
                $("#strona").load("klienci.php");
            }
        }); 
        return false;
    });
});

//Dodawanie klienta
$(document).ready(function(){
    $("#dodajKlienta").submit(function(){

        $.ajax({url: "dodaj_klienta.php", 
        type: "POST", 
        data: $("#dodajKlienta").serialize(), 
        cache: false, 
        success: function(response) {
            //$("#lista").append(response);
            $("#strona").load("klienci.php");
        }
        
        })  
       return false;
    })
});
</script>