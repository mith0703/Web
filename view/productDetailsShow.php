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
        <div class="ftco-cover-1" style="background-image: url('/mvc/libs/images/hero_1.jpg');"></div>
        <div class="ftco-cover-1" style="background-image: url('/mvc/libs/images/hero_2.jpg');"></div>
        <div class="ftco-cover-1" style="background-image: url('/mvc/libs/images/hero_3.jpg');"></div>

      </div>
    </div>
    <div class="site-section">
      <div class="container" style="text-align:center">
      <!-- <div id="message">
          <p style='color: green'> <?php echo $data['msg'] ?? "" ?> </p> 
          <p style='color: red'>   <?php echo $data['err'] ?? "" ?> </p>
          </div> -->
        
      <?php
      
      if (isset($data['data'])){
            
        $ten_thiet_ke = $data['data']['ten_thiet_ke'];
        $chu_de = $data['data']['chu_de'];
        $dien_tich = $data['data']['dien_tich'];
        $mau = $data['data']['mau'];
        $cong_nghe = $data['data']['cong_nghe'];
        $gia = $data['data']['gia'];
        $img_product = $data['data']['img_product'];
        $mo_ta =  $data['data']['mo_ta'];
       $test = $data['data']['img_product'] ;

        echo <<< _END
        <h2 class="heading-39291 mb-0">$ten_thiet_ke</h2>
        <div class="d-flex flex-sm-row flex-column flex-wrap container-md">
       
       
            <div class="modal-wrap1 w-100">
                        <img class="inside-wrap1" src="$img_product" alt="product1">

        _END;           
        
           
                    echo <<< _END
                    <p>
                    <br>
                    Chủ đề thiết kế: $chu_de
                    <br>
                    Diện tích: $dien_tich m<sup>2</sup>
                    <br>
                    Màu chủ đạo: $mau
                    <br>
                    Công nghệ đặc sắc: $cong_nghe
                    <br>
                    Giá: $gia VND
                    </p>
                    <p>
                    Conment
                    </p>


                   
                    _END;
                
            
          } else {
            echo "Chưa có sữ liệu";
    
        }

        ?>

                      



                        <div class="fb-comments" data-href="http://127.0.0.1/mvc/product/getProductShow" data-width="800" data-numposts="5"></div>
                    </div>
        
        </div>

      </div>
    </div>
    <!-- <nav aria-label="Page navigation example">
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
    </nav> -->

<?php
  require_once("./view/footer.php");
?>
