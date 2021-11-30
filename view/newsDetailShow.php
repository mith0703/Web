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
      <div class="container" style="text-align:left">
      <!-- <div id="message">
          <p style='color: green'> <?php echo $data['msg'] ?? "" ?> </p> 
          <p style='color: red'>   <?php echo $data['err'] ?? "" ?> </p>
          </div> -->
        
      <?php
      
      if (isset($data['data'])) {

        $tieu_de = $data['data']['tieu_de'];
        $noi_dung = $data['data']['noi_dung'];
        $mo_ta = $data['data']['mo_ta'];
        $thoi_gian = $data['data']['thoi_gian'];
        $img_new = $data['data']['img_new'];


        echo <<< _END
    <h2 class="heading-39291 mb-0">$tieu_de</h2>
    <div class="d-flex flex-sm-row flex-column flex-wrap container-md">
   
   
        <div class="modal-wrap1 w-100">
        <img class="inside-wrap1" style="height:50%; width:80%;" src="$img_new" alt="product1">

    _END;

        echo <<< _END
                <p>
                <br>
                $thoi_gian
                <br>
                <br>
                $mo_ta
                <br>
                <br>
                <br>
                $noi_dung
                </p>
                <div class="fb-comments" data-href="http://127.0.0.1/mvc/news/getNewShow" data-width="800" data-numposts="5"></div>
                </div>

                </div> 
                _END;
    } else {
        echo "Chưa có sữ liệu";
    }


        ?>

                      



                        
                    </div>
        
        </div>

      </div>
    </div>


<?php
require_once("./view/footer.php");
?>