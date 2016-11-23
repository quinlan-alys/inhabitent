<?php
/**
 * The sidebar containing the main widget area.s
 *
 * @package RED_Starter_Theme
 */



if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
<div class="sidebarinfo">
					<div class="sidecontact">
						<h1> Contact Info </h1>
						<ul> 
						<li><i class="fa fa-phone" aria-hidden="true"></i><a href="#"> 778-456-7891</a></li>
						<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="#" class="email"> info@inhabitent.com </a></li>
						<li><i class="fa fa-map-marker" aria-hidden="true"></i> 1490 W Broadway
Vancouver, BC V6H 1H5
						<li><i class="fa fa-facebook-official" aria-hidden="true"></i> 
						<i class="fa fa-google-plus-square" aria-hidden="true"></i>
						<i class="fa fa-twitter-square" aria-hidden="true"></i></li>
						</ul>
					</div>
				
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->

