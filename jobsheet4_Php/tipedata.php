<?php
$namaDepan = "ibnu";
$namaBelakang = "saipul";
$namaLengkap = "{$namaDepan}{$namaBelakang}";
$namaLengkap2 = $namaDepan .'' .$namaBelakang; 

echo "Nama Depan: {$namaDepan} <br>";
echo "Nama Belakang: {$namaBelakang} <br>";
echo $namaLengkap;
echo "<br>";

$a = 10;
$b = 5;
$c = $a + 5;
$d = $b + (10 * 5);
$e = $d - $c;

echo "Variable a: {$a} <br>";
echo "Variable b: {$b} <br>";
echo "Variable c: {$c} <br>";
echo "Variable d: {$d} <br>";
echo "Variable e: {$e} <br>";

$nilaiMatematika = 5.1;
$nilaiIPA = 6.7;
$nilaiBahasaIndonesia = 9.3;
$rataRata = ($nilaiMatematika + $nilaiIPA + $nilaiBahasaIndonesia) /3;
var_dump($rataRata);
echo "<br>"; 

echo "Matematika: {$nilaiMatematika} <br> ";
echo "IPA: {$nilaiIPA} <br> ";
echo "Bahasa Indonesia: {$nilaiBahasaIndonesia} <br> ";
echo "Matematika: {$rataRata} <br> ";

$apakahSiswaLulus = true;
$apakahSiswaUdahujian = false;
var_dump ($apakahSiswaLulus);
echo "<br>";
var_dump ($apakahSiswaUdahujian);
echo "<br>";

$listMahasiswa = ["Wahid Abdullah", "Elmo Bachtiar", "Lendis Fabri"];
echo $listMahasiswa[0];
?>