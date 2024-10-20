<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if (!isset($_POST["YEAR"])) { ?>
    <form action="ex1.php" method="post">
        <input type="text" name="YEAR">
        <button type="submit" >Envoyer</button>
    </form>
    <?php } else { 
        echo "Vous avez " . ( date("Y") - $_POST["YEAR"]);
    } ?>
    
</body>
</html>