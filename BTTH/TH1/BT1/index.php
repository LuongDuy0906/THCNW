<?php include 'header.php' ?>
<?php include 'DB.php' ?>
<?php 
    $sql = "select * from flower";
    $result = $conn->query($sql);
?>
<main>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                    <tr>
                        <th>Sản phẩm</th>
                        <th>Giá thành</th>
                        <th>Ảnh</th>
                    </tr>
                </thead>
                <?php while($flowers = $result -> FETCH_ASSOC()){?>
                <tbody>
                    <tr>
                        <th><?php echo htmlspecialchars($flowers['Name']) ?></th>
                        <td><?php echo htmlspecialchars($flowers['Des']) ?></td>
                        <td>
                            <img src="<?php echo htmlspecialchars($flowers['Img']) ?>" alt="hoa" style="width: 300px; length: 300px">
                        </td>
                    </tr>
                </tbody>
                <?php } ?>
            </table>
        </div>
</main>
