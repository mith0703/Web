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


  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700i,900|Roboto&display=swap"
    rel="stylesheet">

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
          <h1 class=" mb-3 text-black">Sản phẩm</h1>
          <p>Mang lại giải pháp thiết kế tối ưu, bảo toàn công năng, tiện nghi hiện đại cho mọi loại hình nhà ở hiện nay.</p>
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
        <h2 class="heading-39291 mb-0">Thiết kế</h2>
        <div class="d-flex flex-sm-row flex-column flex-wrap container-md">
          <div class="col-md-6 col-12">
            <div class="product">

              <img src="images/img_1.jpg" />



              <div class="intro">
                <p>
                  <strong>Cổ Điển </strong>nền trang trí hiện đại theo khuynh hướng
                  thế giới, lịch sử, tao nhã và trang trọng
                </p>

              </div class="summary">

              <div class="text">
                THIẾT KẾ NỘI THẤT BIỆT THỰ DƯƠNG NỘI
                <br>
                Chủ đề thiết kế: Không gian xanh
                <br>
                Diện tích: 50m2
                <div class="active-scroll">
                  <input class="modal-btn" type="checkbox" id="modal-btn" name="modal-btn" />
                  <label for="modal-btn">Thêm thông tin <i class="uil uil-expand-arrows"></i></label>
                  <div class="modal">
                    <div class="modal-wrap">
                      <img class="inside-wrap" src="./images/img_1.jpg" alt="product1">
                      <p>THIẾT KẾ NỘI THẤT BIỆT THỰ DƯƠNG NỘI
                        <br>
                        Chủ đề thiết kế: Không gian xanh
                        <br>
                        Diện tích: 50m2
                        <br>
                        Màu chủ đạo: Xanh lá
                        <br>
                        Công nghệ đặc sắc: in 3D, gỗ hiếm
                        <br>
                        Giá: 12.000.000đ
                      </p>
                      <p>
                        Conment
                      <div class="fb-comments" data-href="http://127.0.0.1:5500/Products2.html" data-width="800"
                        data-numposts="5"></div>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>

          <div class="col-md-6 col-12">
            <div class="product">

              <img src="images/img_2.jpg" />



              <div class="intro">
                <p>
                  <strong>Hiện Đại </strong>nền trang trí hiện đại theo khuynh hướng
                  thế giới, lịch sử, tao nhã và trang trọng
                </p>

              </div class="summary">

              <div class="text">
                THIẾT KẾ NỘI THẤT BIỆT THỰ DƯƠNG NỘI
                <br>
                Chủ đề thiết kế: Không gian xanh
                <br>
                Diện tích: 50m2
                <div class="active-scroll">
                  <input class="modal-btn" type="checkbox" id="modal-btn" name="modal-btn" />
                  <label for="modal-btn">Thêm thông tin <i class="uil uil-expand-arrows"></i></label>
                  <div class="modal">
                    <div class="modal-wrap">
                      <img class="inside-wrap" src="./images/img_2.jpg" alt="product1">
                      <p>THIẾT KẾ NỘI THẤT BIỆT THỰ DƯƠNG NỘI
                        <br>
                        Chủ đề thiết kế: Không gian xanh
                        <br>
                        Diện tích: 50m2
                        <br>
                        Màu chủ đạo: Xanh lá
                        <br>
                        Công nghệ đặc sắc: in 3D, gỗ hiếm
                        <br>
                        Giá: 12.000.000đ
                      </p>
                      <p>
                        Conment
                      <div class="fb-comments" data-href="http://127.0.0.1:5500/Products2.html" data-width="800"
                        data-numposts="5"></div>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="col-md-6 col-12">
            <div class="product">

              <img src="images/img_3.jpg" />



              <div class="intro">
                <p>
                  <strong>Bắc Âu </strong>nền trang trí hiện đại theo khuynh hướng
                  thế giới, lịch sử, tao nhã và trang trọng
                </p>

              </div class="summary">

              <div class="text">
                THIẾT KẾ NỘI THẤT BIỆT THỰ DƯƠNG NỘI
                <br>
                Chủ đề thiết kế: Không gian xanh
                <br>
                Diện tích: 50m2
                <div class="active-scroll">
                  <input class="modal-btn" type="checkbox" id="modal-btn" name="modal-btn" />
                  <label for="modal-btn">Thêm thông tin <i class="uil uil-expand-arrows"></i></label>
                  <div class="modal">
                    <div class="modal-wrap">
                      <img class="inside-wrap" src="./images/img_3.jpg" alt="product1">
                      <p>THIẾT KẾ NỘI THẤT BIỆT THỰ DƯƠNG NỘI
                        <br>
                        Chủ đề thiết kế: Không gian xanh
                        <br>
                        Diện tích: 50m2
                        <br>
                        Màu chủ đạo: Xanh lá
                        <br>
                        Công nghệ đặc sắc: in 3D, gỗ hiếm
                        <br>
                        Giá: 12.000.000đ
                      </p>
                      <p>
                        Conment
                      <div class="fb-comments" data-href="http://127.0.0.1:5500/Products2.html" data-width="800"
                        data-numposts="5"></div>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="col-md-6 col-12">
            <div class="product">

              <img src="images/img_4.jpg" />



              <div class="intro">
                <p>
                  <strong>Bohemians </strong>nền trang trí hiện đại theo khuynh hướng
                  thế giới, lịch sử, tao nhã và trang trọng
                </p>

              </div class="summary">

              <div class="text">
                THIẾT KẾ NỘI THẤT BIỆT THỰ DƯƠNG NỘI
                <br>
                Chủ đề thiết kế: Không gian xanh
                <br>
                Diện tích: 50m2
                <div class="active-scroll">
                  <input class="modal-btn" type="checkbox" id="modal-btn" name="modal-btn" />
                  <label for="modal-btn">Thêm thông tin <i class="uil uil-expand-arrows"></i></label>
                  <div class="modal">
                    <div class="modal-wrap">
                      <img class="inside-wrap" src="./images/img_4.jpg" alt="product1">
                      <p>THIẾT KẾ NỘI THẤT BIỆT THỰ DƯƠNG NỘI
                        <br>
                        Chủ đề thiết kế: Không gian xanh
                        <br>
                        Diện tích: 50m2
                        <br>
                        Màu chủ đạo: Xanh lá
                        <br>
                        Công nghệ đặc sắc: in 3D, gỗ hiếm
                        <br>
                        Giá: 12.000.000đ
                      </p>
                      <p>
                        Conment
                      <div class="fb-comments" data-href="http://127.0.0.1:5500/Products2.html" data-width="800"
                        data-numposts="5"></div>
                      </p>
                    </div>
                  </div>
                </div>
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
