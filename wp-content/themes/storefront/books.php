<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package storefront
 */

/* Template Name: Books */ 

include 'head-block.php';

?>
<body <?php body_class(); ?>>
<?php
include 'menu.php';
createMenu('frontpage');
?>
<div class='video-header' data-url="https://www.youtube.com/watch?v=Zk9J5xnTVMA">
	<h1 class="video-title"><?php _e("[:en]Art of welcoming[:sv]Konsten att välkomna"); ?></h1>
	<p><?php _e("[:en]Click here to see the trailer[:sv]Tryck här för att se trailern"); ?></p>
	<div class="play-button"></div>
	<div class="arrow-down"></div>
</div>

<section class="main-content documentary">
	<div class="content-inner">
		<div class="grid-holder">
			<div class="grid-col-100 white-bg documentary-intro">
                <?php
                if ( have_posts() ) :
				    while ( have_posts() ) : the_post();
                    ?>
                    <h1><?php the_title(); ?></h1>
                    <div class="text-two-rows">
                        <?php the_content(); ?>
                    </div>
                    <?php
                    endwhile;
                endif;
                ?>
			</div>
        </div>
        <?php get_template_part( 'content-block' ); ?>
	</div>
</section>

<?php
//do_action( 'storefront_sidebar' );
get_footer();
