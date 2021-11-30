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
           
          
          <div>
                <button class="btn btn-info btn-sm" onclick="createClick2501()" >Tạo mới tin tức</button>
                </div>


    <div id="hidden2501" >
    <form action="/mvc/news/addNews" method="POST" enctype="multipart/form-data" >
      
      <br>
      <label for="tieu_de" style="text-align: left;">Tiêu đề</label>
      <br>
      <input type="text" id="tieu_de" class="fadeIn second" name="tieu_de" >
      <br>
      <label for="mo_ta" style="text-align: left;">Mô tả</label>
      <br>
      <input type="text" id="mo_ta" class="fadeIn second" name="mo_ta" >
      <br>
      <label for="noi_dung" style="text-align: left;">Nội dung</label>
      <br>
      <textarea rows="10" cols="80"  id="noi_dung" class="fadeIn second" name="noi_dung" > </textarea>
      <br>
      <br>
      <label for="img_new">Chọn hình ảnh tin tức</label>
      <br>
              <input type="file"
          id="file" name="file"
          accept="image/png, image/jpeg, image/pjpeg , image/gif">

      <br>
      <input style="margin-left: 50%" id="signup" type="submit" name="signup" class="fadeIn fourth" value="Thêm tin tức">
    </form>      


   

  </div>
    <!-- </form> -->
    <br>
    
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Tiêu đề</th>
            <th scope="col">Mô tả</th>
            <th scope="col">Thời gian</th>
            <th scope="col">Hành động</th>
          </tr>
        </thead>
        <tbody class="data">
        <?php 
           
           if (isset($data['data'])){

            if (($data['data']->num_rows ?? 0) > 0){
            
            
                while ( $row =  $data['data']->fetch_assoc() ){
                $id_new = $row['id_new'];
                $tieu_de = $row['tieu_de'];
                $mo_ta = $row['mo_ta'];
                $thoi_gian = $row['thoi_gian'];

                echo "<tr id='data_$id_new'>" ; 
                echo "<th id='id_column' scope='row'>" . $id_new . "</th>";
                echo "<td id='name_column'>" . $tieu_de. "</td>";
                echo "<td id='year_column'>" . $mo_ta ."</td>";
                echo "<td id='year_column'>" . $thoi_gian ."</td>";
                echo <<< _END
                    <td id="buttonGroup">
                        <form action="/mvc/news/getDetail" style="display:inline!important;" method="POST" >
                        <input  name="xem" value="$id_new"  style="display:none" ></input>
                        <button type="submit"  id="$id_new" class="edit btn btn-primary btn-sm" name="$id_new" >Xem</button>
                        </form>
                        <form action="/mvc/news/getDetailAndEdit" style="display:inline!important;" method="POST" >
                        <input  name="sua" value="$id_new"  style="display:none" ></input>
                        <button type="submit" id="button_$id_new" class="edit btn btn-warning btn-sm" >Sửa</button>
                        </form>
                        <form action="/mvc/news/deleteNew" style="display:inline!important;" method="POST" >
                        <input  name="xoa" value="$id_new"  style="display:none" ></input>
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
          
        </tbody>
      </table>
      <?php echo <<< _END
            <form action="/mvc/news/getAllNewsAdmin" method="POST">
            <button class="btn btn-secondary btn-sm" name="laydulieu "type="submit">Lấy lại dữ liệu</button>
            <form>
            _END;
        ?>

            </div>
		</div>
	</div>
</div>
<?php
  require_once("./view/footer.php");
?>
        