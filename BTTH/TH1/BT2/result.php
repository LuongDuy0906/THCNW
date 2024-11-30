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

// Lấy danh sách câu trả lời đúng từ cơ sở dữ liệu
$sql = "SELECT id, correct_answer FROM QUESTIONS";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $answers = $result->fetch_all(MYSQLI_ASSOC);
} else {
    echo "Không có câu hỏi nào trong cơ sở dữ liệu.";
    $answers = [];
}

$conn->close();

// Tính điểm
$score = 0;
$total = count($answers);

foreach ($answers as $answer) {
    $qid = $answer['id'];
    $correct = trim($answer['correct_answer']);
    $userAnswer = isset($_POST["answer_$qid"]) ? trim($_POST["answer_$qid"]) : '';

    if (strtolower($correct) === strtolower($userAnswer)) {
        $score++;
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết Quả Quiz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
        <h1 class="text-center mb-4">Kết Quả Quiz</h1>
        <div class="text-center">
            <p class="fs-4">Bạn đã trả lời đúng <strong><?php echo $score; ?></strong> trên tổng số <strong><?php echo $total; ?></strong> câu hỏi.</p>
            <a href="questions.php" class="btn btn-primary">Làm lại</a>
        </div>
    </div>
</body>
</html>
