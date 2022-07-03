<?php
    if (isset($_POST['submit'])) {
        $name = trim($_POST['name']);
        $email = trim($_POST['e-mail']);
        $subject = trim($_POST['subject']);
        $message = trim($_POST['message']);
        
        $myMail = "eldinKecap@gmail.com";
        $header = "From: ".$email;
        $message2 = "You have recieved an email from ".$name.". \n\n".$message;
        echo "wtf";
    
        
        mail($myMail,$subject,$message2,$header);
        header("Location: index.php?mailsend");
    }
?>