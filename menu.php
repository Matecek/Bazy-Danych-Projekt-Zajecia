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
        <h2>Menu</h2>

        <table border="1" class="baza">
            <thead><td>Lp.</td><td>Nazwa</td><td>Opis</td><td>Wielkośc</td><td>Cena</td><td>Operacje</td></thead>

        <?php

            session_start();
            include 'dbconfig.php';

            $baza = mysqli_connect($server,$user,$pass,$base) or ('cos nie tak z połączeniem z BD');

                $zapytanie = "SELECT * FROM menu ORDER BY cena ASC";
                $result = $baza->query($zapytanie) or die ('bledne zapytanie');
                $n=0;
                while($wiersz = $result->fetch_assoc()){
                    $n++;
                    echo "<tr>";
                    echo "<td>".$n."</td>";
                    echo "<td>".$wiersz['nazwa']."</td>";
                    echo "<td>".$wiersz['opis']."</td>";
                    echo "<td>".$wiersz['wielkosc']."</td>";
                    echo "<td>".$wiersz['cena']."</td>";
                    echo "<td>";
        //Edycja
                    if(isset($_SESSION['user'])){
                        echo "<form method='POST' action='edit_menu.php' id='editMenu'>";
                        echo "<input type='text' value='".$wiersz['id']."' name='f_id' hidden>";
                        echo "<button type='submit' id='edit'> E </button>";
                        echo "</form>";
        //Usuwanie
                        echo"<form method='POST' action='del_menu.php' id='delMenu'>";
                        echo "<input type='text' value='".$wiersz['id']."' name='f_id' hidden>";
                        echo "<button type='submit'> X </button>";
                        echo "</form>";

                        echo "</td>";
                        echo "</tr>";
                    }
                }

            $baza->close();
            ?>
        </table>

        <?php 
            if(isset($_SESSION['user'])){
            echo "<hr>";
            echo "<h2>Dodaj Danie</h2>";
            echo "<form method='POST' action='dodaj_menu.php' id='dodajMenu'>";
                echo "<table border='1' class='baza'>";
                echo "<thead><td>Nazwa</td><td>Opis</td><td>Wielkość</td><td>Cena</td><td>Operacja</td></thead>";
                echo "<tr><td><input type='text' name='f_nazwaM'></td>";
                echo "<td><input type='text' name='f_opis'></td>";
                echo "<td><input type='text' name='f_wielkosc'></td>";
                echo "<td><input type='text' name='f_cena'></td>";
                echo "<td><button type='submit'>Dodaj Danie</button></td></tr>";
            echo "</table>";
            echo "</form>";
            }
        ?>
    </div>
<script type="text/javascript">
//Usuwanie dania
$(document).ready(function(){
    $('#delMenu').submit(function(){        
    $.ajax({url: 'del_menu.php',
            type: 'POST',
            data: $("#delMenu").serialize(),
            cache: false,
            success: function(response) {
                //alert(response);
                $("main").load("menu.php");
                }
         }); 
        return false;
    });
});

//Dodawanie dania
$(document).ready(function(){
    $("#dodajMenu").submit(function(){

        $.ajax({url: "dodaj_menu.php", 
        type: "POST", 
        data: $("#dodajMenu").serialize(), 
        cache: false, 
        success: function(response) {
            //$("#lista").append(response);
            $("main").load("menu.php");
        }     
        })  
       return false;
    })
});

</script>
