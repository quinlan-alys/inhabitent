<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<body class="frontpage">
<section class="herobanner">
    <img src="<?php echo get_template_directory_uri() . '/images/logos/inhabitent-logo-full.svg'; ?>" class="heroimg" alt="Hero Banner" />
</section>


 <div id="primary" class="front-page">
<main id="front" class="site-front" role="front-page">
<h2 class="transform"> Shop Stuff </h2>
    <section class="shop-stuff">


  
  <?php

  $terms = get_terms('product_type');
foreach ($terms as $term) {

     $url = get_term_link ($term->slug , 'product_type');
    
     echo "<div class='shopc'>" . $term->description ;
      echo "<div class='catabtn'><a href= '$url'> $term->name stuff  </a></div></div>" ;
}
     ?>


</div>
</section>
     <h2 class="transform"> Inhabitent Journal</h2>
    <section class="inh-journal">
       
  <?php          
//Query 5 recent published post in descending order
$args = array( 
'post_type' => 'post',
'numberposts' => '3',
 'order' => 'DESC',
 'post_status' => 'publish' );
$recent_posts = get_posts( $args ); ?>


<?php foreach( $recent_posts as $post ) : setup_postdata($post); ?>
<div class="frontposts">
    <?php the_post_thumbnail();?>
    <p class="homedate"><?php the_date(); ?> /
    <?php comments_number(); ?> </p>
    <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a>
    <div class="rdmore">
        <a href="<?php the_permalink(); ?>"> Read Entry </a>
    </div>
</div>

<?php endforeach; wp_reset_postdata(); ?>


    </section>



  <h2 class="transform"> Latest Adventures</h2>
    <section class="latest">
        <div class="leftAdThing">
            <h3> Getting back to nature in a canoe </h3>
        </div>
        <div class="rightAdThing">
            <div class="beach">
                <h3> A night with friends at the beach </h3>
            </div>
             <div class="mountain">
            <h3> Taking in the view at Big Mountain </h3>
            </div>
            <div class="sky">
                <h3> Star gazing at the night sky </h3>
            </div>
        </div>
    </div>
</section>


	</main><!-- #main -->
	</div><!-- #primary -->
    </body>


<?php get_footer(); ?>
