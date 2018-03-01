<?php
/**
 * The template for displaying all single posts.
 *
 * @package storefront
 */

include 'head-block.php';
$post = get_post();
$col = "blue";
$catname = "";
if ( $post ) {
	$categories = get_the_category( $post->ID );
	$category = $categories[0];
	if($category->parent != null){
		$category = get_category($category->parent);
	}
	$catname = $category->name;
	$catslug = $category->slug;
	if($category->slug == "our-stories" ){
		$col = 'teal';
	}
	elseif($category->slug == "events"){
		$col = 'red';
	}
}
$lang = 'en_US';
    if(isset($_COOKIE["qtrans_front_language"])){
        if($_COOKIE["qtrans_front_language"] == 'sv'){
            $lang = 'sv_SE';
            setlocale(LC_ALL, "sv_SE");
        }    
    }
?>
<body <?php body_class([$col]); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TRZRN9M"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- facebook -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/sv_SE/sdk.js#xfbml=1&version=v2.12&appId=148415285857628&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- twitter -->
<script>window.twttr = (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0],
    t = window.twttr || {};
  if (d.getElementById(id)) return t;
  js = d.createElement(s);
  js.id = id;
  js.src = "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);

  t._e = [];
  t.ready = function(f) {
    t._e.push(f);
  };

  return t;
}(document, "script", "twitter-wjs"));</script>

<?php
include 'menu.php';
createMenu($col);
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
				<div class="social">
					<a class="mail-share" href="mailto:?Subject=<?php the_title() ?>&Body=<?php the_permalink(); ?>">
						<i class="fa fa-envelope"></i><?php _e('[:en]Share[:sv]Dela') ?>
					</a>
					<div class="fb-share-button" data-href="<?php the_permalink() ?>" data-layout="button" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.vardskapet.se%2F&amp;src=sdkpreparse">Dela</a></div>
					<a class="twitter-share-button" data-size="small" href="https://twitter.com/intent/tweet?text=<?php the_title() ?>">
Tweet</a>
					<script src="//platform.linkedin.com/in.js" type="text/javascript"> lang: <?php echo $lang ?></script>
					<script type="IN/Share" data-url="<?php the_permalink() ?>"></script>
				</div>

			<?php endwhile; ?>
			<div class="center">
				<div class="button colored blog-back">
					<?php _e('[:en]Go back[:sv]Tillbaka') ?>
				</div>
					<?php
						$buttontext = __('[:en]Blog page[:sv]Bloggsidan');
						$buttonlink = "/blog";
						if($catslug == "events"){
							$buttontext = __('[:en]Events page[:sv]Aktuellt sidan');
							$buttonlink = "/events";
						}
						else if($catslug == "our-stories"){
							$buttontext = __('[:en]More stories[:sv]Fler berättelser');
							$buttonlink = "/our-stories";
						}
					?>

					<a class="button colored" href="/<?php echo $catslug;?>"> <?php echo $buttontext; ?></a>
					<a class="button colored" href="#" onclick="window.print();"> <?php _e('[:en]Printable Version[:sv]Utskriftsvänlig version') ?></a>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
