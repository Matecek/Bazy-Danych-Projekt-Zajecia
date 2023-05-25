<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pizzeria_styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
    <script type="text/javascript" src="jq.min.js"></script>
    <script>
      $(document).ready(function(){
         $('#logout').submit(function(){       
        
        $.ajax({url: 'logout1.php',
            type: 'POST',
            data: $("#logout").serialize(),
            cache: false,
            success: function(response) {
                //alert(response);
                $("main").load("home1.php");
                location.reload();
            }
        }); 
        return false;
    });
});
    </script>
    <title>Pizzeria</title>
</head>
<body>
    <header id="header" class="clearfix">
      <div id="logo">
        <img width="60" src="https://cdn.pixabay.com/photo/2012/04/01/16/51/pizza-23477_960_720.png" alt="">
      </div>
      <nav class="menu">
        <ul>
          <li><b id="home">Strona główna</b></li>
          <li><b id="menu-pizza">Menu</b></li>
          <li><b id="user">Klient</a></li>
          <li><b id="orders">Zamówienia</b></li>
        </ul>
      </nav>
      <div class="login-panel">
        <div class="login"><?php
            session_start();
            if(!isset($_SESSION['user'])){
                echo "<b id='login'>Login</p>";
            }else{
                echo "Witaj ".$_SESSION['user']." <form method='POST' action='logout1.php' id='logout'><input type='submit' value='Wyloguj'></form>";
                }
            ?></div>
      </div>
    </header>
    <main>
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
        <div class="advantages-one-third">
          <div class="column-advantage best-ingredients">
            Najlepsze <br>składniki
          </div>
        </div>
        <div class="advantages-one-third">
          <div class="column-advantage original-recipe">
            Oryginalna <br>receptura
          </div>
        </div>
        <div class="advantages-one-third">
          <div class="column-advantage fast-delivery">
            Szybka <br>dostawa
          </div>
        </div>
      </div>  
    </main>
    <footer class="page-footer menu">
      <ul>
        <li><a href="#">Regulamin</a></li>
        <li><a href="#">O nas</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">Kontakt</a></li>
      </ul>
    </footer>
        
<script type="text/javascript" src="app1.js">
</script>
</body>
</html>
