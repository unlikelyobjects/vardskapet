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

/* Template Name: Training */ 

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
<?php
include 'menu.php';
include 'video-header.php';
createMenu($menucolor);
if($showvideo == 'yes'):
    createVideoHeader('');
endif;
?>

<section class="main-content dynamicpage">
	<div class="content-inner">
		<div class="grid-holder">
			<div class="grid-col-100 white-bg dynamicpage-intro">
                <?php
                if ( have_posts() ) :
				    while ( have_posts() ) : the_post();
                    ?>
                    <h1 class="colored"><?php the_title(); ?></h1>
                    <div class="text-two-rows">
                        <?php the_content(); ?>
                    </div>
                    <?php
                    endwhile;
                endif;
                ?>
			</div>
        </div>
        <?php get_template_part( 'content-block' ); ?>
        <div class="training-buttons center">
            <div class="button colored get-contacted"><?php _e('[:en]Get contacted[:sv]Bli kontaktad') ?></div>
            <div class="button colored"><a href="/about-vardskapet/#dynamic"><?php _e('[:en]Contact us[:sv]Kontakta oss') ?></a></div>
            <div class="button colored make-a-request"><?php _e('[:en]Make a request[:sv]Gör en förfrågan')?></div>
        </div>
	</div>
</section>

<div class="client-modal get-contacted-popup">
    <div class="client-modal-content colored-background">
        <div class="client-modal-close ion">&#xf405;</div>
        <div class="client-modal-wrapper">
            <div class="contact-form">
                <h1>Er information</h1>
                <input type="text" id="contact-form-name" placeholder="Ert namn...">
                <input type="text" id="contact-form-company" placeholder="Ert företag...">
                <input type="number" id="contact-form-phone" placeholder="Ert telefonnummer...">
                <input type="email" id="contact-form-email" placeholder="Er email...">
                <div class="center">
                    <input type="submit" value="<?php _e('[:en]Send[:sv]Skicka')?>" class="button"></div>
                </div>
            </div>
            <div class="contact-form-thanks hidden">
                <h1>Tack!</h1>
                <p>Vi hör av oss så snart som möjligt.</p>
            </div>
        </div>
    </div>
</div>

<div class="client-modal request-popup fullscreen">
    <div class="client-modal-content colored-background">
        <div class="client-modal-close ion">&#xf405;</div>
        <div class="client-modal-wrapper">
            <div class="request-form">
                <h1 class="center">Er information</h1>
                <input type="text" id="request-form-name" placeholder="Ert namn...">
                <input type="number" id="request-form-phone" placeholder="Ert telefonnummer...">
                <input type="email" id="request-form-email" placeholder="Er email...">
                <select id="request-form-company">
                value="hide"
                    <option value="hide">Typ av organisation</option>
                    <option value="Näringsliv">Näringsliv</option>
                    <option value="Utbildning">Utbildning</option>
                </select>
                <select id="request-form-employees">
                    <option value="hide">Antal anställda</option>
                    <option value="mindre än 10">mindre än 10</option>
                    <option value="10 till 20">10 till 20</option>
                    <option value="20 till 50">20 till 50</option>
                    <option value="50+">50+</option>
                </select>
                <h1 class="center pad25">Om föreläsningen</h1>
                <select id="request-form-audience">
                    <option value="hide">Vilken målgrupp?</option>
                    <option value="Målgrupp 1">Målgrupp 1</option>
                    <option value="Målgrupp 2">Målgrupp 2</option>
                    <option value="Målgrupp 3">Målgrupp 3</option>
                </select>
                <select id="request-form-participants">
                    <option value="hide">Antal deltagare?</option>
                    <option value="mindre än 10">mindre än 10</option>
                    <option value="10 till 20">10 till 20</option>
                    <option value="20 till 50">20 till 50</option>
                    <option value="50+">50+</option>
                </select>
                <select id="request-form-time">
                    <option value="hide">Tid?</option>
                    <option value="09:00">09:00</option>
                    <option value="10:00">10:00</option>
                    <option value="11:00">11:00</option>
                    <option value="13:00">13:00</option>
                </select>
                <select id="request-form-pass">
                    <option value="hide">Pass?</option>
                    <option value="Pass 1">Pass 1</option>
                    <option value="Pass 2">Pass 2</option>
                    <option value="Pass 3">Pass 3</option>
                    <option value="Pass 4">Pass 4</option>
                </select>
                <input type="text" id="request-form-address" placeholder="Address...">
                <select id="request-form-facility">
                    <option value="hide">Typ av lokal?</option>
                    <option value="Lokal 1">Lokal 1</option>
                    <option value="Lokal 2">Lokal 2</option>
                    <option value="Lokal 3">Lokal 3</option>
                    <option value="Lokal 4">Lokal 4</option>
                </select>
                <textarea id="request-form-purpose" rows="5" placeholder="Ert syfte med föreläsningen..."></textarea>

                <div class="center">
                    <input type="submit" value="<?php _e('[:en]Send[:sv]Skicka')?>" class="button"></div>
                </div>
            </div>
            <div class="request-form-thanks hidden">
                <h1>Tack!</h1>
                <p>Vi hör av oss så snart som möjligt.</p>
            </div>
        </div>
    </div>
</div>

<?php
//do_action( 'storefront_sidebar' );
get_footer();
