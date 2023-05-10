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
     
    <title>Projekt</title>  
</head>
<body>
     
    <div id="main">  
        
        <div id="logo">
            <h1>Oto projekt strony z baz danych</h1>
            <h3>MUP 2022/2023</h3>
            <div>
            <?php
            session_start();
            if(!isset($_SESSION['user'])){
                echo "<p id='login'>Logowanie</p>";
            }else{
                echo "<p id='logout'><a href='logout.php'>Wyloguj</a></p>";
                }
            ?>
            </div>
        </div>
        <div id="menu"><b id="home">HOME</b> | <b id="towary">Towary</b> | <b id="klienci">Klienci</b> | <b id="operacje">Operacje</b></div>
        <div id="strona">
            <?php echo "Witaj ".$_SESSION['user']." ";?>
            <h2>Serwis sklepu internetowego "Od A do Z"</h2>
        </div>
    </div>

    <script type="text/javascript" src="app.js"></script>
</body>
</html>