<?php  
	// Khởi tạo kết nối vào CSDL MySQL
	$conn = mysqli_connect('localhost', 'root', '', 'Mocodecor') or die("Can't connect database");

	if ($conn) {
		mysqli_set_charset($conn, 'utf8');
	}else{
		echo "Can't connect database";
		exit();
	}
?>