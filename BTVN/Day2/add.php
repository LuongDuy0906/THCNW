<?php include 'product.php'; ?>

<?php

// Kiểm tra nếu form được gửi
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Lấy dữ liệu từ form
    $name = htmlspecialchars($_POST['name']);
    $price = htmlspecialchars($_POST['price']);

    // Tạo sản phẩm mới
    $newProduct = ['name' => $name, 'price' => $price];

    // Thêm sản phẩm vào mảng trong session
    $_SESSION['products'][] = $newProduct;

    // Quay lại trang chính
    header('Location: index.php');
    exit();
}
?>


<main>
    <?php include 'header.php'; ?>

    <div>
        <form method="POST">
            <h1 style="text-align: center; font-size: 25px">Thêm sản phẩm</h1>
            <label style="margin-left: 470px; font-size: 20px" for="name">Tên sản phẩm</label>
            <input tyle="text" id="name" name="name"><br>
            <label style="margin-left: 470px; margin-top: 10px; font-size: 20px" for="price">Giá sản phẩm</label>
            <input tyle="text" id="price" name="price"><br>
            <input type="submit" value="Thêm" style="font-size: 17px; margin-left: 595px; margin-top: 10px" >
        </form>
    </div>
</main>
<?php include 'footer.php'; ?>