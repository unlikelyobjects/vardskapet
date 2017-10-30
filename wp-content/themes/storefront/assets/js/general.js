
var $ = jQuery;
var console;
console.log('waddup');
$(document).ready(function(){
  $('.slick-slider-text').slick({
    autoplay: true,
    arrows: false,
    dots: true
  });

  $('#newsletter-send').click(function(){
    var text = $('#newsletter-input').val();
    if(ValidateEmail(text)){
      $('.newsletter .form').removeClass('error');
      postSignup({email:text},function(){
        console.log('success');
      });
    }
    else {
      $('.newsletter .form').addClass('error');
    }
  });

  $('.video-header').click(function(e){
    console.log(e);
    var url = $(e.currentTarget).attr('data-url');
    var myregexp = /(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/ ]{11})/i;
    window.selectedYoutubeVideo = url.match(myregexp)[1];
    window.videoDialogPlayer.loadVideoById(window.selectedYoutubeVideo);
    $('#video-modal').modal('show');
  });

  $('.video-dialog').on('hide.bs.modal', function() {
    window.videoDialogPlayer.stopVideo();
  });



});

function postSignup(data,callback){
  $.ajax({
    method:'POST',
    data: data,
    url: '/save-signup',
    success: function(e){
      console.log(e);
      callback();
    },
    error: function(e){
        console.log('error signup',e);
    }
  });
}

function ValidateEmail(inputText){  
  var mailformat = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/; 
  if(inputText.match(mailformat)){  
    return true;  
  }  
  else {  
    return false;  
  }  
} 