<?php

/* Template Name: Blog */ 

get_header(); ?>


<?php
include 'menu.php';
createMenu('blue');
?>

<section class="main-content">
	<div class="content-inner">
		<div class="filter-search">
			<div class="date-from"><?php _e('[:en]From:[:sv]Från:') ?></div>
			<div class="date-to"><?php _e('[:en]To:[:sv]Till:') ?></div>
			<div id="filter-toggle" class="filter-toggle">
				<p><?php _e('[:en]Search Alternatives[:sv]Sökalternativ') ?></p>
				<img class="search-icon contracted" src="/wp-content/themes/storefront/assets/images/search-icon.png">
				<img class="search-icon expanded"  src="/wp-content/themes/storefront/assets/images/search-icon-expanded.png">
			</div>
			<?php
			$buttonName = translate("[:en]Filter[:sv]Filtrera");
			$categoryName = translate("[:en]Category[:sv]Kategori");
			echo do_shortcode( '[searchandfilter fields="category,post_date" types="radio,daterange" submit_label="'.$buttonName.'" headings="'.$categoryName.',Datum,Datum"]' );
			?>
		</div>

		<div class="grid-holder">
			<div class="grid-col-100 white-bg">
				<h1>Blogg</h1>
				<p class="text-two-rows">
					Lorem ipsum dolor sit amet, consectetur sa adipiscing elit. Integer porttitor ligula ut sdgs consequat consectetur. Mauris sed ligulased nibh luctus rutrum. Suspendisse non magna in dolor convallis bibendum. Integer pretium pharetra facilisis. Sed tempus maximushem ssapien, id rutrum dolor biben eget semsgjd. iaculis posuere. Curabitur dictum odio eu enim pulvinar, et porttitor mi varius. Ut sagittis faucibus dolor. Ut pellentesque dui ac arcu molestie congue. Donec mattis, ex ut cursus dignissim, sem tortor finibus sem, quis aliquam lectus ligula et massa. Donec condimentum nec libero eu interdum.
				</p>
			</div>
		</div>
		<div class="divider black"></div>
		<?php
		$args = array(
			'post_type' => 'post', 
			'paged' => $paged,
			'cat' => 5
		);
		$wp_query = new WP_Query($args);
		$postcount = $wp_query->found_posts;
		while ( have_posts() ) : the_post();
		?>
		<div class="grid-holder">
			<div class="grid-col-50 blog-post-small">
				<img src="/wp-content/themes/storefront/assets/images/image-dummy.png" alt="">
				<?php the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive responsive--full', 'title' => 'Feature image']); ?>
			</div>
			<div class="grid-col-50 blog-post-small">
				<h3><?php the_title(); ?></h3>
				<p class="blue"><?php the_date(); ?></p>
				<p><?php the_excerpt(); ?></p>
				<p class="read-more"><a href="<?php the_permalink(); ?>"><?php _e('[:en]Read more[:sv]Läs mer') ?></a></p>
			</div>
		</div>
		<?php
		endwhile;
		?>


		<div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
		<div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>
	</div>
</section>

<?php
get_footer();
