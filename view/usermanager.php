<?php
require_once("./view/header.php");
?>


<div class="container">
	<div class="row profile">
		<div class="col-md-3">

			<?php require_once("./view/sidebar.php"); ?>

		</div>
		<div class="col-md-9">
			<div class="profile">
				<div id="message">
					<p style='color: green'> <?php echo $data['msg'] ?? "" ?> </p>
					<p style='color: red'> <?php echo $data['err'] ?? "" ?> </p>
				</div>
		
                    <div>
                <button class="btn btn-info btn-sm" onclick="createClick2501()" >Tạo mới</button>
                </div>


    <!-- <form action="b.php" method="POST"> -->
    <div id="hidden2501" >
    <form action="/mvc/admin/signupAdmin" method="POST" enctype="multipart/form-data" >
      
      <br>
      <label for="userName" style="text-align: left;">Tên đăng nhập</label>
      <br>
      <input type="text" id="userName" class="fadeIn second" name="userName" >
      <br>
      <label for="firstName" style="text-align: left;">Họ</label>
      <br>
      <input type="text" id="firstName" class="fadeIn second" name="firstName" >
      <br>
      <label for="lastName" style="text-align: left;">Tên</label>
      <br>
      <input type="text" id="lastName" class="fadeIn second" name="lastName" >
      <br>
      <label for="password">Mật khẩu</label>
      <br>
      <input type="password" id="password" class="fadeIn third" name="password">
      <br>
      <label for="passwordConfirm">Nhập lại mật khẩu</label>
      <br>
      <input type="text" id="passwordConfirm" class="fadeIn third" name="passwordConfirm">
      <br>
      <label for="address" style="text-align: left;">Địa chỉ</label>
      <br>
      <input type="text" id="address" class="fadeIn second" name="address" >
      <br>
      <label for="email" style="text-align: left;">Email</label>
      <br>
      <input type="text" id="email" class="fadeIn second" name="email" >
      <br>
      <label for="phone">Số điện thoại</label>
      <br>
      <input type="text" id="phone" class="fadeIn third" name="phone">
      <br>
      <label for="vai_tro">Vai trò</label>
      <br>
      <input type="text" id="vai_tro" class="fadeIn third" name="vai_tro">
      <br>
      <label for="img_profile">Chọn hình ảnh đại diện</label>
      <br>
              <input type="file"
          id="file" name="file"
          accept="image/png, image/jpeg, image/pjpeg , image/gif">

      <br>
      <input style="margin-left: 50%" id="signup" type="submit" name="signup" class="fadeIn fourth" value="Thêm tài khoản">
    </form>      




  </div>
    <!-- </form> -->
    <br>
    
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Tên đăng nhập</th>
            <th scope="col">Email</th>
            <th scope="col">Vai trò</th>
            <th scope="col">Hành động</th>
          </tr>
        </thead>
        <tbody class="data">
            <?php 
           
           if (isset($data['data'])){

            if (($data['data']->num_rows ?? 0) > 0){
            
            
                while ( $row =  $data['data']->fetch_assoc() ){
                $id = $row['id_user'];
                $ten_dangn_nhap = $row['ten_dang_nhap'];
                $email = $row['email'];
                $vai_tro = $row['vai_tro'];

                echo "<tr id='data_$id'>" ; 
                echo "<th id='id_column' scope='row'>" . $id . "</th>";
                echo "<td id='name_column'>" . $ten_dangn_nhap. "</td>";
                echo "<td id='year_column'>" . $email ."</td>";
                echo "<td id='year_column'>" . $vai_tro ."</td>";
                echo <<< _END
                    <td id="buttonGroup">
                        <form action="/mvc/admin/getDetail" style="display:inline!important;" method="POST" >
                        <input  name="xem" value="$id"  style="display:none" ></input>
                        <button type="submit"  id="$id" class="edit btn btn-primary btn-sm" name="$id" >Xem</button>
                        </form>
                        <form action="/mvc/admin/getDetailAndEdit" style="display:inline!important;" method="POST" >
                        <input  name="sua" value="$id"  style="display:none" ></input>
                        <button type="submit" id="button_$id" class="edit btn btn-warning btn-sm" >Sửa</button>
                        </form>
                        <form action="/mvc/admin/deleteUser" style="display:inline!important;" method="POST" >
                        <input  name="xoa" value="$id"  style="display:none" ></input>
                        <button type="submit" class="delete btn btn-danger btn-sm" ">Xóa</buton>
                        </form>
                       
                    </td>
                _END;
                echo "</tr>";
            }
        }
        } else {
            echo "<th id='id_column' colspan='5' scope='row'  style='text-align:center'>Bấm lấy dữ liệu </th>";
    
        }
            ?>
          <!-- <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>
                <button class="read btn btn-primary">Đọc</button>
                <button class="edit btn btn-warning">Sửa</button>
                <button class="delete btn btn-danger">Xóa</buton>
      
            </td>
          </tr> -->
         
        </ul>
      </nav>
        </tbody>
      </table>
      <?php echo <<< _END
            <form action="/mvc/admin/getAllUserPagination" method="POST">
            <button class="btn btn-secondary btn-sm" name="laydulieu "type="submit">Lấy lại dữ liệu</button>
            <form>
            _END;
        ?>
         <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
          Trang
          <?php
            echo $data['ket_qua']??"";
          ?>
			</div>
		</div>
	</div>
</div>

<br>
<br>

<?php
require_once("./view/footer.php");
?>