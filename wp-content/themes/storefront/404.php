<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package storefront
 */

include 'head-block.php';
$post = get_post();
$col = "blue";
if ( $post ) {
    $categories = get_the_category( $post->ID );
	foreach($categories as $cat){
		if($cat->name == "Our stories" ){
			$col = 'teal';
		}
		elseif($cat->name == "Events"){
			$col = 'red';
		}
	}
}
?>
<body <?php body_class([$col]); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TRZRN9M"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php
include 'menu.php';
createMenu($col);
?>
<section class="main-content">
	<div class="content-inner">
		<div class="blog-post-single">
			<h1 class="colored"><?php _e("[:en]The page you are looking for can't be found[:sv]Sidan du söker finns inte")?></h1>
			<div class="blog-post-content">
			<p class="center black"><?php _e("[:en]<a class='colored' href='/'>Click here</a>to go back to the front page[:sv]<a class='colored' href='/'>Klicka här</a> för att gå tillbaka till startsidan")?></p>
			</div>
	</div>
</section>

<?php
get_footer();
