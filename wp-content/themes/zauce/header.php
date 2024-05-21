<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

		<title>Zauce</title>

		<!-- ================ /GOOGLE FONT EOC =================== -->
		<link rel="icon" type="image/x-icon" href="<?php echo bloginfo('template_directory');?>/assets/images/favicon.png">
		<link href="<?php echo get_template_directory_uri();?>/assets/font/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<!-- ================ /GOOGLE FONT EOC =================== -->
        <?php 
        wp_head();
        ?>
		<script type="text/javascript">
	    var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
	</script>
		<style type="text/css">
			.show_hide {display:none; }
		</style>
	</head>
	<body id="home" class="homePage">
	<!-- ====== /WRAPPER BOC ====== -->
		<div class="page-wrapper ">
		  	<!-- header start -->
		  	<header class="site-header">
			    <div class="header-main nav-area">
			      	<div class="header-inner-main">
			      		<div class="container">
				          	<div class="navbar-container">

					            <nav class="navbar navbar-dark navbar-expand-lg">
					                <div class="header-logo">
					                	<a href="<?php echo get_option("siteurl"); ?>">
                                    <?php
                                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                                    $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                                    ?>      
                                        <img src="<?php  echo $image[0];?>" alt="header-logo">
                                    </a>
					              	</div>
					              	<div class="header-inner d-flex">
						                <div class="header-right">
							                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
							                    <span class="icon-bar"></span>
							                    <span class="icon-bar"></span>
							                    <span class="icon-bar"></span>
							                </button>

						                    <div class="collapse header-menu navbar-collapse " id="navbarNavDropdown">
						                      <div class="header-menu-inner">
						                           <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
						                        <div class="header-btn">
						                        	<!-- <a href="#" class="btn">Become affiliate / partner</a> -->
						                        	<button class="btn" data-bs-toggle="offcanvas" data-bs-target="#affiliate" aria-controls="affiliate"><?php echo the_field('header_button_text','option');?></button>
						                        </div>

						                      </div>
						                    </div>
						                </div>
						            </div>
					            </nav>
				            </div>
			            </div>
			        </div>
			    </div>
		  	</header> 
			<!-- header End -->