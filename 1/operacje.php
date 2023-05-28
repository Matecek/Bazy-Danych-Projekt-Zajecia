<h2 class="center">Operacje</h2> 
<div class="container">
<div id="operacje-left">
<form method="POST" action="dodaj_operacje.php" id="dodajOperacje">

    <section>
        <h2>Klient</h2>
        <select name="f_idk">
            
        <?php
            session_start();
            include 'dbconfig.php';
            $lp=1;
            $baza = mysqli_connect($server,$user,$pass,$base) or ('coś nie tak z połączniem z BD');
        
            $zapytanie="SELECT * FROM klienci ORDER BY nazwa ASC";
            $result = $baza->query($zapytanie) or die ('bledne zapytanie');
                while($wiersz = $result->fetch_assoc())
                    {
        
                    echo "<option value='".$wiersz['id']."'>".$lp.". ".$wiersz['nazwa']."</option>\n";
                    $lp=$lp+1;
                    
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

            $lp=1;
        
            $zapytanie="SELECT * FROM towary ORDER BY nazwa ASC";
            $result = $baza->query($zapytanie) or die ('bledne zapytanie');
                while($wiersz = $result->fetch_assoc())
                    {
        
                    echo "<option value='".$wiersz['id']."'>".$lp.".  ".$wiersz['nazwa']."</option>\n";
                    $lp=$lp+1;
                    
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
</div>
<div id="operacje-right">

<table border="1">
    <thead><td>Lp.</td><td>idKlient</td><td>idTowar</td><td>Data</td></thead>

<?php

    $baza = mysqli_connect($server,$user,$pass,$base) or ('cos nie tak z połączeniem z BD');

    $zapytanie="SELECT * FROM operacje ORDER BY data ASC";
    $result = $baza->query($zapytanie) or die ('bledne zapytanie');
    $n=0;
        while($wiersz = $result->fetch_assoc())
            {
            $n++;			
            echo "<tr>";
            echo "<td>".$n."</td>";
            echo "<td>".$wiersz['idKlient']."</td>";
            echo "<td>".$wiersz['idTowar']."</td>";
            echo "<td>". $wiersz['data']."</td>";
            echo "</tr>";
            }

    $baza->close();
?>
</table>
</div>
</div>
<script type="text/javascript">
//dodawanie operacji
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