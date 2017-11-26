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
            <div class="menu-logo"></div>
            <img class="mobile-logo show-mobile" src="/wp-content/themes/storefront/assets/images/logo-mobile.png" alt="">
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
                    </div>
                    
                </div>
                <div class="menu-link-holder link-expandable">
                    <a class="menu-link" href="#"><?php _e("[:en]Värdskapet[:sv]Värdskapet"); ?></a><i class="fa fa-angle-down" aria-hidden="true"></i>
                    <div class="menu-link-expanded">
                        <a class="menu-link" href="/what-is-welcoming"><?php _e("[:en]What is welcoming[:sv]Vad är värdskap?"); ?></a>
                        <a class="menu-link" href="/about-vardskapet"><?php _e("[:en]About Värdskapet[:sv]Om Värdskapet"); ?></a>
                    </div>
                </div>

                <div class="menu-link-holder link-expandable">
                    <a class="menu-link" href="#"><?php _e("[:en]Our Services[:sv]Våra tjänster"); ?></a><i class="fa fa-angle-down" aria-hidden="true"></i>
                    <div class="menu-link-expanded menu-services">
                        <a class="menu-link" href="/the-art-of-welcoming"><?php _e("[:en]The art of welcoming[:sv]Konsten att välkomna"); ?></a>
                        <a class="menu-link" href="/lectures"><?php _e("[:en]Lectures[:sv]Föreläsningar"); ?></a>
                        <a class="menu-link" href="/training"><?php _e("[:en]Training[:sv]Träning"); ?></a>
                        <a class="menu-link" href="/books"><?php _e("[:en]Books[:sv]Böcker"); ?></a>
                        <!--<a class="menu-link" href="/online-courses"><?php _e("[:en]Online courses[:sv]Online kurser"); ?></a>-->
                    </div>
                </div>
                <div class="menu-link-holder">
                    <a class="menu-link" href="/about-vardskapet#dynamic"><?php _e("[:en]Contact us[:sv]Kontakta oss"); ?></a>
                </div>
                <div class="flag" data-href="en" <?php if($lang == 'en'){echo 'data-active="active"';} ?>></div>
                <div class="flag" data-href="sv" <?php if($lang == 'sv'){echo 'data-active="active"';} ?>></div>
            </div>
        </div>
    </div>
<?php } ?>