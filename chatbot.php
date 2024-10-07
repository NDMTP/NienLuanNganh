<?php
// Kết nối cơ sở dữ liệu
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qlsthi";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  
} 
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userMessage = $_POST['message'];

    // Tìm câu trả lời dựa trên câu hỏi
    $stmt = $conn->prepare("SELECT traloi FROM chatbot WHERE cauhoi LIKE ?");
    $search = "%$userMessage%";
    $stmt->bind_param("s", $search);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Nếu tìm thấy câu trả lời
        $row = $result->fetch_assoc();
        $response = $row['traloi'];
    } else {
        // Nếu không tìm thấy câu trả lời
        $response = "Xin lỗi, tôi không hiểu câu hỏi của bạn. Bạn có thể hỏi lại không?";
    }

    echo json_encode([
        'message' => $response
    ]);
}

$conn->close();
?>
