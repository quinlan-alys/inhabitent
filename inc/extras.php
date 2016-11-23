<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

//changing the logo to the inhabitent logo

function my_login_logo() { ?>
   <style type="text/css">
       #login h1 a, .login h1 a {
           background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/logos/inhabitent-logo-text-dark.svg);
           padding-bottom: 30px;
            background-size: 220px !important; width: 230px !important;background-position: bottom !important;
       }
   </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );



function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'Your Site Name and Info';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );



function my_styles_method() {

	if (!is_page_template('page-about.php')){
		return;

	}
	$url =CFS()->get('background_image');
	$custom_css ="
	.hero{
      background-image:linear-gradient( to bottom, rgba(0,0,0,0.5) 0%, rgba(0,0,0,0.5) 100% ), url({$url});
	  	
		}";
        wp_add_inline_style( 'red-starter-style', $custom_css );
}
add_action( 'wp_enqueue_scripts', 'my_styles_method' );


//sort to show 16 posts per page on shop page-----------

function get_all_product_posts($query ) {
    if (is_post_type_archive( 'product') && !is_admin() && $query->is_main_query()) {
        $query->set('posts_per_page' , '16');
        $query->set('orderby', 'title');
        $query->set('order' , 'ASC');
    } //elseif for categories
}
add_action('pre_get_posts', 'get_all_product_posts');

//display custom archive titles

function display_custom_archive_title( $title ) {
    if( is_post_type_archive( 'product' ) ) {
        $title = "Shop Stuff";
    } elseif(is_tax()) {
        $title = single_term_title('', false);
    }
    return $title;

}
 add_filter( 'get_the_archive_title', 'display_custom_archive_title');




// change the read  more button on blog posts 

function new_excerpt_more($more) {
       global $post;
	return '<div class="readmore"><a class="moretag" href="'. get_permalink($post->ID) . '"> Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></div>';
}
add_filter('excerpt_more', 'new_excerpt_more');




