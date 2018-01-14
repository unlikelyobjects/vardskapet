<?php
/**
 * The template for displaying all single posts.
 *
 * @package storefront
 */

include 'head-block.php';
$post = get_post();
$col = "blue";
$catname = "";
if ( $post ) {
    $categories = get_the_category( $post->ID );
	foreach($categories as $cat){
		$catname = $cat->name;
		$catslug = $cat->slug;
		if($cat->slug == "our-stories" ){
			$col = 'teal';
		}
		elseif($cat->slug == "events"){
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
					<?php
						$buttontext = __('[:en]Blog page[:sv]Bloggsidan');
						if($catslug == "events"){
							$buttontext = __('[:en]Events page[:sv]Aktuellt sidan');
						}
						else if($catslug == "our-stories"){
							$buttontext = __('[:en]More stories[:sv]Fler berättelser');
						}
					?>

					<a class="button colored" href="/<?php echo $catslug;?>"> <?php echo $buttontext; ?></a>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
