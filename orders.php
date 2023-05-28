<div class="slider-box clearfix">
        <div class="slider-half-item">
          <article>
            Projekt pizzerii
          </article>
        </div>
        <div class="slider-half-item pizza-img">
          &nbsp;
        </div>
    </div>

    <div class="advantages-box clearfix">
    <h2>Zamówienia</h2> 
    <div class="orders-box">
        <form method="POST" action="dodaj_order.php" id="dodajOrder">

            <section>
                <h2>Klient</h2>
                <select name="f_klient">
                    
                <?php
                    session_start();
                    include 'dbconfig.php';
                    $lp=1;
                    $baza = mysqli_connect($server,$user,$pass,$base) or ('coś nie tak z połączniem z BD');
                
                    $zapytanie="SELECT * FROM klienci1 ORDER BY imie ASC";
                    $result = $baza->query($zapytanie) or die ('bledne zapytanie');
                        while($wiersz = $result->fetch_assoc())
                            {
                
                            echo "<option value='".$wiersz['id']."'>".$lp.". ".$wiersz['imie']."</option>\n";
                            $lp=$lp+1;
                            
                            if(isset($_SESSION['user'])){
                                
                                }
                            }
                
                    $baza->close();
                ?>        
                </select>
            </section>

            <section>
                <h2>Menu</h2>
                <select name="f_menu">
                    
                <?php
                
                    $baza = mysqli_connect($server,$user,$pass,$base) or ('coś nie tak z połączniem z BD');

                    $lp=1;
                
                    $zapytanie="SELECT * FROM menu ORDER BY cena ASC";
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
            <button type="submit">Dodaj Zamówienie</button>
        </form>
    </div>
    <div class="orders-box">

        <table border="1" class="order-table">
            <thead><td>Lp.</td><td>idMenu</td><td>idTowar</td><td>Data</td></thead>

        <?php

            $baza = mysqli_connect($server,$user,$pass,$base) or ('cos nie tak z połączeniem z BD');

            $zapytanie="SELECT * FROM orders ORDER BY data ASC";
            $result = $baza->query($zapytanie) or die ('bledne zapytanie');
            $n=0;
                while($wiersz = $result->fetch_assoc())
                    {
                    $n++;			
                    echo "<tr>";
                    echo "<td>".$n."</td>";
                    echo "<td>".$wiersz['idKlient']."</td>";
                    echo "<td>".$wiersz['idMenu']."</td>";
                    echo "<td>". $wiersz['data']."</td>";
                    echo "</tr>";
                    }

            $baza->close();
        ?>
        </table>
    </div>
    </div>
<script type="text/javascript">
//dodawanie zamowienia
$(document).ready(function(){
    $("#dodajOrder").submit(function(){

        $.ajax({url: "dodaj_order.php", 
        type: "POST", 
        data: $("#dodajOrder").serialize(), 
        cache: false, 
        success: function(response) {
            //$("#lista").append(response);
            $("main").load("orders.php");
        }
        
        })  
       return false;
    })
});

</script>