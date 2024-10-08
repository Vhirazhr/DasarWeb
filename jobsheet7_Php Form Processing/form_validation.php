<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $errors = array();


    if (empty($nama)) {
        $errors[] = "Nama harus diisi.";
    }

    if (empty($email)) {
        $errors[] = "Email harus diisi.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Format email tidak valid.";
    }

    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    } else {
        echo "Data berhasil dikirim:<br>";
        echo "Nama = $nama<br>";
        echo "Email = $email<br>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Input dengan Validasi</title>
</head>
<body>
    <h1>Form Input dengan Validasi</h1>
    <form method="post" action="">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <br><br> 

        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
        <br><br> 

        <input type="submit" value="Submit">
    </form>
</body>
</html>
