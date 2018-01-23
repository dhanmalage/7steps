<?php

function steps_setup() {

	add_editor_style();

	// Adds RSS feed links to <head> for posts and comments.
	add_theme_support('automatic-feed-links');

	// This theme supports a variety of post formats.
	add_theme_support('post-formats', array('aside', 'image', 'link', 'quote', 'status'));
	
	// Register Navigation
	register_nav_menus(array('primary' => 'Primary Navigation'));

	// This theme uses a custom image size for featured images, displayed on "standard" posts.
	add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'steps_setup');

function steps_scripts() {
	wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css');
	wp_enqueue_style('font-awesome', get_template_directory_uri().'/css/font-awesome.min.css');
	wp_enqueue_style('smart_wizard', get_template_directory_uri().'/css/smart_wizard.css');
	wp_enqueue_style('file-upload-css', get_template_directory_uri().'/file-upload/css/jquery.fileupload.css');
	wp_enqueue_style('styles', get_template_directory_uri().'/css/styles.css');
	wp_enqueue_style('main-style', get_stylesheet_uri());

	wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery'), '', true);
	wp_enqueue_script('smartWizard', get_template_directory_uri().'/js/jquery.smartWizard.js', array(), '', true);

	wp_enqueue_script('fileUploadUiWidget', get_template_directory_uri().'/file-upload/js/vendor/jquery.ui.widget.js', array('jquery'), '', true);
	wp_enqueue_script('fileUploadPreview', get_template_directory_uri().'/file-upload/js/vendor/load-image.all.min.js', array('jquery'), '', true);
	wp_enqueue_script('fileUploadNoXHR', get_template_directory_uri().'/file-upload/js/jquery.iframe-transport.js', array('jquery'), '', true);
	wp_enqueue_script('fileUploadBasic', get_template_directory_uri().'/file-upload/js/jquery.fileupload.js', array('jquery'), '', true);
	wp_enqueue_script('fileUploadProcess', get_template_directory_uri().'/file-upload/js/jquery.fileupload-process.js', array('jquery'), '', true);
	wp_enqueue_script('fileUploadImagePreview', get_template_directory_uri().'/file-upload/js/jquery.fileupload-image.js', array('jquery'), '', true);
	wp_enqueue_script('fileUploadValidate', get_template_directory_uri().'/file-upload/js/jquery.fileupload-validate.js', array('jquery'), '', true);

	wp_enqueue_script('bootstrapValidator', get_template_directory_uri().'/js/validator.min.js', array('jquery'), '', true);

	wp_enqueue_script('paypalAPI', 'https://www.paypalobjects.com/api/checkout.js', '', '', true);

	wp_enqueue_script('functions', get_template_directory_uri().'/js/scripts.js', array('jquery'), '', true);
}

add_action('wp_enqueue_scripts', 'steps_scripts');



function wp_ajax_enqueue() {
	// The wp_localize_script allows us to output the ajax_url path for our script to use.
	wp_localize_script(
		'functions',
		'functions_ajax_obj',
		array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) )
	);
}
add_action( 'wp_enqueue_scripts', 'wp_ajax_enqueue' );

function steps7_ajax_request() {

	// The $_REQUEST contains all the data sent via ajax
	if ( isset($_REQUEST) ) {

		$email = $_REQUEST['email'];
		$businessName = $_REQUEST['businessName'];
		$industry = $_REQUEST['industry'];
		$industryComment = $_REQUEST['industryComment'];
		$numEmployees = $_REQUEST['numEmployees'];
		$numYears = $_REQUEST['numYears'];
		$domain = $_REQUEST['domain'];
		$preferDomain = $_REQUEST['preferDomain'];
		$socialFb = $_REQUEST['socialFb'];
		$socialTw = $_REQUEST['socialTw'];
		$socialIn = $_REQUEST['socialIn'];
		$socialYo = $_REQUEST['socialYo'];
		$socialVi = $_REQUEST['socialVi'];
		$socialPi = $_REQUEST['socialPi'];
		$mission = $_REQUEST['mission'];
		$products = $_REQUEST['products'];
		$team = $_REQUEST['team'];
		$competitor1 = $_REQUEST['competitor1'];
		$competitor2 = $_REQUEST['competitor2'];
		$competitor3 = $_REQUEST['competitor3'];
		$competitor4 = $_REQUEST['competitor4'];
		$competitor5 = $_REQUEST['competitor5'];
		$address1 = $_REQUEST['address1'];
		$address2 = $_REQUEST['address2'];
		$city = $_REQUEST['city'];
		$state = $_REQUEST['state'];
		$country = $_REQUEST['country'];
		$zip = $_REQUEST['zip'];
		$phone = $_REQUEST['phone'];
		$images = $_REQUEST['images'];

		// Let's take the data that was sent and do something with it
		if ( $email != '' ) {
			$fruit = 'Apple';
		}

		// Now we'll return it to the javascript function
		// Anything outputted will be returned in the response
		echo $fruit;

		// If you're debugging, it might be useful to see what was sent in the $_REQUEST
		// print_r($_REQUEST);

	}

	// Always die in functions echoing ajax content
	die();
}

// If you wanted to also use the function for non-logged in users (in a theme for example)
add_action( 'wp_ajax_nopriv_steps7_ajax_request', 'steps7_ajax_request' );