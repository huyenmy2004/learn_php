<?php
    $servername = "localhost";
    $database = "test";
    $username = "root";
    $password = "";

    $connection = mysqli_connect($servername, $username, $password, $database);

    if(!$connection)
        die("Kết nối thất bại" . mysqli_error($connection));
    
    $sql_create_table = "CREATE TABLE lichsugiaodich(
        maGD int(10) auto_increment PRIMARY KEY,
        ngayGD date NOT NULL,
        loaiGD varchar(50) NOT NULL,
        soTien decimal NOT NULL,
        moTa text
    );";

    $result = mysqli_query($connection, $sql_create_table);

    /* Thêm một giao dịch mới vào bảng lịch sử với thông tin: ngày giao dịch là 7/5/2023, 
    loại giao dịch là "rút tiền", số tiền là 500, mô tả là "rút tiền ATM". */
    $sql_insert = 'INSERT INTO lichsugiaodich VALUES
    ("","2023-07-05", "Rut tien", 500, "Rut tien ATM"),
    ("","2023-07-05", "Nap tien", 400, "Nap tien tu BIDV"),
    ("","2023-07-05", "Hoan tien", 300, "Thanh toán that bai");'; 

    $result = mysqli_query($connection, $sql_insert);
    // if (!$result)
    //     echo "<br>Thêm thất bại: "; 
    // else
    //     echo "<br>Thêm thành công";

    // Cập nhật số tiền của giao dịch có số thứ tự 3 trong bảng lịch sử thành 1000
    $sql_update = 'UPDATE lichsugiaodich SET soTien = 1000 WHERE maGD = 3;';
    $result = mysqli_query($connection,$sql_update);
    // if (!$result)
    //     echo "<br> Sửa thất bại: "; 
    // else
    //     echo "<br> Sửa thành công";

    // Xoá thông tin của giao dịch có số thứ tự 5 khỏi bảng lịch sử.
    $sql_dlt = 'DELETE FROM lichsugiaodich WHERE maGD = 5;'; 
    $result = mysqli_query($connection,$sql_dlt ); 
    // if (!$result)
    //     echo "Xoá thất bại: "; 
    // else
    //     echo "<br> Xoá thành công";

    // Hiển thị ra ngoài nè
    $sql_select = 'SELECT * FROM lichsugiaodich;';

    $result = mysqli_query($connection, $sql_select);

    $rows = mysqli_num_rows($result); 

    if ($rows) {
        while ($row = mysqli_fetch_array($result)) {         
            echo 'Mã GD: ' . $row['maGD'] . '<br>';         
            echo 'Ngày thực hiện GD: ' . $row['ngayGD'] . '<br>';        
            echo 'Loại GD: ' . $row['loaiGD'] . '<br>';         
            echo 'Số tiền: ' . $row['soTien'] . '<br>';         
            echo 'Mô tả: ' . $row['moTa'] . '<br><br>';             
        } 
    } 
    mysqli_close($connection);
?>