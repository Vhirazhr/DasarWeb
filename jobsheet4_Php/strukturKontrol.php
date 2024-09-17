<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai Huruf: A";
    } elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai Huruf: B";
    } elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai Huruf: C";
    } elseif ( $nilaiNumerik < 70) {
    echo "Nilai Huruf: C";
}
echo "<br>";
$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget ) {
    $jarakSaatIni += $jarakTarget;
    $hari++;
}
echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 Kilometer.";

echo "<br>";
$jumlahLahan = 10;
$tanamanPerlahan = 5;
$buahPertanaman = 10;
$jumlahBuah = 0;

for ($i=0; $i <= $jumlahLahan; $i++) { 
  $jumlahBuah += ($tanamanPerlahan * $buahPertanaman);
}

echo "Jumlah buah yang dipanen adalah: $jumlahBuah";
echo "<br>";

$skorUjian =[85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
    
}
echo "Total skor ujian adalah: $totalSkor";
echo "<br>";

$nilaimahasiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];
foreach ($nilaimahasiswa as $nilai) {
    if ($nilai >= 60) {
        echo "Nilai: $nilai (Tidak lulus) <br>";
        continue;
}
echo "Nilai: $nilai (Lulus) <br>";
}
?>