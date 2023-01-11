<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <?php

    $length = $_GET["length"] ?? 0;
    function passwordGenerator($length)
    {
        $chars = array_merge(range('A', 'Z'), range('a', 'z'), range('0', '9'), array('@', '£', '$', '%', '&', '@', '*'));
        $password = "";

        for ($i = 0; $i < $length; $i++) {
            $password .= $chars[array_rand($chars)];

        }

        return $password;
    }
    ?>

</head>

<body>
    <form action=""></form>
    <form>
        <label for="lengPassword">Lunghezza password</label>
        <input type="number" name="length">
        <input type="submit" value="send">
    </form>

    <?php echo passwordGenerator($length) ?>
</body>

</html>