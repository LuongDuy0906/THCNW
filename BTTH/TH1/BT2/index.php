<?php
// Kết nối đến cơ sở dữ liệu
$servername = "localhost";
$username = "root";
$password = ""; // Thay đổi phù hợp với máy bạn
$dbname = "QUIZ";

$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Lấy danh sách câu hỏi từ cơ sở dữ liệu
$sql = "SELECT id, question, options FROM QUESTIONS";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $questions = $result->fetch_all(MYSQLI_ASSOC);
} else {
    echo "Không có câu hỏi nào trong cơ sở dữ liệu.";
    $questions = [];
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Trắc Nghiệm</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-icons.css">
</head>
<body>
    <div class="container my-5">
        <h1 class="text-center mb-4">Quiz Trắc Nghiệm</h1>
        <form method="POST" action="result.php">
            <?php foreach ($questions as $index => $question): ?>
                <div class="mb-4">
                    <h5 class="fw-bold">Câu <?php echo $index + 1; ?>: <?php echo htmlspecialchars($question['question']); ?></h5>
                    <div class="ms-3">
                        <?php
                        // Lấy danh sách các lựa chọn từ cột options
                        $options = explode('|', $question['options']);
                        foreach ($options as $option):
                        ?>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="answer_<?php echo $question['id']; ?>" value="<?php echo htmlspecialchars(trim($option)); ?>" id="q<?php echo $question['id'] . '_' . trim($option); ?>">
                                <label class="form-check-label" for="q<?php echo $question['id'] . '_' . trim($option); ?>">
                                    <?php echo htmlspecialchars(trim($option)); ?>
                                </label>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Nộp bài</button>
            </div>
        </form>
    </div>
</body>
</html>
