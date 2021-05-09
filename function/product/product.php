<?php
	//Lấy nhiều bản ghi: lấy nhiều sp đang có
    function getProduct(){
        global $conn;
        $result = array (); 
		// + Lấy dạng mảng từ đối tượng trung gian
        $sql = "SELECT *FROM product";
        $query = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($query)) {
			$result[] = $row;
		}
		return $result;
    }
    // Lấy thông tin sản phẩm khách hàng muốn mua
	function getProductID($id){
		global $conn;
		$result = array(); // output
		// Viết truy vấn
		$sql = "SELECT *FROM product WHERE id = $id";
		//Thực thi truy vấn
		$query = mysqli_query($conn, $sql);
		while ($row = mysqli_fetch_assoc($query)) {
			$result = $row;
		}
		return $result;
	}



?>
