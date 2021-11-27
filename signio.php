<?php 
session_save_path('D:/BáchKhoa/Web');
session_start();

	include("connection.php");
	include("functions.php");

    $error = null;
    $erroruser = 'Tài khoản hoặc mật khẩu không đúng';
    $requireinput = 'Hãy nhập tài khoản hoặc mật khẩu.';
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['username'];
		$password = $_POST['password'];
        
		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from user where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['User_ID'] = $user_data['User_ID'];
                        setcookie("username",$user_name);
                        setcookie("password",$password);
						header("Location: index.php?userLogin=true");
						die;
					}
          else{

          }
				}
                
			}
			$error = $erroruser;
		}else
		{
            $error = $requireinput;	
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
          <div class="fadeIn first">
            <img src="./images/profile.png" id="icon" alt="User Icon" />
          </div>
      
          <!-- Login Form -->
          <form method="POST">
            <input type="text" id="username" class="fadeIn second" name="username" placeholder="Tài khoản">
            <input type="password" id="password" class="fadeIn third" name="password" placeholder="Mật khẩu">
            <input type="submit" class="fadeIn fourth" value="Đăng nhập">
          </form>
          <?php if ($error == $erroruser){
                    echo "<p style='color:red;'>".$error."<p><br>";
                }else{
                    echo $error;
                }
                ?>
          <a href="signup.php">Đăng ký</a></button>
      
          <!-- Remind Passowrd -->
          <div id="formFooter">
            <a class="underlineHover" href="#">Forgot Password?</a>
          </div>
      
        </div>
      </div>
    

      <?php include('footer.php') ?>
    
    

    </div>
    <script> window.scrollTo(0,100); // values are x,y-offset </script>
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
