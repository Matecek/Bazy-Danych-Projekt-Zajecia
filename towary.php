<h2 class="center">Towary</h2>
 
<table border="1" class="baza">
    <thead><td>Lp.</td><td>Nazwa</td><td>Opis</td><td>Ilość</td><td>Cena</td><td>Operacje</td></thead>

<?php

    session_start();
    include 'dbconfig.php';

    $baza = mysqli_connect($server,$user,$pass,$base) or ('cos nie tak z połączeniem z BD');

        $zapytanie = "SELECT * FROM towary ORDER BY nazwa ASC";
        $result = $baza->query($zapytanie) or die ('bledne zapytanie');
        $n=0;
        while($wiersz = $result->fetch_assoc()){
            $n++;
            echo "<tr>";
            echo "<td>".$n."</td>";
            echo "<td>".$wiersz['nazwa']."</td>";
            echo "<td>".$wiersz['opis']."</td>";
            echo "<td>".$wiersz['ilosc']."</td>";
            echo "<td>".$wiersz['cena']."</td>";
            echo "<td>";
//Edycja
            if(isset($_SESSION['user'])){
                echo "<form method='POST' action='edit_towar.php' id='editTowar'>";
                echo "<input type='text' value='".$wiersz['id']."' name='f_id' hidden>";
                echo "<button type='submit'> E </button>";
                echo "</form>";
//Usuwanie
                echo"<form method='POST' action='del_towar.php' id='delTowar'>";
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
echo "<h2 class='center'>Dodaj towar</h2>";
echo "<form method='POST' action='dodaj_towar.php' id='dodajTowar'>";
    echo "<table border='1' class='baza'>";
    echo "<thead><td>Nazwa</td><td>Opis</td><td>Ilość</td><td>Cena</td><td>Operacja</td></thead>";
    echo "<tr><td><input type='text' name='f_nazwaT'></td>";
    echo "<td><input type='text' name='f_opis'></td>";
    echo "<td><input type='text' name='f_ilosc'></td>";
    echo "<td><input type='text' name='f_cena'></td>";
    echo "<td><button type='submit'>Dodaj Towar</button></td></tr>";
echo "</table>";
echo "</form>";
}
?>
<script type="text/javascript">
//Usuwanie klienta
$(document).ready(function(){
    $('#delTowar').submit(function(){        
    $.ajax({url: 'del_towar.php',
            type: 'POST',
            data: $("#delTowar").serialize(),
            cache: false,
            success: function(response) {
                //alert(response);
                $("#strona").load("towary.php");
                }
         }); 
        return false;
    });
});

//Dodawanie klienta
$(document).ready(function(){
    $("#dodajTowar").submit(function(){

        $.ajax({url: "dodaj_towar.php", 
        type: "POST", 
        data: $("#dodajTowar").serialize(), 
        cache: false, 
        success: function(response) {
            //$("#lista").append(response);
            $("#strona").load("towary.php");
        }
        
        })  
       return false;
    })
});
</script>
