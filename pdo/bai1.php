<?php
    // Kết nối 
    $conn = new PDO('mysql:host=localhost;dbname=test','root', '');

    // Tạo bảng
    $createTable = $conn -> prepare('CREATE TABLE dssinhvien(
        maSV varchar(10) NOT NULL PRIMARY KEY,
        hoTen text NOT NULL,
        diemTB float,
        lopHoc text NOT NULL,
        ngaySinh date
    )');
    $createTable -> execute();

    // Thêm mới
    $insert = $conn -> prepare('INSERT INTO dssinhvien values (?, ?, ?, ?, ?)');

    // Thêm 5 sinh viên mới vào bảng danh sách đã tạo ở câu 1.
    $data = array(
        "sv1" => array("SV001", "Huyen My 001", 10, "K56SD1", "2002-09-02"),
        "sv2" => array("SV002", "Huyen My 002", 9, "K56SD1", "2002-08-02"),
        "sv3" => array("SV003", "Huyen My 003", 8, "K56SD1", "2002-07-02"),
        "sv4" => array("SV004", "Huyen My 004", 7, "K56SD1", "2002-06-02"),
        "sv5" => array("SV005", "Huyen My 005", 6, "K56SD1", "2002-5-02"),
    );
    // Thực hiện
    foreach($data as $value)
        $insert -> execute($value);

    // Cập nhật điểm trung bình của sinh viên có mã "SV001" thành 8.5.
    $update = $conn -> prepare('UPDATE dssinhvien SET diemTB = 8.5 WHERE maSV = "SV001";');
    $update -> execute();


    // Xoá thông tin của sinh viên có mã "SV003" khỏi bảng danh sách.
    $delete = $conn -> prepare('DELETE FROM dssinhvien WHERE maSV = "SV003";');
    $delete -> execute();

    // Lấy dữ liệu
    $select = $conn -> prepare('SELECT * FROM dssinhvien');
    $select -> setFetchMode(PDO::FETCH_ASSOC);

    $select ->execute();

    // Hiển thị
    while($row = $select->fetch()) {
        echo 'Mã SV: ' . $row['maSV'] . '<br>';         
        echo 'Họ tên: ' . $row['hoTen'] . '<br>';        
        echo 'Điểm TB: ' . $row['diemTB'] . '<br>';         
        echo 'Lớp: ' . $row['lopHoc'] . '<br>';         
        echo 'DOB: ' . $row['ngaySinh'] . '<br><br>';     
    }
?>