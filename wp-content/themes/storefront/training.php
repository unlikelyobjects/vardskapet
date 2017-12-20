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
            <div class="button colored"><a class="show-contact-popup"><?php _e('[:en]Contact us[:sv]Kontakta oss') ?></a></div>
            <div class="button colored make-a-request"><?php _e('[:en]Make a request[:sv]Gör en förfrågan')?></div>
        </div>
	</div>
</section>


<div class="client-modal contact-popup">
    <div class="client-modal-content colored-background">
        <div class="client-modal-close ion">&#xf405;</div>
        <div class="client-modal-wrapper">
            <div class="contact-popup-content">
                <h1><?php _e('[:en]Contact us[:sv]Kontakta oss')?></h1>
                <p><?php _e('[:en]Call or e-mail us and we will help you.<br>Phone: 08-714 06 10<br><a href="mailto:info@vardskapet.se">info@vardskapet.se</a>[:sv]Ring eller mejla oss så hjälper vi dig.<br>Tfn: 08-714 06 10<br><a href="mailto:info@vardskapet.se">info@vardskapet.se</a>')?></p>
            </div>
        </div>
    </div>
</div>

<div class="client-modal request-popup fullscreen">
    <div class="client-modal-content colored-background">
        <div class="client-modal-close ion">&#xf405;</div>
        <div class="client-modal-wrapper">
            <div class="request-form">
                <h1 class="center"><?php _e('[:en]We will contact you[:sv]Vi kontaktar dig')?></h1>
                <input type="text" id="request-form-fullname" placeholder="<?php _e('[:en]Name[:sv]Kontaktperson');?>">
                <input type="text" id="request-form-phone" placeholder="<?php _e('[:en]Phone number[:sv]Telefon')?>">
                <input type="email" id="request-form-email" placeholder="<?php _e('[:en]Email[:sv]Email')?>">
                <select id="request-form-company">
                value="hide"
                    <option value="hide"><?php _e('[:en]Organizational form[:sv] Organisationsform')?></option>
                    <option value="Ideell organisation"><?php _e('[:en]Non-profit organization[:sv]Ideell organisation')?></option>
                    <option value="Frivillig organisation"><?php _e('[:en]voluntary organisation[:sv]Frivillig organisation') ?></option>
                    <option value="Offentlig finansierad verksamhet"><?php _e('[:en]Publicly funded organization[:sv]Offentlig finansierad verksamhet') ?></option>
                    <option value="Aktiebolag"><?php _e('[:en]Corporation[:sv]Aktiebolag') ?></option>
                </select>
                <h1 class="center pad25"><?php _e('[:en]About the lecture[:sv]Om föreläsningen')?></h1>
                <select id="request-form-audience">
                    <option value="hide"><?php _e('[:en]Target audience[:sv]Målgrupp')?></option>
                    <option value="Alla anställda"><?php _e('[:en]All employees[:sv]Alla anställda')?></option>
                    <option value="ledningsgruppen"><?php _e('[:en]Board members[:sv]ledningsgruppen')?></option>
                    <option value="endast chefer och ledare"><?php _e('[:en]Only managers and leaders[:sv]Endast chefer och ledare')?></option>
                    <option value="medlemmar"><?php _e('[:en]Members[:sv]Medlemmar')?></option>
                    <option value="kunder"><?php _e('[:en]Clients[:sv]Kunder')?></option>
                    <option value="leverantörer"><?php _e('[:en]Suppliers[:sv]leverantörer')?></option>
                    <option value="politiska beslutsfattare"><?php _e('[:en]Political Decisionmakers[:sv]Politiska beslutsfattare')?></option>
                    <option value="invånare"><?php _e('[:en]Inhabitants[:sv]invånare')?></option>
                    <option value="annan"><?php _e('[:en]Other[:sv]Annan')?></option>
                </select>
                <input type="text" id="request-form-participants" placeholder="<?php _e('[:en]Number of participants[:sv]Antal deltagare')?>">
                <select id="request-form-pass">
                    <option value="heldag"><?php _e('[:en]Whole day[:sv]Heldag')?></option>
                    <option value="förmiddag"><?php _e('[:en]Morning[:sv]Förmiddag')?></option>
                    <option value="eftermiddag"><?php _e('[:en]Afternoon[:sv]Eftermiddag')?></option>
                </select>
                <input type="text" id="request-form-address" placeholder="<?php _e('[:en]District[:sv]Ort')?>">
                <textarea id="request-form-purpose" rows="5" placeholder="Ert syfte med föreläsningen"></textarea>

                <div class="center">
                    <input type="submit" value="<?php _e('[:en]Send[:sv]Skicka')?>" class="button">
                </div>
            </div>
            <div class="request-form-thanks hidden">
                <h1><?php _e('[:en]Thanks![:sv]Tack!')?></h1>
                <p><?php _e('[:en]We´ll contact you as soon as possbile.[:sv]Vi hör av oss så snart som möjligt.')?></p>
            </div>
        </div>
    </div>
</div>

<?php
//do_action( 'storefront_sidebar' );
get_footer();
