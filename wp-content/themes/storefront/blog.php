<?php

/* Template Name: Blog */ 

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
$cats = isset($_GET['categories']) ? $_GET['categories'] : '';
if(empty($cats)){
	$cats = 'Blog';
}
$catArray = explode(',',$cats);
$dateStart = isset($_GET['datestart']) ? $_GET['datestart'] : '';
$dateEnd = isset($_GET['dateend']) ? $_GET['dateend'] : '';
?>

<section class="main-content">
	<div class="content-inner">
		<!--
		<div class="filter-search">
			<div id="filter-toggle" class="filter-toggle colored-background">
				<p><?php _e('[:en]Search Alternatives[:sv]Sökalternativ') ?></p>
				<img class="search-icon contracted" src="/wp-content/themes/storefront/assets/images/search-icon.png">
				<img class="search-icon expanded"  src="/wp-content/themes/storefront/assets/images/search-icon-expanded.png">
			</div>
			<div class="searchandfilter">
				<div class="category-column">
					<p class="regular"><?php _e('[:en]Category[:sv]Kategori')?></p>
					<?php
						$args = array('child_of' => 18); //18 = Blog
						$categories = get_categories($args);
						foreach($categories as $category){
							$isActive = '';
							foreach($catArray as $pagedCat){
								if(strtolower($category->category_nicename) == $pagedCat){
									$isActive = 'active';
								}
							}
							echo "<div data-cat=".$category->category_nicename." class='cat-checkbox ".$isActive."'>".$category->name."</div>";
						}
					?>
				</div>
				<div class="date-column">
					<p class="regular"><?php _e('[:en]Date[:sv]Datum')?></p>
					<div>
						<span class="date-label"><?php _e('[:en]From:[:sv]Från:')?></span>
						<input data-toggle="datepicker" id="datepicker-from" readonly class="datepicker-field"  value="<?php echo $dateStart ?>">
					</div>
					<div>
						<span class="date-label"><?php _e('[:en]To:[:sv]Till:')?></span>
						<input data-toggle="datepicker" readonly id="datepicker-to"  class="datepicker-field" value="<?php echo $dateEnd ?>">
					</div>
					<div id="date-container"></div>
				</div>
				<div class="cf"></div>
				<div class="button filter-button"><?php _e('[:en]Search[:sv]Sök') ?></div>
			</div>
		</div>
					-->

		<div class="grid-holder">
			<div class="grid-col-100 white-bg blog-intro">
				<h1 class="colored center"><?php the_title(); ?></h1>
				<p class="text-two-rows">
					<?php
					if(have_posts()): while(have_posts()): the_post();
					the_content();
					endwhile; endif;?>
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
						<div class="blog-post-image" data-href="<?php the_permalink(); ?>" style='background-image: url("<?php echo $imageurl;?>");'></div>
					</div>
					<div class="grid-col-50 blog-post-small text">
						<h3 class="colored"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<p class="blue date colored"><?php echo get_the_date('F j, Y'); ?></p>
						<div class="blog-excerpt"><?php the_excerpt(); ?></div>
						<p class="read-more colored"><a href="<?php the_permalink(); ?>"><?php _e('[:en]Read more[:sv]Läs mer') ?></a></p>
					</div>
				</div>
				<?php
				endwhile;
			else:
				?>
				<p class="colored center"> <?php _e('[:en]No posts found...[:sv]Inga inlägg hittades') ?> </p>
				<?
			endif;
			?>

		</div>
		<div class="grid-holder">
			<div class="grid-col-100">
				<?php $prev = __('[:en]Older posts[:sv]Äldre inlägg');
				$next = __('[:en]Newer posts[:sv]Nyare inlägg');?>
				<div class="nav-previous alignleft"><?php next_posts_link($prev); ?></div>
				<div class="nav-next alignright"><?php previous_posts_link($next ); ?></div>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
