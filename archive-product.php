

<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="archive-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

		
			
         <?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
			<!-- .page-header -->

	<div class='productcatas'>
 <?php

  $terms = get_terms('product_type');
foreach ($terms as $term) {

     $url = get_term_link ($term->slug , 'product_type');

     echo "<a href= '$url'> $term->name </a>" ;
}
     ?>
	 </div>


<div class="flex-wrapper">
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					get_template_part( 'template-parts/archive' );
				  ?>
			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/archive', 'none' ); ?>
			 
		<?php endif; ?>
</div>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
