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
					<?php echo $_SESSION['ho'] . ' ' . $_SESSION['ten'] ?>
				</div>
			</div>
			<!-- END SIDEBAR USER TITLE -->
			<!-- SIDEBAR BUTTONS -->
			<div class="profile-userbuttons">
				<?php
				if (isset($_SESSION['vai_tro']))
					if ($_SESSION['vai_tro'] == 1) {
						echo <<< _END
							<form action="/mvc/profile/adminpage">
							<button type="submit" class="btn btn-warning btn-sm" disabled>Admin</button>
							</form>
							_END;
					}
				?>
				<br>
				<form action="/mvc/profile">
					<button type="submit" class="btn btn-success btn-sm">Sửa thông tin</button>
				</form>
				<br>

				<form action="/mvc/profile/pwchange">
					<button type="submit" class="btn btn-danger btn-sm">Đổi mật khẩu</button>
				</form>
				<br>

				<?php
				if (isset($_SESSION['vai_tro']))
					if ($_SESSION['vai_tro'] == 1) {
						echo <<< _END
							<form action="/mvc/profile/usermanager">
							<button type="submit" class="btn btn-primary btn-sm">Quản lý Tài khoản</button>
							</form>
							<br>
							<form action="/mvc/profile/productmanager">
							<button type="submit" class="btn btn-primary btn-sm">Quản lý Sản phẩm</button>
							</form>
							_END;
					}
				?>


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
		