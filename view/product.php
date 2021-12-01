<?php
  require_once("./view/header.php");
?>
   <div class="owl-carousel-wrapper">
      <div class="box-92819 shadow-lg">
        <div>
          <h1 class=" mb-3 text-black">Sản phẩm</h1>
          <p>Mang lại giải pháp thiết kế tối ưu, bảo toàn công năng, tiện nghi hiện đại cho mọi loại hình nhà ở hiện nay.</p>
        </div>
      </div>
      <div class="owl-carousel owl-1 ">
        <div class="ftco-cover-1" style="background-image: url('../libs/images/hero_1.jpg');"></div>
        <div class="ftco-cover-1" style="background-image: url('../libs/images/hero_2.jpg');"></div>
        <div class="ftco-cover-1" style="background-image: url('../libs/images/hero_3.jpg');"></div>

      </div>
    </div>
    <div class="site-section">
      <div class="container">
        <h2 class="heading-39291 mb-0">Thiết kế</h2>
        <div class="d-flex flex-sm-row flex-column flex-wrap container-md">
        <?php 
           
           if (isset($data['paginationData'])){

            if (($data['paginationData']->num_rows ?? 0) > 0){
          
                while ( $row =  $data['paginationData']->fetch_assoc() ){
                  $id = $row['id'];
                  $ten_thiet_ke = $row['ten_thiet_ke'];
                  $chu_de = $row['chu_de'];
                  $dien_tich = $row['dien_tich'];
                  $mau = $row['mau'];
                  $cong_nghe = $row['cong_nghe'];
                  $gia = $row['gia'];
                  $img_product = $row['img_product'];
                  $mo_ta =  $row['mo_ta'];
                 $test = $row['img_product'] ;
                    echo <<< _END
                        <div class="col-md-6 col-12">
                          <div class="product">
                           
                            <img src="$img_product" />
                            
                            <div class="intro">
                              <p>
                                <strong>$chu_de </strong>$mo_ta
                              </p>
                    
                            </div class="summary">
                    
                            <div class="text">
                              $ten_thiet_ke
                              <br>
                              Chủ đề thiết kế: $chu_de 
                              <br>
                              Diện tích:  $dien_tich <sup>2</sup>
                              <div class="active-scroll">
                                <form action="/mvc/product/getProductShow" method="POST">
                                <input style="display:none"class="modal-btn" type="text" id="xem" name="xem" value="$id"/>
                                <label style="height:45%; width:45%;"><button class="btn btn-warning"type="submit">Thêm thông tin</button></label>
                    
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      
                    _END;
                }
            }
          } else {
            echo "Chưa có sữ liệu";
    
        }

        ?>

        
        </div>

      </div>
    </div>

     
     <nav aria-label="Page navigation example">
      <ul class="pagination justify-content-center">
      Trang 
      <?php  
         echo $data['ket_qua'];
      ?> 
       <!-- <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1">Previous</a>
          </li>

          <li class="page-item active">
            <a class="page-link" href="#">1<span class="sr-only">(current)</span></a>
          </li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#">Next</a>
          </li> -->
        </ul>
    </nav> 

<?php
  require_once("./view/footer.php");
?>
