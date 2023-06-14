<?php
    // Kết nối 
    $conn = new PDO('mysql:host=localhost;dbname=test','root', '');

    // Tạo bảng
    $createTable = $conn -> prepare('CREATE TABLE lichsugiaodich(
        maGD int(10) auto_increment PRIMARY KEY,
        ngayGD date NOT NULL,
        loaiGD varchar(50) NOT NULL,
        soTien decimal NOT NULL,
        moTa text
    );');
    $createTable -> execute();

    // Thêm mới
    $insert = $conn -> prepare('INSERT INTO lichsugiaodich values (?, ?, ?, ?, ?)');

    /* Thêm một giao dịch mới vào bảng lịch sử với thông tin: ngày giao dịch là 7/5/2023, 
    loại giao dịch là "rút tiền", số tiền là 500, mô tả là "rút tiền ATM". */
    $data = array(
        "gd1" => array("","2023-07-05", "Rut tien", 500, "Rut tien ATM"),
        "gd2" => array("","2023-07-05", "Nap tien", 400, "Nap tien tu BIDV"),
        "gd3" => array("","2023-07-05", "Hoan tien", 300, "Thanh toán that bai")
    );
    // Thực hiện
    foreach($data as $value)
        $insert -> execute($value);

    // Cập nhật số tiền của giao dịch có số thứ tự 3 trong bảng lịch sử thành 1000.
    $update = $conn -> prepare('UPDATE lichsugiaodich SET soTien = 1000 WHERE maGD = 3;');
    $update -> execute();


    // Xoá thông tin của giao dịch có số thứ tự 5 khỏi bảng lịch sử.
    $delete = $conn -> prepare('DELETE FROM lichsugiaodich WHERE maGD = 5;');
    $delete -> execute();

    // Lấy dữ liệu
    $select = $conn -> prepare('SELECT * FROM lichsugiaodich');
    $select -> setFetchMode(PDO::FETCH_ASSOC);
    $select ->execute();
    $arrs = $select->fetchAll(); // Hàm fetchAll(): Trả về một mảng chứa tất cả các hàng trong tập kết quả trả về 
    // Hiển thị
    foreach($arrs as $arr){
        echo 'Mã GD: ' . $arr['maGD'] . '<br>';         
        echo 'Ngày thực hiện GD: ' . $arr['ngayGD'] . '<br>';        
        echo 'Loại GD: ' . $arr['loaiGD'] . '<br>';         
        echo 'Số tiền: ' . $arr['soTien'] . '<br>';         
        echo 'Mô tả: ' . $arr['moTa'] . '<br><br>';         
    }
?>