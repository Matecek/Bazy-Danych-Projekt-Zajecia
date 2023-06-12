<h2 class="center">Zaloguj się</h2>

<form method="POST" action="zaloguj.php" id="zaloguj">
<table border="1" class="loguj">
        <tr><td>Nazwa użytkownika<td></tr>
        <tr><td><input type="text" name="f_login" id="lLogin"></td></tr>
        <tr><td>Hasło</td></tr>
        <tr><td><input type="password" name="f_pass"></td></tr>
        <tr><td><input type="submit" value="Zaloguj" id="lHaslo"></td></tr>
        <tr><td><b id="register">Nie posiadasz konta? Zarejestruj się</b></td></tr>
    </table>
</form>
<script>
$(document).ready(function(){
    $('#zaloguj').submit(function(){       
        
        $.ajax({url: 'zaloguj.php',
            type: 'POST',
            data: $("#zaloguj").serialize(),
            cache: false,
            success: function(response) {
                //alert(response);
                $("#strona").load("home.php");
                location.reload();
            }
        }); 
        return false;
    });
});

$("#register").click(function(){
        $("#strona").load("register.php");
    });

</script>
