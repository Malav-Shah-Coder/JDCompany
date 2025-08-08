<?php include('includes/header.php'); ?>
<!-- contact-banner -->
<section class="contact-banner centred" style="background-image: url(uploads/about/<?= $this->about['image']; ?>);">
	<div class="container">
		<div class="content-box">
			<h1><?=$this->category[0][$_SESSION['lang'].'title']; ?></h1>
		</div>
	</div>
</section>
<!-- contact-banner end -->
<!-- about-style-five strat -->
<section class="about-style-five about-sect">
	<div class="container">
		<div class="inner-container jd-gallery">
			<div class="row jd-gallery-row mb-4">
				<div class="filters">
					<ul class="filter-tabs filter-btns centred clearfix">
						<?php foreach($this->category as $item) { ?>
						<li class="<?php if($this->selected_cat_id==$item['id']){ echo 'active';} ?> filter"><a href="gallery/<?=$item['slug'];?>.html"><?=$item[$_SESSION['lang'].'title'];?></a></li>
						<?php } ?>
					</ul>
				</div>
			</div>

			<div class="title-box" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1500">
				<?php //$this->category[0][$_SESSION['lang'].'short_desc']; ?>
				<?=$this->setViewDescription; ?>
			</div>
			<?php if(count($this->category_images)>0) { ?>
			<!-- image-gallery -->
			<section class="image-gallery pt-0">
				<div class="container-fluid">
					<div class="row">
						<?php foreach($this->category_images as $key=>$value) { ?>
						<div class="col-lg-3 col-md-4 col-sm-12 gallery-block">
							<div class="single-item">
								<figure class="image-box"><a href="uploads/csr/<?=$value['image'];?>" class="lightbox-image" data-fancybox="gallery"><img src="uploads/csr/<?=$value['image'];?>" alt=""></a></figure>
							</div>
						</div>
						<?php } ?>
					</div>
				</div>
			</section>
			<!-- image-gallery end -->
			<?php } ?>

		</div>
	</div>
</section>

<!-- about-style-five end -->
<?php include('includes/footer.php'); ?>