<?php
  require_once("./view/header.php");
?>
 <div class="owl-carousel-wrapper">
      <div class="box-92819 shadow-lg">
        <div>
          <h1 class=" mb-3 text-black">Tin tức</h1>
          <p>Thông tin cập nhật xu hướng thiết kế hiện tại</p>
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
        <h2 class="heading-39291 mb-0">Tin tức</h2>
        <div class="d-flex flex-sm-row flex-column flex-wrap container-md">
        <?php 
           
           if (isset($data['paginationData'])){

            if (($data['paginationData']->num_rows ?? 0) > 0){
          
                while ( $row =  $data['paginationData']->fetch_assoc() ){
                  $id_new = $row['id_new'];
                  $tieu_de = $row['tieu_de'];
                  $noi_dung = $row['noi_dung'];
                  $mo_ta = $row['mo_ta'];
                  $thoi_gian = $row['thoi_gian'];
                  $img_new = $row['img_new'];
                  
                    echo <<< _END
                        <div class="col-md-6 col-12">
                          <div class="product">
                           
                            <img src="$img_new" />
                            
                            <div class="intro">
                              <p>
                                <strong>$tieu_de </strong>$mo_ta
                              </p>
                    
                            </div class="summary">
                    
                            <div class="text">
                              $tieu_de
                              <br>
                              <b>$thoi_gian</b>
                              <br>
                              <b>Mô tả: </b>$mo_ta 
                              <br>
                              <div class="active-scroll">
                                <form action="/mvc/news/getNewShow" method="POST">
                                <input style="display:none"class="modal-btn" type="text" id="xem" name="xem" value="$id_new"/>
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
 <!-- <div class="owl-carousel-wrapper">
        <div class="box-92819 shadow-lg">
            <div>
              <h1 class=" mb-3 text-black">Tin tức</h1>
              <p>Chia sẻ những bí quyết trang trí nội thất, sự kiện, thông tin và dự án từ Diamond</p>
            </div>
        </div>
        <div class="ftco-cover-1" style="background-image: url('./libs/images/hero_1.jpg');"></div>
      </div>
      <div class="site-section">
        <div class="container"> 
            <div class="d-flex flex-sm-row flex-column flex-wrap container-md">
              <div class="col-md-6 col-12">
                <div class="product">    
                  <img src="./libs/images/img_1.jpg" /> 
                  <div class="intro">
                    <p>
                      <a href="#">LÀM THẾ NÀO ĐỂ MỞ RỘNG KHÔNG GIAN BẰNG GIẢI PHÁP ÁNH SÁNG?</a>
                    </p>    
                  </div>
                </div> 
              </div>   
              <div class="col-md-6 col-12">
                <div class="product">                
                  <img src="./libs/images/img_2.jpg" />
                  <div class="intro">
                    <p>
                      <a href="#">TÌM HIỂU VỀ 7 KIỂU CẦU THANG PHỔ BIẾN NHẤT</a>
                    </p>    
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-12">
                <div class="product">    
                  <img src="./libs/images/img_3.jpg" />    
                    <div class="intro">
                      <p>
                        <a href="#">NGHỆ THUẬT ÁNH SÁNG TRONG KHÔNG GIAN TRƯNG BÀY</a>
                      </p>    
                    </div>
                </div>
              </div>
              <div class="col-md-6 col-12">
                <div class="product">
                  <img src="./libs/images/img_4.jpg" />
                  <div class="intro">
                    <p>
                      <a href="#">5 ĐIỀU BẠN CÓ THỂ LÀM ĐỂ CÓ THỂ NÂNG CẤP KHÔNG GIAN LÀM VIỆC TẠI NHÀ</a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> -->



 
      <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
          Trang
          <?php
            echo $data['ket_qua'];
          ?>
        </ul>
      </nav>

      <?php
  require_once("./view/footer.php");
?>
