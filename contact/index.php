<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Document</title>
</head>
<body>
    <?php
    
    ?>
    <div>
        <h1>Get in touch</h1>
        <p>Please fill in the fields</p>
    </div>
    <form action="contact.php" method="post">
        <input type="text" name = "name" placeholder = "Full Name" >
        <input type="text" name = "email" placeholder = "E-mail" >
        <input type="text" name = "subject" placeholder="Subject" >
        <textarea name="message" placeholder="Enter message">
        
        </textarea>
        <button type="submit">Send E-mail</button>
    </form>
</body>
</html>