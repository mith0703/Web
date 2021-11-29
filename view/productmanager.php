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
                <button class="btn btn-info btn-sm" onclick="createClick2501()" >Tạo mới sản phẩm</button>
                </div>


    <div id="hidden2501" >
    <form action="/mvc/product/addProduct" method="POST" enctype="multipart/form-data" >
      
      <br>
      <label for="ten_thiet_ke" style="text-align: left;">Tên thiết kế</label>
      <br>
      <input type="text" id="ten_thiet_ke" class="fadeIn second" name="ten_thiet_ke" >
      <br>
      <label for="chu_de" style="text-align: left;">Chủ đề</label>
      <br>
      <input type="text" id="chu_de" class="fadeIn second" name="chu_de" >
      <br>
      <label for="dien_tich" style="text-align: left;">Diện tích</label>
      <br>
      <input type="text" id="dien_tich" class="fadeIn second" name="dien_tich" >
      <br>
      <label for="mau">Màu</label>
      <br>
      <input type="text" id="mau" class="fadeIn third" name="mau">
      <br>
      <label for="cong_nghe">Công nghệ</label>
      <br>
      <input type="text" id="cong_nghe" class="fadeIn third" name="cong_nghe">
      <br>
      <label for="gia" style="text-align: left;">Giá</label>
      <br>
      <input type="text" id="gia" class="fadeIn second" name="gia" >
      <br>
      <label for="mo_ta" style="text-align: left;">Mô tả</label>
      <br>
      <input type="text" id="mo_ta" class="fadeIn second" name="mo_ta" >
      <br>
      <label for="phone">Số điện thoại</label>
      <br>
      <label for="img_product">Chọn hình ảnh sản phẩm</label>
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
            <th scope="col">Tên thiết kế</th>
            <th scope="col">diện tích</th>
            <th scope="col">Giá</th>
            <th scope="col">Hành động</th>
          </tr>
        </thead>
        <tbody class="data">
        <?php 
           
           if (isset($data['data'])){

            if (($data['data']->num_rows ?? 0) > 0){
            
            
                while ( $row =  $data['data']->fetch_assoc() ){
                $id = $row['id'];
                $ten_thiet_ke = $row['ten_thiet_ke'];
                $dien_tich = $row['dien_tich'];
                $gia = $row['gia'];

                echo "<tr id='data_$id'>" ; 
                echo "<th id='id_column' scope='row'>" . $id . "</th>";
                echo "<td id='name_column'>" . $ten_thiet_ke. "</td>";
                echo "<td id='year_column'>" . $dien_tich ."</td>";
                echo "<td id='year_column'>" . $gia ."</td>";
                echo <<< _END
                    <td id="buttonGroup">
                        <form action="/mvc/product/getDetail" style="display:inline!important;" method="POST" >
                        <input  name="xem" value="$id"  style="display:none" ></input>
                        <button type="submit"  id="$id" class="edit btn btn-primary btn-sm" name="$id" >Xem</button>
                        </form>
                        <form action="/mvc/product/getDetailAndEdit" style="display:inline!important;" method="POST" >
                        <input  name="sua" value="$id"  style="display:none" ></input>
                        <button type="submit" id="button_$id" class="edit btn btn-warning btn-sm" >Sửa</button>
                        </form>
                        <form action="/mvc/product/deleteProduct" style="display:inline!important;" method="POST" >
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
          
        </tbody>
      </table>
      <?php echo <<< _END
            <form action="/mvc/product/getAllProductAdmin" method="POST">
            <button class="btn btn-secondary btn-sm" name="laydulieu "type="submit">Lấy lại dữ liệu</button>
            <form>
            _END;
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