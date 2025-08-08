<?php include('includes/header.php'); ?>
<?php if(count($this->banner)>0) { ?>
<!-- main-slider -->
<section class="slider-style-five">
  <div class="main-slider-carousel-2 owl-carousel owl-theme">
    <?php foreach($this->banner as $key=>$value) { ?>
    <div class="slide" style="background-image:url(uploads/banner/<?=$value['banner_image'];?>)">
      <div class="container">
        <div class="content-box">
          <?=$value[$_SESSION['lang'].'banner_text'];?>
          <div class="btn-box"><a href="<?=$value['banner_link'];?>"><?=$value[$_SESSION['lang'].'button_name'];?></a></div>
        </div>
      </div>
    </div>
    <?php } ?>
  </div>
</section>
<!-- main-slider end -->
<?php } ?>
<!-- about-style-four -->
<section class="about-style-three">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-12 col-sm-12 content-column">
        <div class="content-box">
          <div class="top-content" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1500">
          <?=$this->home[$_SESSION['lang'].'about'];?>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 col-sm-12 inner-column">
        <div class="inner-box mt-3" style="background-image: url(uploads/home/<?=$this->home['image'];?>);">
          <div class="content-box wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 300ms; animation-name: fadeInUp;">
            <div class="text mb-3">Servicing Since</div> 
            <h1>2003</h1>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- about-style-four -->
<!-- intro-style-two -->
<section class="ourmission-style-three" style="background-image: url(uploads/home/<?=$this->home['key_bg_image'];?>);">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-12 col-sm-12 inner-column">
        <div class="inner-box wow fadeInLeft animated" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1500" style="visibility: visible; animation-duration: 1500ms; animation-delay: 300ms; animation-name: fadeInLeft;">
          <div class="inner-content">
            <?=$this->home[$_SESSION['lang'].'key_desc'];?>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 col-sm-12 content-column">
        <div class="content-box" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1500">
          <div class="title-text content-box-text aos-init" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1500">J D Merchandise</div>
          <div class="icon-box"><i class="flaticon-industry"></i></div>
          <?=$this->home[$_SESSION['lang'].'key_title'];?>
          <?php if($this->home['key_btn_link']!='') { ?>
          <div class="btn-box"><a href="<?=$this->home['key_btn_link'];?>"><?=$this->home[$_SESSION['lang'].'key_btn_name'];?></a></div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- intro-style-two end -->
<!-- product-section strat -->
<section class="product-section centred product-sec">
  <div class="container">
    <div class="title-box pb-5">
      <?=$this->home[$_SESSION['lang'].'product_sec'];?>
    </div>
    <div class="row">
    <?php foreach($this->product as $key=>$value) { ?>
      <div class="col-lg-3 col-md-6 col-sm-12 product-block">
        <div class="product-block-one wow fadeInUp animated animated animated" data-wow-delay="00ms" style="visibility: visible; animation-delay: 0ms; animation-name: fadeInUp;">
          <div class="inner-box">
            <figure class="image-box"><img src="uploads/product/<?=$value['image'];?>" alt=""></figure>
            <div class="content-box"><a href="detail/<?=$value['slug'];?>.html"><?=$value[$_SESSION['lang'].'name'];?></a></div>
          </div>
        </div>
      </div>
    <?php } ?>
    </div>
  </div>

  <?php if($this->home['eng_brochure_desc']!='') { ?>
  <div class="project-style-five">
    <div class="lower-content">
      <div class="container">
        <div class="inner-box clearfix">
          <div class="text pull-left" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1500">
            <h3><?=$this->home[$_SESSION['lang'].'brochure_desc'];?></h3>
          </div>
          <div class="btn-box pull-right" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1500">
            <a href="uploads/home/<?=$this->home[$_SESSION['lang'].'brochure_file'];?>" target="_blank"><?=$this->home[$_SESSION['lang'].'brochure_btn'];?></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php } ?>
</section>
<!-- product-section end -->
<?php if(count($this->testimonial)>0) {?>
<!-- testimonial-style-four -->
<section class="testimonial-style-four centred">
  <div class="container">
    <div class="sec-title">
    <?=$this->home[$_SESSION['lang'].'testimonial_sec'];?>
    </div>
    <div class="two-column-carousel owl-carousel owl-theme">
      <?php foreach($this->testimonial as $key=>$value) { 
      $img='uploads/testimonial/'.$value['image'];  
      ?>
      <div class="testimonial-content">
        <div class="inner-box">
          <div class="author-info">
            <figure class="author-thumb"><img src="<?=$img;?>" alt=""></figure>
            <h5><?=$value[$_SESSION['lang'].'name'];?></h5>
            <span class="designation"><?=$value[$_SESSION['lang'].'position'];?></span>
          </div>
          <h3><?=$value[$_SESSION['lang'].'text'];?></h3>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</section>
<!-- testimonial-style-four end -->
<?php } ?>
<!-- subscribe-style-three -->
<section class="subscribe-style-three">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 content-column">
        <div class="content-box" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1500">
          <!-- <h5>The standard chunk of Lorem Ipsum used </h5> -->
          <a href="contact.html"><?=$this->content['contact'];?><i class="flaticon-slim-right"></i></a>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 form-column">
        <div class="form-inner" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1500">
          <h3><?=$this->content['Sign_up_for_updates'];?></h3>
          <form action="#" method="post" class="subscribe-form">
            <div class="form-group">
              <input type="email" name="email" placeholder="Email Address" required="">
              <button type="submit"><?=$this->content['Subscribe'];?></button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- subscribe-style-three end -->
<?php include('includes/footer.php'); ?>