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

        <h2 class="center">Zaloguj się</h2>

        <form method="POST" action="zaloguj1.php" id="zaloguj">
        <table border="1" class="loguj">
                <tr><td><input type="text" name="f_login" id="lLogin" placeholder="Nazwa użytkownika"></td></tr>
                <tr><td><input type="password" name="f_pass" placeholder="Hasło"></td></tr>
                <tr><td><input type="submit" value="Zaloguj" id="lHaslo"></td></tr>
                <tr><td><b id="register">Nie posiadasz konta? Zarejestruj się</b></td></tr>
            </table>
        </form>
    </div>
</main>
<script>
$(document).ready(function(){
    $('#zaloguj').submit(function(){       
        
        $.ajax({url: 'zaloguj1.php',
            type: 'POST',
            data: $("#zaloguj").serialize(),
            cache: false,
            success: function(response) {
                //alert(response);
                location.reload();
            }
        }); 
        return false;
    });
});

$("#register").click(function(){
        $("main").load("register.php");
    })

</script>
