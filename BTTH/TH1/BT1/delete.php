<?php 
    include 'DB.php';

    $id = isset($_GET['id']) ? intval($_GET['id']) : null;
    if ($id === null) {
        echo "ID sản phẩm không hợp lệ!";
        exit;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Lấy dữ liệu từ form

        $sql = "DELETE FROM flower WHERE ID = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id); // 'ss' nghĩa là hai biến kiểu chuỗi
        $stmt->execute();

        header("location: admin.php");
        exit;
    };

    $sql = "SELECT * FROM flower WHERE ID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id); // 'ss' nghĩa là hai biến kiểu chuỗi
    $stmt->execute();
    $load = $stmt->get_result();
    $fl = $load->fetch_assoc();


?>
<main>
    <?php include 'header.php'; ?>
        <form action="" method="POST">
            <h1 style="text-align: center; font-size: 25px">Thêm sản phẩm</h1>
            <div class="mb-3">
                <label class="form-label" for="name">Tên loài hoa</label>
                <input tyle="text" class="form-control" id="name" name="name" value="<?php echo htmlspecialchars($fl['Name']); ?>">
            </div>
            <div class="mb-3">
                <label class="form-label" for="des">Mô tả về loài hoa</label>
                <input tyle="text" class="form-control" id="des" name="des" value="<?php echo htmlspecialchars($fl['Des']); ?>">
            </div>
            <div class="mb-3">
                <label class="form-label" for="img">Hình ảnh</label>
                <input tyle="text" class="form-control" id="img" name="img" value="<?php echo htmlspecialchars($fl['Img']); ?>">
            </div>
                <input type="submit" value="Cập nhật" class="btn btn-primary">
        </form>
</main>