
var $ = jQuery;
var console;
console.log('waddup');
$(document).ready(function(){
  
  $('.slick-slider-text').on('afterChange init', function(event, slick, currentSlide){
    var theURL = $(slick.$slides.get(currentSlide)).attr('data-url');
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
      /*postSignup({email:text},function(){
        console.log('success');
      });*/
    }
    else {
      $('.newsletter .form').addClass('error');
    }
  });

  $('.link-expandable').click(function(e){
    var $el = $(e.currentTarget);
    console.log(e.currentTarget);
    if($('body').outerWidth() < 783){
      if($el.hasClass('mobile-expanded')){
        $el.removeClass('mobile-expanded');
        $el.find('.menu-link-expanded').slideUp(300);
      }
      else {
        $el.addClass('mobile-expanded');
        $el.find('.menu-link-expanded').slideDown(300);
      }
    }
  });
  $('.menu-link-expanded').click(function(e){
    //stops sub menu clicks from minimizing
    e.stopPropagation();
  })

  $('.menu-logo,.mobile-logo').click(function(){
    window.location.href = '/';
  });

  $('.menu-links div[data-href]').click(function(){
		var href = window.location.pathname + '?lang=' + $(this).attr('data-href');
		window.location.href = href;
  });
  $('.services').click(function(e){
    var href = window.location.href + $(e.currentTarget).attr('data-href');
    window.location.href = href;
  });

  $('.hero').click(function(e){
    console.log(e);
    var url = $('#video-bg').attr('data-url');
    var myregexp = /(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/ ]{11})/i;
    window.selectedYoutubeVideo = url.match(myregexp)[1];
    console.log(window.videoDialogPlayer);
    window.videoDialogPlayer.loadVideoById(window.selectedYoutubeVideo);
    window.headerVideoOpen = true;
    $('#video-modal').modal('show');
  });

  $('.video-block').click(function(e){
    console.log(e);
    var url = $(e.currentTarget).attr('data-href');
    var myregexp = /(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/ ]{11})/i;
    window.selectedYoutubeVideo = url.match(myregexp)[1];
    console.log(window.videoDialogPlayer);
    window.videoDialogPlayer.loadVideoById(window.selectedYoutubeVideo);
    window.headerVideoOpen = false;
    $('#video-modal').modal('show');
  });

  $('.video-dialog').on('hide.bs.modal', function() {
    window.videoDialogPlayer.stopVideo();
    if(window.headerVideoOpen){
      window.headerVideoOpen = false;
      $('.movie-preview-popup').addClass('active');
      $('body,html').addClass('popup-active');
    }
  });

  $('li.cat-item-1').remove();

  /*
  if(window.location.href.indexOf('/sv/') !== -1){
    $('li.cat-item-17 label').html($('li.cat-item-17 label').html().replace('Consideration','Omtanke'));
    $('li.cat-item-16 label').html($('li.cat-item-16 label').html().replace('Dignity','Värdighet'));
    $('li.cat-item-15 label').html($('li.cat-item-15 label').html().replace('Respect','Respekt'));
  }
  */

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

  $('.arrow-down').click(function(){
    $('html, body').animate({
          scrollTop: $('.main-content').offset().top - 250
      }, 500);
  });

  var hash = window.location.hash;
  if(hash.length > 1){
    setTimeout(function(){
      $('html, body').animate({
          scrollTop: ($('.' + (hash.replace('#', ''))).offset().top) - 30
      }, 500);
    },500);
  }

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

  $('.client').click(function(e){
    var $el = $(e.currentTarget);
    var title = $el.attr('data-title');
    var body = $el.attr('data-body');
    var image = $el.attr('data-image');
    $('.customer-popup').addClass('active');
    $('body,html').addClass('popup-active');
    $('.client-modal-title').text(title);
    $('.client-modal-body').text(body);
    $('.client-modal-image').css('background-image','url('+image+')');
  });
  $('.get-contacted').click(function(){
    console.log('click');
    $('.get-contacted-popup').addClass('active');
    $('body,html').addClass('popup-active');
  });
  $('.contact-form .button').click(function(){
    var data = {
      fullname: $('#contact-form-name').val(),
      company: $('#contact-form-company').val(),
      email: $('#contact-form-email').val(),
      phone: $('#contact-form-phone').val()
    };
    console.log(data);
    postContactForm(data,function(){
      $('.contact-form').hide(300);
      $('.contact-form-thanks').delay(300).show(300);
    });
  });
  $('.make-a-request').click(function(){
    console.log('click');
    $('.request-popup').addClass('active');
    $('body,html').addClass('popup-active');
  });
  $('.request-form .button').click(function(){
    var data = {};
    $('.request-form input, .request-form select, .request-form textarea').each(function(){
      var id = String( $(this).attr('id').replace('request-form-',''));
      var val = $(this).val();
      if(val === 'hide'){
        val = '';
      }
      data[id] = val;
      postRequestForm(data,function(){
        $('.request-form').hide(300);
        $('.request-form-thanks').delay(300).show(300);
      });
    });
  });

  $('.hamburger').click(function(){
    $('.menu').toggleClass('expanded');
    if($('.menu').hasClass('expanded')){
      $('body,html').addClass('popup-active');
    }
    else {
      $('body,html').removeClass('popup-active');
    }
    
  });

  $('.client-modal-close').click(function(){
    $('.client-modal').removeClass('active');
    $('body,html').removeClass('popup-active');
  });

  $(window).scroll(checkMenu);

  function checkMenu(){
    var scrollTop = $(window).scrollTop();
    if(scrollTop > 0){
      $('.menu').addClass('fixed');
      $('section.main-content').addClass('active');
      $('.video-header').addClass('inactive');
    }
    else {
      $('.menu').removeClass('fixed');
      $('.video-header').removeClass('inactive');
      $('section.main-content').removeClass('active');
    }    
  }

  checkMenu();

  /*
  Reference: http://jsfiddle.net/BB3JK/47/
  */

  $('select').each(function(){
    var $this = $(this), numberOfOptions = $(this).children('option').length;

    $this.addClass('select-hidden'); 
    $this.wrap('<div class="select"></div>');
    $this.after('<div class="select-styled colored-background"></div>');

    var $styledSelect = $this.next('div.select-styled');
    $styledSelect.text($this.children('option').eq(0).text());

    var $list = $('<ul />', {
        'class': 'select-options colored-background'
    }).insertAfter($styledSelect);

    for (var i = 0; i < numberOfOptions; i++) {
        $('<li />', {
            text: $this.children('option').eq(i).text(),
            rel: $this.children('option').eq(i).val()
        }).appendTo($list);
    }

    var $listItems = $list.children('li');

    $styledSelect.click(function(e) {
        e.stopPropagation();
        $('div.select-styled.active').not(this).each(function(){
            $(this).removeClass('active').next('ul.select-options').hide();
        });
        $(this).toggleClass('active').next('ul.select-options').toggle();
    });

    $listItems.click(function(e) {
        e.stopPropagation();
        $styledSelect.text($(this).text()).removeClass('active');
        $this.val($(this).attr('rel'));
        $list.hide();
        //console.log($this.val());
    });

    $(document).click(function() {
        $styledSelect.removeClass('active');
        $list.hide();
    });

  });
});

var slideURL = '';

function postContactForm(data,callback){
  $.ajax({
    method:'POST',
    data: data,
    url: '/get-contacted',
    success: function(e){
      console.log(e);
      callback();
    },
    error: function(e){
        console.log('error signup',e,data);
    }
  });
}

function postRequestForm(data,callback){
  $.ajax({
    method:'POST',
    data: data,
    url: '/make-a-request',
    success: function(e){
      console.log(e);
      callback();
    },
    error: function(e){
        console.log('error signup',e,data);
    }
  });
}

window.onVideoStateChange = function(event){
  console.log(event);
  var YT = window.YT;
  if(event.data === YT.PlayerState.ENDED){
    console.log('video ended');
    
    if(window.headerVideoOpen){
      window.headerVideoOpen = false;
      $('.movie-preview-popup').addClass('active');
      $('body,html').addClass('popup-active');
    }

    $('#video-modal').modal('hide');
  }
};

function ValidateEmail(inputText){  
  var mailformat = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/; 
  if(inputText.match(mailformat)){  
    return true;  
  }  
  else {  
    return false;  
  }  
} 