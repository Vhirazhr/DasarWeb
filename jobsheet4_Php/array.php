<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 55, 88, 79, 96];
$nilaiLulus = [];

foreach ($nilaiSiswa as $nilai) {
if ($nilai >= 70) {
    $nilaiLulus[] = $nilai;
}
};
echo " Daftar nilai siswa yang lulus: ".implode(',', $nilaiLulus)

?>