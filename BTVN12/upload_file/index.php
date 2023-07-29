<?php require 'upload.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Upload File PHP</title>
</head>
<style>
    body{
        font-family: "Inter";
        display: flex;
        flex-direction: column;
        justify-content: center;
        margin: 10px;
        border: 1px solid #d8d8d8;
        border-radius: 10px;
        width: 500px;
        >form{
            display: flex;
            align-items: center;
            margin-bottom: 30px;
        }
    }
</style>
<body>
    <h2 style="margin: 20px; color: #006A4A">TẢI ẢNH LÊN</h2>
    <form action="action-upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="fileUpload" id="image" style="display: none;" #inputUpload onchange="getImageInfo()">
        <button type ="button" style="margin: 0 20px; border: 1px solid #D8D8D8; width: 350px; height: 40px; border-radius: 20px; display: flex; justify-content: space-between; align-items:center; padding: 0 15px" onclick="getImage()">
            <span id="imgName" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"></span>
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.88558 3.36262C11.8283 0.545795 16.5864 0.545795 19.5291 3.36262C22.4903 6.19714 22.4903 10.807 19.5291 13.6415L11.581 21.2495C9.49097 23.2502 6.11532 23.2502 4.02525 21.2495C1.91669 19.2312 1.91669 15.9446 4.02525 13.9263L11.859 6.42771C13.0964 5.24324 15.0896 5.24325 16.327 6.42771C17.5829 7.62989 17.5829 9.59316 16.327 10.7953L8.43612 18.3486C8.13689 18.635 7.66213 18.6247 7.37571 18.3254C7.08929 18.0262 7.09967 17.5515 7.39889 17.265L15.2898 9.71175C15.9286 9.10021 15.9286 8.12285 15.2898 7.5113C14.6324 6.88205 13.5536 6.88205 12.8962 7.5113L5.06248 15.0098C3.57095 16.4376 3.57095 18.7382 5.06248 20.1659C6.57251 21.6114 9.03377 21.6114 10.5438 20.1659L18.4919 12.5579C20.836 10.314 20.836 6.6901 18.4919 4.4462C16.1292 2.1846 12.2855 2.1846 9.9228 4.4462L3.51861 10.5764C3.21939 10.8628 2.74463 10.8524 2.45821 10.5532C2.17179 10.254 2.18216 9.77924 2.48139 9.49281L8.88558 3.36262Z" fill="#1C274C"/>
            </svg>
        </button>
        <input type="submit" name="submit" value="Tải lên" style="
                padding: 8px 10px;
                background-color: #B8D5CD;
                border-radius: 20px;
                border: 1px solid #006A4A;
                color: #006A4A;
                font-weight: 600">
    </form>
</body>
</html>
<script>
    var file = document.getElementById('image');
    function getImage(){
        file.click();
    }
    function getImageInfo(){
        document.getElementById('imgName').innerHTML = file.files[0].name;
    }
</script>