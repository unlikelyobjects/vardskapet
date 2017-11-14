<?php
/**
 * The template for displaying all single posts.
 *
 * @package storefront
 */

include 'head-block.php';
?>
<body <?php body_class(['blue']); ?>>
<?php
include 'menu.php';
createMenu('blue');
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
				<div class="button blue blog-back">
					<?php _e('[:en]Go back[:sv]Tillbaka') ?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
