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

/* Template Name: Dynamic Page */ 

include 'head-block.php';
$pagecolor = get_field('page_color');
$menucolor = get_field('menu_color');
$showvideo = get_field('show_video_header');
$videoclass = '';
if($showvideo == 'yes'){
    $videoclass = 'show-video-header';
}
?>
<body <?php body_class([$pagecolor,$videoclass]); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TRZRN9M"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php
include 'menu.php';
include 'video-header.php';
createMenu($menucolor);
if($showvideo == 'yes'):
    createVideoHeader('');
endif;
?>

<section class="main-content dynamicpage">
	<div class="content-inner">
		<div class="grid-holder">
			<div class="grid-col-100 white-bg dynamicpage-intro">
                <?php
                if ( have_posts() ) :
				    while ( have_posts() ) : the_post();
                    ?>
                    <h1 class="colored"><?php the_title(); ?></h1>
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
