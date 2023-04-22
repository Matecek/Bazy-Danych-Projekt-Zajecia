<h2>Towary</h2>
 
<table border="1">
    <thead><td>Lp.</td><td>Nazwa</td><td>Opis</td><td>Ilość</td><td>Cena</td><td>Operacje</td></thead>

    <?php

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
                echo "<td>"." E ";

                echo"<form method='POST' action='deltowar.php' id='form_del'>";
                echo "<input type='text' value='".$wiersz['id']."' name='f_id' hidden>";
                echo "<button type='submit'> X </button>";
                echo "</form>";

                echo "</td>";
                echo "</tr>";
            }

        $baza->close();
    ?>
</table>

<hr>
<h2>Dodaj towar</h2>
<form method="POST" action="dodajtowar.php" id="dodajTowar">
    Nazwa: <input type="text" name="f_nazwaT"><br>
    Opis: <input type="text" name="f_opis"><br>
    Ilość: <input type="text" name="f_ilosc"><br>
    Cena: <input type="text" name="f_cena"><br><br>
    <input type="submit" value="Dodaj Towar">
</form> 

<script type="text/javascript">
//Usuwanie klienta
$(document).ready(function(){
    $('#form_del').submit(function(){        
    $.ajax({url: 'deltowar.php',
            type: 'POST',
            data: $("#form_del").serialize(),
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

        $.ajax({url: "dodajtowar.php", 
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
