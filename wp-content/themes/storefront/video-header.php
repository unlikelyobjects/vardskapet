<?php
function createVideoHeader($style){
    if(get_the_ID() == 13){
        ?>
        <div id="video-bg" class='video-header' data-url="https://www.youtube.com/watch?v=o3SbjD4TXmk">
        <div class="drop-shadow-bar"></div>
        <video class='video' src="/wp-content/themes/storefront/assets/videos/vad_ar_vardskap_small.mp4?cache=1234" playsinline="" autoplay="" muted="" loop="" type="video/mp4"></video>
        <div class="hero">
            <h1 class="video-title"><?php _e("[:en]What is welcoming[:sv]Vad är värdskap"); ?></h1>
            <p><?php _e("[:en]Click here to see the movie[:sv]Klicka för att se filmen"); ?></p>
            <div class="play-button"></div>
        </div>
        <div class="arrow-down"></div>
    </div>


        <?php
    }
    else if (get_the_ID() == 67) { //art of welcoming page
        
        ?>

        <div id="video-bg" class='video-header' data-url="https://www.youtube.com/watch?v=ZCk6Mpzjaxg">
        <div class="drop-shadow-bar"></div>
        <video class='video' src="/wp-content/themes/storefront/assets/videos/vardskapet_small_2.mp4?cache=1234" playsinline="" autoplay="" muted="" loop="" type="video/mp4"></video>
        <div class="hero">
            <h1 class="video-title"><?php _e("[:en]Art of Welcoming[:sv]Art of Welcoming"); ?></h1>
            <p><?php _e("[:en]Click here to see the trailer[:sv]Tryck här för att se trailern till filmen om värdskap."); ?></p>
            <div class="play-button"></div>
        </div>
        <div class="arrow-down"></div>
    </div>

        <?php
    }
    else {
        ?>
        <div id="video-bg" class='video-header' data-url="https://www.youtube.com/watch?v=ZCk6Mpzjaxg">
            <div class="drop-shadow-bar"></div>
            <video class='video' src="/wp-content/themes/storefront/assets/videos/vardskapet_small_2.mp4?cache=1234" playsinline="" autoplay="" muted="" loop="" type="video/mp4"></video>
            <div class="hero">
                <h1 class="video-title"><?php _e("[:en]Art of Welcoming[:sv]Konsten att få människor att känna sig inkluderade och välkomna"); ?></h1>
                <p><?php _e("[:en]Click here to see the trailer[:sv]Tryck här för att se trailern till filmen om värdskap."); ?></p>
                <div class="play-button"></div>
            </div>
            <div class="arrow-down"></div>
        </div>
        <?php
    }
?>
    
    
<?php } ?>
