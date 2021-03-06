<?php

/* Template Name: Blog */ 

include 'head-block.php';
?>
<body <?php body_class(['blue']); ?>>
<?php
include 'menu.php';
include 'video-header.php';
createMenu('blue');
$cats = isset($_GET['categories']) ? $_GET['categories'] : '';
if($cats == ''){
	$cats == 'Consideration, Dignity, Respect';
}
var_dump($cats);
$dateStart = isset($_GET['datestart']) ? $_GET['datestart'] : '';
$dateEnd = isset($_GET['dateend']) ? $_GET['dateend'] : '';
?>

<section class="main-content">
	<div class="content-inner">
		<div class="filter-search">
			<div class="date-from"><?php _e('[:en]From:[:sv]Från:') ?></div>
			<div class="date-to"><?php _e('[:en]To:[:sv]Till:') ?></div>
			<div id="filter-toggle" class="filter-toggle colored-background">
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
			<div class="grid-col-100 white-bg blog-intro">
				<h1>Blogg</h1>
				<p class="text-two-rows">
					Lorem ipsum dolor sit amet, consectetur sa adipiscing elit. Integer porttitor ligula ut sdgs consequat consectetur. Mauris sed ligulased nibh luctus rutrum. Suspendisse non magna in dolor convallis bibendum. Integer pretium pharetra facilisis. Sed tempus maximushem ssapien, id rutrum dolor biben eget semsgjd. iaculis posuere. Curabitur dictum odio eu enim pulvinar, et porttitor mi varius. Ut sagittis faucibus dolor. Ut pellentesque dui ac arcu molestie congue. Donec mattis, ex ut cursus dignissim, sem tortor finibus sem, quis aliquam lectus ligula et massa. Donec condimentum nec libero eu interdum.
				</p>
			</div>
		</div>
		<div class="divider-black"></div>
		<div class="blog-post-holder">
			<?php
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$args = array(
				'post_type' => 'post',
				'posts_per_page' => 6,
				'category_name' => $cats,
				'paged' => $paged ,
				'date_query' => array(
					'after' => $dateStart,
					'before' => $dateEnd
				)
			);
			$wp_query = new WP_Query($args);
			$postcount = $wp_query->found_posts;
			if ( have_posts() ) :
				while ( have_posts() ) : the_post();
				?>
				
				<div class="grid-holder">
					<div class="grid-col-50 blog-post-small image">
						<?php
							$imageurl = get_the_post_thumbnail_url($post->ID,'large');
							if(empty($imageurl)){
								$imageurl = '/wp-content/themes/storefront/assets/images/default-img.png';
							}
						?>
						<div class="blog-post-image" style='background-image: url("<?php echo $imageurl;?>");'></div>
					</div>
					<div class="grid-col-50 blog-post-small text">
						<h3 class="colored"><?php the_title(); ?></h3>
						<p class="blue date colored"><?php echo get_the_date('F j, Y'); ?></p>
						<div class="blog-excerpt"><?php the_excerpt(); ?></div>
						<p class="read-more colored"><a href="<?php the_permalink(); ?>"><?php _e('[:en]Read more[:sv]Läs mer') ?></a></p>
					</div>
				</div>
			<?php
				endwhile;
			endif;
			?>

		</div>
		<div class="grid-holder">
			<div class="grid-col-100">
				<div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
				<div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
