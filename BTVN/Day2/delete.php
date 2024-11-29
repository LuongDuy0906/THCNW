<?php
// Bao gồm các tệp cần thiết
include 'header.php';
include 'product.php';

// Lấy ID sản phẩm từ URL
$id = isset($_GET['id']) ? $_GET['id'] : null;

if ($id === null || !isset($products[$id])) {
    echo "Sản phẩm không tồn tại!";
    exit;
}

// Lấy thông tin sản phẩm
$product = $products[$id];

// Xử lý cập nhật khi người dùng gửi form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Cập nhật thông tin sản phẩm
    unset($_SESSION['products'][$id]);

    // Lưu lại (nếu cần thiết) và chuyển hướng
    header('Location: index.php');
    exit;
}
?>

<main>
    <form method="POST">
            <h1 style="text-align: center; font-size: 25px">Thêm sản phẩm</h1>
            <label style="margin-left: 470px; font-size: 20px" for="name">Tên sản phẩm</label>
            <input tyle="text" id="name" name="name" value="<?php echo htmlspecialchars($product['name']);?>"><br>
            <label style="margin-left: 470px; margin-top: 10px; font-size: 20px" for="price">Giá sản phẩm</label>
            <input tyle="text" id="price" name="price" value=<?php echo htmlspecialchars($product['price']);?>><br>
            <input type="submit" value="Xóa" style="font-size: 17px; margin-left: 595px; margin-top: 10px">
            <a href="index.php" style="font-size: 17px; margin-left: 595px; margin-top: 10px">Thoát</a>

        </form>
    </form>
</main>

<?php include 'footer.php'; ?>
