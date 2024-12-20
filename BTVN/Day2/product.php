<?php
session_start();

// Kiểm tra nếu mảng sản phẩm chưa tồn tại trong session
if (!isset($_SESSION['products'])) {
    $_SESSION['products'] = [
        ['name' => 'Sản phẩm 1', 'price' => '1000'],
        ['name' => 'Sản phẩm 2', 'price' => '2000'],
        ['name' => 'Sản phẩm 3', 'price' => '3000']
    ];
}

// Lấy mảng sản phẩm từ session
$products = $_SESSION['products'];
?>
