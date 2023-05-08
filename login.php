<?php
    session_start();

   // if((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true)){
     //   header('Location: index.php');
      //  exit();
   // }

echo "<h2 class='center'>Zaloguj się</h2>";

echo "<form method='POST' action='zaloguj.php'>";
    echo "<table border='1' class='loguj'>";
        echo "<tr><td>Nazwa użytkownika<td></tr>";
        echo "<tr><td><input type='text' name='login'></td></tr>";
        echo "<tr><td>Hasło</td></tr>";
        echo "<tr><td><input type='password' name='haslo'></td></tr>";
        echo "<tr><td><input type='submit' value='Zaloguj'></td></tr>";
    echo "</table>";
echo "</form>";
?>