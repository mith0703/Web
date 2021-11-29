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
            <form action="/mvc/user/pwchange" method="POST">
      
      <br>
	 
      <label for="password" style="text-align: left;">Mật khẩu mới</label>
      <br>
      <input type="password" id="password" class="fadeIn second" name="password" >
      <br>
      <label for="passwordConfirm" style="text-align: left;">Đánh lại mật khẩu mới</label>
      <br>
      <input type="password" id="passwordConfirm" class="fadeIn second" name="passwordConfirm" >
      <br>
      <input style="margin-left: 50% "id="update" type="submit" name="update" class="fadeIn fourth" value="Đổi mật khẩu">
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