<?php /* Template Name: About Page */

/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<section class="hero">
   <h1>About</h1>

</section>


<?php
$props = CFS()->get_field_info( 'our_story' );
echo '<h2 class="h2">' . $props['label'] . '</h2>';
?>

<?php echo CFS()->get( 'our_story' ); ?>

<?php
$props = CFS()->get_field_info( 'our_team' );
echo '<h2 class="h2">' . $props['label'] . '</h2>';
?>

<?php echo CFS()->get( 'our_story' ); ?>

<?php get_footer(); ?>
