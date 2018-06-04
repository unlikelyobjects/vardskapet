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
 /* Template Name: Front Page */ 

include 'head-block.php';

?>
<body <?php body_class(['show-video-header','green']); ?>>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TRZRN9M"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<?php
include 'menu.php';
include 'video-header.php';
createMenu('green');
createVideoHeader('');
$greenbox = get_field('green_box');
$tealbox = get_field('teal_box');
$clientsection = get_field('client_section');
$servicesection = get_field('service_section');
$newsletter = get_field('newsletter');
?>
<section class="main-content">
	<div class="content-inner">
		<div class="grid-holder">

			<div class="grid-col-50 green-bg-square colored-box">
				<h1><?php echo $greenbox['title'] ?></h1>
				<p class="colored-body"><?php echo $greenbox['body'] ?></p>
				<div class="divider"></div>
				<p class="colored-link"><a href="<?php echo $greenbox['read_more_link'] ?>"><?php _e("[:en]Read more[:sv]Läs mer här"); ?></a></p>
            </div>
            
			<div class="grid-col-50 colored-box latest-blogs">
				<div class="slick-slider-text">
					<?php
					$cats = array('Blog','Our stories','Events');
					$catClass = array('blog-bg','stories-bg','events-bg');
					$catTitle = array("[:en]Latest blog post[:sv]Senaste blogginlägget","[:en]Latest story[:sv]Senaste berättelsen","[:en]Upcoming events[:sv]Aktuellt");
					for($x = 0; $x <= 2; $x++) : ?>
						<?php
						$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
						$args = array(
							'post_type' => 'post',
							'category_name' => $cats[$x],
							'posts_per_page' => 1
						);
						$wp_query = new WP_Query($args);
						$postcount = $wp_query->found_posts;
						if ( have_posts() ) :
							while ( have_posts() ) : the_post();
							$link = get_the_permalink();
							if($x == 2){
								$link = "/events/";
							}
							?>
							<div class="slidething <?php echo $catClass[$x]; ?>" data-url="<?php echo $link ?>">
								<h2><?php _e($catTitle[$x]); ?></h2>
								<div class="divider-short"></div>
								<div class="date"><?php echo get_the_date('F j, Y'); ?></div>
								<div class="slider-excerpt"><?php the_excerpt(); ?></div>
							</div>
							<?php
							endwhile;
						endif;
					endfor; ?>
				</div>
			<div class="divider"></div>
			<div class="colored-link"><?php _e("[:en]Read more[:sv]Läs mer här"); ?></div>
		</div>
		<div class="grid-holder">
			<div class="grid-col-100 teal-bg-square colored-box">
				<h1 class="center"><?php echo $tealbox['title'] ?></h1>
				<p class="text-two-rows"><?php echo $tealbox['body'] ?></p>
				<div class="center">
					<div class="button"><a href="<?php echo $tealbox['read_more_link'] ?>"><?php _e("[:en]Read more[:sv]Läs mer här"); ?></a></div>
				</div>
			</div>
			<div class="grid-col-100 white-bg service-intro">
				<h1><?php echo $servicesection['title'] ?></h1>
				<p class="text-two-rows">
					<?php echo $servicesection['body'] ?>
				</p>
			</div>
		</div>
		<div class="grid-holder services-holder">
            <?php foreach($servicesection['colored_boxes'] as $box): ?>
			<div class="grid-col-33 services purple-bg" data-href="<?php echo $box['read_more_link'] ?>">
				<div class="icon-bg icon-film"></div>
				<div class="divider"></div>
				<h2><?php echo $box['title'] ?></h2>
				<p><?php echo $box['body'] ?></p>
				<div class="button"><a href="<?php echo $box['read_more_link'] ?>"><?php _e('[:en]Read more[:sv]Läs mer här') ?></a></div>
            </div>
            <? endforeach; ?>
		</div>
		<div class="grid-holder">
			<div class="grid-col-100 white-bg">
				<h1 class="center"><?php echo $clientsection['title'] ?></h1>
				<p class="text-two-rows">
					<?php echo $clientsection['body'] ?>
                </p>
                <?php
                foreach( $clientsection['clients'] as $client){
                    echo '<div class="client" style="background-image:url('.$client['client_logo'].'";" data-body="'.$client['popup_body'].'" data-title="'.$client['popup_title'].'" data-image="'.$client['popup_image'].'" data-youtube="'.$client['youtube_url'].'"><div class="overlay">&#xf48a;</div></div>';
                }
                ?>

			</div>
			
		</div>
		
		<div class="newsletter" id="newsletter">
			<h1><?php echo $newsletter['title'] ?></h1>
			<p><?php echo $newsletter['body'] ?></p>
			<div class="thank-you form-thanks">
				<h4 class="regular center"><?php _e('[:en]Thanks![:sv]Tack!') ?></h4>
			</div>
			<form id="newsletter-form" action="https://vardskapet.us15.list-manage.com/subscribe/post-json?u=8e89414b6065ae3f0464ac530&id=442c278af2&c=?" method="get">
				<input type="hidden" name="u" value="8e89414b6065ae3f0464ac530">
				<input type="hidden" name="id" value="442c278af2">
				<input type="email" placeholder="<?php _e('[:en]E-mail address[:sv]E-postadress') ?>" autocapitalize="off" autocorrect="off" name="MERGE0" id="MERGE0" size="25" value="">
				<input type="submit" class="button" value="<?php _e('[:en]Subscribe[:sv]Prenumerera')?>">
				<br>
				<p>När du lämnar dina kontaktuppgifter samtycker du till att vi skickar information och erbjudanden till dig. <a href="/sekretess-och-anvandarvillkor">Läs mer här.</a></p>
			</form>
			<?php //echo do_shortcode('[mc4wp_form id="258"]'); ?>
		</div>
	</div>
</section>

<div class="client-modal customer-popup">
	<div class="client-modal-content">
		<div class="client-modal-close ion">&#xf405;</div>
		<div class="client-modal-wrapper">
			<h1 class="client-modal-title center">Title</h1>
			<p class="regular center"><?php _e('[:en]Client reference[:sv]Kundreferens') ?></p>
			<p class="client-modal-body center light">Body</p>
			<div class="client-modal-image"></div>
			<div class="client-modal-youtube">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/yHZH8bLQ_Xo?rel=0&amp;showinfo=0" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
			</div>
		</div>
	</div>
</div>

<?php
get_footer();
