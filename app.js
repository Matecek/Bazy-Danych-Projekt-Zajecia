/*document.getElementById("home").addEventListener("click", strona_home);

function strona_home(){
    document.getElementById("strona").innerHTML="<object type='text/html' data='home.html'></object>";
    alert("xyz");
}
*/
//___________jQuery______________ 

$(document).ready(function(){
    $("#home").click(function(){
        $("#strona").load("home.php");
    });

    $("#towary").click(function(){
        $("#strona").load("towary.php");
    });

    $("#klienci").click(function(){
        $("#strona").load("klienci.php");
    });

    $("#operacje").click(function(){
        $("#strona").load("operacje.php");
    }); 
});
