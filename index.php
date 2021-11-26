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
  <title>CÔNG TY CPĐT & THIẾT KẾ NỘI THẤT DIAMOND</title>
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

      <?php 
        include('header.php');      
        
      ?>


    <div class="owl-carousel-wrapper">

      

      <div class="box-92819 shadow-lg">
        

          <div>
            <h1 class=" mb-3 text-black">Diamond</h1>
            <p>Cung cấp dịch vụ thiết kế kiến trúc và xây dựng nhà ở uy tín và chuyên nghiệp.</p>
            <p class="mb-0 mt-4"><a href="#" class="btn btn-primary">Kết nối</a></p>
          </div>

          

        
      </div>



      <div class="owl-carousel owl-1 ">
        <div class="ftco-cover-1" style="background-image: url('images/hero_1.jpg');"></div>
        <div class="ftco-cover-1" style="background-image: url('images/hero_2.jpg');"></div>
        <div class="ftco-cover-1" style="background-image: url('images/hero_3.jpg');"></div>
        
      </div>
    </div>  

    <div class="site-section">
      <div class="container">
        <div class="row mb-5 align-items-center">
          <div class="col-md-7">
            <h2 class="heading-39291 mb-0">Thiết Kế</h2>
          </div>
          <div class="col-md-5 text-right">
            <p class="mb-0"><a href="#" class="more-39291">Xem Tất Cả</a></p>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <div class="media-02819">
              <a href="#" class="img-link"><img src="images/img_1.jpg" alt="Image" class="img-fluid"></a>
              <h3><a href="#">Cổ Điển</a></h3>
              
            </div>
          </div>
          <div class="col-lg-6">
            <div class="media-02819">
              <a href="#" class="img-link"><img src="images/img_2.jpg" alt="Image" class="img-fluid"></a>
              <h3><a href="#">Hiện Đại</a></h3>
          
            </div>
          </div>

          <div class="col-lg-6">
            <div class="media-02819">
              <a href="#" class="img-link"><img src="images/img_3.jpg" alt="Image" class="img-fluid"></a>
              <h3><a href="#">Bắc Âu</a></h3>
         
            </div>
          </div>
          <div class="col-lg-6">
            <div class="media-02819">
              <a href="#" class="img-link"><img src="images/img_4.jpg" alt="Image" class="img-fluid"></a>
              <h3><a href="#">Bohemian</a></h3>
         
            </div>
          </div>

        </div>
      </div>
    </div>


    <div class="site-section bg-primary">
      <div class="container">
        <div class="row mb-5 align-items-center">
          <div class="col-md-7">
            <h2 class="heading-39291 text-white mb-3">Chúng Tôi Làm Gì</h2>
          </div>
        </div>
        <div class="row">
          
          <div class="col-md-6 mb-4 col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="service-29193 text-center">
              <span class="img-wrap mb-5">
                <img src="fonts/flaticon/svg/002-kitchen.svg" alt="Image" class="img-fluid">
              </span>
              <h3 class="mb-4"><a href="#">Quản Lý Xây Dựng</a></h3>
            
            </div>
          </div>
          <div class="col-md-6 mb-4 col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="service-29193 text-center">
              <span class="img-wrap mb-5">
                <img src="fonts/flaticon/svg/003-lamp.svg" alt="Image" class="img-fluid">
              </span>
              <h3 class="mb-4"><a href="#">Tư Vấn Thiết Kế </a></h3>
          
            </div>
          </div>

          <div class="col-md-6 mb-4 col-lg-4" data-aos="fade-up" data-aos-delay="">
            <div class="service-29193 text-center">
              <span class="img-wrap mb-5">
                <img src="fonts/flaticon/svg/001-stairs.svg" alt="Image" class="img-fluid">
              </span>
              <h3 class="mb-4"><a href="#">Thi Công Xây Dựng</a></h3>
 
            </div>
          </div>

          <div class="col-md-6 mb-4 col-lg-4" data-aos="fade-up" data-aos-delay="">
            <div class="service-29193 text-center">
              <span class="img-wrap mb-5">
                <img src="fonts/flaticon/svg/004-blueprint.svg" alt="Image" class="img-fluid">
              </span>
              <h3 class="mb-4"><a href="#">Đồ Nội Thất</a></h3>
        
            </div>
          </div>
          <div class="col-md-6 mb-4 col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="service-29193 text-center">
              <span class="img-wrap mb-5">
                <img src="fonts/flaticon/svg/006-pantone.svg" alt="Image" class="img-fluid">
              </span>
              <h3 class="mb-4"><a href="#">Trang Trí Nội Thâ</a></h3>
    
            </div>
          </div>
          <div class="col-md-6 mb-4 col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="service-29193 text-center">
              <span class="img-wrap mb-5">
                <img src="fonts/flaticon/svg/005-dinning-table.svg" alt="Image" class="img-fluid">
              </span>
              <h3 class="mb-4"><a href="#">Phong Thủy Nhà Ở</a></h3>
       
            </div>
          </div>
          
        </div>
      </div>
    </div>

    
    <div class="site-section section-4">
      <div class="container">

        <div class="row justify-content-center text-center">
          <div class="col-md-7">
            <div class="slide-one-item owl-carousel">
              <blockquote class="testimonial-1">
                <span class="quote quote-icon-wrap"><span class="icon-format_quote"></span></span>
                <p>Đội ngũ kỹ thuật, thiết kế và thi công của Diamond đã làm việc sát cánh với chúng tôi ngay từ thiết kế sơ phát, trong suốt quá trình thi công và thậm chí ngay sau khi bàn giao để vận hành.</p>
                <cite><span class="text-black">Ngô Phúc Thành</span> &mdash; <span class="text-muted">CEO and Co-Founder</span></cite>
              </blockquote>

              <blockquote class="testimonial-1">
                <span class="quote quote-icon-wrap"><span class="icon-format_quote"></span></span>
                <p>Có thể nói, Diamond sở hữu được mức độ hài lòng cao nhất đối với các dự án mà chúng tôi uỷ thác triển khai, xét về tiến độ lẫn chất lượng thi công.</p>
                <cite><span class="text-black">Đoàn Trần Cao Trí</span> &mdash; <span class="text-muted">CEO and Co-Founder</span></cite>
              </blockquote>

              <blockquote class="testimonial-1">
                <span class="quote quote-icon-wrap"><span class="icon-format_quote"></span></span>
                <p>“Tận tình” và “luôn nghĩ cho khách hàng” chính là hai điều đặc biệt nhất của Diamond</p>
                <cite><span class="text-black">Lê Nhựt Anh</span> &mdash; <span class="text-muted">CEO and Co-Founder</span></cite>
              </blockquote>
            </div>
          </div>
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
