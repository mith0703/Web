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
            <form action="/mvc/user/userprofile" method="POST" enctype="multipart/form-data" >
      
      <br>
	 
      <!-- <label for="userName" style="text-align: left;">Tên đăng nhập</label>
      <br>
      <input type="text" id="userName" class="fadeIn second" name="userName" value=<?php echo $_SESSION['ten_dang_nhap'] ?>>
      <br> -->
      <label for="firstName" style="text-align: left;">Tên</label>
      <br>
      <input type="text" id="firstName" class="fadeIn second" value="<?php echo $_SESSION['ten'] ?>"name="firstName" >
      <br>
      <label for="lastName" style="text-align: left;">Họ</label>
      <br>
      <input type="text" id="lastName" class="fadeIn second" name="lastName" value="<?php echo $_SESSION['ho'] ?>" >
      <br>
      <label for="address" style="text-align: left;">Địa chỉ</label>
      <br>
      <input type="text" id="address" class="fadeIn second" name="address" value="<?php echo $_SESSION['dia_chi'] ?>">
      <br>
      <label for="email" style="text-align: left;">Email</label>
      <br>
      <input type="text" id="email" class="fadeIn second" name="email" value="<?php echo $_SESSION['email'] ?>">
      <br>
      <label for="phone">Số điện thoại</label>
      <br>
      <input type="text" id="phone" class="fadeIn third" name="phone" value="<?php echo $_SESSION['dien_thoai'] ?>">
      <br>
      <label for="img_profile">Chọn hình ảnh đại diện</label>
      <br>
              <input type="file"
          id="file" name="file"
          accept="image/png, image/jpeg, image/pjpeg , image/gif"
		 	value="<?php echo $_SESSION['img_profile'] ?>" 
		  >

      <br>
      <input style="margin-left: 50% "id="update" type="submit" name="update" class="fadeIn fourth" value="Lưu">
    </form>
            </div>
		</div>
	</div>
</div>

<br>
<br>

<?php
  require_once("./view/footer.php");
?>
