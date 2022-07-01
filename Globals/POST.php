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

    if (isset($_POST)) {
        echo $_POST['name']." your form is submitted<br>";
    }
    print_r($_POST);
    ?>
    <form action="POST.php" method = "post">
        <input type="text" name = "name">
        <input type="text" name = "age">
        <button type = "submit" >Submit</button>
    </form>
</body>
</html>