<?php
function perkenalan($nama, $salam){
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    echo "Senang berkenalan degan anda<br/>";
}

perkenalan("Hamdana", "Hallo");
echo "<hr>"; 

$saya = "Hira";
$ucapanSalam = "Selamat pagi";

perkenalan($saya, $ucapanSalam);

?>