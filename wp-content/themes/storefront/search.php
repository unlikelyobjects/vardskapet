<?php
/**
 * The template for displaying search results pages.
 *
 * @package storefront
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( esc_attr__( 'Search Results for: %s', 'storefront' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php get_template_part( 'loop' );

		else :

			get_template_part( 'content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<div class="filter-search">
			<?php
			$buttonName = translate("[:en]Filter[:sv]Filtrera");
			$categoryName = translate("[:en]Category[:sv]Kategori");
			echo do_shortcode( '[searchandfilter fields="category,post_date" types="checkbox,daterange" submit_label="'.$buttonName.'" headings="'.$categoryName.',Datum"]' );
			?>
			</div>

<?php
do_action( 'storefront_sidebar' );
get_footer();
