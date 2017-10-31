<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package storefront
 */

get_header(); 

?>
<body <?php body_class(); ?>>

<?php
include 'menu.php';
createMenu('blue');
?>
<div class="filter-search">
	<?php
	$buttonName = translate("[:en]Filter[:sv]Filtrera");
	$categoryName = translate("[:en]Category[:sv]Kategori");
	echo do_shortcode( '[searchandfilter fields="category,post_date" types="radio,daterange" submit_label="'.$buttonName.'" headings="'.$categoryName.',Datum"]' );
	?>
</div>
		<?php if ( have_posts() ) : ?>
			<?php			
			while ( have_posts() ) : the_post(); ?>
				<article class="post-single">
					<h1> <?php the_title(); ?> </h1>
					<div class="post-body"> <?php the_excerpt(); ?> <div>
					<div class="post-image"> <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive responsive--full', 'title' => 'Feature image']); ?> </div>
				</article>

			<?php endwhile;?>

			<div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
			<div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>
			
		<?php
		else :

			get_template_part( 'content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
