<?php
    $servername = "localhost";
    $database = "test";
    $username = "root";
    $password = "";

    $connection = mysqli_connect($servername, $username, $password, $database);

    if(!$connection)
        die("Kết nối thất bại" . mysqli_error($connection));
    
    $sql_create_table = "CREATE TABLE dssinhvien(
        maSV varchar(10) NOT NULL PRIMARY KEY,
        hoTen text NOT NULL,
        diemTB float,
        lopHoc text NOT NULL,
        ngaySinh date
    );";

    $result = mysqli_query($connection, $sql_create_table);
    

    // Thêm 5 sinh viên mới vào bảng danh sách đã tạo ở câu 1.
    $sql_insert = 'INSERT INTO dssinhvien VALUES
    ("SV001", "Huyen My 1", 7, "K56SD1", "2002/08/27"),
    ("SV002", "Huyen My 2", 8, "K56SD1", "2002/08/25"),
    ("SV003", "Huyen My 3", 9.5, "K56SD1", "2002/03/27"),
    ("SV004", "Huyen My 4", 8.6, "K56SD1", "2002/08/04"),
    ("SV005", "Huyen My 5", 7.6, "K56SD1", "2002/11/22");'; 

    $result = mysqli_query($connection, $sql_insert);
    // if (!$result)
    //     echo "<br>Thêm thất bại: "; 
    // else
    //     echo "<br>Thêm thành công";

    // Cập nhật điểm trung bình của sinh viên có mã "SV001" thành 8.5.
    $sql_update = 'UPDATE dssinhvien SET diemTB = 8.5 WHERE maSV = "SV001";';
    $result = mysqli_query($connection,$sql_update);
    // if (!$result)
    //     echo "<br> Sửa thất bại: "; 
    // else
    //     echo "<br> Sửa thành công";

    // Xoá thông tin của sinh viên có mã "SV003" khỏi bảng danh sách.
    $sql_dlt = 'DELETE FROM dssinhvien WHERE maSV = "SV003";'; 
    $result = mysqli_query($connection,$sql_dlt ); 
    // if (!$result)
    //     echo "Xoá thất bại: "; 
    // else
    //     echo "<br> Xoá thành công";

    // Hiển thị ra ngoài nè
    $sql_select = 'SELECT * FROM dssinhvien;';

    $result = mysqli_query($connection, $sql_select);

    $rows = mysqli_num_rows($result); 

    if ($rows) {
        while ($row = mysqli_fetch_array($result)) {         
            echo 'Mã SV: ' . $row[0] . '<br>';         
            echo 'Họ tên: ' . $row[1] . '<br>';        
            echo 'Điểm TB: ' . $row[2] . '<br>';         
            echo 'Lớp: ' . $row[3] . '<br>';         
            echo 'DOB: ' . $row[4] . '<br><br>';             
        } 
    } 
    mysqli_close($connection);
?>