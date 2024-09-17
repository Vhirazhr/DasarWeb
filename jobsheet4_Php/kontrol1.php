<?php

$nilai = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
echo "Daftar nilai awal: ";
echo "<br>";
print_r($nilai);
echo "<br>";
sort($nilai);


echo "Daftar nilai setelah diurutkan: ";
echo "<br>";
print_r($nilai);
echo "<br>";
array_shift($nilai); 
array_shift($nilai); 

echo "Daftar nilai setelah menghapus dua nilai terendah: ";
echo "<br>";
print_r($nilai);
echo "<br>";


array_pop($nilai); 
array_pop($nilai);
echo "Daftar nilai setelah menghapus dua nilai tertinggi: ";
echo "<br>";
print_r($nilai);
echo "<br>";

$totalNilai = array_sum($nilai);
echo "Total nilai setelah mengabaikan dua nilai tertinggi dan dua nilai terendah adalah: " . $totalNilai;
?>
