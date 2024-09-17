<?php
$productPrice = 120000;
$discount = 0.20;
if ($productPrice > 100000) {
    $jumlahDiscount = $productPrice * $discount;
    $priceAfterDiscount = $productPrice - $jumlahDiscount;
    echo "Harga Setelah Discount adalah : Rp " . $priceAfterDiscount;

} else {
    echo "Harga yang harus di bayar adalah: Rp " . $productPrice;
}
?>