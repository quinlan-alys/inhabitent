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
<h1> Shop Stuff </h1>
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
    <section class="inh-journal">
        <h1> Inhabitent Journal</h1>
   <?php      	
//Query 5 recent published post in descending order
 $args = array( 'numberposts' => '3', 'order' => 'DESC','post_status' => 'publish' );
$recent_posts = wp_get_recent_posts( $args );
//Now lets do something with these posts
foreach( $recent_posts as $recent )
{
    echo '<img src="'.$recent["post_thumbnail_id"] .'"/>';
    echo get_the_post_thumbnail($recent["ID"]);
    echo $recent["post_title"]. '</a>';
    echo '<p class="homedate">'. $recent["post_date"]. '</p>';
    echo '<p class="homecomments">'. $recent["comment_count"]. " comments". '</p>';
    //Do whatever else you please with this WordPress post
}
?>


    </section>
    <section class="latest">
        <h1> Latest Adventures</h1>
    </section>



	</main><!-- #main -->
	</div><!-- #primary -->
    </body>


<?php get_footer(); ?>
