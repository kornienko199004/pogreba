<?php

function pogreba_theme_setup() {

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for custom logo.
	 *
	 *  @since Twenty Sixteen 1.2
	 */
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
  add_theme_support( 'post-thumbnails' );
  set_post_thumbnail_size(250, 150); // задаем размер миниатюрам 250x150
  add_image_size('big-thumb', 400, 400, true); // добавляем еще один размер картинкам 400x400 с обрезкой

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'pogreba_theme' ),
		'social'  => __( 'Social Links Menu', 'pogreba_theme' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'status',
		'audio',
		'chat',
	) );
}
add_action( 'after_setup_theme', 'pogreba_theme_setup' );

add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
// add_action('wp_print_styles', 'theme_name_scripts'); // можно использовать этот хук он более поздний
function theme_name_scripts() {
  wp_enqueue_style( 'style', get_stylesheet_uri() );
	// wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
}

function scripts() {
  wp_enqueue_script('jquery');
  wp_enqueue_script( 'index', get_template_directory_uri() . '/js/index.js', array(), null);
  wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), null);
}
add_action( 'wp_footer', 'scripts', 0);

function true_custom_fields() {
  add_post_type_support( 'book', 'custom-fields'); // в качестве первого параметра укажите название типа поста
}
 
add_action('init', 'true_custom_fields');
function send_callback() {
  /* Забираем отправленные данные */
  $name = $_POST['modal_name'];
  $phone = $_POST['modal_phone'];

  /* Отправляем нам письмо */
  $emailTo = 'mk.belgorod@yandex.ru';
  $subject = 'Обратный звонок';
  $headers = "Content-type: text/html; charset=\"utf-8\"";
  $mailBody = "Имя $name . Телефон $phone";

  wp_mail($emailTo, $subject, $mailBody, $headers);
  /* Завершаем выполнение ajax */
  die();  
}

add_action("wp_ajax_send_callback", "send_callback");
add_action("wp_ajax_nopriv_send_callback", "send_callback");