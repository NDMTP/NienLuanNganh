document.getElementById('chatbot').addEventListener('click', function() {
    var chatMessages = document.getElementById('chatMessages');
    var chatInput = document.getElementById('chatInput');
    var sendButton = document.querySelector('#chatbot button');

    if (chatMessages.style.display === 'none') {
        // Mở rộng chatbot
        this.style.width = '300px';
        this.style.height = 'auto';
        this.style.borderRadius = '10px';
        chatMessages.style.display = 'block';
        chatInput.style.display = 'block';
        sendButton.style.display = 'inline-block';
    } else {
        // Thu nhỏ chatbot
        this.style.width = '60px';
        this.style.height = '60px';
        this.style.borderRadius = '50%';
        chatMessages.style.display = 'none';
        chatInput.style.display = 'none';
        sendButton.style.display = 'none';
    }
});

function sendMessage() {
    var message = document.getElementById('chatInput').value;
    if (message) {
        // Hiển thị tin nhắn của người dùng và gửi đến chatbot.php
        // Code giống như đã hướng dẫn trước đây
        document.getElementById('chatInput').value = ''; // Xóa trường nhập sau khi gửi
    }
}