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
          
          <form action="/mvc/product/updateProduct" method="POST" enctype="multipart/form-data">

          <img src="<?php echo $data['data']['img_product'] ?>" class="img-responsive" alt="">

          <br>
          <label for="id" style="text-align: left;">Id</label>
          <br>
          <input  type="text" id="id" class="fadeIn second" name="id" value=<?php echo $data['data']['id'] ?>>
      <br>
      <label for="ten_thiet_ke" style="text-align: left;">Tên thiết kế</label>
      <br>
      
      <input  type="text" id="ten_thiet_ke" class="fadeIn second" name="ten_thiet_ke" value=<?php echo $data['data']['ten_thiet_ke'] ?>>
      <br>
      <label for="chu_de">Chủ đề</label>
      <br>
      <input  type="text" id="chu_de" class="fadeIn third" name="chu_de" value="<?php echo $data['data']['chu_de'] ?>">
      <br>

      <label for="dien_tich" style="text-align: left;">Diện tích</label>
      <br>
      <input  type="text" id="dien_tich" class="fadeIn second" value="<?php echo $data['data']['dien_tich'] ?>"name="firstName" >
      <br>
      <label for="mau" style="text-align: left;">Màu</label>
      <br>
      <input  type="text" id="mau" class="fadeIn second" name="mau" value="<?php echo $data['data']['mau'] ?>" >
      <br>
      <label for="cong_nghe" style="text-align: left;">Công nghệ</label>
      <br>
      <input   type="text" id="cong_nghe" class="fadeIn second" name="cong_nghe" value="<?php echo $data['data']['cong_nghe'] ?>">
      <br>
      <label for="gia" style="text-align: left;">Giá</label>
      <br>
      <input   type="text" id="gia" class="fadeIn second" name="gia" value="<?php echo $data['data']['gia'] ?>">
      <br>
      <label for="mo_ta">Mô tả</label>
      <br>
      <input  type="text" id="mo_ta" class="fadeIn third" name="mo_ta" value="<?php echo $data['data']['mo_ta'] ?>">
      <br>
      <label for="img_product">Đường Link ảnh</label>
      <br>
      <input  type="text" id="img_product" class="fadeIn third" name="img_product" value="<?php echo $data['data']['img_product'] ?>">
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
        