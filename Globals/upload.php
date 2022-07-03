<?php
if (isset($_POST['submit'])) {
    $file = $_FILES['file'];
    $name = $_FILES['file']['name'];
    $tmp_name = $_FILES['file']['tmp_name'];
    $size = $_FILES['file']['size'];
    $error = $_FILES['file']['error'];
    //SPLIT so we can identify the file type
    $tempExtension = explode('.',$name);
    $fileExtension = strtolower(end($tempExtension));
    $isAllowed = array('jpg','jpeg','png','pdf');

    //0 is no err 1 is err
    if(in_array($fileExtension,$isAllowed)){
        if ( $error === 0 ) {
           if ($size < 300000) {
           $newFileName = uniqid('',true).".".$fileExtension; 
           $fileDestination = "uploads/" . $newFileName;
           move_uploaded_file($tmp_name,$fileDestination);
           header("Location: files.php?uploadedsuccess");
           }else{
            echo "Sorry your file size is too big";
           }
        }else{
            echo "Sorry, your file is not accepted there was an error";
        }
    }else{
        echo "Sorry your file was not accepted";
    }
}
?>