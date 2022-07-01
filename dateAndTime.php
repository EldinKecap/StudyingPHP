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
    echo date('D/M/Y');
    date_default_timezone_set("Australia/Sydney");
    echo "<br>".date("h:i:s a");
    $time = strtotime("4:00pm December 03 2019");
    echo "<br>".$time;
    echo "<br>".date("m/d/y H:i a",$time)
    ?>
</body>
</html>