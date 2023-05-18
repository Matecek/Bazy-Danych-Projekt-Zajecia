<h2>Operacje</h2> 

<form method="POST" action="dodaj_operacje.php" id="dodajOperacje">

    <section>
        <h2>Klient</h2>
        <select name="f_idk">
            
        <?php
            session_start();
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
        <select name="f_idt">
            
        <?php
        
            $baza = mysqli_connect($server,$user,$pass,$base) or ('coś nie tak z połączniem z BD');
        
            $zapytanie="SELECT * FROM towary ORDER BY nazwa ASC";
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
    <?php
    //<input type="date">
    ?>
<br>
    <button type="submit">Dodaj Operacje</button>
</form>
<script>
$(document).ready(function(){
    $("#dodajOperacje").submit(function(){

        $.ajax({url: "dodaj_operacje.php", 
        type: "POST", 
        data: $("#dodajOperacje").serialize(), 
        cache: false, 
        success: function(response) {
            //$("#lista").append(response);
            $("#strona").load("operacje.php");
        }
        
        })  
       return false;
    })
});
</script>