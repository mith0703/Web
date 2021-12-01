<?php
  require_once("./view/header.php");
?>
  <div class="wrapper fadeInDown">
        <div id="formContent">
 <h1>Thông tin đăng ký</h1>
      
      <!-- Login Form -->
      <p style='color: green'>
      <?php echo $data['msg'] ?? "" ?></p>
      <div id="message">
          <p style='color: green'> <?php echo $data['msg'] ?? "" ?> </p> 
          <p style='color: red'>   <?php echo $data['err'] ?? "" ?> </p>
          </div>
      <form action="/mvc/user/signup" method="POST" enctype="multipart/form-data" >
      
        <br>
        <label for="userName" style="text-align: left;">Tên đăng nhập</label>
        <br>
        <input type="text" id="userName" class="fadeIn second" name="userName" >
        <br>
        <script>      
             $(document).ready(function(){
                    $('#userName').keyup(function(){
                        var userName = $(this).val();
                        if (userName.length < 8 && userName.length  > 0) {
                          console.log(userName.length);
                          document.getElementById('userName').style.color = 'red';
                        }
                        else {
                          document.getElementById('userName').style.color = 'green';
                        }
                    })
            });
        </script>
        <label for="firstName" style="text-align: left;">Họ</label>
        <br>
        <input type="text" id="firstName" class="fadeIn second" name="firstName" >
        <br>
        <script>      
             $(document).ready(function(){
                    $('#firstName').keyup(function(){
                        var firstName = $(this).val();
                        var colour = 'green';
                        for (let i of firstName){
                          if ( '0' <= i && i <= '9') colour = 'red';
                        }
                        document.getElementById('firstName').style.color = colour;
                    })
            });
        </script>
        <label for="lastName" style="text-align: left;">Tên</label>
        <br>
        <input type="text" id="lastName" class="fadeIn second" name="lastName" >
        <br>
        <script>      
             $(document).ready(function(){
                    $('#lastName').keyup(function(){
                        var lastName = $(this).val();
                        var colour = 'green';
                        for (let i of lastName){
                          if ( '0' <= i && i <= '9') colour = 'red';
                        }
                        document.getElementById('lastName').style.color = colour;
                    })
            });
            function togglePassword() {
              var x = document.getElementById("password");
              if (x.type === "password") {
                x.type = "text";
              } else {
                x.type = "password";
              }
            }
            function togglePasswordConfirm() {
              var x = document.getElementById("passwordConfirm");
              if (x.type === "password") {
                x.type = "text";
              } else {
                x.type = "password";
              }
            }
        </script>
        <label for="password">Mật khẩu </label>
        <br>
        <p style="margin-bottom: 2px;">(bao gồm chữ, số và kí tự đặc biệt)</p>
        <input type="password" id="password" class="fadeIn third" name="password">
        <br>
        <input type="radio" style="position: relative;" onclick="togglePassword()">
        <label for="showPassword">Hiện mật khẩu </label> 
        <br>
        <script>      
             $(document).ready(function(){
                    $('#password').keyup(function(){
                        var password = $(this).val();
                        var colour = 'red';
                        var checkdigit = false;
                        var checkchar = false;
                        var checkspec = false;
                        for (let i of password){
                          if ('0' <= i && i <= '9') checkdigit = true;
                          else if ('a' <= i && i <= 'z') checkchar = true;
                          else if ('!' <= i && i <= '~') checkspec = true;
                        }
                        if (checkchar && checkdigit && checkspec) colour = 'green';
                        document.getElementById('password').style.color = colour;
                    })
            });
        </script>
        <label for="passwordConfirm">Nhập lại mật khẩu</label>
        <br>        
        <input type="password" id="passwordConfirm" class="fadeIn third" name="passwordConfirm">
        <br>
        <input type="radio" style="position: relative;" onclick="togglePasswordConfirm()">
        <label for="showPassword">Hiện mật khẩu </label>        
        <br>
        <script>      
             $(document).ready(function(){
                    $('#passwordConfirm').keyup(function(){
                        var passwordConfirm = $(this).val();
                        var colour = 'green';
                        if (passwordConfirm.length > 0 && passwordConfirm != $('#password').val()){
                            colour = 'red';
                        }
                        document.getElementById('passwordConfirm').style.color = colour;
                    })
            });
        </script>
        <label for="address" style="text-align: left;">Địa chỉ</label>
        <br>
        <input type="text" id="address" class="fadeIn second" style="color: green;" name="address" >
        <br>
        <label for="email" style="text-align: left;">Email</label>
        <br>
        <input type="text" id="email" class="fadeIn second" name="email" >
        <br>
        <script>      
             $(document).ready(function(){
                    $('#email').keyup(function(){
                        var phone = $(this).val();
                        var colour = 'red';
                        var regex = /[a-zA-z0-9]+@[a-zA-z0-9]+.[a-zA-z0-9]+/;
                        if (phone.match(regex)) {
                          colour = 'green';
                        } else {
                          colour = 'red';
                        }
                        document.getElementById('email').style.color = colour;
                    })
            });
        </script>
        <label for="phone">Số điện thoại</label>
        <br>
        <input type="text" id="phone" class="fadeIn third" name="phone">
        <br>
        <script>      
             $(document).ready(function(){
                    $('#phone').keyup(function(){
                        var phone = $(this).val();
                        var colour = 'green';
                        for (let i of phone){
                          if (i < '0' || i > '9') colour = 'red';
                        }
                        document.getElementById('phone').style.color = colour;
                    })
            });
        </script>
        <label for="img_profile">Chọn hình ảnh đại diện</label>
        <br>
          <input type="file"  id="file" name="file" accept="image/png, image/jpeg, image/pjpeg , image/gif">
        <br>
        <input id="signup" type="submit" name="signup" class="fadeIn fourth" value="Đăng ký">
      </form>
      <a href="/mvc/user/login">Đăng Nhập</a>
      <!-- Remind Passowrd -->
      <div id="formFooter">
        <a class="underlineHover" href="#">Quên mật khẩu?</a>
      </div>
  
    </div>
  </div>


    
      <?php
  require_once("./view/footer.php");
?>

 
