<!DOCTYPE html>
<html lang="en">
<body>
   
    <?php
        $mysql_server = "localhost";
        $mysql_user = "root";
        $mysql_password = "";
        $mysql_db = "granitnikolic";
        
        $mysqli = new mysqli($mysql_server,$mysql_user,$mysql_password,$mysql_db);
    
        if($mysqli->connect_errno){
            printf("Neuspesna konekcija: $mysqli->connect_error");
            exit();
        }
    
        $mysqli->set_charset("utf8");
    
    ?>
    
    
</body>
</html>