<?php include('includes/header.php'); ?>
<!-- contact-banner -->
<section class="contact-banner centred" style="background-image: url(uploads/about/<?=$this->about['image'];?>);">
	<div class="container">
		<div class="content-box">
			<h1><?=$this->about[$_SESSION['lang'].'page_heading'];?></h1>
			<h3><?=$this->about[$_SESSION['lang'].'page_desc'];?></h3>
		</div>
	</div>
</section>
<!-- contact-banner end -->
<!-- about-style-five strat -->
<section class="about-style-five about-sect">
	<div class="container">
		<div class="inner-container">
			<div class="title-box" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1500">
				<?=$this->about[$_SESSION['lang'].'page_about'];?>
			</div>
			<div class="upper-content">
				<div class="row">
					<div class="col-lg-8 col-md-12 col-sm-12 image-column">
						<figure class="image-box"><img src="uploads/about/<?=$this->about['about_image'];?>" alt=""></figure>
					</div>
					<div class="col-lg-4 col-md-12 col-sm-12 content-column">
						<div class="content-box wow fadeInRight animated" data-wow-delay="300ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 300ms; animation-name: fadeInRight;">
							<div class="icon-box"><i class="flaticon-script"></i></div>
							<?=$this->about[$_SESSION['lang'].'box1'];?>
						</div>
					</div>
				</div>
			</div>
			<div class="lower-content counter-style-two">
				<div class="row">
					<div class="col-lg-5 col-md-12 col-sm-12 left-column">
						<div class="content-box wow fadeInLeft animated" data-wow-delay="300ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 300ms; animation-name: fadeInLeft;">
							<div class="icon-box"><i class="flaticon-action"></i></div>
							<?=$this->about[$_SESSION['lang'].'box2'];?>
						</div>
					</div>
					<div class="col-lg-7 col-md-12 col-sm-12 inner-column">
						<div class="inner-box">
							<div class="counter-outer">
								<div class="counter-block-one wow zoomIn animated" data-wow-delay="500ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 500ms; animation-name: zoomIn;">
									<div class="text mb-4"><?=$this->about[$_SESSION['lang'].'title1'];?></div>
									<div class="scrolling-words-container">
										<div class="scrolling-words-box">
											<ul>
												<?php $values=explode(',',$this->about[$_SESSION['lang'].'title1_val']); ?>
												<?php foreach ($values as $val) { ?>
												<li><?=trim($val);?></li>
												<?php } ?>
											</ul>
										</div>
									</div>
								</div>
								<div class="counter-block-one wow zoomIn animated" data-wow-delay="00ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: zoomIn;">
									<div class="text mb-4"><?=$this->about[$_SESSION['lang'].'title2'];?></div>
									<div class="scrolling-words-container">
										<div class="scrolling-words-box">
											<ul>
												<?php $values=explode(',',$this->about[$_SESSION['lang'].'title2_val']); ?>
												<?php foreach ($values as $val) { ?>
												<li><?=trim($val);?></li>
												<?php } ?>
											</ul>
										</div>
									</div>
								</div>
								<div class="counter-block-one wow zoomIn animated" data-wow-delay="500ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 500ms; animation-name: zoomIn;">
									<div class="text mb-4"><?=$this->about[$_SESSION['lang'].'title3'];?></div>
									<div class="scrolling-words-container">
										<div class="scrolling-words-box">
											<ul>
												<?php $values=explode(',',$this->about[$_SESSION['lang'].'title3_val']); ?>
												<?php foreach ($values as $val) { ?>
												<li><?=trim($val);?></li>
												<?php } ?>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- about-style-five end -->


<?php if(count($this->images)>0) { ?>
<!-- gallery -->
<section class="project-style-three pt-0 pt-md-4 ">
	<div class="large-container">
		<div class="sec-title centred pb-md-4">
			<h1>GALLERY</h1>
		</div>
		<div class="carousel-content">
			<div class="four-item-carousel owl-carousel owl-theme">
				<?php foreach($this->images as $key=>$value) { ?>
				<div class="project-block-three">
					<div class="inner-box">
						<div class="image-box">
							<figure class="image"><img src="uploads/csr/<?=$value['image'];?>" alt=""></figure>
							<a href="uploads/csr/<?=$value['image'];?>" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-add"></i></a>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
</section>
<!-- gallery -->
<?php } ?>
    
    
<?php include('includes/footer.php'); ?>