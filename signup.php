<?php 
session_save_path('D:/BáchKhoa/Web');
session_start();
include("connection.php");
include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['username'];
		$password = $_POST['password'];
    $passwordConfirm = $_POST['passwordConfirm'];
    if ($password != $passwordConfirm){
      echo "<script> alert('Mật khẩu xác nhận không khớp') </script>";
    }
    else{
      //echo "here";
      $con = mysqli_connect("localhost","root","","diamond");
      $sql = "SELECT * FROM `user` WHERE `user_name` LIKE '$user_name' ORDER BY `email` ASC";
      $query = mysqli_query($con,$sql);
      if (mysqli_num_rows($query) == 0){
        if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
        {
          $query = "insert into user (User_ID,user_name,password,email,date) values ('$user_id','$user_name','$password','$user_name',date)";
    
          mysqli_query($con, $query);
    
          header("Location: signio.php");
          die;
        }else
        {
          echo "Please enter some valid information!";
        }
      }
      else echo "<script> alert('User name already have') </script>";

    }
	}
  if (isset($_POST['remember'])){
    $cookie_username = $_POST['username'];
    $cookie_password = $_POST['password'];
    if ($cookie_name && $cookie_password){
        setcookie("username",$cookie_username);
        setcookie("password",$cookie_password);

    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <title>CÔNG TY CPĐT & THIẾT KẾ NỘI THẤT NADU</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700i,900|Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/register.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">
    <style>
        input[type = password]{
          background-color: #f6f6f6;
          border: none;
          color: #0d0d0d;
          padding: 15px 32px;
          text-align: left;
          text-decoration: none;
          display: inline-block;
          font-size: 16px;
          margin: 5px;
          width: 85%;
          border: 2px solid #f6f6f6;
          -webkit-transition: all 0.5s ease-in-out;
          -moz-transition: all 0.5s ease-in-out;
          -ms-transition: all 0.5s ease-in-out;
          -o-transition: all 0.5s ease-in-out;
          transition: all 0.5s ease-in-out;
          -webkit-border-radius: 5px 5px 5px 5px;
          border-radius: 5px 5px 5px 5px;
        }
    </style>
  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    
    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>

      <?php include('header.php') ?>

      <div class="wrapper fadeInDown">
        <div id="formContent">
          <!-- Tabs Titles -->
      
          <!-- Icon -->
          <h1>Thông tin đăng ký</h1>
      
          <!-- Login Form -->
          <form method="POST">
            <br>
            <label for="login" style="text-align: left;">Tên đăng nhập</label>
            <input type="text" id="username" class="fadeIn second" name="username" placeholder="username@gmail.com">
            <br>
            <label for="password">Mật khẩu</label>
            <br>
            <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
            <br>
            <label for="passwordConfirm">Nhập lại mật khẩu</label>
            <br>
            <input type="password" id="passwordConfirm" class="fadeIn third" name="passwordConfirm">
            <br>
            <label for="phone">Số điện thoại</label>
            <br>
            <input type="text" id="phone" class="fadeIn third" name="phone">
            <input type="submit" class="fadeIn fourth" value="Đăng ký">
          </form>




          <a href="./signio.html">Đăng Nhập</a>
          <!-- Remind Passowrd -->
          <div id="formFooter">
            <a class="underlineHover" href="#">Forgot Password?</a>
          </div>
      
        </div>
      </div>
    

      <?php include('footer.php') ?>
    
    

    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/main.js"></script>

     

  </body>

</html>
