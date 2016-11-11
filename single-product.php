<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>



	<div id="primary" class="shop-area">
		<main id="main" class="archive-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
		<div class="flex-prod">
<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>
		<div class="flex-prod-right">
		<?php the_title( sprintf( '<h2 class="archives-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
			<?php get_template_part( 'template-parts/archive-single', 'single' );
            echo CFS()->get( 'product_price' ); ?>
			
	<div class="archives-content">
		<?php the_excerpt(); ?>
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
		</div>
	<!-- .entry-content -->

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
		
	</div><!-- #primary -->
</div>

	</div>
<?php get_footer(); ?>
