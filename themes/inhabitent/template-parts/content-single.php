<?php
/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php red_starter_posted_on(); ?> / <?php red_starter_comment_count(); ?> / <?php red_starter_posted_by(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	
		<?php red_starter_entry_footer(); ?>
	<!-- .entry-footer -->
</article><!-- #post-## -->
<div class="socbtns">
	<div class="socbtn">
		<a href="#"> <i class="fa fa-facebook" aria-hidden="true"></i> Like</a>
	</div>
	<div class="socbtn">
		<a href="#"> <i class="fa fa-twitter" aria-hidden="true"></i>Tweet</a>
	</div>
	<div class="socbtn">
		<a href="#"> <i class="fa fa-pinterest" aria-hidden="true"></i>Pin</a>
	</div>
</div>