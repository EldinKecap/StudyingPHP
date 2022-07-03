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
    echo $name = $_FILES['file']['name'];
    echo "<br>".$type = $_FILES['file']['type'];
    echo "<br>".$tmp_location = $_FILES['file']['tmp_name'];
    echo "<br>".$error = $_FILES['file']['error'];
    ?>

<form action="FILES.php" method = "post" enctype = "multipart/form-data" >
    <input type="file" name = "file">
    <button type="submit" >Submit</button>
</form>
</body>
</html>