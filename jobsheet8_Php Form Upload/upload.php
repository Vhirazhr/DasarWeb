<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
if (isset($_POST["submit"])) {
    $targetdir = "upload/";
    $targetfile = $targetdir . basename($_FILES["myfile"]["name"]);
    $fileType = strtolower(pathinfo($targetfile, PATHINFO_EXTENSION));
    $allowedExtension = array("jpg", "jpeg", "png", "gif");
    $maxsize = 5 * 1024 * 1024; 

    if (in_array($fileType, $allowedExtension) && $_FILES["myfile"]["size"] <= $maxsize) {
        if (!is_dir($targetdir)) {
            echo "Folder 'upload/' tidak ditemukan!";
        } elseif (move_uploaded_file($_FILES["myfile"]["tmp_name"], $targetfile)) {
            echo "File uploaded successfully<br>";

            echo "<script>
                    var img = document.createElement('img');
                    img.src = '$targetfile';
                    img.style.width = '200px';  // Set lebar thumbnail
                    img.style.height = 'auto';  // Tinggi otomatis mengikuti proporsi gambar
                    document.body.appendChild(img);
                  </script>";
        } else {
            echo "Gagal meng-upload file. Pastikan permission folder benar.";
        }
    } else {
        echo "File tidak valid atau terlalu besar.";
    }
}
?>
