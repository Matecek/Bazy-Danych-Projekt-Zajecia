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
                echo "<td>";
                echo "<form method='POST' action=deltowar.php>";
                echo "<input type='text' style='margin-right:40px; width:25px;' value='";
                echo $wiersz['id'];
                echo "'>";
                echo "<input type='submit' value='X'></form>";
                echo "</td>";
                echo "</tr>";
            }

        $baza->close();
    ?>
</table>

<hr>
<h2>Dodaj towar</h2>
<form method="POST" action="dodajTowar.php">
    Nazwa: <input type="text" name="f_nazwaT"><br>
    Opis: <input type="text" name="f_opis"><br>
    Ilość: <input type="text" name="f_ilosc"><br>
    Cena: <input type="text" name="f_cena"><br><br>
    <input type="submit" value="Dodaj Towar">
</form>