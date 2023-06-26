<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serwis Samochodowy</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Exo:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <div id="logo">
        <img src="img/logo.png">
    </div>

    <div id="menu">
        <a href="index.html"><div class="nav">Aktualności</div></a>
        <a href="Umow_wizyte.html"><div class="nav">Umów wizytę</div></a>
        <a href="Galeria.html"><div class="nav">Galeria</div></a>
        <a href="Kontakt.html"><div class="nav">Kontakt</div></a>
        <a href="Onas.html"><div class="nav">O nas</div></a>
    </div>

    <div class="clear"></div>
    <div id="content">
        
        <h1>Dziękujemy za skorzystanie z naszych usług.<br>
            <br>W ramach potwierdzenia terminu skontaktujemy się poprzez podany nr. telefonu</h1>
        <a href="index.html"> <input type="button" value="Powrót do strony głównej"></a>
    </div>

    <div id="footer">
        <img src="img/orlen-logo.png">
        <img src="img/lotos-logo.png">
        <img src="img/total-logo.png">
        <img src="img/mobil-logo.png">
        <img src="img/castrol-logo.png">
    </div>

    <script src="jquery-3.6.4.min.js"></script>
        <script>
            $(document).ready(function() {
            var NavY = $('#menu').offset().top;
            
            var stickyNav = function(){
            var ScrollY = $(window).scrollTop();
                
            if (ScrollY > NavY) { 
                $('#menu').addClass('sticky');
            } else {
                $('#menu').removeClass('sticky'); 
            }
            };
            
            stickyNav();
            
            $(window).scroll(function() {
                stickyNav();
            });
            });
        </script>
</body>
</html>