<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $expirationDate = time() + 86400 * 30;
    setcookie("Name","Eldin",$expirationDate);
    print_r($_COOKIE);
    $expirationDate = time() - 86400 * 30;
    echo $_COOKIE['name'];
    ?>
</body>
</html>