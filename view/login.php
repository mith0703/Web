<?php
  require_once("./view/header.php");
?>
 
  <form action="/mvc/user/login", method="POST" name="login-form">
      <div class="wrapper fadeInDown">
        <div id="formContent">
          <!-- Tabs Titles -->
      
          <!-- Icon -->
          <div class="fadeIn first">
            <img src="/mvc/libs/images/profile.png" id="icon" alt="User Icon" />
          </div>
          <div id="message">
          <p style='color: green'> <?php echo $data['msg'] ?? "" ?> </p> 
          <p style='color: red'>   <?php echo $data['err'] ?? "" ?> </p>
          </div>
          <!-- Login Form -->
          <div id="loginPart">
            <input type="text" id="userName" class="fadeIn second" name="userName" placeholder="login">
            <input type="text" id="password" class="fadeIn third" name="password" placeholder="password">
            <input type="submit" name="login" id="login" class="fadeIn fourth" value="Đăng nhập">
         
          <br>
          <a href="/mvc/user/signup">Đăng ký</a></button>
         
          <!-- Remind Passowrd -->
          <div id="formFooter">

            <a class="underlineHover" href="#">Forgot Password?</a>
          </div>
          </div>
          <div>
        </div>
      </div>
  </form>
</div>

<?php
  require_once("./view/footer.php");
  echo $data['show'] ?? ""; 
?>

 
