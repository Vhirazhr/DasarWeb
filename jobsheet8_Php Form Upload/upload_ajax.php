<?php
if (isset($_FILES['file'])) {
    $errors = array();
    $extensions = array("pdf", "doc", "docx", "txt", "jpg", "jpeg", "png", "gif");
    foreach ($_FILES['file']['name'] as $key => $file_name) {
        $file_size = $_FILES['file']['size'][$key];
        $file_tmp = $_FILES['file']['tmp_name'][$key];
        $file_type = $_FILES['file']['type'][$key];
        $file_parts = explode('.', $file_name);
        $file_ext = strtolower(end($file_parts));
        if (in_array($file_ext, $extensions) === false) {
            $errors[] = "File " . $file_name . " memiliki ekstensi yang tidak diizinkan.";
        }
        if ($file_size > 2097152) {
            $errors[] = "File " . $file_name . " terlalu besar (lebih dari 2 MB).";
        }
        if (empty($errors) == true) {
            $target_dir = "documents/";
            if (!is_dir($target_dir)) {
                mkdir($target_dir, 0777, true);  
            }

            move_uploaded_file($file_tmp, $target_dir . $file_name);
        }
    }

    if (empty($errors)) {
        echo "Semua file berhasil diunggah.";
    } else {
        echo implode(" ", $errors);
    }
}
?>
