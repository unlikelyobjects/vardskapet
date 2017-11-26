<?php
function createVideoHeader($style){
?>
    <div id="video-bg" class='video-header' data-url="https://www.youtube.com/watch?v=Zk9J5xnTVMA">
        <div class="drop-shadow-bar"></div>
        <video class='video' src="/wp-content/themes/storefront/assets/videos/bg_gif_video.mp4" playsinline="" autoplay="" muted="" loop="" type="video/mp4"></video>
        <div class="hero">
            <h1 class="video-title"><?php _e("[:en]Art of welcoming[:sv]Konsten att välkomna"); ?></h1>
            <p><?php _e("[:en]Click here to see the trailer[:sv]Tryck här för att se trailern"); ?></p>
            <div class="play-button"></div>
        </div>
        <div class="arrow-down"></div>
    </div>
    
<?php } ?>
