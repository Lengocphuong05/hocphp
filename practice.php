<?php



  //Thêm 5 sinh viên mới vào bảng danh sách đã tạo ở câu 1.
  $username = 'root';
$password = 'Không';
$host = 'localhost';
$dbname = 'test';

  $dbh = mysqli_connect($host, $username, $password, $dbname); 
    // Kết nối với MySQL Server

    if (!$dbh)     
    die("Unable to connect to MySQL: " . mysqli_error()); 
    // Thông báo lỗi nếu kết nối thất bại 
    
    if (!mysqli_select_db($dbh, 'my_personal_contacts'))     
    die("Unable to select database: " . mysql_error()); 
    // Thông báo lỗi nếu chọn CSDL thất bại


?>