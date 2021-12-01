<?php
  require_once("./view/header.php");
?>


<div class="container">
    <div class="row profile">
		<div class="col-md-3">

		<?php require_once("./view/sidebar.php"); ?>
		
	</div>
		<div class="col-md-9">
            <div class="profile-content">
			<div id="message">
          <p style='color: green'> <?php echo $data['msg'] ?? "" ?> </p> 
          <p style='color: red'>   <?php echo $data['err'] ?? "" ?> </p>
          </div>
           
          <img src="<?php echo $data['data']['img_profile'] ?>" class="img-responsive" alt="">

          <br>
          <label for="userName" style="text-align: left;">Id</label>
          <br>
          <input disabled type="text" id="userName" class="fadeIn second" name="userName" value=<?php echo $data['data']['id_user'] ?>>
      <br>
      <label for="userName" style="text-align: left;">Tên đăng nhập</label>
      <br>
      
      <input disabled type="text" id="userName" class="fadeIn second" name="userName" value=<?php echo $data['data']['ten_dang_nhap'] ?>>
      <br>
      <label for="phone">Mật khẩu</label>
      <br>
      <input disabled type="text" id="phone" class="fadeIn third" name="phone" value="<?php echo $data['data']['mat_khau'] ?>">
      <br>

      <label for="firstName" style="text-align: left;">Tên</label>
      <br>
      <input disabled type="text" id="firstName" class="fadeIn second" value="<?php echo $data['data']['ten'] ?>"name="firstName" >
      <br>
      <label for="lastName" style="text-align: left;">Họ</label>
      <br>
      <input disabled type="text" id="lastName" class="fadeIn second" name="lastName" value="<?php echo $data['data']['ho'] ?>" >
      <br>
      <label for="address" style="text-align: left;">Địa chỉ</label>
      <br>
      <input  disabled type="text" id="address" class="fadeIn second" name="address" value="<?php echo $data['data']['dia_chi'] ?>">
      <br>
      <label for="email" style="text-align: left;">Email</label>
      <br>
      <input  disabled type="text" id="email" class="fadeIn second" name="email" value="<?php echo $data['data']['email'] ?>">
      <br>
      <label for="phone">Số điện thoại</label>
      <br>
      <input disabled type="text" id="phone" class="fadeIn third" name="phone" value="<?php echo $data['data']['dien_thoai'] ?>">
      <br>
      <label for="phone">Vai trò</label>
      <br>
      <input disabled type="text" id="phone" class="fadeIn third" name="phone" value="<?php echo $data['data']['vai_tro'] ?>">
      <br>
   
      <label for="phone">Đường link ảnh</label>
      <br>
      <input  disabled type="text" id="phone" class="fadeIn third" name="phone" value="<?php echo $data['data']['img_profile'] ?>">
      <br>
      </div>
		</div>
	</div>
</div>
<?php
  require_once("./view/footer.php");
?>
        