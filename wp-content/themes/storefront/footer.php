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
			<div class="footer-logo">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-logo.png">
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
			<div class="copyright">@ Copyright 2018 Värdskapet Utveckling AB</div>
			<div class="developer">Made by <a href="http://www.thirdact.se">Thirdact.se</a></div>
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

<div class="client-modal get-contacted-popup">
    <div class="client-modal-content colored-background">
        <div class="client-modal-close ion">&#xf405;</div>
        <div class="client-modal-wrapper">
            <div class="contact-form">
				<form id="contact-form">
					<h1><?php _e('[:en]We will contact you[:sv]Vi kontaktar dig')?></h1>
					<input required type="text" id="contact-form-name" placeholder="<?php _e('[:en]Your name[:sv]Kontaktperson')?>">
					<input required type="text" id="contact-form-company" placeholder="<?php _e('[:en]Company name[:sv]Företagsnamn')?>">
					<input required type="text" id="contact-form-phone" placeholder="<?php _e('[:en]Phone number[:sv]Telefon')?>">
					<input required type="email" id="contact-form-email" placeholder="<?php _e('[:en]E-mail[:sv]E-postadress')?>">
					<div class="center">
						<input type="submit" value="<?php _e('[:en]Send[:sv]Skicka')?>" class="button">
					</div>
					<p class="privacy-modal">När du lämnar dina kontaktuppgifter samtycker du till att vi skickar information och erbjudanden till dig. <a href="/sekretess-och-anvandarvillkor">Läs mer här.</a></p>
				</form>
            </div>
            <div class="contact-form-thanks hidden">
                <h1><?php _e('[:en]Thanks![:sv]Tack!')?></h1>
                <p><?php _e('[:en]We´ll contact you as soon as possbile.[:sv]Vi hör av oss så snart som möjligt.')?></p>
            </div>
        </div>
    </div>
</div>

<div class="client-modal movie-preview-popup">
    <div class="client-modal-content colored-background">
        <div class="client-modal-close ion">&#xf405;</div>
        <div class="client-modal-wrapper">
			<div class="form">
				<h1 class="center hide-sub"><?php _e('[:en]Watch the first five minutes of <br>Art of Welcoming![:sv]Se fem minuter av filmen Art of Welcoming!');?></h1>
				<p class="center hide-sub"><?php _e('[:en]Subscribe to our newsletter to follow the subject and to see the first five minutes of our documentary or read more on how you can experience our documentary.[:sv]Välkommen att fylla i din e-postadress så skickar vi fem minuter av Art of Welcoming och en prenumeration på Värdskapsbrevet - inspirerande berättelser om värdskap och senaste nytt om våra arrangemang.') ?></p>
				<p class="movie-privacy">När du lämnar dina kontaktuppgifter samtycker du till att vi skickar information och erbjudanden till dig. <a href="/sekretess-och-anvandarvillkor">Läs mer här.</a></p>
				<form id="video-form" action="https://vardskapet.us15.list-manage.com/subscribe/post-json?u=8e89414b6065ae3f0464ac530&id=6bd7ff0546&c=?" method="POST">
					<input type="hidden" name="u" value="8e89414b6065ae3f0464ac530">
					<input type="hidden" name="id" value="6bd7ff0546">	
					<input type="email" placeholder="<?php _e('[:en]E-mail address[:sv]E-postadress') ?>" autocapitalize="off" autocorrect="off" name="MERGE0" id="MERGE0" size="25" value="">
					<input type="submit" class="button" value="<?php _e('[:en]Send[:sv]Skicka')?>">
				</form>
				<div class="get-contacted-thanks form-thanks">
					<h1 class="center"><?php _e('[:en]Thanks![:sv]Tack!');?></h1>
				</div>
				
				<div class="center">		
					<div class="button colored hide-sub read-more"><a href="/the-art-of-welcoming"><?php _e('[:en]Read more[:sv]Läs mer');?></a></div>
				</div>
			</div>
			
		</div>
	</div>
</div>
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
			showinfo: '0',
			videoId: window.selectedYoutubeVideo,
			events: {
				'onReady': function(){
					window.videoDialogPlayer.playVideo();
				},
				'onStateChange': window.onVideoStateChange
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
}());
  </script>
<script>
  window.intercomSettings = {
	app_id: "as7tzi7p"
  };
</script>
<script>(function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',intercomSettings);}else{var d=document;var i=function(){i.c(arguments)};i.q=[];i.c=function(args){i.q.push(args)};w.Intercom=i;function l(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/as7tzi7p';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);}if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})()</script>
</body>
</html>
