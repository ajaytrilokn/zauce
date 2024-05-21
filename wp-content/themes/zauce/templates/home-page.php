<?php 
/*
Template Name:Home Page Template
*/ 
get_header();

$FAQ = fetch_faq_data();

?>
<!-- Content Start -->
		<!-- 	<div class="page-loader">
				<div class="moderspinner"></div>
			</div> -->
			<section class="banner-sec" >
				<div class="banner-wrap">
					<div class="container">
						<div class="row ">
							<div class="col-lg-6 col-md-6 col-sm-12 col-12 animatedParent animateOnce" >
								<div class="banner-text animated fadeInUpShort" id="app-link-main">
									<div class="text-star">
										<?php echo the_field('banner_heading');?>
										<div class="star-img-1">
											<?php  $star = get_field('banner_star_image') ?>
											<img class="animated bounceIn  slower"  src="<?php echo $star['url'];?>" alt="#">
										</div>
									</div>
									<p><?php echo the_field('banner_text');?></p> 
									<div class="banner-btn">
										<ul>
											<li><a href="#" class="animated bounceIn slow">
                                            <?php $appStore = get_field('app_store_image','option');
                                                  $playStore = get_field('play_store_image','option');  
                                            ?>    
                                            <img src="<?php echo $appStore['url'];?>" alt="#">
                                        </a></li>
											<li><a href="#" class="animated bounceIn slow">
                                                <img src="<?php echo $playStore['url'];?>" alt="#">
                                            </a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12 col-12 animatedParent animateOnce">
								<div class="banner-img-wp">
									<div class="banner-img animated fadeInRight slow">
										<?php $bannerImg = get_field('banner_right_image');?>
										<img src="<?php echo $bannerImg['url'];?>" alt="#">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="about-sec" id="About">
				<div class="about-wrap">
					<div class="container">
						<div class="about-main">
							<div class="row flex-md-row-reverse align-items-center">
								<div class="col-lg-6 col-md-12 col-sm-12 col-12">
									<div class="about-text-wrap ">
										<div class="section-title animatedParent animateOnce">
											<h3 class="animated fadeInUpShort">
											<span class="logo-icon">
												<?php echo the_field('about_heading_text1');
												$heartImg = get_field('about_heading_image');
												?><img src="<?php echo $heartImg['url'];?>" alt="#"></span><?php echo the_field('about_heading_text2');?>
											</h3>
										</div>

										<div class="about-text-inner animatedParent animateOnce " data-sequence="400">
											<?php echo the_field('about_text');?>
											<div class="about-text-box animated fadeInRightShort" data-id="3">
												<div class="download_app_wp">
													<h6><?php echo the_field('download_heading');?></h6>
													<div class="download_app-link d-flex align-items-center">
														<?php $downloadApp = get_field('download_image1');
															$downloadPlay = get_field('download_image2');
															$aboutLeftimg = get_field('about_left_image');
															?>
														<a href="#" class="app-link me-4 mt-3"><img src="<?php echo $downloadApp['url'];?>" alt="#"> </a>
														<a href="#" class="app-link me-4 mt-3"><img src="<?php echo $downloadPlay['url'];?>" alt="#"> </a>
													</div>
												</div>
											</div>				
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-12 col-sm-12 col-12">
									<div class="about-img-wrap animatedParent animateOnce">
										<div class="about-img animated fadeInLeft slower">
											<img src="<?php echo $aboutLeftimg['url'];?>" alt="#">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="features-sec black-bg-overlay" id="Features">
				<div class="features-inner">
					<div class="container">
						<div class="features-wrap">
							<div class="section-title text-center animatedParent animateOnce">
								<h2 class="animated fadeInUpShort white_text"><?php echo the_field('feature_heading');?></h2>
							</div>
							<div class="features-wp">
								<div class="features-row">
									<div class="features-slider">
										<?php 
										if(have_rows('features_list')) :
											while(have_rows('features_list')):the_row();
										?>
										<div class="features-colwp">
											<div class="features-col">
												<div class="features-img">
													<?php $featureImg = get_sub_field('feature_list_image');?>
													<img src="<?php echo $featureImg['url'];?>" alt="#" class="features-thumb">
												</div>
												<div class="features-content-wp">
													<div class="features-content">
														<h2 class="white_text"><?php echo get_sub_field('feature_list_heading');?></h2>
														<h5 class="white_text font-we-rg"><?php echo get_sub_field('feature_list_text');?></h5>
													</div>
												</div>
											</div>
										</div>
										<?php
									   endwhile;
									else:
									endif;
										?>
									</div>		
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="faqs-section" id="faqs">
			    <div class="faqs-sec">
			        <div class="container">
			          <div class="row">
			            <div class="col-lg-6 col-md-5 col-sm-12 col-12">
			            	<div class="faqs-sec-left">
				            	<div class="section-title animatedParent animateOnce">
				                	<h3 class="animated fadeInUpShort slow"><?php echo the_field('frequently_heading');?></h3>
				            	</div>
				                <div class="download_app-main animatedParent animateOnce">
				                	<p class="animated fadeInUpShort slow">Download App</p>
									<a href="#" class="app_icon animated fadeInUpShort slow"><img src="<?php echo bloginfo('template_directory');?>/assets/images/app-icon.png" alt=""> </a>
									<a href="#" class="app_icon animated fadeInUpShort slow"><img src="<?php echo bloginfo('template_directory');?>/assets/images/google-pay-icon.png" alt=""> </a>
								</div>
							</div>
			            </div>
			            <div class="col-lg-6 col-md-7 col-sm-12 col-12">
				<!-- <?php the_content();?> -->
				<div class="faqs_accordion accordion" id="faq-accordion">
					<?php if (!empty($FAQ)):
					// print_r($FAQ);
					$i = 1;
					{
					foreach($FAQ as $FAQS):
								{
									
								?>
									<div class="card-main animatedParent animateOnce">
										  <div class="card-head animated fadeInUpShort" id="heading<?php echo $i; ?>_faq">
											<p class="mb-0 collapsed" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $i; ?>_faq" aria-expanded="<?php if($i==1){echo 'true';} ;?>" aria-controls="collapse<?php echo $i; ?>_faq"><?php echo $FAQS->question;?></p>
										  </div>
										  <div id="collapse<?php echo $i; ?>_faq" class="collapse <?php if($i==1){echo 'show';} ?> animated fadeInUpShort" aria-labelledby="heading<?php echo $i; ?>_faq" data-bs-parent="#faq-accordion">
											<div class="card-body-main">
												  <p><?php echo nl2br(htmlspecialchars($FAQS->answer));?></p>
											</div>
										  </div>
									</div>
									<?php
									}
							$i++;		
							endforeach;
						}
					else:
					endif;
								
								?>
							</div>	
			            </div>
			          </div>
			        </div>
			    </div>
		    </section>
			<section class="contact-us-sec" id="Contact">
				<div class="contact-us-inner">
					<div class="container">
						<div class="contact-us-wrap">
							<div class="contactUs-content row align-items-center">
								<div class="col-lg-6 col-md-5 col-sm-12 col-12">						
									<div class="section-title animatedParent animateOnce">
										<div class="animated fadeInUpShort">
											<h5 class="font-we-rg">Contact Us</h5>
											<h3 class="font-we-blk">Get in touch with us</h3>
										</div>
									</div>
								</div>	
								<div class="col-lg-6 col-md-7 col-sm-12 col-12">
									<div class="contact-link-main">
										<div class="contact-wrap">
											<div class="contact-row">
												<div class="contact-title"><h5 class="theme-text">General</h5></div>
												<div class="content-links">
													<a href="mailto:info@zauce.com" class="contact-link"><h5 class="font-we-rg">info@zauce.com</h5></a>
												</div>
											</div>
											<div class="contact-row">
												<div class="contact-title"><h5 class="theme-text_2">Tech Support</h5></div>
												<div class="content-links">
													<a href="mailto:support@zauce.com" class="contact-link"><h5 class="font-we-rg theme-text_2hover">support@zauce.com</h5></a>
												</div>
											</div>
											<div class="contact-row">
												<div class="contact-title"><h5 class="gray_text">Business</h5></div>
												<div class="content-links">
													<a href="mailto:business@zauce.com" class="contact-link"><h5 class="font-we-rg theme-text_2hover">business@zauce.com</h5></a>
												</div>
											</div>
											<div class="contact-row">
												<div class="contact-title"><h5>Social</h5></div>
												<div class="content-links">
													<div class="social-media">
														<ul class="social-link">
															<li>
																<a href="#" class="social-icon">
																	<img class="icon-1" src="<?php echo bloginfo('template_directory');?>/assets/images/social-media/facebook-icon.png" alt="#">
																	<img class="icon-2" src="<?php echo bloginfo('template_directory');?>/assets/images/social-media/facebook-icon.png" alt="#">  
																</a> 
															</li>
															<li>
																<a href="#" class="social-icon">
																	<img class="icon-1" src="<?php echo bloginfo('template_directory');?>/assets/images/social-media/twitter.png" alt="#">
																	<img class="icon-2" src="<?php echo bloginfo('template_directory');?>/assets/images/social-media/twitter.png" alt="#">  
																</a> 
															</li>
															<li>
																<a href="#" class="social-icon">
																	<img class="icon-1" src="<?php echo bloginfo('template_directory');?>/assets/images/social-media/instagram.png" alt="#">
																	<img class="icon-2" src="<?php echo bloginfo('template_directory');?>/assets/images/social-media/instagram.png" alt="#">  
																</a> 
															</li>
															<li>
																<a href="#" class="social-icon">
																	<img class="icon-1" src="<?php echo bloginfo('template_directory');?>/assets/images/social-media/youtube.png" alt="#">
																	<img class="icon-2" src="<?php echo bloginfo('template_directory');?>/assets/images/social-media/youtube.png" alt="#">  
																</a> 
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>	
							</div>
							<div class="contactUs-content row align-items-center">
								<div class="col-lg-6 col-md-5 col-sm-12 col-12">						
									<div class="section-title animatedParent animateOnce">
										<div class="animated fadeInUpShort">
											<h5 class="font-we-rg">Become a</h5>
											<h3 class="font-we-blk">Affiliate / Partner</h3>
										</div>
									</div>									
								</div>	
								<div class="col-lg-6 col-md-7 col-sm-12 col-12">
									<div class="contact-btn-main text-end">
										<button class="btn" data-bs-toggle="offcanvas" data-bs-target="#affiliate" aria-controls="affiliate">Become affiliate / partner</button>
									</div>
								</div>	
							</div>
							<div class="contactUs-content row align-items-center" id="joinzauce">
								<div class="col-lg-6 col-md-5 col-sm-12 col-12">						
									<div class="section-title animatedParent animateOnce">
										<div class="animated fadeInUpShort">
											<h5 class="font-we-rg">Career</h5>
											<h3 class="font-we-blk">Join Zauce</h3>
										</div>
									</div>									
								</div>	
								<div class="col-lg-6 col-md-7 col-sm-12 col-12">
									<div class="contact-btn-main text-end">
										<button class="btn black-btn" data-bs-toggle="offcanvas" data-bs-target="#join_now" aria-controls="join_now">Join Now</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section>
				<div class="app-screenshot-sec gradient-bg" id="app-screenshot">
					<div class="container-fluid">
						<!-- <div class="section-title animatedParent animateOnce text-center">
							<h2 class="animated fadeInUpShort">App Screenshot </h2>
						</div> -->
						<div class="app-screenshot-wrap">
							<div class="app-screenshot-slider">
								<?php
								if(have_rows('image_slider')):
									while(have_rows('image_slider')):the_row();
									$sliderImage = get_sub_field('s_images');
								?>
								<div class="screenshot">
									<img src="<?php echo $sliderImage['url'];?>" alt="#">
								</div>
								<?php
								endwhile;
							else:
							endif;
								?>
							</div>
						</div>
						<div class="app-links-center">
							<div class="banner-btn">
								<ul>
									<li><a href="#" class="animated bounceIn slow"><img src="<?php echo $appStore['url'];?>" alt="#"></a></li>
									<li><a href="#" class="animated bounceIn slow"><img src="<?php echo $playStore['url'];?>" alt="#"></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Content End -->
		</div>
		<script>
		
		</script>
<?php

get_footer();

?>
