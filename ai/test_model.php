<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload và Tìm Kiếm Hình Ảnh</title>
</head>
<body>
    <h1>Tải lên và Tìm Kiếm Hình Ảnh</h1>
    <form action="image-search.php" method="post" enctype="multipart/form-data" id="upload-form">
        <input type="file" id="img" name="img" accept="image/*" style="display: none;">
        <label for="img">
            <button type="button" class="btn-submit" onclick="chooseImage()">
                <i style="margin-right: 35px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="40" fill="currentColor" class="bi bi-camera" viewBox="0 0 15 35">
                        <path d="M15 12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h1.172a3 3 0 0 0 2.12-.879l.83-.828A1 1 0 0 1 6.827 3h2.344a1 1 0 0 1 .707.293l.828.828A3 3 0 0 0 12.828 5H14a1 1 0 0 1 1 1v6zM2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2z"/>
                        <path d="M8 11a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5zm0 1a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7zM3 6.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z" />
                    </svg>
                </i>
            </button>
        </label>
        <button type="button" id="process-button" onclick="uploadAndSearch()">Xử lý dữ liệu</button>
    </form>
    
    <script>
        function chooseImage() {
            var imageInput = document.getElementById('img');
            imageInput.click();
        }

        function uploadAndSearch() {
            var form = document.getElementById('upload-form');
            form.submit();
        }
    </script>
</body>
</html>
