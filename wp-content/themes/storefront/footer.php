<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

		</div><!-- .col-full -->
	</div><!-- #content -->

	<?php do_action( 'storefront_before_footer' ); ?>

	<footer id="colophon" class="site-footer colored-background" role="contentinfo">
		<div class="footer-links">
			<div class="footer-man">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/man.png">
			</div>
			<div class="footer-social">
				<p class="medium">Våra sociala medier:</p>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/share-fb.png" class="share share-fb">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/share-yt.png" class="share share-yt">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/share-insta.png" class="share share-insta">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/share-linked.png" class="share share-linked">
			</div>
			<!--
			<div class="sitemap">
				<a href="/">Hem</a> /
				<a href="/blog">Blogg</a> /
				<a href="/about">Värdskapet</a> /
				<a href="/services">Våra Tjänster</a> /
				<a href="/contact">Kontakta oss</a>
			</div>
			-->
			<div class="divider"></div>
			<div class="copyright">@ Copyright 2010 Värdskapet Utveckling AB</div>
			<div class="developer"><a href="http://www.thirdact.se">Webbyrå Thirdact.se</a></div>
		</div>
		<div class="col-full">

			<?php
			/**
			 * Functions hooked in to storefront_footer action
			 *
			 * @hooked storefront_footer_widgets - 10
			 * @hooked storefront_credit         - 20
			 */
			do_action( 'storefront_footer' ); ?>

		</div><!-- .col-full -->
	</footer><!-- #colophon -->

	<?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>


<div class="modal fade video-dialog" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="video-modal">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
				<button type="button" data-dismiss="modal">&#xf2d7;</button>
				<div id="video-dialog-player" class="vidflex"></div>
		</div>
	</div>
</div>
<script>
(function () {
	youTubeApiReady = function () {
		console.log('ready yt');
		window.videoDialogPlayer = new YT.Player('video-dialog-player', {
			height: '360',
			width: '640',
			videoId: window.selectedYoutubeVideo,
			events: {
				'onReady': function(){
					window.videoDialogPlayer.playVideo();
				},
				'onStateChange': onPlayerStateChange
			}
		});
	}
	var el = document.createElement('script');
	el.src = "//www.youtube.com/iframe_api";
	var s = document.getElementsByTagName('script')[0];
	console.log(s);
	s.parentNode.insertBefore(el, s);
	
	// YT API is bugged and sometimes does not fire the ready event
	var checkYT = setInterval(function () {
		if(YT.loaded){
			//...setup video here using YT.Player()
			console.log('yt loaded loop');
			youTubeApiReady();
			clearInterval(checkYT);
		}
	}, 100);

	function onPlayerStateChange(event) {
		console.log(event);
		if(event.data == YT.PlayerState.ENDED){
			console.log('video ended');
			$('#video-modal').modal('hide');
		}
	}
}());
  </script>
</body>
</html>
