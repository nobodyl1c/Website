<!DOCTYPE html>
<html lang="en">
<body>
    <?php
        $target = "upload/";
        $target = $target.basename($_FILES['fajl']['name']);
    
        move_uploaded_file($_FILES['fajl']['tmp_name'], $target);
        header("Location: kontakt.php?uploaded");
    ?>
    
</body>
</html>