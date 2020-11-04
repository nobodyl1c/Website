<!DOCTYPE html>
<html lang="en">
<body>
    <?php
        include ("konekcija.php");
        
        $ime = $_POST['ime'];
        $email = $_POST['email'];
        $tekst = $_POST['tekst'];

        $sql = "INSERT INTO kontakt(ime,email,tekst) VALUES('{$ime}','{$email}','{$tekst}')";

        if($mysqli->query($sql)){
        echo('Uspesno ste ubacili podatke');
        }else{
            echo("<p>Doslo je do greske prilikom unosa</p>");
        }

        $mysqli->close();
    ?>
    
</body>
</html>