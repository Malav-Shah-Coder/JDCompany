<?php include('includes/header.php'); ?>
<!-- contact-banner -->
<section class="contact-banner centred" style="background-image: url(assets/image/background/page-title-10.jpg);">
  <div class="container">
    <div class="content-box">
      <h1><?= $this->product_detail[$_SESSION['lang'] . 'name']; ?></h1>
    </div>
  </div>
</section>
<!-- contact-banner end -->
<!-- contact-info-section strat -->
<section class="single-service sidebar-page-container">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
        <div class="sidebar service-sidebar">
          <div class="categories-widget sidebar-widget wow fadeInLeft animated" data-wow-delay="00ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
            <h3 class="widget-title"><?= $this->content['products']; ?></h3>
            <ul class="categories-list">
              <?php foreach ($this->product as $key => $value) { ?>
                <li><a href="detail/<?= $value['slug']; ?>.html"><?= $value[$_SESSION['lang'] . 'name']; ?></a></li>
              <?php } ?>
            </ul>
          </div>
          <?php if ($this->gs['contact_number'] != '') { ?>
            <div class="support-widget sidebar-widget wow fadeInLeft animated d-none" data-wow-delay="00ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
              <div class="upper-box">
                <h3><?= $this->content['Any_Emergency']; ?></h3>
                <div class="text"><?= $this->content['Call_our']; ?></div>
                <h3 class="phone"><a href="tel:<?= $this->gs['contact_number']; ?>"><?= $this->gs['contact_number']; ?></a></h3>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
      <div class="col-lg-8 col-md-12 col-sm-12 content-side">
        <div class="single-service-content">
          <div class="service-box">
            <div class="inner-box">
              <?php if ($this->product_detail['detail_banner'] != '') {
                $margin = 'mt-5';
              ?>
                <figure class="image-box"><img src="uploads/product/<?= $this->product_detail['detail_banner']; ?>" alt=""></figure>
              <?php } else {
                $margin = 'mt-0';
              } ?>
              <div class="content-box <?= $margin; ?>">
                <div class="text">
                  <?= $this->product_detail[$_SESSION['lang'] . 'desc']; ?>
                </div>
              </div>

              <?php if (count($this->product_image) > 0) { ?>
                <div class="content-box mt-1">
                  <div class="type-cotton-1">
                    <ul>
                      <?php foreach ($this->product_image as $key => $value) { ?>
                        <li><?= $value[$_SESSION['lang'] . 'text']; ?> <a onclick="loadProductDetail(<?= $value['id']; ?>)"><?= $value[$_SESSION['lang'] . 'button_name']; ?></a></li>
                      <?php } ?>
                    </ul>
                  </div>
                </div>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- contact-info-section end -->

<!-- Modal -->
<div class="modal fade" id="askEmail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Verify Email</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!-- <div class="modal-text-tittle">
         <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
      </div> -->
      <div class="modal-body">
        <div class="contact-section pt-0 pb-0">
          <div class="row">
            <div class="col-md-12 col-sm-12 form-column">
              <div class="contact-form-area SendEmailOtpDiv">
                <form method="post" id="email-verify-form" name="email-verify-form" class="default-form" novalidate="novalidate">
                  <div class="form-group">
                    <label>Enter Your Name*</label>
                    <input type="text" name="VerifyName" id="VerifyName" placeholder="Enter Your Name*" required="" aria-required="true">
                  </div>
                  <div class="form-group">
                    <label>Enter Email*</label>
                    <input type="text" name="emailVerify" id="emailVerify" placeholder="Enter Email*" required="" aria-required="true">
                    <input type="hidden" name="emailVerifyProductId" id="emailVerifyProductId" />
                  </div>
                  <div class="form-group">
                    <label>Enter Mobile*</label>
                    <input type="text" name="VerifyMobile" id="VerifyMobile" placeholder="Enter Your Mobile*" class="required number" required="" aria-required="true">
                  </div>
                  <div class="form-group">
                    <label>Enter Your Company Name</label>
                    <input type="text" name="VerifyCompanyName" id="VerifyCompanyName" placeholder="Enter Your Company Name">
                  </div>
                  <div class="form-group message-btn modal-btn">
                    <button type="submit" class="theme-btn" name="email-verify-submit">Send Email</button>
                  </div>
                </form>
              </div>

              <div class="contact-form-area VerifyOtpFormDiv" style="display: none;">
                <form method="post" id="VerifyOtpForm" name="VerifyOtpForm" class="default-form" novalidate="novalidate">
                  <div class="form-group">
                    <label>Enter OTP</label>
                    <input type="text" name="VerifyOtp" id="VerifyOtp" placeholder="Enter OTP*" class="required number" required="" aria-required="true">
                    <input type="hidden" name="otpVerifyID" id="otpVerifyID" />
                  </div>
                  <div class="form-group message-btn modal-btn">
                    <button type="submit" class="theme-btn" name="otp-verify-submit">Submit</button>
                  </div>
                </form>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="ShowImage" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="contact-section pt-0 pb-0">
          <div class="row">
            <div class="col-md-12 col-sm-12 form-column">
              <img src="" class="ShowImageDiv" style="width: 100%;" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->

<?php include('includes/footer.php'); ?>