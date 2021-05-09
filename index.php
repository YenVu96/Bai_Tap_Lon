<?php
session_start();
ob_start();
include_once 'config/myConnect.php'
 ?>

<!DOCTYPE html>
<html>
<head>
    <?php include_once 'include/head.php';?>
</head>
<body>
	
	<div class="full">
		<div class="open">
			<div class="text">
				<marquee>MIỄN PHÍ GIAO HÀNG CHO HÓA ĐƠN TRÊN 500.000 VNĐ | HOTLINE: 099 999 234</marquee>
			</div>
		</div>
        <?php include_once 'include/header.php'; ?>
		<div class="container">
        <?php
                
                if (isset($_GET['page'])){
                    $page = $_GET['page'];
                }else {
                    $page = 'home';
                }
                if(file_exists('pages/'.$page.'.php'))
                    include_once 'pages/'.$page.'.php';
                // switch ($page) {
                //     case 'home':
                //         include_once 'pages/home.php';
                //         break;
                //     case 'introduce':
                //         include_once 'pages/introduce.php';
                //         break;
                //     case 'product':
                //         include_once 'pages/product.php';
                //         break;
                //     case 'contact':
                //         include_once 'pages/contact.php';
                //         break;
                //     default:
                //         echo "<h2 style='color: red;'>EROR 404, trang không tồn tại<h2><a href='index.php'>Quay lại</a>";
                //         break;
                // }
                
           ?>
			
	    </div>
	</div>
	<?php  include_once 'include/footer.php'; ?>
	</div>

</body>
</html>