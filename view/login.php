<?php
  require_once("./view/header.php");
?>
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
            <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
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

 
