<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pl-pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="jq.min.js"></script>
    <script>
        $(document).ready(function(){
         $('#logout').submit(function(){       
        
        $.ajax({url: 'logout.php',
            type: 'POST',
            data: $("#logout").serialize(),
            cache: false,
            success: function(response) {
                //alert(response);
                $("#strona").load("logout.php");
                location.reload();
            }
        }); 
        return false;
    });
});
    </script>
     
    <title>Projekt</title>  
</head>
<body>
     
    <div id="main">  
        
        <div id="logo">
            <div id="text-logo">
                <h1>Projekt strony z baz danych</h1>
                <h3>MUP 2022/2023</h3>
                <p>Mateusz Wojtas</p>
            </div>
        
            <?php
            session_start();
            if(!isset($_SESSION['user'])){
                echo "<p id='login'>Logowanie</p>";
            }else{
                echo "Witaj ".$_SESSION['user']." <form method='POST' action='logout.php' id='logout'><input type='submit' value='Wyloguj'></form>";
                }
            ?>
        </div>

        <div id="menu">
            <b id="home">HOME</b> | <b id="towary">Towary</b> | <b id="klienci">Klienci</b> | <b id="operacje">Operacje</b>
        </div>

        <div id="strona">
            <h2>Serwis sklepu internetowego "Od A do Z"</h2>
        </div>
    </div>

    <script type="text/javascript" src="app.js"></script>
</body>
</html>