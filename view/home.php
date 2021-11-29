<?php
  require_once("./view/header.php");
?>
    <div class="owl-carousel-wrapper">

      

<div class="box-92819 shadow-lg">
  

    <div>
      <h1 class=" mb-3 text-black">Interior Design</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quam, ratione earum.</p>
      <p class="mb-0 mt-4"><a href="#" class="btn btn-primary">Get In Touch</a></p>
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

</div>
</div>
</div>


<div class="site-section bg-primary">
<div class="container">
  <div class="row mb-5 align-items-center">
    <div class="col-md-7">
      <h2 class="heading-39291 text-white mb-3">What We Do</h2>
      <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis velit iure possimus repellendus, esse minus illum nobis deleniti?</p>
    </div>
  </div>
  <div class="row">
    
    <div class="col-md-6 mb-4 col-lg-4" data-aos="fade-up" data-aos-delay="100">
      <div class="service-29193 text-center">
        <span class="img-wrap mb-5">
          <img src="./libs/fonts/flaticon/svg/002-kitchen.svg" alt="Image" class="img-fluid">
        </span>
        <h3 class="mb-4"><a href="#">Reiciendis Velit</a></h3>
        <p>Lorem ipsum dolor sit ame adipisicing elit. Perspiciatis incidunt distinctio voluptate .</p>
      </div>
    </div>
    <div class="col-md-6 mb-4 col-lg-4" data-aos="fade-up" data-aos-delay="200">
      <div class="service-29193 text-center">
        <span class="img-wrap mb-5">
          <img src="./libs/fonts/flaticon/svg/003-lamp.svg" alt="Image" class="img-fluid">
        </span>
        <h3 class="mb-4"><a href="#">Incidunt Distinctio</a></h3>
        <p>Lorem ipsum dolor sit ame adipisicing elit. Perspiciatis incidunt distinctio voluptate .</p>
      </div>
    </div>

    <div class="col-md-6 mb-4 col-lg-4" data-aos="fade-up" data-aos-delay="">
      <div class="service-29193 text-center">
        <span class="img-wrap mb-5">
          <img src="./libs/fonts/flaticon/svg/001-stairs.svg" alt="Image" class="img-fluid">
        </span>
        <h3 class="mb-4"><a href="#">Reiciendis Velit Iure</a></h3>
        <p>Lorem ipsum dolor sit ame adipisicing elit. Perspiciatis incidunt distinctio voluptate .</p>
      </div>
    </div>

    <div class="col-md-6 mb-4 col-lg-4" data-aos="fade-up" data-aos-delay="">
      <div class="service-29193 text-center">
        <span class="img-wrap mb-5">
          <img src="./libs/fonts/flaticon/svg/004-blueprint.svg" alt="Image" class="img-fluid">
        </span>
        <h3 class="mb-4"><a href="#">Boluptate Ipsum</a></h3>
        <p>Lorem ipsum dolor sit ame adipisicing elit. Perspiciatis incidunt distinctio voluptate .</p>
      </div>
    </div>
    <div class="col-md-6 mb-4 col-lg-4" data-aos="fade-up" data-aos-delay="200">
      <div class="service-29193 text-center">
        <span class="img-wrap mb-5">
          <img src="./libs/fonts/flaticon/svg/006-pantone.svg" alt="Image" class="img-fluid">
        </span>
        <h3 class="mb-4"><a href="#">Modern Elit</a></h3>
        <p>Lorem ipsum dolor sit ame adipisicing elit. Perspiciatis incidunt distinctio voluptate .</p>
      </div>
    </div>
    <div class="col-md-6 mb-4 col-lg-4" data-aos="fade-up" data-aos-delay="100">
      <div class="service-29193 text-center">
        <span class="img-wrap mb-5">
          <img src="./libs/fonts/flaticon/svg/005-dinning-table.svg" alt="Image" class="img-fluid">
        </span>
        <h3 class="mb-4"><a href="#">Dolor Sitame</a></h3>
        <p>Lorem ipsum dolor sit ame adipisicing elit. Perspiciatis incidunt distinctio voluptate .</p>
      </div>
    </div>
    
  </div>
</div>
</div>


<div class="site-section section-4">
<div class="container">

  <div class="row justify-content-center text-center">
    <div class="col-md-7">
      <div class="slide-one-item owl-carousel">
        <blockquote class="testimonial-1">
          <span class="quote quote-icon-wrap"><span class="icon-format_quote"></span></span>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus totam sit delectus earum facere ex ea sunt, eos?</p>
          <cite><span class="text-black">Mike Dorney</span> &mdash; <span class="text-muted">CEO and Co-Founder</span></cite>
        </blockquote>

        <blockquote class="testimonial-1">
          <span class="quote quote-icon-wrap"><span class="icon-format_quote"></span></span>
          <p>Eligendi earum ad perferendis dolores, dolor quas. Ullam in, eaque mollitia suscipit id aspernatur rerum! Sit quibusdam ullam tempora quis, in voluptatum maiores veritatis recusandae!</p>
          <cite><span class="text-black">James Smith</span> &mdash; <span class="text-muted">CEO and Co-Founder</span></cite>
        </blockquote>

        <blockquote class="testimonial-1">
          <span class="quote quote-icon-wrap"><span class="icon-format_quote"></span></span>
          <p> Officia, eius omnis rem non quis eos excepturi cumque sequi pariatur eaque quasi nihil dicta tempore voluptate culpa, veritatis incidunt voluptatibus qui?</p>
          <cite><span class="text-black">Mike Dorney</span> &mdash; <span class="text-muted">CEO and Co-Founder</span></cite>
        </blockquote>
      </div>
    </div>
  </div>
</div>
</div>

<?php
  require_once("./view/footer.php");
?>