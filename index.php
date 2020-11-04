<!DOCTYPE html>
<html lang = "sr">
    <head>

        <title>Granit Nikolic</title>
        
        <meta name="Milan Nikolic">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="HandheldFriendly" content="true">
        

        <link rel="icon" href="img/logo-proba.jpg">
        
        <link rel = 'stylesheet' type="text/css" href = "css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/site.css">

    </head>

    <body>
        <!--HEADER-->
        <?php
            include("php_include/header.php");
        ?>

        <!--MAIN-->
        <section class = "glavni-sadrzaj">
             
            <section class="glavni-sadrzaj-liste">
                    <dl id="lista-levo">
                        <img src="img/settings.png">
                        <dt><b>Kvalitet</b></dt>
                        <dd>Proizvodi iz našeg asortimana poseduju <b>visok kvalitet</b> i <b>tehničko-tehnološku komponentu</b> kao preduslov dugotrajnog i izdrživog proizvoda.</dd>
                    </dl>

                    <dl id="lista-sredina">
                        <img src="img/like.jpg">
                        <dt><b>Garancija</b></dt>
                        <dd>Svi proizvodi i usluge kamenorezačke radnje "<b>Granit Nikolić</b>" podležu dugogodišnjoj garanciji.</dd>
                    </dl>

                    <dl id="lista-desno">
                        <img src="img/person.png">
                        <dt><b>Tradicija i iskustvo</b></dt>
                        <dd>Kamenorezačka radnja "<b>Granit Nikolić</b>" je porodična firma sa <b>dugogodišnjom tradicijom</b>, gde se zanat godinama uspešno prenosio.</dd>
                    </dl>
            </section>
            
            <section class="o-nama" id="o-nama">
                <div class="o-nama-container">
                    <div class ="o-nama-slika">
                        <a href = "spomenici.html" id="o-nama-slika-desktop"><img src="img/logo-proba.jpg" width="450" height="350" id ="onama-slika"></a>
                        <a href = "spomenici.html" id="o-nama-slika-mobile"><img src="img/logo-proba2.jpg" width="450" height="350" id ="onama-slika"></a>
                    </div>
                    
                    <div class="o-nama-tekst">
                        <h3>O nama</h3>
                        
                        <p>Kamenorezačka radnja <b>"Granit Nikolić"</b> je porodična firma koja se ovim bavi dugim nizom godina. Radionica za izradu spomenika nalazi se u Ribaru, a područje rada je <b>cela opština Jagodina</b>.</p>

                        <p><b>Odličan kvalitet</b>, obavezno poštovanje dogovora i rokova, veliki izbor domaćih i uvoznih materijala - mermera i granita, <b>povoljne cene i garancija</b> - naše su glavne karakteristike zbog kojih smo najčešće preporučivana radionica.</p>

                        <p><b>Kontakt:<br> 063/81-81-736 - Bojan Nikolić</b></p>

                    </div>
                </div>
            </section>
            
            
            
            <div id="nase-prednosti-naslov">
                <h2>Naše prednosti</h2>
            </div>
            
            
            <div class="nase-prednosti-grid">
                <div class="nase-prednosti-grid-item">     
                    <a href = "materijali.html"><img src="img/materijali.jpg" class="nase-prednosti-slika" width="300px" height="300px"></a>
                        
                    <h3 class="nase-prednosti-podnaslov">Kvalitetni materijali</h3>
                    <p class="nase-prednosti-paragraf">Materijali od kojih izradjujemo spomenike su izuzetnog i proverenog kvaliteta. <b>Garantujemo dugovečnost i postojanost naših radova.</b></p>  
                    
                </div>
                
                <div class="nase-prednosti-grid-item">
                    <a href = "spomenici.html"><img src="img/cene.png" class="nase-prednosti-slika" width="300px" height="300px"></a>
                    
                    <h3 class="nase-prednosti-podnaslov">Povoljne cene spomenika</h3>
                    
                    <p class="nase-prednosti-paragraf">Cene spomenika su <b>jako povoljne</b> i najviše zavise od vrste i količine materijala koji je korišćen u izradi.</p>
                </div>
                
                <div class="nase-prednosti-grid-item">
                    <a href ="kontakt.html"><img src="img/dogovor.png" class="nase-prednosti-slika" width="300px" height="300px"></a>
                    
                    <h3 class="nase-prednosti-podnaslov">Poštovanje dogovorenih rokova</h3>
                    <p class="nase-prednosti-paragraf">Prilikom izrade i montaže spomenika, <b>uvek se trudimo da dogovorene radove završimo pre roka</b>. Time poštujemo Vaše vreme i dogovor.</p>
                    
                </div>
            </div>
            
            
        </section>       

       
        <!--FOOTER-->
        <?php
            include("php_include/footer.php");
        ?>
        
        
    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src = "js/bootstrap.bundle.min.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>