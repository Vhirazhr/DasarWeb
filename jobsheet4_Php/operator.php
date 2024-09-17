<?php
$a = 10;
$b = 5;


$a += $b;
$resultTambahCompound = $a; 
$a -= $b; 
$resultKurangCompound = $a; 
$a *= $b; 
$resultKaliCompound = $a; 
$a /= $b; 
$resultBagiCompound = $a; 
$a %= $b; 
$resultSisaBagiCompound = $a; 

$hasilTambah = $resultSisaBagiCompound + $b;
$hasilKurang = $resultSisaBagiCompound - $b;
$hasilKali = $resultSisaBagiCompound * $b;
$hasilBagi = $resultSisaBagiCompound / $b;
$sisaBagi = $resultSisaBagiCompound % $b;
$pangkat = $resultSisaBagiCompound ** $b;
$hasilSama = $resultSisaBagiCompound == $b ? 'True' : 'False';
$hasilTidakSama = $resultSisaBagiCompound != $b ? 'True' : 'False';
$hasilLebihKecil = $resultSisaBagiCompound < $b ? 'True' : 'False';
$hasilLebihBesar = $resultSisaBagiCompound > $b ? 'True' : 'False';
$hasilLebihKecilSama = $resultSisaBagiCompound <= $b ? 'True' : 'False';
$hasilLebihBesarSama = $resultSisaBagiCompound >= $b ? 'True' : 'False';
$hasilAnd = ($resultSisaBagiCompound && $b) ? 'True' : 'False';
$hasilOr = ($resultSisaBagiCompound || $b) ? 'True' : 'False';
$hasilNotA = !$resultSisaBagiCompound ? 'True' : 'False';
$hasilNotB = !$b ? 'True' : 'False';
$hasilIdentik = $a == $b;
$hasilIdentikTidak = $a != $b;

echo "<h1>Hasil Operasi</h1>";
echo "<p>Compound Assignment - Penjumlahan: \$a += \$b = $resultTambahCompound</p>";
echo "<p>Compound Assignment - Pengurangan: \$a -= \$b = $resultKurangCompound</p>";
echo "<p>Compound Assignment - Perkalian: \$a *= \$b = $resultKaliCompound</p>";
echo "<p>Compound Assignment - Pembagian: \$a /= \$b = $resultBagiCompound</p>";
echo "<p>Compound Assignment - Sisa Bagi: \$a %= \$b = $resultSisaBagiCompound</p>";

echo "<p>Penjumlahan: \$a + \$b = $hasilTambah</p>";
echo "<p>Pengurangan: \$a - \$b = $hasilKurang</p>";
echo "<p>Perkalian: \$a * \$b = $hasilKali</p>";
echo "<p>Pembagian: \$a / \$b = $hasilBagi</p>";
echo "<p>Sisa Bagi: \$a % \$b = $sisaBagi</p>";
echo "<p>Pangkat: \$a ** \$b = $pangkat</p>";
echo "<p>Perbandingan Sama: \$a == \$b = $hasilSama</p>";
echo "<p>Perbandingan Tidak Sama: \$a != \$b = $hasilTidakSama</p>";
echo "<p>Lebih Kecil: \$a < \$b = $hasilLebihKecil</p>";
echo "<p>Lebih Besar: \$a > \$b = $hasilLebihBesar</p>";
echo "<p>Lebih Kecil atau Sama: \$a <= \$b = $hasilLebihKecilSama</p>";
echo "<p>Lebih Besar atau Sama: \$a >= \$b = $hasilLebihBesarSama</p>";
echo "<p>Logika AND: \$a && \$b = $hasilAnd</p>";
echo "<p>Logika OR: \$a || \$b = $hasilOr</p>";
echo "<p>Logika NOT A: !\$a = $hasilNotA</p>";
echo "<p>Logika NOT B: !\$b = $hasilNotB</p>";
echo "<h1>Hasil Perbandingan</h1>";
echo "<p>Perbandingan Sama: \$a == \$b = $hasilIdentik</p>";
echo "<p>Perbandingan Tidak Sama: \$a != \$b = $hasilIdentikTidak</p>";
?>
