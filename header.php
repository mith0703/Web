<?php
if(isset($_POST['logoutButton'])){
  session_destroy();
  header('Refresh:0; index.php');
}
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
      <span>
          <a class="navbar-brand" href="index.php<?php if(isset($_GET['userLogin'])) echo '?userLogin=true'?>" style="padding-left: 10px; color: #FF9900;">Diamond</a>
          <img style="width: 50px;" src="images/DIAMOND.ico" alt="Logo">
      </span>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>          
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
              <a class="nav-link" href="index.php<?php if(isset($_GET['userLogin'])) echo '?userLogin=true'?>">Trang chủ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php<?php if(isset($_GET['userLogin'])) echo '?userLogin=true'?>" >Giới thiệu</a>
            </li>
          <li class="nav-item">
            <a class="nav-link" href="products.php<?php if(isset($_GET['userLogin'])) echo '?userLogin=true'?>" >Sản phẩm</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="news.php<?php if(isset($_GET['userLogin'])) echo '?userLogin=true'?>">Tin tức</a>
          </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php<?php if(isset($_GET['userLogin'])) echo '?userLogin=true'?>" >Liên hệ</a>
            </li>
            
        </ul>
        <?php 
          if(isset($_GET['userLogin'])) echo '<a class="nav-link nav-item btn btn-info mr-2 h-100" href="signio.php" id="logoutButton" >Đăng Xuất</a>';
          else echo '<a class="nav-link nav-item btn btn-info mr-2 h-100" href="signio.php" id="signinButton" >Đăng nhập</a>';

        ?>
        <div class="d-flex">
          <input class="form-control" type="search" placeholder="Tìm kiếm" aria-label="searchBox">
          <button class="btn btn-outline-success" type="submit" style="width: 8em">Tìm kiếm</button>
        </div>
        <script>
        //https://www.google.com/search?q=facebook
        function functionSearch(value){
            window.open("https:\\www.google.com/search?q=" + value, '_blank');
            window.find(value);
          }
          $(document).ready(function(){
              $('#searchBox').blur(function(){
                  window.find(document.getElementById('searchBox').value);
              });
          })
    </script>
      </div>
    </nav>