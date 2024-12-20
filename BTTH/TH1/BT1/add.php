<?php 
    include 'DB.php';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Lấy dữ liệu từ form
        $name = $_POST['name'];
        $des = $_POST['des'];
        $img = $_POST['img'];

        $sql = "INSERT INTO flower (Name, Des, Img) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $name, $des, $img); // 'ss' nghĩa là hai biến kiểu chuỗi
        $stmt->execute();

        header("location: admin.php");
        exit;
    };



?>
<main>
    <?php include 'header.php'; ?>

    <div>
        <form action="" method="POST">
            <h1 style="text-align: center; font-size: 25px">Thêm sản phẩm</h1>
            <div class="mb-3">
                <label class="form-label" for="name">Tên loài hoa</label>
                <input tyle="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label class="form-label" for="des">Mô tả về loài hoa</label>
                <input tyle="text" class="form-control" id="des" name="des">
            </div>
            <div class="mb-3">
                <label class="form-label" for="img">Hình ảnh</label>
                <input tyle="text" class="form-control" id="img" name="img"><br>
            </div>
            <input type="submit" value="Thêm" class="btn btn-primary" >
        </form>
    </div>
</main>