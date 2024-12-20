<?php include 'header.php'; ?>
<?php include 'product.php'; ?>

<main>
    <?php if (empty($products)): ?>
        <p>Không có sản phẩm nào.</p>
    <?php else: ?>
        <div>
            <button class="btn btn-success" data-bs-toggle="modal">
                <a href="add.php" style="color: black">Thêm mới</a>
            </button>
        </div>
        
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Sản phẩm</th>
                        <th>Giá thành</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody?>
                <?php foreach ($products as $index => $product): ?>
                    <tr>
                        <th><?php echo htmlspecialchars($product['name']); ?>:</th>
                        <td><?php echo htmlspecialchars($product['price']); ?> VND</td>
                        <td>
                            <a href="update.php?id=<?php echo $index; ?>">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                        </td>
                        <td>
                            <a href="">
                                <i class="bi bi-trash3"></i>
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
</main>

<?php include 'footer.php'; ?>