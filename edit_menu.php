<?php
    $id=$_POST['f_id'];

    include 'dbconfig.php';
    $baza = mysqli_connect($server,$user,$pass,$base) or ('coś nie tak z połączniem z BD');

    $zapytanie="SELECT * FROM menu WHERE `id`=$id LIMIT 1";
    
    $result = $baza->query($zapytanie) or die ('bledne zapytanie');
        while($wiersz = $result->fetch_assoc())
            {
                echo "<h2>Edycja menu</h2>";
                echo "<form method='POST' action='update_towar.php'>";
                    echo "<input type='text' name='f_id' value='".$wiersz['id']."' hidden>";
                    echo "<table border='1' class='baza'>";
                    echo "<thead><td>Nazwa</td><td>Opis</td><td>Ilość</td><td>Cena</td><td>Operacje</td></thead>";
                    echo "<tr><td><input type='text' name='f_nazwaT' value='".$wiersz['nazwa']."'></td>";
                    echo "<td><input type='text' name='f_opis' value='".$wiersz['opis']."'></td>";
                    echo "<td><input type='text' name='f_ilosc' value='".$wiersz['ilosc']."'></td>";
                    echo "<td><input type='text' name='f_cena' value='".$wiersz['cena']."'></td>";
                    echo "<td><input type='submit' value='Zapisz'></td></tr>";
                echo "</table>";
                echo "</form>"; 
            
            }
        
    $baza->close();
?>