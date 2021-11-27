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
            <h1 class=" mb-3 text-black">Giới thiệu</h1>
            <p>Tìm hiểu những yếu tố tạo nên sự khác biệt của Diamond.            </p>
          </div>
        
      </div>

        <div class="ftco-cover-1" style="background-image: url('images/hero_1.jpg');"></div>
    </div>

    
    <div class="site-section">
      <div class="container">
        <div class="row align-items-stretch">
          <div class="col-lg-4">
            <div class="h-100 bg-white box-29291">
              <h2 class="heading-39291">Lịch sử công ty</h2>
<p>Tiền thân là một công ty thiết kế và thi công có bề dày hoạt động gần 15 năm, với đội ngũ gồm nhiều chuyên gia giàu kinh nghiệm trong lãnh vực kiến trúc, thiết kế và xây dựng, bên cạnh lực lượng công nhân kỹ thuật tận tuỵ, có tay nghề cao. Từ công trình văn phòng làm việc, cửa hàng kinh doanh, nhà hàng khách sạn, căn hộ cao cấp cho đến nhà ở tư nhân, Diamond cam kết hướng đến không gian sinh hoạt hiện đại, thân thiện, giản tiện, phù hợp với chức năng, chi phí và phong cách của từng đối tượng khách hàng.</p>

             
            </div>
          </div>
          <div class="col-lg-8">
            <div class="owl-carousel owl-3">
              <img src="images/about_1.jpg" alt="Image" class="img-fluid">
              <img src="images/about_2.jpg" alt="Image" class="img-fluid">
              <img src="images/about_3.jpg" alt="Image" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center text-center mb-5 section-2-title">
          <div class="col-md-6">
            <h2 class="heading-39291">Team của chúng tôi</h2>
                 </div>
        </div>
        <div class="row align-items-stretch">

          <div class="col-lg-4 col-md-6 mb-5">
            <div class="post-entry-1 h-100 bg-white text-center">
              <a href="#" class="d-inline-block">
                <img src="images/person_1.jpg" alt="Image"
                 class="img-fluid">
              </a>
              <div class="post-entry-1-contents">
                <span class="meta">Founder</span>
                <h2>Nguyễn Hoàng Anh</h2>
  
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-5">
            <div class="post-entry-1 h-100 bg-white text-center">
              <a href="#" class="d-inline-block">
                <img src="images/person_2.jpg" alt="Image"
                 class="img-fluid">
              </a>
              <div class="post-entry-1-contents">
                <span class="meta">Founder</span>
                <h2>Nguyễn Hoàng Anh</h2>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-5">
            <div class="post-entry-1 h-100 bg-white text-center">
              <a href="#" class="d-inline-block">
                <img src="images/person_3.jpg" alt="Image"
                 class="img-fluid">
              </a>
              <div class="post-entry-1-contents">
                <span class="meta">Giám Đốc Sự Kiện</span>
                <h2>Nguyễn Hoàng Anh</h2>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-5">
            <div class="post-entry-1 h-100 bg-white text-center">
              <a href="#" class="d-inline-block">
                <img src="images/person_4.jpg" alt="Image"
                 class="img-fluid">
              </a>
              <div class="post-entry-1-contents">
                <span class="meta">Giám Đốc Thi Công</span>
                <h2>Nguyễn Hoàng Anh</h2>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-5">
            <div class="post-entry-1 h-100 bg-white text-center">
              <a href="#" class="d-inline-block">
                <img src="images/person_5.jpg" alt="Image"
                 class="img-fluid">
              </a>
              <div class="post-entry-1-contents">
                <span class="meta">Giám Đốc Marketing</span>
                <h2>Nguyễn Hoàng Anh</h2>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-5">
            <div class="post-entry-1 h-100 bg-white text-center">
              <a href="#" class="d-inline-block">
                <img src="images/person_1.jpg" alt="Image"
                 class="img-fluid">
              </a>
              <div class="post-entry-1-contents">
                <span class="meta">Giám Đốc Sáng Tạo</span>
                <h2>Nguyễn Hoàng Anh</h2>
              </div>
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
