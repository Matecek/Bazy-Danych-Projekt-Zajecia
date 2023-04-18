<h2>Klienci</h2>
 
<table border="1">
    <thead><td>Lp.</td><td>Nazwa</td><td>Ulica</td><td>Numer</td><td>Kod i Miasto</td><td>Operacje</td></thead>

    <?php

        include 'dbconfig.php';

        $baza = mysqli_connect($server,$user,$pass,$base) or ('cos nie tak z połączeniem z BD');

            $zapytanie = "SELECT * FROM klienci ORDER BY nazwa ASC";
            $result = $baza->query($zapytanie) or die ('bledne zapytanie');
            $n=0;
            while($wiersz = $result->fetch_assoc()){
                $n++;
                echo "<tr>";
                echo "<td>".$n."</td>";
                echo "<td>".$wiersz['nazwa']."</td>";
                echo "<td>".$wiersz['ulica']."</td>";
                echo "<td>".$wiersz['numer']."</td>";
                echo "<td>".$wiersz['kod pocztowy']." ".$wiersz['miejscowość']."</td>";
                echo "<td>";
                echo "<form method='POST' action=delkient.php>";
                echo "<input type='text' value='";
                echo $wiersz['id'];
                echo "'>";
                echo "<input type='submit' vlaue='X'></form>";
                echo "</td>";
                echo "</tr>";
            };

        $baza->close();
    ?>
</table>

<hr>
<h2>Dodaj klienta</h2>
<form method="POST" action="dodajKlienta.php">
    Nazwa: <input type="text" name="f_nazwa"><br>
    Ulica: <input type="text" name="f_ulica"><br>
    Numer: <input type="text" name="f_numer"><br>
    Kod Pocztowy: <input type="text" name="f_kod"><br>
    Miejścowość: <input type="text" name="f_miejscowosc"><br><br>
    <input type="submit" value="Dodaj Klienta">
</form>