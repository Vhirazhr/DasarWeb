<?php
if (isset($_FILES['file'])) {
    $errors = array();
    $extensions = array("pdf", "doc", "docx", "txt", "jpg", "jpeg", "png", "gif");

    $file_name = $_FILES['file']['name'];
    $file_size = $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $file_parts = explode('.', $file_name);
    $file_ext = strtolower(end($file_parts));

    if (in_array($file_ext, $extensions) === false) {
        $errors[] = "File " . $file_name . " memiliki ekstensi yang tidak diizinkan.";
    }

    if ($file_size > 2097152) {
        $errors[] = "File " . $file_name . " terlalu besar (lebih dari 2 MB).";
    }

    if (empty($errors)) {
        $target_dir = "documents/";
        if (!is_dir($target_dir)) {
            mkdir($target_dir, 0777, true);  
        }

        move_uploaded_file($file_tmp, $target_dir . $file_name);

        echo "File berhasil diunggah.";
    } else {
        echo implode(" ", $errors);
    }
}
?>
