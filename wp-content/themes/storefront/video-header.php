<?php
function createVideoHeader($style){
    if(get_the_ID() == 13){
        ?>
        <div id="video-bg" class='video-header' data-url="https://www.youtube.com/watch?v=Zk9J5xnTVMA">
        <div class="drop-shadow-bar"></div>
        <video class='video' src="/wp-content/themes/storefront/assets/videos/vad_ar_vardskap_small.mp4?cache=123" playsinline="" autoplay="" muted="" loop="" type="video/mp4"></video>
        <div class="hero">
            <h1 class="video-title"><?php _e("[:en]What is welcoming[:sv]Vad är värdskap"); ?></h1>
            <div class="play-button"></div>
        </div>
        <div class="arrow-down"></div>
    </div>


        <?php
    }
    else if (get_the_ID() == 67) {
        
        ?>

        <div id="video-bg" class='video-header' data-url="https://www.youtube.com/watch?v=Zk9J5xnTVMA">
        <div class="drop-shadow-bar"></div>
        <video class='video' src="/wp-content/themes/storefront/assets/videos/vardskapet_small_2.mp4?cache=123" playsinline="" autoplay="" muted="" loop="" type="video/mp4"></video>
        <div class="hero">
            <h1 class="video-title"><?php _e("[:en]Art of welcoming[:sv]Art Of welcoming"); ?></h1>
            <p><?php _e("[:en]Click here to see the trailer[:sv]Välkommen att se trailern för Art Of Welcoming"); ?></p>
            <div class="play-button"></div>
        </div>
        <div class="arrow-down"></div>
    </div>

        <?php
    }
    else {
        ?>
        <div id="video-bg" class='video-header' data-url="https://www.youtube.com/watch?v=Zk9J5xnTVMA">
            <div class="drop-shadow-bar"></div>
            <video class='video' src="/wp-content/themes/storefront/assets/videos/vardskapet_small.mp4?cache=123" playsinline="" autoplay="" muted="" loop="" type="video/mp4"></video>
            <div class="hero">
                <h1 class="video-title"><?php _e("[:en]Art of welcoming[:sv]Art of welcoming"); ?></h1>
                <p><?php _e("[:en]Click here to see the trailer[:sv]Tryck här för att se trailern"); ?></p>
                <div class="play-button"></div>
            </div>
            <div class="arrow-down"></div>
        </div>
        <?php
    }
?>
    
    
<?php } ?>
