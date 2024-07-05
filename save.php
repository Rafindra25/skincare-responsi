<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product = $_POST['product'];

    // Simpan produk ke file txt
    $file = 'orders.txt';
    file_put_contents($file, $product . PHP_EOL, FILE_APPEND);

    // Kembalikan pesan JSON
    echo json_encode(["message" => "Pesanan berhasil disimpan!"]);
    exit;
}
?>
