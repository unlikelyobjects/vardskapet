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
	$category = $categories[0];
	echo $category->parent;
	if($category->parent != null){
		$category = get_category($category->parent);
	}
	$catname = $category->name;
	$catslug = $category->slug;
	if($category->slug == "our-stories" ){
		$col = 'teal';
	}
	elseif($category->slug == "events"){
		$col = 'red';
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
						$buttonlink = "/blog";
						if($catslug == "events"){
							$buttontext = __('[:en]Events page[:sv]Aktuellt sidan');
							$buttonlink = "/events";
						}
						else if($catslug == "our-stories"){
							$buttontext = __('[:en]More stories[:sv]Fler berättelser');
							$buttonlink = "/our-stories";
						}
					?>

					<a class="button colored" href="/<?php echo $catslug;?>"> <?php echo $buttontext; ?></a>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
