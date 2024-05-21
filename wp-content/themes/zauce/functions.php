<?php

// CSS Files
function custom_style()
{

    $themeUrl = get_template_directory_uri();

wp_enqueue_style('bootstrape',$themeUrl.'/assets/css/bootstrap-5.0.2/css/bootstrap.min.css',array(),'5.0.2','all');
wp_enqueue_style('stylesheet',$themeUrl.'/assets/font/nexa/stylesheet.css',array(),'1','all');
wp_enqueue_style('animation',$themeUrl.'/assets/css/animations.css',array(),'1','all');
wp_enqueue_style('slick',$themeUrl.'/assets/css/slick.min.css',array(),'1','all');
wp_enqueue_style('main-style',$themeUrl.'/assets/css/style.css',array(),'1','all');
wp_enqueue_style('media-css',$themeUrl.'/assets/css/media.css',array(),'1','all');

} 
add_action('wp_enqueue_scripts','custom_style');

// Javacript Files
function load_javascript_files(){


    wp_register_script(
		'zauce-array',
		null,
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);

    $themeUrl = get_template_directory_uri();


    wp_register_script( 'jquery-js', $themeUrl . '/assets/js/jquery-3.6.0/jquery.min.js', array(),'3.6.0','all');
    wp_enqueue_script('jquery-js'); 

    wp_register_script( 'bootstrape-js', $themeUrl . '/assets/js/bootstrap-5.0.2/js/bootstrap.min.js', array(),'1','all');
    wp_enqueue_script('bootstrape-js');

    wp_register_script( 'animate-js', $themeUrl . '/assets/js/css3-animate-it.js', array(),'1','all');
    wp_enqueue_script('animate-js');

    wp_register_script( 'slick-js', $themeUrl . '/assets/js/slick.min.js', array(),'1','all');
    wp_enqueue_script('slick-js');

    wp_register_script( 'custom-js', $themeUrl . '/assets/js/custom.js', array(),'1','all');
    wp_enqueue_script('custom-js');

    // wp_register_script( 'phone-js', $themeUrl . '/assets/js/phone.js', array(),'1','all');
    // wp_enqueue_script('phone-js');
   // wp_register_script( 'validate', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js', array(),'1.20.0','all');

    wp_enqueue_script(
		'validate',
		'https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js',
		array( 'zauce-array' ),
		wp_get_theme()->get( 'Version' ),
		true
	);

    wp_enqueue_script('validate');
    $script_data_array = array(
        'security' => wp_create_nonce( 'file_upload' ),
    );
    wp_localize_script( 'zauce-array', 'blog', $script_data_array );

    
}
add_action('wp_enqueue_scripts', 'load_javascript_files');

function zauce_theme_features()
{
    // Custom Logo

    $defaults = array(
		'height'               => 100,
		'width'                => 400,
		'flex-height'          => true,
		'flex-width'           => true,
		'header-text'          => array( 'site-title', 'site-description' ),
		'unlink-homepage-logo' => true, 
	);
	add_theme_support( 'custom-logo', $defaults );
    add_theme_support( 'post-thumbnails', array( 'post', 'custom-post-type' ) );
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' ) );
}
add_action( 'after_setup_theme', 'zauce_theme_features' );

// For A Navigation Menu

function register_zauce_menus() {
    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' ),
        'footer-menu' => __( 'Footer Menu' )
       )
     );
   }
   add_action( 'init', 'register_zauce_menus' );


// For Widget Support

function zauce_custom_widget_init() {
    register_sidebar( array(
         'name' => 'Widget 1',
         'id' => 'new-sidebar',
         'before_widget' => '<div id="new-sidebar">',
         'after_widget' => '</div>',
         'before_title' => '',
         'after_title' => '',
     ) );
     register_sidebar( array(
         'name' => 'Widget 2',
         'id' => 'new-sidebar-1',
         'before_widget' => '<div id="new-sidebar">',
         'after_widget' => '</div>',
         'before_title' => '',
         'after_title' => '',
     ) );
 }
 add_action( 'widgets_init', 'zauce_custom_widget_init' );



// ACF Option Page

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Header Settings',
        'menu_title'    => 'Header',
        'parent_slug'   => 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Footer Settings',
        'menu_title'    => 'Footer',
        'parent_slug'   => 'theme-general-settings',
    ));

}

//FAQ  GET API

// Method 1

function fetch_faq_data() {
    $request = wp_remote_get( 'https://devzauce.clouddownunder.com.au/api/get-faqs' );
        // print_r($request);
    if( is_wp_error( $request ) ) {
        return false; // Bail early on error
    }

    $body = wp_remote_retrieve_body( $request );
    $data = json_decode( $body);
    $str = $data->data;
    if( !empty( $str ) ) {
        return $str;
    } else {
        return false;
    }
}

// Method 2
// add_shortcode('external-faq-data','faq_data');

// function faq_data()
// {
//     $url = 'https://jsonplaceholder.typicode.com/posts/1/comments';
//     $argument = array('method'=>'GET',);

//     $response = wp_remote_get($url,$argument);

//     if(is_wp_error($response))
//     {
//         $error_message = $response->get_error_message();
//         return "Something get wrong : $error_message";
//     }
//     $results = json_decode(wp_remote_retrieve_body($response));
//     // echo '<pre>';
//     // var_dump($results);
//     // echo '</pre>';

//     $html = '';
//     $html.='<div class="faqs_accordion accordion" id="faq-accordion">';
//     $html.=' <div class="card-main animatedParent animateOnce ">';
//     $html.='<p class="mb-0 collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne_faq" aria-expanded="true" aria-controls="collapseOne_faq"></p>';
//     $html.='<div class="card-body-main">';
//     $html.='<p></p>';
//     $html.='</div>';

//     foreach($results as $result)
//     {
//         $html.=' <div class="card-main animatedParent animateOnce ">';
//         $html.='<div class="card-head animated fadeInUpShort" id="">';
//         $html.='<p class="mb-0 collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne_faq" aria-expanded="true" aria-controls="collapseOne_faq">'.$result->name.'</p>';
//         $html.='</div>';
//         $html.='<div id="collapseOne_faq" class="collapse show animated fadeInUpShort" aria-labelledby="headingOne_faq" data-bs-parent="#faq-accordion">';
//         $html.='<div class="card-body-main">';
//         $html.='<p>'.$result->body.'</p>';
//         $html.='</div>';
//         $html.='</div>';
//         $html.='</div>';
//     }

//     return $html;
// }

function become_affiliatzauce()
{
    $zaucedata = isset($_POST['data']) ? $_POST['data']:'';
    parse_str($zaucedata,$zauce_data);
    // echo "hello";
    // die();

    $name = isset($zauce_data['name']) ? $zauce_data['name']:'';
    $phone = isset($zauce_data['phone']) ? $zauce_data['phone']:'';
    $email = isset($zauce_data['email']) ? $zauce_data['email']:'';
    $business = isset($zauce_data['business']) ? $zauce_data['business']:'';
    $weburl = isset($zauce_data['url']) ? $zauce_data['url']:'';
	$fileurl = isset($zauce_data['fileurl']) ? $zauce_data['fileurl'] : '';
    // $fileurl = 'abc.jpg';
    // echo "<pre>";
    // print_r($fileurl);
    // exit();
    // echo "</pre>";
    $url = 'https://devzauce.clouddownunder.com.au/api/Add-partner';
    $ch = curl_init($url);
    $jsonData = array(
        'name' => $name,
        'phone' => $phone,
        'email' => $email,
        'business' => $business,
        'imageUrl' => $fileurl,
        'url' => $weburl
    );

    // echo "<pre>";
    // print_r($jsonData);
    // echo "</pre>";
    // die();

    //Encode the array into JSON.
  $jsonDataEncoded = json_encode($jsonData);
     
  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');

  //Attach our encoded JSON string to the POST fields.
  curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);
   
  //Set the content type to application/json
  curl_setopt($ch, CURLOPT_HTTPHEADER, array(
      'Content-Type: application/json',
      'Accept: application/json',
      )); 

  curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

  $result = curl_exec($ch);

  // Close curl
  curl_close($ch);

  $response = json_decode($result, true);
  echo json_encode($response);
  die();


}
add_action('wp_ajax_become_affiliatzauce','become_affiliatzauce');
add_action('wp_ajax_nopriv_become_affiliatzauce','become_affiliatzauce');

// Logo Upload

add_action('wp_ajax_file_upload', 'file_upload_callback');
add_action('wp_ajax_nopriv_file_upload', 'file_upload_callback');
function file_upload_callback() {
    check_ajax_referer('file_upload', 'security');
    $arr_img_ext = array('image/png', 'image/jpeg', 'image/jpg', 'image/gif');
    if (in_array($_FILES['file']['type'], $arr_img_ext)) {
        $upload = wp_upload_bits($_FILES["file"]["name"], null, file_get_contents($_FILES["file"]["tmp_name"]));
        //$upload['url'] will gives you uploaded file path
        $cxc_messages = array( 'success' => true, 'cxc_image_url' => $upload['url'] );
    }
    else
    {
      $cxc_messages = array( 'success' => false);
    }

  wp_send_json( $cxc_messages );
    

    wp_die();
}


// Join Zauce Team

function join_zauce_team()
{
    $serialized_data = isset($_POST['data']) ? $_POST['data']:'';

    parse_str($serialized_data,$form_data);

    $fname = isset($form_data['first_name']) ? $form_data['first_name'] : '';
    $lname = isset($form_data['last_name']) ? $form_data['last_name'] : '';
    $country = isset($form_data['country']) ? $form_data['country'] : '';
    $city = isset($form_data['city']) ? $form_data['city'] : '';
    $dob = isset($form_data['dob']) ? $form_data['dob'] : '';
    $role = isset($form_data['role']) ? $form_data['role'] : '';
    $link1 = isset($form_data['link1']) ? $form_data['link1'] : '';
    $link2 = isset($form_data['link2']) ? $form_data['link2'] : '';
    $link3 = isset($form_data['link3']) ? $form_data['link3'] : '';

    $url = "https://devzauce.clouddownunder.com.au/api/JoinTeam";
    $ch = curl_init($url);
     
    //The JSON data.
    $jsonData = array(
        'first_name' =>  $fname,
        'last_name' => $lname,
        'country' => $country,
        'city' => $city,
        'dob' => $dob,
        'role' => $role,
        'link1' => $link1,
        'link2' => $link2,
        'link3' => $link3
    );

  //Encode the array into JSON.
  $jsonDataEncoded = json_encode($jsonData);
     
  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');

  //Attach our encoded JSON string to the POST fields.
  curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);
   
  //Set the content type to application/json
  curl_setopt($ch, CURLOPT_HTTPHEADER, array(
      'Content-Type: application/json',
      'Accept: application/json',
      )); 

  curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

  $result = curl_exec($ch);

  // Close curl
  curl_close($ch);

  $response = json_decode($result, true);
  echo json_encode($response);
  die();

  //return $arrayEventResultData = json_decode($result);
  
}
add_action('wp_ajax_join_zauce_team','join_zauce_team');
add_action('wp_ajax_nopriv_join_zauce_team','join_zauce_team');

?>