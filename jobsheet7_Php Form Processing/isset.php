<?php
$data = array("nama" => "jane", "usia" => 25);
if (isset($data["nama"])) {
    echo "nama: " . $data["nama"] . "<br>"; 
} else {
    echo "Variable 'nama' Tidak ditemukan dalam array";
}

$umur;
if (isset($umur) && $umur >= 18) {
    echo "Anda sudah dewasa";
} else {
    echo "Anda belum Dewasa atau variable 'Umur' Tidak diTemukan";
}
?>
