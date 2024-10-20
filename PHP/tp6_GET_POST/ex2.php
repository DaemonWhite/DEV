<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if (isset($_POST["number"])) {
        for ($i=0; $i < 11; $i++) { ?> 
            <span><?= $_POST["number"] ?> * </span>
            <span><?= $i ?> = <?php echo ($_POST["number"] * $i) ?></span>
            <br>
    <?php } ?>
    <?php } else { ?>
    <form action="ex2.php" method="post">
        <span>Donnez moi un nombre : </span>
        <input type="text" name="number">
        <button type="submit">Envoyer</button>
    </form>
    <?php } ?>
</body>
</html>