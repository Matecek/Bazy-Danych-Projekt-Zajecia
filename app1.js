/*document.getElementById("home").addEventListener("click", strona_home);

function strona_home(){
    document.getElementById("strona").innerHTML="<object type='text/html' data='home.html'></object>";
    alert("xyz");
}
*/
//___________jQuery______________ 

$(document).ready(function(){
    $("#home").click(function(){
        $("main").load("home1.php");
    });

    $("#menu-pizza").click(function(){
        $("main").load("menu.php");
    });

    $("#klienci").click(function(){
        $("#strona").load("klienci.php");
    });

    $("#operacje").click(function(){
        $("#strona").load("operacje.php");
    }); 

    $("#login").click(function(){
        $("main").load("login1.php");
    })

    $("#logout").click(function(){
        $("main").load("home1.php");
    })
});