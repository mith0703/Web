<?php 
session_save_path('D:/BáchKhoa/Web');
session_start();

	include("connection.php");
	include("functions.php");
 
  $user_data = false;
  if(isset($_GET['userLogin'])) $user_data = check_login($con);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>CÔNG TY CPĐT & THIẾT KẾ NỘI THẤT NADU</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700i,900|Roboto&display=swap" rel="stylesheet">

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
    <link rel="stylesheet" href="css/product.css">

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
      <div class="owl-carousel-wrapper">
        <div class="box-92819 shadow-lg">
            <div>
              <h1 class=" mb-3 text-black">Tin tức</h1>
              <p>Chia sẻ những bí quyết trang trí nội thất, sự kiện, thông tin và dự án từ Diamond</p>
            </div>
        </div>
        <div class="ftco-cover-1" style="background-image: url('images/hero_1.jpg');"></div>
      </div>
      <div class="site-section">
        <div class="container"> 
            <div class="d-flex flex-sm-row flex-column flex-wrap container-md">
              <div class="col-md-6 col-12">
                <div class="product">    
                  <img src="images/img_1.jpg" /> 
                  <div class="intro">
                    <p>
                      <a href="#">LÀM THẾ NÀO ĐỂ MỞ RỘNG KHÔNG GIAN BẰNG GIẢI PHÁP ÁNH SÁNG?</a>
                    </p>    
                  </div>
                </div> 
              </div>   
              <div class="col-md-6 col-12">
                <div class="product">                
                  <img src="images/img_2.jpg" />
                  <div class="intro">
                    <p>
                      <a href="#">TÌM HIỂU VỀ 7 KIỂU CẦU THANG PHỔ BIẾN NHẤT</a>
                    </p>    
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-12">
                <div class="product">    
                  <img src="images/img_3.jpg" />    
                    <div class="intro">
                      <p>
                        <a href="#">NGHỆ THUẬT ÁNH SÁNG TRONG KHÔNG GIAN TRƯNG BÀY</a>
                      </p>    
                    </div>
                </div>
              </div>
              <div class="col-md-6 col-12">
                <div class="product">
                  <img src="images/img_4.jpg" />
                  <div class="intro">
                    <p>
                      <a href="#">5 ĐIỀU BẠN CÓ THỂ LÀM ĐỂ CÓ THỂ NÂNG CẤP KHÔNG GIAN LÀM VIỆC TẠI NHÀ</a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
          <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1">Previous</a>
          </li>

          <li class="page-item active">
            <a class="page-link" href="#">1<span class="sr-only">(current)</span></a>
          </li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#">Next</a>
          </li>
        </ul>
      </nav>

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
