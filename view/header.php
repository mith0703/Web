<!DOCTYPE html>
<html lang="en">

<head>
  <title>CÔNG TY CPĐT & THIẾT KẾ NỘI THẤT NADU</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700i,900|Roboto&display=swap" rel="stylesheet">
  
    <link rel="stylesheet" href="/mvc/libs/fonts/icomoon/style.css">

    <link rel="stylesheet" href="/mvc/libs/css/bootstrap.min.css">
    <link rel="stylesheet" href="/mvc/libs/css/animate.min.css">
    <link rel="stylesheet" href="/mvc/libs/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="/mvc/libs/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/mvc/libs/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/mvc/libs/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="/mvc/libs/css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="/mvc/libs/css/style.css">
    <link rel="stylesheet" href="/mvc/libs/css/product.css">
    <link rel="stylesheet" href="/mvc/libs/css/register.css">
    <link rel="stylesheet" href="/mvc/libs/css/profile.css">

    <style>
input[type=password] {
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

    <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v12.0" nonce="00bUJX6r"></script>
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

      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <span>
            <a class="navbar-brand" href="/mvc/home" style="padding-left: 10px; color: #FF9900;">Diamond</a>
            <img style="width: 50px;" src="/mvc/libs/images/DIAMOND.ico" alt="Logo">
        </span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>          
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/mvc/home">Trang chủ</a>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="/mvc/product" >Sản phẩm</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/mvc/news">Tin tức</a>
            </li>
              <!-- <li class="nav-item">
                <a class="nav-link" href="SignUp.html" >Đăng ký</a>
              </li> -->
              <li class="nav-item">
                <a class="nav-link" href="/mvc/contact" >Liên hệ</a>
              </li>
          </ul>
          <form class="d-flex mr-2" method="GET">
            <!-- <input class="form-control" type="search" id="searchValue" placeholder="Tìm kiếm" aria-label="Search"> -->
            <!-- <button class="btn btn-outline-success" id="searchBox" onclick="doSearch()" type="submit" style="width: 8em">Tìm kiếm</button> -->
            <input class="form-control" style="margin-bottom:0px;"  placeholder="Tìm kiếm" type="text" id="search">
            <input class="form-control" style="margin-bottom:0px;" type="hidden" id="hid_search">
            <input class="btn btn-outline-success" style="margin-bottom:0px;" type="button" id="button" onmousedown="doSearch(document.getElementById('search').value)" value="Tìm kiếm">
          </form>
          <script>
        //https://www.google.com/search?q=facebook
            function doSearch(text,color="yellow") {
                if (color!="transparent") {
                  doSearch(document.getElementById('hid_search').value,"transparent"); 
                  document.getElementById('hid_search').value = text; 
                  }
                if (window.find && window.getSelection) {
                    document.designMode = "on";
                    var sel = window.getSelection();
                    sel.collapse(document.body, 0);
                    
                    while (window.find(text)) {
                        document.execCommand("HiliteColor", false, color);
                        sel.collapseToEnd();
                    }
                    document.designMode = "off";
                } else if (document.body.createTextRange) {
                    var textRange = document.body.createTextRange();
                    while (textRange.findText(text)) {
                        textRange.execCommand("BackColor", false, color);
                        textRange.collapse(false);
                    }
                }
            }
      </script>
          <a class="nav-item text-primary " href="/mvc/profile"
           <span class="mr-2 h-100" id="userLoginName">
             <?php if (isset($_SESSION['ten_dang_nhap'])) 
                {
                echo $_SESSION['ten_dang_nhap'] ; 
                }
                else {
                echo "Chưa đăng nhập ";
                } ?>
             <img style="height:50px; width:auto" src="<?php  echo isset($_SESSION['img_profile']) ?  $_SESSION['img_profile']  : "/mvc/public/upload/user/nhutanh321/person_1.jpg" ?>" 
            </span>
          </a> 
           <a id="dang_nhap" class="nav-link nav-item btn btn-info mr-2 h-100" href="/mvc/user/login" >Đăng nhập</a>
            <a id= "dang_ky" class="nav-link nav-item btn btn-primary mr-2 h-100" href="/mvc/user/signup" >Đăng ký</a>
            <a id="dang_xuat" class="nav-link nav-item btn btn-danger mr-2 h-100" href="/mvc/user/logout" >Đăng xuất</a>
          
        </div>
      </nav>
