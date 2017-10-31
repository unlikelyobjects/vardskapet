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
                <a class="menu-link" href="/home"><?php _e("[:en]Home[:sv]Hem"); ?></a>
                <a class="menu-link" href="/blog"><?php _e("[:en]Blog[:sv]Blogg"); ?></a>
                <a class="menu-link" href="/vardskapet"><?php _e("[:en]Värdskapet[:sv]Värdskapet"); ?></a>
                <a class="menu-link" href="/services"><?php _e("[:en]Our Services[:sv]Våra tjänster"); ?></a>
                <a class="menu-link" href="/contact"><?php _e("[:en]Contact us[:sv]Kontakta oss"); ?></a>
                <div data-href="en" <?php if($lang == 'en'){echo 'class="active"';} ?>></div>
                <div data-href="sv" <?php if($lang == 'sv'){echo 'class="active"';} ?>></div>
            </div>
        </div>
    </div>
<?php } ?>