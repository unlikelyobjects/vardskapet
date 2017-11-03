
var $ = jQuery;
var console;
console.log('waddup');
$(document).ready(function(){
  $('.slick-slider-text').on('afterChange init', function(event, slick, currentSlide, nextSlide){
    var theURL = $(slick.$slides.get(currentSlide)).attr('data-url');
    console.log(theURL);
    console.log(this,event,slick,currentSlide,nextSlide);
    slideURL = theURL;
  });
  $('.slick-slider-text').slick({
    autoplay: false,
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

  $('.menu-logo').click(function(){
    window.location.href = '/';
  });

  $('.menu-links div[data-href]').click(function(){
		var href = window.location.href + '?lang=' + $(this).attr('data-href');
		window.location.href = href;
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

  $('li.cat-item-1').remove();

  if(window.location.href.indexOf('/sv/') !== -1){
    $('li.cat-item-17 label').html($('li.cat-item-17 label').html().replace('Consideration','Omtanke'));
    $('li.cat-item-16 label').html($('li.cat-item-16 label').html().replace('Dignity','Värdighet'));
    $('li.cat-item-15 label').html($('li.cat-item-15 label').html().replace('Respect','Respekt'));
  }

  $('input[type="date"]').last().appendTo($('input[type="date"]').first().parent());
  $('.filter-toggle').click(function(){
    $('.filter-search').toggleClass('active');
  });
  $('.date-from').insertBefore($('input[type="date"]').first());
  $('.date-to').insertBefore($('input[type="date"]').last());

  $('.share-fb').click(function(){
    window.location.href = 'https://www.facebook.com/vardskapet/?ref=br_rs';
  });
  $('.share-yt').click(function(){
    window.location.href = 'https://www.youtube.com/user/vardskapetab';
  });
  $('.share-insta').click(function(){
    window.location.href = 'https://www.instagram.com/vardskapet/';
  });
  $('.share-linked').click(function(){
    window.location.href= 'https://www.linkedin.com/company/1805255/';
  });

  $('.arrow-blue').click(function(){
    $('#additional-post').show();
  });

  $('.blog-back').click(function(){
    window.history.back();
  });

  $('.colored-link').click(function(e){
    console.log(e);
    window.location.href = slideURL;
  });

  $('.expandable .entry-title').click(function(){
    var isActive = $(this).parent().hasClass('active');
    if(isActive){
      $(this).parent().find('.entry-expanded').slideUp();
    }
    else {
      $(this).parent().find('.entry-expanded').slideDown();
    }
    $(this).parent().toggleClass('active');

  });


});

var slideURL = '';

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