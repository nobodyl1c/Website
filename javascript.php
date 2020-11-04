<!DOCTYPE html>
<html lang="sr">
  <head>
   <meta charset="UTF-8">
   <title>Kursevi</title>
   
   <meta name="viewport" content="width=device-width, initial-scale=1">
   
   <meta name="author" content="Majstor Paja">
   <meta name="description" content="Kurs iz web programiranja.">
   <meta name="keywords" content="web,html,css,html5,development">
   
   <script
   sr=""
   integrity="sha256-hwg4gsxgFZOsEEamdOYGBf13FyQuiTlAQgxVSNgt4="
   crossorigin="anonymus"></script>
   <style>
     .collapse-box{
        display: none;
     }
    </style>
    </head>
    <body>
    <div class="collapse">
    <h2 class="collapse-control">Otvori box 1</h2>
    <div class="collapse-box">
     Box 1
     </div>
    </div>
    <div class="collapse">
    <h2 class="collapse-control">Otvori box 2</h2>
    <div class="collapse-box">
         Box 2
    </div>
</div>
<div class="collapse">
    <h2 class="collapse-control">Otvori box 3</h2>
    <div class="collapse-box">
         Box 3
      </div>
    </div>
    <script>
    $(document).ready( function(){
      $(".collapse-control").click( function() {
         $(".collapse-box").slideUp();
         $(this).closest(".collapse").find(".collapse-box").slideDown();
         });
    });
   </script>
 </body>
</html>