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

        <?php
        //Visa inte .training-buttons på alla sidor:
        if ((get_the_ID() != 1321) && (get_the_ID() != 1324) && (get_the_ID() != 1326) && (get_the_ID() != 1328) && (get_the_ID() != 1329) && (get_the_ID() != 1330) && (get_the_ID() != 1565) && (get_the_ID() != 1604) && (get_the_ID() != 1606) && (get_the_ID() != 1607) && (get_the_ID() != 1608) && (get_the_ID() != 1612) ): ?>

        <div class="training-buttons center">
            <div class="button colored get-contacted"><?php _e('[:en]Get contacted[:sv]Bli kontaktad') ?></div>
            <a class="show-contact-popup"><div class="button colored"><?php _e('[:en]Contact us[:sv]Kontakta oss') ?></div></a>
            <?php
            //öppna träningsprogram
            //visa inte knappen på alla sidor:
            if ((get_the_ID() != 447) && (get_the_ID() != 1321) && (get_the_ID() != 1324) && (get_the_ID() != 1326) && (get_the_ID() != 1328) && (get_the_ID() != 1329) && (get_the_ID() != 1330) && (get_the_ID() != 1473) && (get_the_ID() != 1476)): ?>

                <div class="button colored make-a-request"><?php _e('[:en]Make a request[:sv]Gör en förfrågan')?></div>
            <?php endif; ?>
        </div>

        <?php endif; ?>
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
                <form id="request-form">
                    <h1 class="center"><?php _e('[:en]We will contact you[:sv]Vi kontaktar dig')?></h1>
                    <input required type="text" id="request-form-fullname" placeholder="<?php _e('[:en]Name[:sv]Kontaktperson');?>">
                    <input required type="text" id="request-form-phone" placeholder="<?php _e('[:en]Phone number[:sv]Telefon')?>">
                    <input required type="email" id="request-form-email" placeholder="<?php _e('[:en]E-mail[:sv]E-postadress')?>">
                    <input required type="text" id="request-form-company" placeholder="<?php _e('[:en]Organization name[:sv]Verksamhetens namn')?>">
                    <!-- 19 = föreläsningar, 190 = träningsprogram -->
                    <?php if(get_the_ID() == 19): ?><h1 class="center pad25"><?php _e('[:en]About the lecture[:sv]Om föreläsningen')?></h1><?php endif; ?>
                    <select id="request-form-audience">
                        <option value="hide"><?php _e('[:en]Target audience[:sv]Målgrupp')?></option>
                        <option value="Alla anställda"><?php _e('[:en]All employees[:sv]Alla anställda')?></option>
                        <option value="ledningsgruppen"><?php _e('[:en]Board members[:sv]Ledningsgruppen')?></option>
                        <option value="endast chefer och ledare"><?php _e('[:en]Managers and Leaders[:sv]Chefer och Ledare')?></option>
                        <option value="medlemmar"><?php _e('[:en]Members[:sv]Medlemmar')?></option>
                        <option value="annat"><?php _e('[:en]Other[:sv]Annat')?></option>
                    </select>
                    <input type="text" id="request-form-participants" placeholder="<?php _e('[:en]Number of participants[:sv]Antal deltagare')?>">
                    <?php if(get_the_ID() == 19): ?>
                    <select id="request-form-pass">
                        <option value="heldag"><?php _e('[:en]Whole day[:sv]Heldag')?></option>
                        <option value="förmiddag"><?php _e('[:en]Half a day[:sv]Halvdag')?></option>
                    </select>
                    <?php endif; ?>
                    <?php if(get_the_ID() != 19): ?>
                    <select id="request-form-programme">
                        <option value="hide"><?php _e('[:en]Programme[:sv]Val av program') ?></option>
                        <option value="dipl-medarbetare"><?php _e('[:en]Diplomerad värd coworker[:sv]Diplomerad värd medarbetare')?></option>
                        <option value="dipl-ledare"><?php _e('[:en]Diplomerad värd leader[:sv]Diplomerad värd ledare')?></option>
                        <option value="dipl-tränare"><?php _e('[:en]Diplomerad värd trainer[:sv]Diplomerad värd tränare')?></option>
                        <option value="dipl-skräddarsydd"><?php _e('[:en]Custom program[:sv]Skräddarsytt träningsprogram')?></option>
                    </select>
                    <?php endif; ?>
                    <input type="text" id="request-form-address" placeholder="<?php _e('[:en]District[:sv]Ort')?>">
                    <?php
                        $purposeText = '[:en]Purpose of the lecture[:sv]Syfte med föreläsningen';
                        if(get_the_ID() == 190){
                            $purposeText = '[:en]Purpose of the program[:sv]Syfte med programmet';
                        }
                    ?>
                    <textarea id="request-form-purpose" rows="5" placeholder="<?php _e($purposeText) ?>"></textarea>

                    <p>När du lämnar dina kontaktuppgifter samtycker du till att vi skickar information och erbjudanden till dig. <a href="/sekretess-och-anvandarvillkor">Läs mer här.</a></p>
                    <div class="center">
                        <input type="submit" value="<?php _e('[:en]Send[:sv]Skicka')?>" class="button">
                    </div>
                </form>
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
