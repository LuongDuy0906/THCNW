<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách điểm danh</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-icons.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Danh sách điểm danh</h2>
        <?php
        $servername = "localhost";
        $username = "root"; 
        $password = ""; 
        $dbname = "students"; 

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Kết nối thất bại: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM ktpm3_danh_sach_diem_danh";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            // Tạo bảng với Bootstrap
            echo "<table class='table table-striped table-bordered'>
                    <thead class='thead-dark'>
                        <tr>
                            <th>COL 1</th>
                            <th>COL 2</th>
                            <th>COL 3</th>
                            <th>COL 4</th>
                            <th>COL 5</th>
                            <th>COL 6</th>
                            <th>COL 7</th>
                        </tr>
                    </thead>
                    <tbody>";
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["COL 1"] . "</td>
                        <td>" . $row["COL 2"] . "</td>
                        <td>" . $row["COL 3"] . "</td>
                        <td>" . $row["COL 4"] . "</td>
                        <td>" . $row["COL 5"] . "</td>
                        <td>" . $row["COL 6"] . "</td>
                        <td>" . $row["COL 7"] . "</td>
                      </tr>";
            }
            echo "</tbody></table>";
        } else {
            echo "<div class='alert alert-warning' role='alert'>0 kết quả</div>";
        }

        // Bước 6: Đóng kết nối
        $conn->close();
        ?>
    </div>

    <!-- Thêm liên kết đến Bootstrap JS và jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>