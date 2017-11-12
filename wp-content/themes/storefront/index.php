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
include 'head-block.php';

?>
<body <?php body_class(['show-video-header','green']); ?>>
<?php
include 'menu.php';
include 'video-header.php';
createMenu('blue');
createVideoHeader('');
?>
<section class="main-content">
	<div class="content-inner">
		<div class="grid-holder">
			<div class="grid-col-50 green-bg-square colored-box">
				<h1><?php _e("[:en]What is welcoming?[:sv]Vad är värdskap?"); ?></h1>
				<p class="colored-body">Lorem ipsum dolor sit amet, Shasd consectetur sa adipiscing elit. Sdfs Integer porttitor ligula asfaq       nsequat consectetur. Mauris sedha ligulased nibh luctus rutru sgfasfs.</p>
				<div class="divider"></div>
				<p class="colored-link"><a href="#"><?php _e("[:en]Read more[:sv]Läs mer här"); ?></a></p>
			</div>
			<div class="grid-col-50 blue-bg-square colored-box latest-blogs">
				<h2><?php _e("[:en]Latest blog post[:sv]Senaste blogginlägget"); ?></h2>
				<div class="divider-short"></div>
				
				<div class="slick-slider-text">
					<?php
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					$args = array(
						'post_type' => 'post',
						'posts_per_page' => 3
					);
					$wp_query = new WP_Query($args);
					$postcount = $wp_query->found_posts;
					if ( have_posts() ) :
						while ( have_posts() ) : the_post();
						?>
						<div class="slidething" data-url="<?php the_permalink(); ?>">
							<div class="date"><?php echo get_the_date('F j, Y'); ?></div>
							<div class="slider-excerpt"><?php the_excerpt(); ?></div>
						</div>
					<?php
						endwhile;
					endif;
					?>
				</div>
				<div class="divider"></div>
				<div class="colored-link"><?php _e("[:en]Read more[:sv]Läs mer här"); ?></div>
			</div>
		</div>
		<div class="grid-holder">
			<div class="grid-col-100 teal-bg-square colored-box">
				<h1 class="center"><?php _e("[:en]About värdskapet[:sv]Om värdskapet"); ?></h1>
				<p class="text-two-rows">Lorem ipsum dolor sit amet, consectetur sa adipiscing elit. Integer porttitor ligula ut sdgs consequat consectetur. Mauris sed ligulased nibh luctus rutrum. Suspendisse non magna in dolor convallis bibendum. Integer pretium pharetra facilisis. Sed tempus maximushem ssapien, id rutrum dolor biben eget semsgjd. iaculis posuere. Curabitur dictum odio eu enim pulvinar, et porttitor mi varius. Ut sagittis faucibus dolor. Ut pellentesque dui ac arcu molestie congue. Donec mattis, ex ut cursus dignissim, sem tortor finibus sem, quis aliquam lectus ligula et massa. Donec condimentum nec libero eu interdum.</p>
				<div class="center">
					<div class="button"><?php _e("[:en]Read more[:sv]Läs mer här"); ?></div>
				</div>
			</div>
		</div>
		<div class="grid-holder">
			<div class="grid-col-100 white-bg">
				<h1 class="center"><?php _e("[:en]Welcoming applied<br>in reality[:sv]Värdskap applicerat<br>i verkligheten"); ?></h1>
				<p class="text-two-rows">
					Lorem ipsum dolor sit amet, consectetur sa adipiscing elit. Integer porttitor ligula ut sdgs consequat consectetur. Mauris sed ligulased nibh luctus rutrum. Suspendisse non magna in dolor convallis bibendum. Integer pretium pharetra facilisis. Sed tempus maximushem ssapien, id rutrum dolor biben eget semsgjd. iaculis posuere. Curabitur dictum odio eu enim pulvinar, et porttitor mi varius. Ut sagittis faucibus dolor. Ut pellentesque dui ac arcu molestie congue. Donec mattis, ex ut cursus dignissim, sem tortor finibus sem, quis aliquam lectus ligula et massa. Donec condimentum nec libero eu interdum.
				</p>
				<img class="client" src="/wp-content/themes/storefront/assets/images/client.png">
				<img class="client" src="/wp-content/themes/storefront/assets/images/client.png">
				<img class="client" src="/wp-content/themes/storefront/assets/images/client.png">
			</div>
			<div class="grid-col-100 white-bg">
				<h1><?php _e("[:en]Our services[:sv]Våra tjänster"); ?></h1>
				<p class="text-two-rows">
					Lorem ipsum dolor sit amet, consectetur sa adipiscing elit. Integer porttitor ligula ut sdgs consequat consectetur. Mauris sed ligulased nibh luctus rutrum. Suspendisse non magna in dolor convallis bibendum. Integer pretium pharetra facilisis. Sed tempus maximushem ssapien, id rutrum dolor biben eget semsgjd. iaculis posuere. Curabitur dictum odio eu enim pulvinar, et porttitor mi varius. Ut sagittis faucibus dolor.
				</p>
			</div>
		</div>
		<div class="grid-holder services-holder">
			<div class="grid-col-33 services purple-bg">
				<div class="icon-bg icon-film"></div>
				<div class="divider"></div>
				<h2>Dokumentär</h2>
				<p>Aliquam neque quis que quis adipiscings felis aliquam vitaeagmollis diam gasa sgfusce quia nulla. </p>
				<div class="button"><a href="#">Läs mer här</a></div>
			</div>
			<div class="grid-col-33 services green-bg">
				<div class="icon-bg icon-speech"></div>
				<div class="divider"></div>
				<h2>Föreläsningar</h2>
				<p>Aliquam neque quis que quis adipiscings felis aliquam vitaeagmollis diam gasa sgfusce quia nulla. </p>
				<div class="button"><a href="#">Läs mer här</a></div>
			</div>
			<div class="grid-col-33 services red-bg">
				<div class="icon-bg icon-hat"></div>
				<div class="divider"></div>
				<h2>Träning</h2>
				<p>Aliquam neque quis que quis adipiscings felis aliquam vitaeagmollis diam gasa sgfusce quia nulla. </p>
				<div class="button"><a href="#">Läs mer här</a></div>
			</div>
		</div>
		<div class="newsletter">
			<h1><?php _e("[:en]The welcoming letter[:sv]Världskapsbrevet"); ?></h1>
			<p>Aliquam neque quisque quis adipiscingsfelis aliquam vitaeag
mollis diam gasa sgfusce quia nulls sa sgfus.</p>
			<div class="form">
				<input id="newsletter-input" type="email" placeholder="<?php _e("[:en]Write your e-mail here[:sv]Skriv er emailadress här"); ?>">
				<p class="form-error"><?php _e("[:en]Malformed e-mail[:sv]Felaktig emailadress")?></p>
				<p class="form-sent"><?php _e("[:en]Thank you![:sv]Tack!")?></p>
			</div>
			<div class="button" id="newsletter-send"><?php _e("[:en]Subscribe[:sv]Prenumerera")?></div>
		</div>
	</div>
</section>

<?php
//do_action( 'storefront_sidebar' );
get_footer();
