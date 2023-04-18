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
                echo "<tr><td>".$n."</td><td>"
                .$wiersz['nazwa']."</td><td>"
                .$wiersz['opis']."</td><td>"
                .$wiersz['ilosc']."</td><td>"
                .$wiersz['cena']."</td><td>"." E X "."</td></tr>";
                
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