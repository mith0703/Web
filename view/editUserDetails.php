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
          <p style='color: red'> <?php echo $data['err'] ?? "" ?> </p>
        </div>

        <img src="<?php echo $data['data']['img_profile'] ?>" class="img-responsive" alt="">
        <form action="/mvc/admin/updateAdminUser" method="POST" enctype="multipart/form-data">

          <label for="id_user" style="text-align: left;display:none">Id</label>

          <input style="text-align: left;display:none" type="text" id="id_user" class="fadeIn second" name="id_user" value=<?php echo $data['data']['id_user'] ?>>
          <br>
          <label for="ten_dang_nhap" style="text-align: left;">Tên đăng nhập</label>
          <br>

          <input type="text" id="ten_dang_nhap" class="fadeIn second" name="ten_dang_nhap" value=<?php echo $data['data']['ten_dang_nhap'] ?>>
          <br>
          <label for="mat_khau">Mật khẩu</label>
          <br>
          <input type="text" id="mat_khau" class="fadeIn third" name="mat_khau" value="<?php echo $data['data']['mat_khau'] ?>">
          <br>

          <label for="ten" style="text-align: left;">Tên</label>
          <br>
          <input type="text" id="ten" class="fadeIn second" value="<?php echo $data['data']['ten'] ?>" name="ten">
          <br>
          <label for="ho" style="text-align: left;">Họ</label>
          <br>
          <input type="text" id="ho" class="fadeIn second" name="ho" value="<?php echo $data['data']['ho'] ?>">
          <br>
          <label for="dia_chi" style="text-align: left;">Địa chỉ</label>
          <br>
          <input type="text" id="dia_chi" class="fadeIn second" name="dia_chi" value="<?php echo $data['data']['dia_chi'] ?>">
          <br>
          <label for="email" style="text-align: left;">Email</label>
          <br>
          <input type="text" id="email" class="fadeIn second" name="email" value="<?php echo $data['data']['email'] ?>">
          <br>
          <label for="dien_thoai">Số điện thoại</label>
          <br>
          <input type="text" id="dien_thoai" class="fadeIn third" name="dien_thoai" value="<?php echo $data['data']['dien_thoai'] ?>">
          <br>
          <label for="vai_tro">Vai trò</label>
          <br>
          <input type="text" id="vai_tro" class="fadeIn third" name="vai_tro" value="<?php echo $data['data']['vai_tro'] ?>">
          <br>

          <label for="img_profile">Đường link ảnh</label>
          <br>
          <input type="text" id="img_profile" class="fadeIn third" name="img_profile" value="<?php echo $data['data']['img_profile'] ?>">
          <br>


          <label for="img_profile">Chọn hình ảnh đại diện</label>
          <br>
          <input type="file" id="file" name="file" accept="image/png, image/jpeg, image/pjpeg , image/gif">

          <br>
          <input style="margin-left: 50%" id="update" type="submit" name="update" class="fadeIn fourth" value="Lưu">


        </form>

      </div>
    </div>
  </div>
</div>
<?php
require_once("./view/footer.php");
?>