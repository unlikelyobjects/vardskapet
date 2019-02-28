<?php
function createMenu($style){
    $lang = 'en';
    if(isset($_COOKIE["qtrans_front_language"])){
        if($_COOKIE["qtrans_front_language"] == 'sv'){
            $lang = 'sv';
            setlocale(LC_ALL, "sv_SE");
        }
    }
    ?>
    <div class="menu cf <?php echo $style; ?>">
        <div class="menu-wrapper">
            <!--<div class="menu-logo"></div>-->
            <img class="mobile-logo" src="/wp-content/themes/storefront/assets/images/footer-logo.png" alt="">
            <div class="hamburger show-mobile"></div>
            <div class="menu-links">
                <div class="menu-link-holder">
                    <a class="menu-link" href="/"><?php _e("[:en]Home[:sv]Hem"); ?></a>
                </div>
                <div class="menu-link-holder link-expandable">
                    <a class="menu-link" href="#"><?php _e("[:en]Inspiration[:sv]Inspiration"); ?></a><i class="fa fa-angle-down" aria-hidden="true"></i>
                    <div class="menu-link-expanded">
                        <a class="menu-link" href="/blog"><?php _e("[:en]Blog[:sv]Blogg"); ?></a>
                        <a class="menu-link" href="/our-stories"><?php _e("[:en]Our stories[:sv]Våra berättelser"); ?></a>
                        <a class="menu-link" href="/movies"><?php _e("[:en]Movies[:sv]Film"); ?></a>
                    </div>

                </div>
                <div class="menu-link-holder link-expandable">
                    <a class="menu-link" href="#"><?php _e("[:en]Värdskap[:sv]Värdskap"); ?></a><i class="fa fa-angle-down" aria-hidden="true"></i>
                    <div class="menu-link-expanded menu-vardskap">
                        <a class="menu-link" href="/what-is-welcoming#why"><?php _e("[:en]Why welcoming[:sv]Varför värdskap"); ?></a>
                        <a class="menu-link" href="/what-is-welcoming#working"><?php _e("[:en]Working with welcoming[:sv]Att arbeta med värdskap"); ?></a>
                        <a class="menu-link" href="/what-is-welcoming#leadership"><?php _e("[:en]Welcoming and leadership[:sv]Värdskap och ledarskap"); ?></a>
                        <a class="menu-link" href="/what-is-welcoming#philosophy"><?php _e("[:en]The welcoming philosophy[:sv]Filosofin om värdskap"); ?></a>
                        <a class="menu-link" href="/what-is-welcoming"><?php _e("[:en]What is welcoming[:sv]Vad är värdskap"); ?></a>
                        <!--<a class="menu-link" href="/about-vardskapet"><?php _e("[:en]About Värdskapet[:sv]Om Värdskapet"); ?></a>-->
                    </div>
                </div>

                <div class="menu-link-holder link-expandable">
                    <a class="menu-link" href="#"><?php _e("[:en]Our Services[:sv]Våra tjänster"); ?></a><i class="fa fa-angle-down" aria-hidden="true"></i>
                    <div class="menu-link-expanded menu-services">
                        <a class="menu-link" href="/the-art-of-welcoming"><?php _e("[:en]The movie Art of Welcoming[:sv]Workshop Art of Welcoming"); ?></a>
                        <a class="menu-link" href="/lectures"><?php _e("[:en]Lectures[:sv]Föreläsningar"); ?></a>
                        <a class="menu-link" href="/training"><?php _e("[:en]Training programmes[:sv]Träningsprogram"); ?></a>
                        <a class="menu-link" href="/open-training-programmes"><?php _e("[:en]Open training programmes[:sv]Öppna Träningsprogram"); ?></a>
                        <a class="menu-link" href="/books"><?php _e("[:en]Books[:sv]Böcker"); ?></a>
                        <a class="menu-link" href="/our-stories"><?php _e("[:en]Our stories[:sv]Våra berättelser"); ?></a>
                        <!--<a class="menu-link" href="/online-courses"><?php _e("[:en]Online courses[:sv]Online kurser"); ?></a>-->
                    </div>
                </div>

				<!-- Aktuellt -->
                <div class="menu-link-holder link-expandable">
                    <a class="menu-link" href="#"><?php _e("[:en]Events[:sv]Aktuellt"); ?></a><i class="fa fa-angle-down" aria-hidden="true"></i>
                    <div class="menu-link-expanded menu-events">
	                    <a class="menu-link" href="/events"><?php _e("[:en]Events[:sv]Aktuellt"); ?></a>
	                    <a class="menu-link" href="/our-events"><?php _e("[:en]Events NY[:sv]Events"); ?></a>
                    </div>
                </div>

				<!-- About -->
                <div class="menu-link-holder link-expandable">
                    <a class="menu-link" href="#"><?php _e("[:en]About us[:sv]Om oss"); ?></a><i class="fa fa-angle-down" aria-hidden="true"></i>
                    <div class="menu-link-expanded menu-about">
	                    <a class="menu-link" href="/about-vardskapet"><?php _e("[:en]About us[:sv]Om oss"); ?></a>
	                    <a class="menu-link" href="/case-studies"><?php _e("[:en]Case studies[:sv]Kundcase"); ?></a>
                    </div>
                </div>

                <div class="menu-link-holder">
                    <a class="menu-link" href="/contact"><?php _e("[:en]Contact[:sv]Kontakt"); ?></a>
                </div>
                <div class="flag" data-href="en" <?php if($lang == 'en'){echo 'data-active="active"';} ?>></div>
                <div class="flag" data-href="sv" <?php if($lang == 'sv'){echo 'data-active="active"';} ?>></div>
            </div>
        </div>
    </div>
<?php } ?>
