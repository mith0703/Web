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
        <div class="ftco-cover-1" style="background-image: url('./libs/images/hero_1.jpg');"></div>
        <div class="ftco-cover-1" style="background-image: url('./libs/images/hero_2.jpg');"></div>
        <div class="ftco-cover-1" style="background-image: url('./libs/images/hero_3.jpg');"></div>

      </div>
    </div>
    <div class="site-section">
      <div class="container">
        <h2 class="heading-39291 mb-0">Thiết kế</h2>
        <div class="d-flex flex-sm-row flex-column flex-wrap container-md">
        <?php 
           
           if (isset($data['data'])){

            if (($data['data']->num_rows ?? 0) > 0){
          
                while ( $row =  $data['data']->fetch_assoc() ){
                  $ten_thiet_ke = $row['ten_thiet_ke'];
                  $chu_de = $row['chu_de'];
                  $dien_tich = $row['dien_tich'];
                  $mau = $row['mau'];
                  $cong_nghe = $row['cong_nghe'];
                  $gia = $row['gia'];
                  $img_product = $row['img_product'];
                  $mo_ta =  $row['mo_ta'];
                  //echo $img_product;
                    echo <<< _END
                        <div class="col-md-6 col-12">
                        <div class="product">

                          <img src="$img_product" />
            
                          <div class="intro">
                            <p>
                              <i>$chu_de </i>$mo_ta 
                            </p>
            
                          </div class="summary">
            
                          <div class="text">
                            $ten_thiet_ke
                            <br>
                            Chủ đề thiết kế: $chu_de
                            <br>
                            Diện tích: $dien_tich <sup> m2 </sup>
                            <div class="active-scroll">
                              <input class="modal-btn" type="checkbox" id="modal-btn" name="modal-btn" />
                              <label for="modal-btn">Thêm thông tin <i class="uil uil-expand-arrows"></i></label>
                              <div class="modal">
                                <div class="modal-wrap">
                                  <img class="inside-wrap" src="$img_product" alt="product1">
                                  <p>$ten_thiet_ke
                                    <br>
                                    Chủ đề thiết kế:  $chu_de
                                    <br>
                                    Diện tích: $dien_tich <sup> m2 </sup>
                                    <br>
                                    Màu chủ đạo: $mau
                                    <br>
                                    Công nghệ đặc sắc: $cong_nghe
                                    <br>
                                    Giá: $gia
                                  </p>
                                  <p>
                                    Conment
                                  <div class="fb-comments" data-href="http://127.0.0.1:5500/Products2.html" data-width="800"
                                    data-numposts="5"></div>
                                  </p>
                                </div>
                              </div>
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

        
          <!-- <div class="col-md-6 col-12">
            <div class="product">

              <img src="./libs/images/img_1.jpg" />

              <div class="intro">
                <p>
                  <strong>Cổ Điển </strong>nền trang trí hiện đại theo khuynh hướng
                  thế giới, lịch sử, tao nhã và trang trọng
                </p>

              </div class="summary">

              <div class="text">
                THIẾT KẾ NỘI THẤT BIỆT THỰ DƯƠNG NỘI
                <br>
                Chủ đề thiết kế: Không gian xanh
                <br>
                Diện tích: 50m2
                <div class="active-scroll">
                  <input class="modal-btn" type="checkbox" id="modal-btn" name="modal-btn" />
                  <label for="modal-btn">Thêm thông tin <i class="uil uil-expand-arrows"></i></label>
                  <div class="modal">
                    <div class="modal-wrap">
                      <img class="inside-wrap" src="./libs/images/img_1.jpg" alt="product1">
                      <p>THIẾT KẾ NỘI THẤT BIỆT THỰ DƯƠNG NỘI
                        <br>
                        Chủ đề thiết kế: Không gian xanh
                        <br>
                        Diện tích: 50m2
                        <br>
                        Màu chủ đạo: Xanh lá
                        <br>
                        Công nghệ đặc sắc: in 3D, gỗ hiếm
                        <br>
                        Giá: 12.000.000đ
                      </p>
                      <p>
                        Conment
                      <div class="fb-comments" data-href="http://127.0.0.1:5500/Products2.html" data-width="800"
                        data-numposts="5"></div>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>

          <div class="col-md-6 col-12">
            <div class="product">

              <img src="./libs/images/img_2.jpg" />



              <div class="intro">
                <p>
                  <strong>Hiện Đại </strong>nền trang trí hiện đại theo khuynh hướng
                  thế giới, lịch sử, tao nhã và trang trọng
                </p>

              </div class="summary">

              <div class="text">
                THIẾT KẾ NỘI THẤT BIỆT THỰ DƯƠNG NỘI
                <br>
                Chủ đề thiết kế: Không gian xanh
                <br>
                Diện tích: 50m2
                <div class="active-scroll">
                  <input class="modal-btn" type="checkbox" id="modal-btn" name="modal-btn" />
                  <label for="modal-btn">Thêm thông tin <i class="uil uil-expand-arrows"></i></label>
                  <div class="modal">
                    <div class="modal-wrap">
                      <img class="inside-wrap" src="./libs/images/img_2.jpg" alt="product1">
                      <p>THIẾT KẾ NỘI THẤT BIỆT THỰ DƯƠNG NỘI
                        <br>
                        Chủ đề thiết kế: Không gian xanh
                        <br>
                        Diện tích: 50m2
                        <br>
                        Màu chủ đạo: Xanh lá
                        <br>
                        Công nghệ đặc sắc: in 3D, gỗ hiếm
                        <br>
                        Giá: 12.000.000đ
                      </p>
                      <p>
                        Conment
                      <div class="fb-comments" data-href="http://127.0.0.1:5500/Products2.html" data-width="800"
                        data-numposts="5"></div>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="col-md-6 col-12"> 
            <div class="product">

              <img src="./libs/images/img_3.jpg" />



              <div class="intro">
                <p>
                  <strong>Bắc Âu </strong>nền trang trí hiện đại theo khuynh hướng
                  thế giới, lịch sử, tao nhã và trang trọng
                </p>

              </div class="summary">

              <div class="text">
                THIẾT KẾ NỘI THẤT BIỆT THỰ DƯƠNG NỘI
                <br>
                Chủ đề thiết kế: Không gian xanh
                <br>
                Diện tích: 50m2
                <div class="active-scroll">
                  <input class="modal-btn" type="checkbox" id="modal-btn" name="modal-btn" />
                  <label for="modal-btn">Thêm thông tin <i class="uil uil-expand-arrows"></i></label>
                  <div class="modal">
                    <div class="modal-wrap">
                      <img class="inside-wrap" src="./libs/images/img_3.jpg" alt="product1">
                      <p>THIẾT KẾ NỘI THẤT BIỆT THỰ DƯƠNG NỘI
                        <br>
                        Chủ đề thiết kế: Không gian xanh
                        <br>
                        Diện tích: 50m2
                        <br>
                        Màu chủ đạo: Xanh lá
                        <br>
                        Công nghệ đặc sắc: in 3D, gỗ hiếm
                        <br>
                        Giá: 12.000.000đ
                      </p>
                      <p>
                        Conment
                      <div class="fb-comments" data-href="http://127.0.0.1:5500/Products2.html" data-width="800"
                        data-numposts="5"></div>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="col-md-6 col-12">
            <div class="product">

              <img src="./libs/images/img_4.jpg" />



              <div class="intro">
                <p>
                  <strong>Bohemians </strong>nền trang trí hiện đại theo khuynh hướng
                  thế giới, lịch sử, tao nhã và trang trọng
                </p>

              </div class="summary">

              <div class="text">
                THIẾT KẾ NỘI THẤT BIỆT THỰ DƯƠNG NỘI
                <br>
                Chủ đề thiết kế: Không gian xanh
                <br>
                Diện tích: 50m2
                <div class="active-scroll">
                  <input class="modal-btn" type="checkbox" id="modal-btn" name="modal-btn" />
                  <label for="modal-btn">Thêm thông tin <i class="uil uil-expand-arrows"></i></label>
                  <div class="modal">
                    <div class="modal-wrap">
                      <img class="inside-wrap" src="./libs/images/img_4.jpg" alt="product1">
                      <p>THIẾT KẾ NỘI THẤT BIỆT THỰ DƯƠNG NỘI
                        <br>
                        Chủ đề thiết kế: Không gian xanh
                        <br>
                        Diện tích: 50m2
                        <br>
                        Màu chủ đạo: Xanh lá
                        <br>
                        Công nghệ đặc sắc: in 3D, gỗ hiếm
                        <br>
                        Giá: 12.000.000đ
                      </p>
                      <p>
                        Conment
                      <div class="fb-comments" data-href="http://127.0.0.1:5500/Products2.html" data-width="800"
                        data-numposts="5"></div>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div> -->
        </div>

      </div>
    </div>
    <nav aria-label="Page navigation example">
      <ul class="pagination justify-content-center">
        <li class="page-item disabled">
          <a class="page-link" href="#" tabindex="-1">Previous</a>
        </li>

        <li class="page-item active">
          <a class="page-link" href="#">1<span class="sr-only">(current)</span></a>
        </li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
          <a class="page-link" href="#">Next</a>
        </li>
      </ul>
    </nav>

<?php
  require_once("./view/footer.php");
?>
