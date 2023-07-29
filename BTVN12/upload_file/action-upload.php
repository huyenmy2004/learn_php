<?php
require_once "upload.php";
$fileImg = new ImageUpload();
if(isset($_FILES['fileUpload'])){
    $fileImg->moveFile($_FILES['fileUpload']);
    echo "Đường dẫn:" . $fileImg->getName($_FILES['fileUpload']) . "<br>";
    echo "Type: " . $fileImg->getType($_FILES['fileUpload']) . "<br>";
}
else echo "Hãy tải ảnh lên";