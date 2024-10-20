<?php
if (isset($_POST["submit"])) {
    $targetdir = "upload/";
    $targetfile = $targetdir . basename($_FILES["myfile"]["name"]);
    $fileType = strtolower(pathinfo($targetfile, PATHINFO_EXTENSION));
    $allowedExtension = array("jpg", "jpeg", "png", "gif");
    $maxsize = 5 * 1024 * 1024; 

    if (in_array($fileType, $allowedExtension) && $_FILES["myfile"]["size"] <= $maxsize) {
        if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $targetfile)) {
            echo "File uploaded successfully";
        } else {
            echo "Error uploading file";
        }
    } else {
        echo "The file is invalid or exceeds the maximum size.";
    }
}
?>
