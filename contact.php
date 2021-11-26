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
            <h1 class=" mb-3 text-black">Liên hệ</h1>
            <p>Liên hệ ngay để cùng Diamond thiết kế giải pháp cho không gian của bạn</p>
          </div>
        
      </div>

        <div class="ftco-cover-1" style="background-image: url('images/hero_1.jpg');"></div>
    </div>

    
    <div class="site-section">
      <div class="container">
        
        <div class="row">
          <div class="col-lg-6 mb-5" >
            <form action="#" method="post">
              <div class="form-group row">
                <div class="col-md-6 mb-4 mb-lg-0">
                  <input type="text" class="form-control" placeholder="Họ">
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="Tên">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <input type="text" class="form-control" placeholder="Địa chỉ email">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <textarea name="" id="" class="form-control" placeholder="Thông điệp của bạn là ?" cols="30" rows="10"></textarea>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-6 mr-auto">
                  <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5 rounded-0" value="Gửi email">
                </div>
              </div>
            </form>
          </div>
          <div class="col-lg-6 ml-auto">
            <div class="bg-white p-3 p-md-5">
              <h3 class="heading-39291">Thông tin liên hệ</h3>
              <ul class="list-unstyled footer-link">
                <li class="d-block mb-3">
                  <span class="d-block text-black small text-uppercase font-weight-bold">Trụ sở văn phòng: </span>
                  <span>Trường Đại học Bách khoa - ĐHQG TP.HCM</span></li>
                <li class="d-block mb-3"><span class="d-block text-black small text-uppercase font-weight-bold">Điện thoại</span><span>0987654321</span></li>
                <li class="d-block mb-3"><span class="d-block text-black small text-uppercase font-weight-bold">Email</span><span>noithatdiamondk20@gmail.com</span></li>
              </ul>
              <div id="map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16604.93946768123!2d106.79402436586555!3d10.872463120013757!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3174d914866b51c9%3A0x913146948e01ee20!2zVHLGsOG7nW5nIMSR4bqhaSBo4buNYyBCw6FjaCBLaG9h!5e0!3m2!1sen!2s!4v1635314675431!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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

