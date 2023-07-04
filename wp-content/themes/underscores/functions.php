<?php
/**
 * underscores functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package underscores
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function underscores_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on underscores, use a find and replace
		* to change 'underscores' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'underscores', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'underscores' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'underscores_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'underscores_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function underscores_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'underscores_content_width', 640 );
}
add_action( 'after_setup_theme', 'underscores_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function underscores_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'underscores' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'underscores' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'underscores_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function underscores_scripts() {
	wp_enqueue_style( 'underscores-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'underscores-style', 'rtl', 'replace' );

	wp_enqueue_script( 'underscores-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'underscores_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// フォント
// function mytheme_enqueue_fonts() {
//     wp_enqueue_style( 'mytheme-google-fonts', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;700&family=Source+Sans+Pro:wght@300;400&display=swap', false );
// }
// add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_fonts' );



add_action('wp_enqueue_scripts', 'add_scripts');

function add_scripts() {

	 wp_enqueue_style( 'mytheme-google-fonts', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;700&family=Source+Sans+Pro:wght@300;400&display=swap', false );

   wp_enqueue_script(
        'splide-script',
        get_template_directory_uri() . '/js/splide.min.js',
        array()
    );

    wp_enqueue_script(
        'slide-script',
        get_template_directory_uri() . '/js/slide.js',
        array()
    );

    wp_enqueue_script(
        'main-script',
        get_template_directory_uri() . '/js/main.js',
        array()
    );
}
add_filter('script_loader_tag', 'add_defer', 10, 3);
function add_defer($tag, $handle) {
  if ($handle !== 'main-script') {
    return $tag;
  }

  return str_replace(' src=', ' defer src=', $tag);
}

// newsアーカイブページ用
// とりあえず入れただけ
function post_has_archive($args, $post_type){
  if('post'== $post_type){
    $args['rewrite']=true;
    $args['has_archive']='news';
  }
  return $args;
}


add_filter('register_post_type_args', 'post_has_archive', 10, 2);


// 6/19ページネーション用
// function include_my_php($params = array()) {
//     extract(shortcode_atts(array(
//         'file' => 'default'
//     ), $params));
//     ob_start();
//     include(get_theme_root() . '/' . get_template() . "/$file.php");
//     return ob_get_clean();
// }

// add_shortcode('include_php', 'include_my_php');




// カスタム投稿タイプの追加
function add_custom_post_type(){
    // 制作実績
    register_post_type(
        'blog', // 1.投稿タイプ名
        array(   // 2.オプション
            'label' => 'ブログ', // 投稿タイプの名前
            'public'        => true, // 利用する場合はtrueにする
            'has_archive'   => true, // この投稿タイプのアーカイブを有効にする
            'menu_position' => 5, // この投稿タイプが表示されるメニューの位置
            'menu_icon'     => 'dashicons-edit', // メニューで使用するアイコン
            'supports' => array( // サポートする機能
                'title',
                'editor',
            )
        )
    );
}
add_action('init', 'add_custom_post_type');

// カスタムタクソノミーの追加
function add_custom_taxonomy(){
    // 制作実績(カテゴリー)
    register_taxonomy(
        'blog-category', // 1.タクソノミーの名前
        'blog',          // 2.利用する投稿タイプ
        array(            // 3.オプション
            'label' => 'カテゴリー', // タクソノミーの表示名
            'hierarchical' => true, // 階層を持たせるかどうか
            'public' => true, // 利用する場合はtrueにする
        )
    );
}
add_action('init', 'add_custom_taxonomy');
