<!-- ====== FOOTER BOC ====== -->
<footer>
	<div class="footer-main">
		<div class="container">
			<div class="footer-text">
				<div class="footer-left">
					<p>© <?php echo date('Y');?> <?php echo the_field('copyrights_text', 'option'); ?></p>
				</div>
				<div class="footer-right">
					<div class="banner-btn footer-btn">
						<ul>
							<?php wp_nav_menu(array('theme_location' => 'footer-menu')); ?>
						</ul>
					</div>
				</div>
				<div class="footer-right">
					<h5>Developed by</h5>
					<div class="developed-by-img"><a href="https://www.appgurus.com.au/" target="_blank">
					<?php $footerLogo = get_field('footer_logo_image','option');?>
					<img src="<?php echo $footerLogo['url'];?>" alt="">
					</a></div>
				</div>

			</div>
		</div>
	</div>
</footer>
<!-- ====== FOOTER End ====== -->

<style type="text/css">
	.footer-main .footer-text .footer-left p {
		text-align: left;
	}

	.footer-main .footer-text {
		display: flex;
		justify-content: space-between;
		align-items: center;
		flex-wrap: wrap;
	}

	.footer-main .footer-text .footer-right {
		display: flex;
	}

	.footer-main .footer-text .footer-right .developed-by-img {
		width: 191px;
		height: 38px;
	}

	.footer-main .footer-text .footer-right h5 {
		color: #fff;
		margin-bottom: 0px;
		font-size: 20px;
		font-weight: 400;
		line-height: 38px;
		height: 38px;
		padding-top: 6px;
		padding-right: 10px;
	}

	@media (max-width:1199px) {
		.footer-main .footer-text .footer-right h5 {
			font-size: 18px;
			line-height: 28px;
			height: 33px;
			padding-top: 4px;
		}

		.footer-main .footer-text .footer-right .developed-by-img {
			width: 155px;
			height: 33px;
		}

		.banner-btn.footer-btn ul li a {
			font-size: 16px;
		}
	}



	@media (max-width:991px) {
		.footer-main .footer-text {
			padding: 15px 0px;
		}

		.footer-main .footer-text .footer-left {
			width: 100%;
		}

		.footer-main .footer-text .footer-right {
			width: 100%;
			justify-content: center;
			padding-top: 10px;
			padding-bottom: 5px;
		}

		.footer-main .footer-text .footer-left p {
			text-align: center;
		}

		.footer-main .footer-text .footer-right h5 {
			font-size: 16px;
			line-height: 28px;
			height: 30px;
			padding-top: 3px;
		}

		.footer-main .footer-text .footer-right .developed-by-img {
			width: 141px;
			height: 30px;
		}
	}
</style>

<div class="sidebar_main offcanvas offcanvas-end" tabindex="-1" id="affiliate" aria-labelledby="affiliateLabel">
	<div class="offcanvas-header pb-0">
		<h3>Become <br>Affiliate / Partner</h3>
		<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
	</div>

	<div class="offcanvas-body" id="sidebar_form_info">
		<div class="sidebar_form_wp">
			<div class="sidebar_form" id="become_ap_form">
				<div class="findout_more_wp">
					<p class="gray_text">If you would like to become an affiliate or partner,
						<a href="javascript:void(0)" class="findmore-click font-we-bl text-underline black_text">find
							out more.</a>
					</p>
				</div>
				<form id="becomezauce" method="post" enctype="multipart/form-data">
						<div class="form-group-logo">
			              	<div class="company-logo-main">
			                	<div class="uploadOuter">
			                  		<span class="dragBox" >
					                    <div class="dragBox-text">
					                        <div class="uploads-icon"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/upload-icon.png" alt="#"><div id="preview"></div></div>
					                        <div class="uploads-right">
					                        	<div class="logo-title">Upload Logo</div>
					                        	<div><span class="theme-text font-we-bl">Browse</span> or Drag and Drop</div>
					                        </div>
					                    </div>
					                    <input type="file" name="uploadFile" onChange="dragNdrop(event)"  ondragover="drag()" ondrop="drop()" id="uploadFile"  />
										<input type="hidden" name="fileurl" id="fileurl" value="" />
			                  		</span>
			                	</div>
								<!-- <div id="errorMessage" style="color: red;"></div> -->
			              	</div>
			            </div>	
				        <div class="form-main">
							<div class="form-main-inner">
								<div class="form-group">
									<div class="form-input">
										<input type="text" name="name" id="name" class="form-control" placeholder="Name">
									</div>	
								</div>
								<div class="form-group">
									<div class="form-input"> 
										<div class="phone-field-wrapper">
										<input type="text" maxlength="14" name="phone" id="phone"  class="form-control" placeholder="Phone">
										<!-- <span id="phoneHoverInfo" class="hover-info">+61</span> -->
										</div>
									</div>	
								</div>
								
								<div class="form-group">
									<div class="form-input">
										<input type="email" name="email" id="email" class="form-control" placeholder="Email">
									</div>	
								</div>
								<div class="form-group">
									<div class="form-input">
										<input type="text" name="url" id="url" class="form-control" placeholder="Website Link">
									</div>	
								</div>
								
								<div class="form-group">
									<div class="form-input">
										<input type="text" name="business" id="business" class="form-control" placeholder="Business / Company Name">
									</div>	
								</div>
								<div class="form-btn-main">
									<div class="btn-wp">
										<!-- <input type="submit" onclick="uploadImage()" value="submit" class="btn theme-btn" /> -->
										<button type="submit" onclick="uploadImage()" id="addSpinner" class="btn theme-btn spin">Submit <span class=""></span></button>
									</div>
								<div class="successmessage"></div>
								</div>
							</div>
						</div>
				</form>
			</div>
			<div class="sidebar_form_info" id="findout_info">
				<div class="findout_text_main">
					<div class="findout_text_wp">
						<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
							invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam
							et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea</p>

						<p class="font-we-bl">Lorem ipsum dolor sit amet, consetetur sadipscing idunt ut elitr, sed diam
							nonumy eirmod tempor ii labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos
							et accusam et justo duo dolores et ea rebum.</p>

						<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
							invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam
							et justo duo dolores et ea rebum.</p>
					</div>

					<div class="form-btn-main">
						<div class="btn-wp"><button type="button" class="btn findmore-click theme-btn">Apply
								Now</button></div>
					</div>
				</div>
			</div>
		</div>

	</div>

</div>

<div class="sidebar_main offcanvas offcanvas-end" tabindex="-1" id="join_now" aria-labelledby="join_nowLabel">
	<div class="offcanvas-header ">
		<h3>Join the team</h3>
		<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
	</div>
	<div class="offcanvas-body">
		<form id="joinzauceteam" method="post">				
		        <div class="form-main">
					<div class="form-main-inner">
						<div class="row">						
							<div class="col-lg-6 col-md-6 col-sm-12 col-12">
								<div class="form-group">
									<div class="form-input">
										<input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name">
									</div>	
								</div>
							</div>	
							<div class="col-lg-6 col-md-6 col-sm-12 col-12">
								<div class="form-group">
									<div class="form-input">
										<input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name">
									</div>	
								</div>
							</div>	
							<div class="col-lg-6 col-md-6 col-sm-12 col-12">
								<div class="form-group">
									<div class="form-input">
										<input type="text" name="country" id="country" class="form-control" placeholder="Country">
									</div>	
								</div>
							</div>	
							
							<div class="col-lg-6 col-md-6 col-sm-12 col-12">
								<div class="form-group">
									<div class="form-input">
										<input type="text" name="city" id="city" class="form-control" placeholder="City">
									</div>	
								</div>
							</div>	

							<div class="col-lg-6 col-md-6 col-sm-12 col-12">
								<div class="form-group">
									<div class="form-input">
										<input type="date" onfocus="(this.type='date')" onblur="(this.type='text')" name="dob" id="dob" class="form-control" placeholder="D.O.B">
									</div>	
								</div>
							</div>	

							<div class="col-lg-6 col-md-6 col-sm-12 col-12">
								<!-- <div class="form-group">
									<div class="form-input">
										<input type="text" class="form-control" placeholder="Role">
									</div>	
								</div> -->

								<div class="form-group">
									<div class="form-input">
										<select class="form-control" name="role" id="role">
				                          	<option value="none"  selected="" disabled="" hidden="">Role</option>
				                        	<option value="role_1">Social Media Marketing</option>
				                        	<option value="role_2">Designer / Content Creator</option>
				                        	<option value="role_3">PR / Communications </option> 
				                        	<option value="role_4">Sales / Business Development </option>
				                        	<option value="role_5">Other</option>
				                      	</select>
									</div>
								</div>
							</div>	
						</div>
						<div class="social_linkmain">
							<div class="form-group">
								<div class="form-sub-title">
									<h4 class="font-we-blk">Social Links</h4>
								</div>
							</div>
							<div class="form-group">
								<div class="form-input">
									<input type="text" name="link1" id="link1" class="form-control" placeholder="Social Links 1">
								</div>	
							</div>
							<div class="form-group">
								<div class="form-input">
									<input type="text" name="link2" id="link2" class="form-control" placeholder="Social Links 2">
								</div>	
							</div>
							<div class="form-group">
								<div class="form-input">
									<input type="text" name="link3" id="link3" class="form-control" placeholder="Social Links 3">
								</div>	
							</div>
						</div>
						
						<div class="form-btn-main">
						<!-- <div class="btn-wp"><button type="button" class="btn btn-border" id="closeBtn" data-bs-dismiss="modal">Cancel</button></div> -->
							<div class="btn-wp">
							<button type="submit" id="addSpinner" class="btn theme-btn spin">Submit <span class=""></span></button>
							</div>
						</div>
						<div class="form-btn-main">
								<div class="successmessage"></div>
							</div>
					</div>
				</div>
		</form>
	</div>
</div>
<?php

wp_footer();

?>
</body>
<!-- 	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.js"></script> 
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js"></script> 
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js"></script> 
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/plugins/ScrollToPlugin.min.js"></script>  -->

<!-- <script type="text/javascript">
		var ctrl = new ScrollMagic.Controller({});

		// This each sets the animation
		$(window).on("scroll", function () {
		  console.log($(window).scrollTop());
		});
		$(".features-colwp").each(function (index, element) {
		  ////////// scroll up //////////

		  new ScrollMagic.Scene({
			triggerHook: 0,
			triggerElement: this,
			offset: -50 // small offset added to prevent overscrolling accidentally triggering
		  })
			.on("leave", function () {
			  console.log("scroll up = ", index);
			  TweenLite.to(window, 0.5, {
				scrollTo: {
				  y:
					$(window).height() * (index - 1) +
					$(".features-slider").offset().top,
				  autoKill: false
				},
				ease: Linear.easeNone
			  });
			})
			.addTo(ctrl); // scene end

		  //////////scroll down //////////

		  new ScrollMagic.Scene({
			triggerElement: this,
			triggerHook: 0,
			offset: 50 // small offset added to prevent overscrolling accidentally triggering
		  })
			.on("enter", function () {
			  console.log(
				"scroll down = ",
				$(window).height() + " * (" + index + "+1)+" + $(window).scrollTop(),
				$(window).height() * (index + 1) + $(window).scrollTop()
			  );
			  TweenLite.to(window, 0.5, {
				scrollTo: {
				  y:
					$(window).height() * (index + 1) +
					$(".features-slider").offset().top,
				  autoKill: false
				},
				ease: Linear.easeNone
			  });
			})
			.addTo(ctrl); 
		}); 

	</script>
 -->
 

 <!-- Validate Logo Upload -->

 <!-- <script>
    document.getElementById('becomezauce').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the form from submitting normally

        const fileInput = document.getElementById('uploadFile');
        const errorMessage = document.getElementById('errorMessage');
        const allowedTypes = ['image/jpeg', 'image/png', 'image/svg+xml'];

        if (fileInput.files.length === 0) {
            errorMessage.textContent = 'Please select a file.';
            return;
        }

        const file = fileInput.files[0];
        if (!allowedTypes.includes(file.type)) {
            errorMessage.textContent = 'Please select a JPEG, PNG, or SVG image file.';
            return;
        }

        // If the validation passes, you can submit the form
        this.submit();
    });
</script> -->

  <!-- Drag & Drop -->

<script type="text/javascript">

	"use strict";

	function dragNdrop(event) {
		var fileName = URL.createObjectURL(event.target.files[0]);
		var preview = document.getElementById("preview");
		var previewImg = document.createElement("img");
		previewImg.setAttribute("src", fileName);
		previewImg.className = "preview-img"
		preview.innerHTML = "";
		preview.appendChild(previewImg);
		preview.className = 'preview-main';
	}

	function drag() {
		document.getElementById('uploadFile').parentNode.className = 'draging dragBox';
	}

	function drop() {
		document.getElementById('uploadFile').parentNode.className = 'dragBox';
	}

</script>

<!-- Show Country Code -->

<script type="text/javascript">
document.addEventListener('DOMContentLoaded', function () {
  var inputField = document.getElementById('phone');
  var defaultCountryCode = '+61 '; // Change this to your desired default country code

  // Set the initial value of the input field to start with the country code
  inputField.value = defaultCountryCode;

  // Listen for input in the phone input field
  inputField.addEventListener('input', function () {
    var inputValue = inputField.value;
    var countryCodeLength = defaultCountryCode.length;

    // If the input value is less than the length of the country code,
    // reset it to just the country code.
    if (inputValue.length < countryCodeLength) {
      inputField.value = defaultCountryCode;
      inputField.setSelectionRange(countryCodeLength, countryCodeLength);
    } else if (!inputValue.startsWith(defaultCountryCode)) {
      // Check if the input starts with the country code and correct if not
      var correctedInput = inputValue.slice(inputValue.lastIndexOf('+61 '));
      inputField.value = correctedInput.length > 0 ? correctedInput : defaultCountryCode;
      inputField.setSelectionRange(countryCodeLength, countryCodeLength);
    }
  });
});
</script>

</html>