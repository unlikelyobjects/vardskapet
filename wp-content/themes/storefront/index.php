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
if($_COOKIE["qtrans_front_language"] == 'sv'){
  $lang = 'sv';
  $menu = ['Hem','Blogg','Värdskapet','Våra Tjänster','Kontakta oss'];
  setlocale(LC_ALL, "sv_SE");
} else {
  $lang = 'en';
  $menu = ['Home','Blog','Värdskapet','Our Services','Contact us'];
}
?>
<body <?php body_class(); ?>>
<div class="menu cf">
	<div class="menu-logo"></div>
	<div class="menu-links">
		<a class="menu-link" href="/home"><?php echo $menu[0]?></a>
		<a class="menu-link" href="/blog"><?php echo $menu[1]?></a>
		<a class="menu-link" href="/vardskapet"><?php echo $menu[2]?></a>
		<a class="menu-link" href="/services"><?php echo $menu[3]?></a>
		<a class="menu-link" href="/contact"><?php echo $menu[4]?></a>
		<div data-href="en" <?php if($lang == 'en'){echo 'class="active"';} ?>></div>
		<div data-href="sv" <?php if($lang == 'sv'){echo 'class="active"';} ?>></div>
	</div>
</div>
<div class='video-header' data-url="https://www.youtube.com/watch?v=Zk9J5xnTVMA">
	<h1 class="video-title">Art of Welcoming</h1>
	<p>Tryck här för att se trailern</p>
	<div class="play-button"></div>
	<div class="arrow-down"></div>
</div>

<section class="main-content">
	<div class="content-inner">
		<div class="grid-holder">
			<div class="grid-col-50 green-bg-square colored-box">
				<h1>Vad är värdskap?</h1>
				<p class="colored-body">Lorem ipsum dolor sit amet, Shasd consectetur sa adipiscing elit. Sdfs Integer porttitor ligula asfaq       nsequat consectetur. Mauris sedha ligulased nibh luctus rutru sgfasfs.</p>
				<div class="divider"></div>
				<p class="colored-link"><a href="#">Läs mer här</a></p>
			</div>
			<div class="grid-col-50 blue-bg-square colored-box">
				<h2>Senaste blogginlägget</h2>
				<div class="divider-short"></div>
				
				<div class="slick-slider-text">
					<div class="slidething">
						<div class="date">21 Sep 2017</div>
						<p class="slider-excerpt">Aliquam neque quisque quis adipiacing, felis aliquam vitae mollis dias mporta fu.quia nulla turpismagnsa. Aliquam neque quisque quis adipia nafafam. velit, ut commodo etiam. Turpis urna magni. 2</p>
					</div>
					<div class="slidething">
						<div class="date">21 Sep 2017</div>
						<p class="slider-excerpt">Aliquam neque quisque quis adipiacing, felis aliquam vitae mollis dias mporta fu.quia nulla turpismagnsa. Aliquam neque quisque quis adipia nafafam. velit, ut commodo etiam. Turpis urna magni. 2</p>
					</div>
					<div class="slidething">
						<div class="date">21 Sep 2017</div>
						<p class="slider-excerpt">Aliquam neque quisque quis adipiacing, felis aliquam vitae mollis dias mporta fu.quia nulla turpismagnsa. Aliquam neque quisque quis adipia nafafam. velit, ut commodo etiam. Turpis urna magni. 2</p>
					</div>
				</div>
				<div class="divider"></div>
				<div class="colored-link"><a href="#">Läs mer här</a></div>
			</div>
		</div>
		<div class="grid-holder">
			<div class="grid-col-100 teal-bg-square colored-box">
				<h1 class="center">Om värdskapet</h1>
				<p class="text-two-rows">Lorem ipsum dolor sit amet, consectetur sa adipiscing elit. Integer porttitor ligula ut sdgs consequat consectetur. Mauris sed ligulased nibh luctus rutrum. Suspendisse non magna in dolor convallis bibendum. Integer pretium pharetra facilisis. Sed tempus maximushem ssapien, id rutrum dolor biben eget semsgjd. iaculis posuere. Curabitur dictum odio eu enim pulvinar, et porttitor mi varius. Ut sagittis faucibus dolor. Ut pellentesque dui ac arcu molestie congue. Donec mattis, ex ut cursus dignissim, sem tortor finibus sem, quis aliquam lectus ligula et massa. Donec condimentum nec libero eu interdum.</p>
				<div class="center">
					<div class="button">Läs mer här</div>
				</div>
			</div>
		</div>
		<div class="grid-holder">
			<div class="grid-col-100 white-bg">
				<h1 class="center">Värdskap applicerat<br>i verkligheten</h1>
				<p class="text-two-rows">
					Lorem ipsum dolor sit amet, consectetur sa adipiscing elit. Integer porttitor ligula ut sdgs consequat consectetur. Mauris sed ligulased nibh luctus rutrum. Suspendisse non magna in dolor convallis bibendum. Integer pretium pharetra facilisis. Sed tempus maximushem ssapien, id rutrum dolor biben eget semsgjd. iaculis posuere. Curabitur dictum odio eu enim pulvinar, et porttitor mi varius. Ut sagittis faucibus dolor. Ut pellentesque dui ac arcu molestie congue. Donec mattis, ex ut cursus dignissim, sem tortor finibus sem, quis aliquam lectus ligula et massa. Donec condimentum nec libero eu interdum.
				</p>
				<img class="client" src="/wp-content/themes/storefront/assets/images/client.png">
				<img class="client" src="/wp-content/themes/storefront/assets/images/client.png">
				<img class="client" src="/wp-content/themes/storefront/assets/images/client.png">
			</div>
			<div class="grid-col-100 white-bg">
				<h1>Våra tjänster</h1>
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
			<h1>Världskapsbrevet</h1>
			<p>Aliquam neque quisque quis adipiscingsfelis aliquam vitaeag
mollis diam gasa sgfusce quia nulls sa sgfus.</p>
			<div class="form">
				<input id="newsletter-input" type="email" placeholder="Skriv er emailadress här">
				<p class="form-error">Fel</p>
				<p class="form-sent">Tack!</p>
			</div>
			<div class="button" id="newsletter-send">Prenumerera</div>
		</div>
	</div>
</section>

<script src="/wp-content/themes/storefront/assets/js/vendor/slick.min.js"></script>
<script src="/wp-content/themes/storefront/assets/js/general.min.js"></script>
<script>
	$ = jQuery;
	$('.menu-links div[data-href]').click(function(){
		var href = window.location.href + '?lang=' + $(this).attr('data-href');
		console.log(href);
		window.location.href = href;
	})
</script>

<?php
//do_action( 'storefront_sidebar' );
get_footer();
