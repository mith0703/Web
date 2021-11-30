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
           
          <img src="<?php echo $data['data']['img_new'] ?>" class="img-responsive" alt="">
          <form action="/mvc/news/updateNew" method="POST" enctype="multipart/form-data">
          <label for="id_new" style="text-align: left;">Id news</label>
      <br>
      <input type="text" id="id_new" class="fadeIn second" name="id_new" value="<?php echo $data['data']['id_new']?>">
      <br>
          
      <br>
      <label for="tieu_de" style="text-align: left;">Tiêu đề</label>
      <br>
      <input type="text" id="tieu_de" class="fadeIn second" name="tieu_de" value="<?php echo $data['data']['tieu_de']?>">
      <br>
      <label for="mo_ta" style="text-align: left;">Mô tả</label>
      <br>
      <input type="text" id="mo_ta" class="fadeIn second" name="mo_ta" value="<?php echo $data['data']['mo_ta']?>">
      <br>
      <label for="noi_dung" style="text-align: left;">Nội dung</label>
      <br>
      <textarea rows="10" cols="80"  id="noi_dung" class="fadeIn second" name="noi_dung" value=""> <?php echo $data['data']['noi_dung']?></textarea>
      <br>
      <br>
      <label for="img_new">Đường link ảnh</label>
      <br>
      <input  disabled type="text" id="img_new" class="fadeIn third" name="img_new" value="<?php echo $data['data']['img_new'] ?>">
      <br>

      <label for="img_profile">Chọn hình ảnh tin tức</label>
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
        