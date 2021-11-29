<?php
  require_once("./view/header.php");
?>
  <div class="wrapper fadeInDown">
        <div id="formContent">
 <h1>Thông tin đăng ký</h1>
      
      <!-- Login Form -->
      <p style='color: green'>
      <?php echo $data['msg'] ?? "" ?></p>
      <?php
                    if (isset($data['err'])) {
                        echo "<p style='color: red'>" . $data['err'] . "</p>";
                    }
                    ?>
      <form action="/mvc/user/signup" method="POST" enctype="multipart/form-data" >
      
        <br>
        <label for="userName" style="text-align: left;">Tên đăng nhập</label>
        <br>
        <input type="text" id="userName" class="fadeIn second" name="userName" >
        <br>
        <label for="firstName" style="text-align: left;">Họ</label>
        <br>
        <input type="text" id="firstName" class="fadeIn second" name="firstName" >
        <br>
        <label for="lastName" style="text-align: left;">Tên</label>
        <br>
        <input type="text" id="lastName" class="fadeIn second" name="lastName" >
        <br>
        <label for="password">Mật khẩu</label>
        <br>
        <input type="password" id="password" class="fadeIn third" name="password">
        <br>
        <label for="passwordConfirm">Nhập lại mật khẩu</label>
        <br>
        <input type="text" id="passwordConfirm" class="fadeIn third" name="passwordConfirm">
        <br>
        <label for="address" style="text-align: left;">Địa chỉ</label>
        <br>
        <input type="text" id="address" class="fadeIn second" name="address" >
        <br>
        <label for="email" style="text-align: left;">Email</label>
        <br>
        <input type="text" id="email" class="fadeIn second" name="email" >
        <br>
        <label for="phone">Số điện thoại</label>
        <br>
        <input type="text" id="phone" class="fadeIn third" name="phone">
        <br>
        <label for="img_profile">Chọn hình ảnh đại diện</label>
        <br>
                <input type="file"
            id="file" name="file"
            accept="image/png, image/jpeg, image/pjpeg , image/gif">

        <br>
        <input id="signup" type="submit" name="signup" class="fadeIn fourth" value="Đăng ký">
      </form>




      <a href="/mvc/user/login">Đăng Nhập</a>
      <!-- Remind Passowrd -->
      <div id="formFooter">
        <a class="underlineHover" href="#">Forgot Password?</a>
      </div>
  
    </div>
  </div>


    
      <?php
  require_once("./view/footer.php");
?>

 
