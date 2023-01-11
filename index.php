<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <?php
    $length = $_GET["length"];
    require_once __DIR__ . "/functions.php";
    ?>

</head>

<body>
    <form>
    </form>
    <form>
        <label for="lengPassword">Lunghezza password</label>
        <input type="number" name="length">
        <input type="submit" value="send">
    </form>

    <?php echo passwordGenerator($length) ?>
</body>

</html>