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
            <p id="login">Logowanie</b>
        </div>
        <div id="menu"><b id="home">HOME</b> | <b id="towary">Towary</b> | <b id="klienci">Klienci</b> | <b id="operacje">Operacje</b></div>
        <div id="strona">
            <h2>Serwis sklepu internetowego "Od A do Z"</h2>
            <h2 class="center">Zaloguj się</h2>
            <form method="POST" action="zaloguj.php" id="zaloguj">
                <table border="1" class="loguj">
                    <tr><td>Nazwa użytkownika<td></tr>
                    <tr><td><input type="text" name="f_nazwa"></td></tr>
                    <tr><td>Hasło</td></tr>
                    <tr><td><input type="password" name="f_pass"></td></tr>
                </table>
            </form>
        </div>
    </div>

    <script type="text/javascript" src="app.js"></script>
</body>
</html>