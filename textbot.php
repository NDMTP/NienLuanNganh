<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatbot</title>
    <style>
        /* Styles for chat bubble */
        #chat-bubble {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #4CAF50;
            color: white;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            text-align: center;
            line-height: 50px;
            cursor: pointer;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.3);
        }

        /* Styles for chat box */
        #chat-box {
            display: none;
            position: fixed;
            bottom: 80px;
            right: 20px;
            width: 300px;
            max-height: 400px;
            border: 1px solid #ddd;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            background-color: white;
            border-radius: 10px;
        }

        #chat-box header {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border-radius: 10px 10px 0 0;
            text-align: center;
        }

        #chat-box .messages {
            padding: 10px;
            overflow-y: auto;
            height: 300px;
            border-bottom: 1px solid #ddd;
        }

        #chat-box footer {
            padding: 10px;
            display: flex;
            align-items: center; /* Center align items vertically */
        }

        #chat-box input {
            flex: 1; /* Allow the input to grow and take available space */
            padding: 5px;
            border-radius: 5px;
            border: 1px solid #ddd;
            margin-right: 5px; /* Space between input and button */
        }

        #chat-box button {
            padding: 5px 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <div id="chat-bubble">Chat</div>

    <div id="chat-box">
        <header>Chatbot Support</header>
        <div class="messages">
            <!-- Messages will appear here -->
        </div>
        <footer>
            <input type="text" id="message" placeholder="Nhập tin nhắn...">
            <button onclick="sendMessage()">Gửi</button>
        </footer>
    </div>

    <script>
        // Toggle chat box visibility
        document.getElementById('chat-bubble').addEventListener('click', function() {
            var chatBox = document.getElementById('chat-box');
            if (chatBox.style.display === 'none') {
                chatBox.style.display = 'block';
            } else {
                chatBox.style.display = 'none';
            }
        });

        // Function to send a message
        function sendMessage() {
            var message = document.getElementById('message').value;
            if (message.trim() !== "") {
                var xhr = new XMLHttpRequest();
                xhr.open('POST', 'chatbot.php', true);
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

                xhr.onreadystatechange = function() {
                    if (xhr.readyState == 4 && xhr.status == 200) {
                        var response = JSON.parse(xhr.responseText);
                        var messagesDiv = document.querySelector('.messages');

                        // Add user message
                        var userMessage = document.createElement('div');
                        userMessage.textContent = "Bạn: " + message;
                        messagesDiv.appendChild(userMessage);

                        // Add bot response
                        var botMessage = document.createElement('div');
                        botMessage.textContent = "Bot: " + response.message;
                        messagesDiv.appendChild(botMessage);

                        document.getElementById('message').value = "";  // Clear input after sending
                    }
                };

                xhr.send('message=' + encodeURIComponent(message));
            }
        }

    </script>

</body>
</html>
