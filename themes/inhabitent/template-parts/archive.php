<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="archive-header">
		
	

	
		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="archive-meta">
			<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->
<div class="product-flex">
	<div class="archive-content">
    <?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
            <p class="archive-title">	
			<?php the_title( sprintf( '<a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a>' ); ?>
				
				<?php echo CFS()->get( 'product_price' ); ?>
		</p>
		<?php endif; ?>
	</div><!-- .entry-content -->
	</div>
</article><!-- #post-## -->
