<?php
    $id=$_POST['f_id'];

    include 'dbconfig.php';
    $baza = mysqli_connect($server,$user,$pass,$base) or ('coś nie tak z połączniem z BD');

    $zapytanie="SELECT * FROM klienci WHERE `id`=$id LIMIT 1";
    
    $result = $baza->query($zapytanie) or die ('bledne zapytanie');
        while($wiersz = $result->fetch_assoc())
            {
                echo "<h2>Edycja klienta</h2>";
                echo "<form method='POST' action='update_klient.php'>";
                    echo "<input type='text' name='f_id' value='".$wiersz['id']."' hidden>";
                    echo "<table border='1'>";
                    echo "<thead><td>Nazwa</td><td>Ulica</td><td>Numer</td><td>Kod Pocztowy</td><td>Miejscowość</td><td>Operacje</td></thead>";
                    echo "<tr><td><input type='text' name='f_nazwa' value='".$wiersz['nazwa']."'></td>";
                    echo "<td><input type='text' name='f_ulica' value='".$wiersz['ulica']."'></td>";
                    echo "<td><input type='text' name='f_numer' value='".$wiersz['numer']."'></td>";
                    echo "<td><input type='text' name='f_kod' value='".$wiersz['kod pocztowy']."'></td>";
                    echo "<td><input type='text' name='f_miejscowosc' value='".$wiersz['miejscowość']."'></td>";
                    echo "<td><input type='submit' value='Zapisz'></td></tr>";
                echo "</table>";
                echo "</form>"; 
            
            };

    $baza->close();
?>