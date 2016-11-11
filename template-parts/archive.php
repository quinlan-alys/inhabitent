<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="archive-header">
		<div class= "flex-wrapper">
	    <?php if ( has_post_thumbnail() ) : ?>
		 
	
		<a href="<?php the_permalink() ?> "><div class="archive-content"><?php the_post_thumbnail( 'large' ); ?></a>
            	<div class="product-info"><p class="archive-title"><?php the_title( sprintf( '<a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></p>' ); ?>
				
				<p class="price"><?php echo CFS()->get( 'product_price' ); ?></p></div></div>
	
		<?php endif; ?>

	
		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="archive-meta">
			<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
		</div>
	</header><!-- .entry-header -->



	<!-- .entry-content -->
	
</article><!-- #post-## -->
