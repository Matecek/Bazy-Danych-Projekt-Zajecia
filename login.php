<?php
    session_start();

    if((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true)){
        header('Location: index.php');
        exit();
    }
?>
<h2 class="center">Zaloguj się</h2>

<form method="POST" action="zaloguj.php">
    <table border="1" class="loguj">
        <tr><td>Nazwa użytkownika<td></tr>
        <tr><td><input type="text" name="login"></td></tr>
        <tr><td>Hasło</td></tr>
        <tr><td><input type="password" name="haslo"></td></tr>
        <tr><td><input type="submit" value="Zaloguj"></td></tr>
    </table>
</form>