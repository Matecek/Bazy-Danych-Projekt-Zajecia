<!-- górny div -->
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
 
<!-- główny div -->
    <div class="advantages-box clearfix">
        
    <h2 class="center">Zarejestruj się</h2>
    
<!-- formularz rejestracji -->
    <form method="POST" action="add_user.php" id="addUser">
    <table border="1" class="loguj">
            <tr><td>Nazwa użytkownika<td></tr>
            <tr><td><input type="text" name="f_login"></td></tr>
            <tr><td>Hasło</td></tr>
            <tr><td><input type="password" name="f_pass"></td></tr>
            <tr><td>Imie</td></tr>
            <tr><td><input type="text" name="f_name"></td></tr>
            <tr><td><input type="submit" value="Utwórz konto"></td></tr>
            
        </table>
    </form>
</div>
<script>
// dodawanie nowego użytkownika
$(document).ready(function(){
    $('#addUser').submit(function(){       
        
        $.ajax({url: 'add_user.php',
            type: 'POST',
            data: $("#addUser").serialize(),
            cache: false,
            success: function(response) {
                //alert(response);
                $("main").load("home.php");
                location.reload();
            }
        }); 
        return false;
    });
});
</script>
