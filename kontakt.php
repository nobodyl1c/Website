<!DOCTYPE html>
<html lang = "sr">
    <head>

        <title>Kontakt</title>
        
        <meta name="Milan Nikolic">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="HandheldFriendly" content="true">
        

        <link rel="icon" href="img/logo-proba.jpg">
        
        <link rel = 'stylesheet' type="text/css" href = "css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/site.css">
        <script src="js/lightbox-plus-jquery.min.js"></script>    
        
    </head>
    
    
    <body>
       
        <!--HEADER-->
        <?php
            include("php_include/header_essential.php");
        ?>
        
    
        <!--MAIN-->
        <div class = "kontakt-container">
        <div class="leva-strana">
            <h3>Kontakt</h3>    
            
            <p id="kontakt-paragraf">Za sve deteljnije informacije u vezi sa <b>izradom i montažom nadgrobnih spomenika, izborom materijala i drugih proizvoda i usluga</b> koje Vam nudimo, budite slobodni da nas kontaktirate putem email forme ili putem dole navedenih brojeva telefona.</p>
            
            <div class = "kontakt-info">
                <img src="img/phone.jpg" id = "telefon-slika2">
                
                <p id ="kontakt2">Kontakt: <br>063/81-81-736 - Bojan Nikolić</p>
            </div>

            <div class = "kontakt-info">
                
                <img src="img/mail.jpg" id = "mail-slika2">

                <p id ="mail2"><a href = "mailto:granitnikolic@gmail.com">Email: <br>granitnikolic@gmail.com</a></p>
            </div>

            <div class = "kontakt-info">
                
                <img src = "img/location.jpg" id = "lokacija-slika2">

                <p id ="lokacija2">Lokacija: <br>Kolubarska 6, Ribare (35220)</p>
            </div>
        </div>    
        
        <hr>
        
        <div class = "desna-strana">
            <h3>Pošaljite nam mail</h3>
            
            <form name ="forma" action="./action/obrada_forma.php" method="post" enctype="multipart/form-data">
                <input type = "text" placeholder="Ime" name="ime" class="forma-polje">
                <input type="email" placeholder="E-mail" name = "email" class="forma-polje">
                <textarea placeholder="Unesite tekst" name = "tekst"rows="10" class="forma-polje"></textarea>
                
                <input type="submit" name = "submit" value = "Pošalji" id="kontakt-dugme">
            </form>
             
        </div>
        </div>
        

        
        <!--MAPA-->
        <!--
        <div id="map"></div>      
        <script>
            function initMap(){
                var location = {
                      lat: 44.003743,
                      lng: 21.277893   
                  };  

                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 13,
                    center: location

                });    

                var marker = new google.maps.Marker({
                    position: location,
                    map:map
                });

            }        
        </script>    
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOvfpInxuXxSMjuSqNlCTvNq0RiHUzuxc&callback=initMap"
        type="text/javascript"></script>
        -->
        
        <form method ="POST" action ="./action/obrada.php" enctype="multipart/form-data" class="upload">
            <input name="fajl" type="file"><br>
            <input name = "submit" type="submit" value="Upload">
        </form>
    
        
        
        
        <!--FOOTER-->
        <?php
            include("php_include/footer.php");
        ?>
        
        
        
  
  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src ="js/bootstrap.bundle.min.js"></script>
        <script src = 'js/script.js'></script>
    </body>
    
    
    
    
    
    
    
    
</html>