<?php
  require_once("./view/header.php");
?>


<div class="container">
    <div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic" style="text-align:center">
					<img src="<?php echo $_SESSION['img_profile'] ?>" class="img-responsive" alt="">
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
                    <?php echo $_SESSION['ten_dang_nhap'] ?>
					</div>
					<div class="profile-usertitle-job">
                    <?php echo $_SESSION['ho'] .' '. $_SESSION['ten'] ?>
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
				<div class="profile-userbuttons">
                    <form action="/mvc/profile">
					<button type="submit" class="btn btn-success btn-sm">Sửa thông tin</button>
                    </form>
                    <br>
                    <br>
                    <form class="/mvc/profile/pwchange">
					<button type="submit" class="btn btn-danger btn-sm">Đổi mật khẩu</button>
                    </form>
                </div>
				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<!-- <div class="profile-usermenu">
					<ul class="nav">
						<li class="active">
							<a href="#">
							<i class="glyphicon glyphicon-home"></i>
							Overview </a>
						</li>
						<li>
							<a href="#">
							<i class="glyphicon glyphicon-user"></i>
							Account Settings </a>
						</li>
						<li>
							<a href="#" target="_blank">
							<i class="glyphicon glyphicon-ok"></i>
							Tasks </a>
						</li>
						<li>
							<a href="#">
							<i class="glyphicon glyphicon-flag"></i>
							Help </a>
						</li>
					</ul>
				</div> -->
				<!-- END MENU -->
			</div>
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
      <input type="text" id="password" class="fadeIn second" name="password" >
      <br>
      <label for="passwordConfirm" style="text-align: left;">Đánh lại mật khẩu mới</label>
      <br>
      <input type="text" id="passwordConfirm" class="fadeIn second" name="passwordConfirm" >
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