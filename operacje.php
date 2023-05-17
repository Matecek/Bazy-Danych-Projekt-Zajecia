<h2>Operacje</h2> 

<form method="POST" action="dodaj_operacje.php">

    <section>
        <h2>Klient</h2>
        <select name="f_idKlient">
            
        <?php
        
            include 'dbconfig.php';
            $baza = mysqli_connect($server,$user,$pass,$base) or ('coś nie tak z połączniem z BD');
        
            $zapytanie="SELECT * FROM klienci ORDER BY nazwa ASC";
            $result = $baza->query($zapytanie) or die ('bledne zapytanie');
                while($wiersz = $result->fetch_assoc())
                    {
        
                    echo "<option value='".$wiersz['id']."'>".$wiersz['nazwa']."</option>\n";
                    
                    if(isset($_SESSION['user'])){
                        
                        }
                    }
        
            $baza->close();
        ?>        
        </select>
    </section>

    <section>
        <h2>Towar</h2>
        <select name="f_idTowar">
            <option value="3">T1</option>
        </select>
    </section>
<br>
    <button type="submit">Dodaj Operacje</button>

</form>