<?php 
define( 'THEME_URL', get_stylesheet_directory() );
define( 'CORE', THEME_URL . '/core');

require_once(CORE . '/init.php');
if(!isset($content_width)) {
	$content_width = 620;
}

if (! function_exists('loctran_theme_setup')) {
	function loctran_theme_setup() {
		// text domain
		$language_folder = THEME_URL . '/languages';
		load_theme_textdomain( 'loctran', $language_folder );

		// RSS feed link
		add_theme_support( 'atomatic_feed_links');

		add_theme_support( 'post-thumbnails');

		add_theme_support( 'title-tag');

		// add_theme_support( 'post-formmats', array('image', 'video', 'gallery', 'quote', 'link'));

		add_theme_support( 'post-formats',
			array(
				'image',
				'video',
				'gallery',
				'quote',
				'link'
			)
		);

		$default_background = array(
			'default-color' => '#eee'
		);

		add_theme_support( 'Custom_Background', $default_background);

		register_nav_menu( 'primary-menu', __('Primary Menu', 'loctran') );

		$sidebar = array(
			'name' => __('Main Sidebar', 'thachpham'),
			'id' => 'main-sidebar',
			'description' => 'Main sidebar for Thachpham theme',
			'class' => 'main-sidebar',
			'before_title' => '<h3 class="widgettitle">',
			'after_sidebar' => '</h3>'
		);
		register_sidebar( $sidebar );

	}
	add_action( 'init', 'loctran_theme_setup' );
}

function wpb_widgets_init() {
 
    register_sidebar( array(
        'name'          => 'Custom Header Widget Area',
        'id'            => 'custom-header-widget',
        'before_widget' => '<div class="chw-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="chw-title">',
        'after_title'   => '</h2>',
    ) );
 
}
add_action( 'widgets_init', 'wpb_widgets_init' );

if(!function_exists('loctran_logo')) {
	function loctran_logo() { ?>
		<div class="logo">
			<?php 
			printf(
				'<a href="/"><img src="%1$s" /></a>',
				get_bloginfo( 'url' ) . '/wp-content/themes/loctran/assets/img/logo.png'
			);
			?>
		</div>
		<?php 
	} 
}

if (! function_exists('loctran_menu')) {
	function loctran_menu($slug) {
		$menu = array(
			'theme_location' => $slug,
			'container' => 'nav',
			'container_class' => $slug,
			'items_wrap' => '<ul id="%1$s" class="%2$s sf-menu">%3$s</ul>'
		);
		wp_nav_menu($menu);
	}
}

if(! function_exists('loctran_pagination')) {
	function loctran_pagination() {
		if ($GLOBALS['wp_query']->max_num_pages < 2) {
			return '';
		}
		?>
		<nav class="pagination" role="navigation" >
			<?php if (get_preview_post_link()) : ?>
				<div class="next"><?php previous_posts_link(__('Older Posts', 'loctran')); ?></div>
			<?php endif; ?>
			<?php if (get_next_post_link()) : ?>
				<div class="prev"><?php next_posts_link(__('Newer Posts', 'loctran')); ?></div>
			<?php endif; ?>
		</nav>
		<?php
	}
}

if(! function_exists('loctran_thumbnail')) {
	function loctran_thumbnail($size) {
		if(! is_single() && has_post_thumbnail() && ! post_password_required() || has_post_format('image')) : ?>
			<figure class="post-thumbnail"><?php the_post_thumbnail($size); ?></figure>
	<?php endif;
}
}

if(! function_exists('loctran_entry_header')) {
	function loctran_entry_header() {
		if(is_single() ) : ?>
			<h1 class="entry-title">
				<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
					<?php the_title(); ?>
				</a>
			</h1>
			<?php else : ?>
				<h2 class="entry-title">
					<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
						<?php the_title(); ?>
					</a>
				</h2>
			<?php endif; 
		}
	}

	if(! function_exists('loctran_entry_meta')) {
		function loctran_entry_meta() {
			if(! is_page()) :
				echo '<div class="entry-meta">';

				printf(__('<span class="author">Posted by %1$s </span>', 'loctran'), get_the_author());
				printf(__('<span class="data-published">at %1$s </span>', 'loctran'), get_the_date());
				printf(__('<span class="category">in %1$s </span>', 'loctran'), get_the_category_list(', '));

				if(comments_open()) :
					echo ' <span class="meta-reply">';
					comments_popup_link( __('Leave a comment', 'loctran'), __('One comment', 'loctran'), __('% comments', 'loctran'), __('Read all comment', 'loctran') );
					echo ' </span>';
				endif;
				echo '</div>';
			endif;
		}
	}


	function read_more() {
		return '...<a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('Read More', 'loctran') . '</a>';
	}
	add_filter( 'excerpt_more', 'read_more' );
	/**

 * Filter the excerpt length to 50 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
	function set_the_excerpt_length( $length ) {
		if ( is_admin() ) {
			return $length;
		}
		return 50;
	}
	add_filter( 'excerpt_length', 'set_the_excerpt_length', 999 );
	

	if(! function_exists('loctran_entry_content')) {
		function loctran_entry_content() {
			if(!is_single() && !is_page()) {
				the_excerpt();
			} else {
				the_content();
			}

			$link_pages = array(
				'before' => __('<p>Page:', 'loctran'),
				'after' => __('</p>'),
				'nextpagelink' => __('Next Page', 'loctran'),
				'previouspagelink' => __('Previous Page', 'loctran')
			);
			wp_link_pages($link_pages);
		}
	}

	if(!function_exists('loctran_entry_tag')) {
		function loctran_entry_tag() {
			if(has_tag()) :
				echo '<div class="entry-tag">';
				printf(__('Tagged in %1$s', 'loctran'), get_the_tag_list( '', ', '));
				echo '</div>';
			endif;
		}
	}


	function loctran_styles() {
		wp_register_style( 'my-theme', get_template_directory_uri() . '/main-style.css', 'all' );
		wp_enqueue_style( 'my-theme' );

		wp_register_style( 'superfish-css', get_template_directory_uri() . '/assets/css/vendor/superfish.css', 'all' );
		wp_enqueue_style( 'superfish-css' );

		/*
		* Chèn file JS của SuperFish Menu
		*/
		wp_register_script( 'superfish-js', get_template_directory_uri() . '/assets/js/vendor/superfish.js', array('jquery') );
		wp_enqueue_script( 'superfish-js' );

		/*
		* Chèn file JS custom.js
		*/
		wp_register_script( 'custom-js', get_template_directory_uri() . '/custom.js', array('jquery') );
		wp_enqueue_script( 'custom-js' );
	}

	add_action('wp_enqueue_scripts', 'loctran_styles');

	?>

