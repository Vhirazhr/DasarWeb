<?php
if (isset($_POST["submit"])) {
    $targetdir = "uploads/";
    $targetfile = $targetdir . basename($_FILES["myfile"]["tmp_name"]);

    if (move_uploaded_file($FILE["myfile"]["tmp_name"],$targetfile)) {
        echo "File uploaded successfully";
    } else {
        echo "Error uploading file";
    }
}