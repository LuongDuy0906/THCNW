<?php include 'header.php' ?>
<?php include 'DB.php' ?>
<?php 
    $sql = "select * from flower";
    $result = $conn->query($sql);
?>
<main>
    <div>
        <button class="btn btn-success" data-bs-toggle="modal">
                <a href="add.php" style="color: black; text-decoration: none">Thêm mới</a>
        </button>
    </div>

    <div class="card-body">
        <table class="table table-striped">
            <thead>
                    <tr>
                        <th>Sản phẩm</th>
                        <th>Giá thành</th>
                        <th>Ảnh</th>
                        <th></th>
                    </tr>
                </thead>
                <?php while($flowers = $result -> FETCH_ASSOC()){?>
                <tbody>
                    <tr>
                        <th><?php echo htmlspecialchars($flowers['Name']) ?></th>
                        <td style="width: 600px"><?php echo htmlspecialchars($flowers['Des']) ?></td>
                        <td>
                            <img src="<?php echo htmlspecialchars($flowers['Img']) ?>" alt="hoa" style="width: 200px; length: 200px">
                        </td>
                        <td>
                            <button class="btn btn-success" style="width: 100px">
                                <a href="edit.php?id=<?php echo $flowers['ID']; ?>" style="color: black; text-decoration: none">
                                    Sửa 
                                </a>
                            </button><br>
                            <button class="btn btn-danger" style="width: 100px">
                                <a href="delete.php?id=<?php echo $flowers['ID']; ?>" style="color: black; text-decoration: none">
                                    Xóa
                                </a>
                            </button>
                        </td>
                    </tr>
                </tbody>
                <?php } ?>
            </table>
        </div>
</main>
