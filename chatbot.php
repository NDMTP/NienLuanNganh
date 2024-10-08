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

    // Lấy tất cả các câu hỏi từ bảng chatbot
    $stmt = $conn->prepare("SELECT id, cauhoi, traloi FROM chatbot");
    $stmt->execute();
    $result = $stmt->get_result();

    $response = "Xin lỗi, tôi không hiểu câu hỏi của bạn. Bạn có thể hỏi lại không?";
    $suggestions = []; // Khởi tạo gợi ý trống
    $chatbot_id = null;

    // Duyệt qua từng câu hỏi trong cơ sở dữ liệu và kiểm tra xem chuỗi người dùng gõ có chứa từ khóa nào trong câu hỏi không
    while ($row = $result->fetch_assoc()) {
        $cauhoi = $row['cauhoi'];

        // Kiểm tra nếu chuỗi con (câu hỏi trong cơ sở dữ liệu) có trong tin nhắn của người dùng
        if (strpos(strtolower($userMessage), strtolower($cauhoi)) !== false) {
            $response = $row['traloi'];  // Lấy câu trả lời tương ứng
            $chatbot_id = $row['id'];    // Lưu lại ID chatbot để lấy gợi ý
            break; // Dừng sau khi tìm thấy câu hỏi phù hợp
        }
    }

    // Nếu tìm thấy ID chatbot, lấy gợi ý từ bảng chatbot_gopy
    if ($chatbot_id !== null) {
        $stmt_suggestion = $conn->prepare("SELECT gopy FROM chatbot_gopy WHERE chatbot_id = ?");
        $stmt_suggestion->bind_param("i", $chatbot_id);
        $stmt_suggestion->execute();
        $suggestion_result = $stmt_suggestion->get_result();
        
        while ($suggestion_row = $suggestion_result->fetch_assoc()) {
            $suggestions[] = $suggestion_row['gopy']; // Lưu các gợi ý
        }
    }

    // Trả về câu trả lời và gợi ý dưới dạng JSON
    echo json_encode([
        'message' => $response,
        'suggestions' => $suggestions
    ]);
}

$conn->close();
?>
