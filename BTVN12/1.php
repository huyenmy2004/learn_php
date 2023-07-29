<?php
// Kiểm tra thư mục tồn tại chưa có thì tạo mới
$folder='c:\xampp\htdocs\learn_php';
$fileName = 'data.txt';
if (!file_exists($folder)) {
    mkdir($folder);
}
// Kiểm tra file có cho phép ghi không
if(is_writable($fileName))  echo ("$fileName is writable");
else    echo ("$fileName is not writable");

// Mở file để ghi
$file = @fopen($fileName, 'w');

// Ghi nội dung vào file
fwrite($file, 'xin chào');

// Đóng file sau khi ghi
fclose($file);

// Xoá file
if (file_exists($fileName)) {
    unlink($fileName);
    echo 'Đã xoá file thành công!';
} else {
    echo 'File không tồn tại!';
    }
?>
