<?php
/**
 * The template for displaying all single posts.
 *
 * @package storefront
 */

include 'head-block.php';
$post = get_post();
$col = "blue";
if ( $post ) {
    $categories = get_the_category( $post->ID );
	foreach($categories as $cat){
		if($cat->name == "Our stories" ){
			$col = 'teal';
		}
		elseif($cat->name == "Events"){
			$col = 'red';
		}
	}
}
?>
<body <?php body_class([$col]); ?>>
<?php
include 'menu.php';
createMenu($col);
?>
<section class="main-content">
	<div class="content-inner">
		<div class="blog-post-single">
			<?php while ( have_posts() ) : the_post(); ?>
				<h1 class="colored"><?php the_title(); ?></h1>
				<div class="divider-small"></div>
				<p class="date colored"><?php echo get_the_date('F j, Y'); ?></p>
				<div class="blog-post-content">
					<?php the_content(); ?>
				</div>

			<?php endwhile; ?>
			<div class="center">
				<div class="button colored blog-back">
					<?php _e('[:en]Go back[:sv]Tillbaka') ?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
