<?php
function createMenu($style){
    if($_COOKIE["qtrans_front_language"] == 'sv'){
        $lang = 'sv';
        setlocale(LC_ALL, "sv_SE");
    } else {
        $lang = 'en';
    }
    ?>
    <div class="menu cf <?php echo $style; ?>">
        <div class="menu-wrapper">
            <div class="menu-logo"></div>
            <div class="menu-links">
                <div class="menu-link-holder">
                    <a class="menu-link" href="/"><?php _e("[:en]Home[:sv]Hem"); ?></a>
                    <a class="menu-link" href="/blog"><?php _e("[:en]Blog[:sv]Blogg"); ?></a>
                </div>
                <div class="menu-link-holder expandable">
                    <a class="menu-link" href="/vardskapet"><?php _e("[:en]Värdskapet[:sv]Värdskapet"); ?></a>
                    <div class="menu-link-expanded">
                        <a class="menu-link" href="/vardskapet"><?php _e("[:en]What is welcoming[:sv]Vad är värdskap?"); ?></a>
                        <a class="menu-link" href="/vardskapet"><?php _e("[:en]About Värdskapet[:sv]Om Värdskapet"); ?></a>
                    </div>
                </div>

                <div class="menu-link-holder expandable">
                    <a class="menu-link" href="/services"><?php _e("[:en]Our Services[:sv]Våra tjänster"); ?></a>
                </div>
                <div class="menu-link-holder">
                    <a class="menu-link" href="/contact"><?php _e("[:en]Contact us[:sv]Kontakta oss"); ?></a>
                </div>
                <div data-href="en" <?php if($lang == 'en'){echo 'class="active"';} ?>></div>
                <div data-href="sv" <?php if($lang == 'sv'){echo 'class="active"';} ?>></div>
            </div>
        </div>
    </div>
<?php } ?>