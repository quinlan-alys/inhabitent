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
<h1 class="transform"> Shop Stuff </h1>
    <section class="shop-stuff">
        
        <div class="shopc">
            <img src="<?php echo get_template_directory_uri() . '/images/product-type-icons/do.svg'; ?>" class="catagorylogo" alt="do logo" />
            <p> Get back to nature with all the tools and toys you need to enjoy the great outdoors.</p>
            <p>
                <a href="#" class="btn"> Do Stuff </a>
            </p>
        </div>
        <div class="shopc">
            <img src="<?php echo get_template_directory_uri() . '/images/product-type-icons/eat.svg'; ?>" class="catagorylogo" alt="eat logo" />
            <p>Nothing beats food cooked over a fire. We have all you need for good camping eats.</p>
             <p>
                <a href="#" class="btn"> Eat Stuff </a>
            </p>
        </div>
            <div class="shopc">
            <img src="<?php echo get_template_directory_uri() . '/images/product-type-icons/sleep.svg'; ?>" class="catagorylogo" alt="sleep logo" />
        <p>Get a good night's rest in the wild in a home away from home that travels well.</p>
         <p>
            <a href="#" class="btn"> Sleep Stuff </a>
        </p>
        </div>
            <div class="shopc">
            <img src="<?php echo get_template_directory_uri() . '/images/product-type-icons/wear.svg'; ?>" class="catagorylogo" alt="wear logo" />
        <p>From flannel shirts to toques, look the part while roughing it in the great outdoors.</p>
        <p>
            <a href="#" class="btn"> Wear Stuff </a>
         </p> 
        </div>
    </section>
     <h1 class="transform"> Inhabitent Journal</h1>
    <section class="inh-journal">
       
  <?php          
//Query 5 recent published post in descending order
$args = array( 'numberposts' => '3', 'order' => 'DESC','post_status' => 'publish' );
$recent_posts = wp_get_recent_posts( $args );
//Now lets do something with these posts
foreach( $recent_posts as $recent )
{
   echo '<div class="frontposts">';
   echo '<img src="'.$recent["post_thumbnail_id"] .'"/>';
   echo get_the_post_thumbnail($recent["ID"]);
   echo '<p class="homedate">'. $recent["post_date"]. '</p>' . '<p class="homecomments">'. $recent["comment_count"]. " comments". '</p>' ;
   echo '<a href="#" class="fronttitle">'.$recent["post_title"]. '</a>';
   echo '</div>';
   //Do whatever else you please with this WordPress post
}
?>
    </section>

  <h1 class="transform"> Latest Adventures</h1>
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
