<?php  
session_start();
ob_start();
include_once "config/myConnect.php";

	if (isset($_POST['submit'])) {
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$password = mysqli_real_escape_string($conn, $_POST['password']);
		
		$sql = "SELECT *FROM users WHERE email = '$email' AND password = '$password'";
		$query = mysqli_query($conn, $sql);
		$nums = mysqli_num_rows($query);
		
		if ($nums == 1) {

			header('location: index.php');
		}else{
			$errors = 'Tải khoản hoặc mật khẩu không đúng!';
		}
	} 
?>
<!DOCTYPE html>

<html>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css"> 
  
  <!-- Style -->
  <link rel="stylesheet" href="css/style.css">

  <title>Đăng nhập</title>
</head>
<body>

<div class="d-md-flex half">
  <div class="bg" style="background-image: url('images/bg_1.jpg');"></div>
  <div class="contents">

    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-md-12">
          <div class="form-block mx-auto">
            <div class="text-center mb-5">
              <h3 class="text-uppercase"><strong>Đăng nhập</strong></h3>
            </div>
            <form action="" method="post">
              <div class="form-group first">
                <label for="email">Nhập tên đăng nhập</label>
                <input type="email" name="email" class="form-control" value="<?php if(isset($email)) { echo $email; } ?>" placeholder="Vui lòng nhập tên đăng nhập" id="email">
              </div>
              <div class="form-group last mb-3">
                <label for="password">Mật khẩu</label>
                <input type="password" name="password" class="form-control" placeholder="Vui lòng nhập mật khẩu" id="password">
              </div>
              
              <div class="d-sm-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-3 mb-sm-0"><span class="caption">Nhớ mật khẩu</span>
                  <input type="checkbox"/>
                  <div class="control__indicator"></div>
                </label>
                <span class="ml-auto"><a href="#" class="forgot-pass">Quên mật khẩu</a></span> 
              </div>

              <input type="submit" value="Đăng nhập" class="btn btn-block py-2 btn-primary" name="submit" >

              <span class="text-center my-3 d-block">hoặc</span>
              
              
              <div class="">
                <a href="#" class="btn btn-block py-2 btn-facebook">
                  <span class="icon-facebook mr-3"></span> Đăng nhập với facebook
                </a>
                <a href="#" class="btn btn-block py-2 btn-google"><span class="icon-google mr-3"></span> Đăng nhập với Google</a>
              </div>
              
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
            <?php  
              if (isset($errors)) {
            ?>
              <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong></strong> <?php echo $errors; ?>
              </div>
            <?php
              }
            ?>
 

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>