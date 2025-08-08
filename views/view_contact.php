<?php include('includes/header.php'); ?>
<!-- contact-banner -->
<section class="contact-banner centred" style="background-image: url(uploads/contact/<?=$this->contact['header_image'];?>);">
	<div class="container">
		<div class="content-box">
			<h1><?=$this->contact[$_SESSION['lang'].'page_heading'];?></h1>
			<h3><?=$this->contact[$_SESSION['lang'].'page_desc'];?></h3>
		</div>
	</div>
</section>
<!-- contact-banner end -->
<!-- contact-info-section strat -->
<section class="contact-info-section contact-page-1">
	<div class="container">
		<div class="row">
			<?php foreach($this->contact_addresses as $key=>$value) { ?>
			<div class="col-md-6 col-sm-12 info-column" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1500">
				<div class="single-info-box">
					<h3><?=$value[$_SESSION['lang'].'head'];?></h3>
					<div class="contact-icon d-flex">
						<div class="icon-box"><i class="flaticon-location"></i></div>
						<div class="contact-text">
							<div class="text text-justify"><?php echo nl2br($value[$_SESSION['lang'].'address']);?> </div>
						</div>
					</div>
					<?php if($value['phone1']!='') { ?>
					<div class="contact-icon d-flex ">
						<div class="icon-box"><i class="flaticon-telephone"></i></div>
						<div class="contact-text d-flex align-items-center">
							<div class="text"><a href="tel:<?=$value['phone1'];?>"><?=$value['phone1'];?></a></div>
						</div>
					</div>
					<?php } ?>
					<?php if($value['phone2']!='') { ?>
					<div class="contact-icon d-flex ">
						<div class="icon-box"><i class="flaticon-telephone"></i></div>
						<div class="contact-text d-flex align-items-center">
							<div class="text"><a href="tel:<?=$value['phone2'];?>"><?=$value['phone2'];?></a></div>
						</div>
					</div>
					<?php } ?>
					<?php if($value['email1']!='') { ?>
					<div class="contact-icon d-flex">
						<div class="icon-box"><i class="flaticon-envelope"></i></div>
						<div class="contact-text d-flex align-items-center">
							<div class="text"><a href="mailto:<?=$value['email1'];?>"><?=$value['email1'];?></a></div>
						</div>
					</div>
					<?php } ?>
					<?php if($value['email2']!='') { ?>
					<div class="contact-icon d-flex">
						<div class="icon-box"><i class="flaticon-envelope"></i></div>
						<div class="contact-text d-flex align-items-center">
							<div class="text"><a href="mailto:<?=$value['email2'];?>"><?=$value['email2'];?></a></div>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</section>
<!-- contact-info-section end -->
<section class="contact-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12 col-sm-12 form-column" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1500">
				<div class="contact-form-area">
					<h2><?=$this->contact[$_SESSION['lang'].'contact_head'];?></h2>
					<p><?=$this->contact[$_SESSION['lang'].'contact_desc'];?></p>
					<form method="post" action="" name="contact-form" id="contact-form" class="default-form" novalidate="novalidate">
						<div class="row">
							<div class="col-md-6 py-3">
								<div class="form-group">
									<input type="text" name="first_name" id="first_name" placeholder="First Name*" required="" aria-required="true">
								</div>
							</div>
							<div class="col-md-6 py-3">
								<div class="form-group">
									<input type="text" name="last_name" id="last_name" placeholder="Last Name*" required="" aria-required="true">
								</div>
							</div>
							<div class="col-md-6 py-3">
								<div class="form-group">
									<input type="email" class="required email" name="email" id="email" placeholder="Your Email*" required="" aria-required="true">
								</div>
							</div>
							<div class="col-md-6 py-3">
								<div class="form-group">
									<input type="text"  class="required number" name="phone" id="phone" placeholder="Phone number" required="" aria-required="true">
								</div>
							</div>
							<div class="col-md-12 py-3">
								<div class="form-group">
									<textarea name="message" id="message" placeholder="Your Message"></textarea>
								</div>
							</div>
							<div class="col-md-12 py-3">
								<div class="form-group message-btn">
									<button type="submit" class="theme-btn submit-form" name="submit-form" id="submit-form">Submit</button>
								</div>
							</div>
							<div class="col-md-12 py-3 contact-form-msg">
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="col-lg-6 col-md-12 col-sm-12 map-column">
				<div data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1500">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.728392258017!2d72.50365087253978!3d23.03374279832493!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e9b826764066d%3A0x3dcc04fba3241652!2sJD%20Merchandise%20PVT%20LTD!5e0!3m2!1sen!2sin!4v1693826149704!5m2!1sen!2sin" width="600" height="623" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
			</div>
		</div>
	</div>
</section>
<?php include('includes/footer.php'); ?>