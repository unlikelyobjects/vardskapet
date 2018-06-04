
var $ = jQuery;
var console;
function checkIfAnalyticsLoaded() {
  if (window._gat && window._gat._getTracker) {
    ga('create', 'UA-110408257-1', 'auto');
  } else {
    // Probably want to cap the total number of times you call this.
    setTimeout(checkIfAnalyticsLoaded, 500);
  }
}
$(document).ready(function(){
  checkIfAnalyticsLoaded()

  $('.slick-slider-text').on('afterChange init', function(event, slick, currentSlide){
    var theURL = $(slick.$slides.get(currentSlide)).attr('data-url');
    slideURL = theURL;
  });
  $('.slick-slider-text').slick({
    autoplay: true,
    arrows: false,
    dots: true
  });

  $('.show-contact-popup').click(function(e){
    $('.contact-popup').addClass('active');
  });

  var signedup = findGetParameter('signed-up');
  if(signedup === 'true'){
    $('.movie-preview-popup').addClass('active').addClass('thanks');
  }

  var langindex = 2;
  if(window.location.href.indexOf('/en/') !== -1){
    langindex = 1;
  }
  $(".newsletter input, .movie-preview-popup input").each(function () {
    var newVal = $(this).attr('value').match(/\[\:en\](.*)\[\:sv\](.*)/);
    if(newVal){
      console.log('found [:]',newVal);
      $(this).attr('value',newVal[langindex]);
    }
  });
  $(".newsletter input, .movie-preview-popup input").each(function () {
    var newVal = $(this).attr('placeholder');
    if(newVal){
      newVal = newVal.match(/\[\:en\](.*)\[\:sv\](.*)/);
      if(newVal){
        console.log('found [:]',newVal);
        $(this).attr('placeholder',newVal[langindex]);
      }
    }
  });
  $(".newsletter .form-error, .movie-preview-popup .form-error").each(function () {
    var newVal = $(this).text();
    console.log('newVal',newVal);
    if(newVal){
      newVal = newVal.match(/\[\:en\](.*)\[\:sv\](.*)/);
      if(newVal){
        console.log('found [:]',newVal);
        $(this).text(newVal[2]);
      }
    }
  });
  var fiveminSubscribeButton = "Send";
  if(langindex == 2){
    fiveminSubscribeButton = "Skicka";
  }
  $('.form input[type="submit"]').last().val(fiveminSubscribeButton);

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
        $('.mobile-expanded').not($el).removeClass('mobile-expanded').find('.menu-link-expanded').slideUp(300);
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
  $('.blog-post-image').click(function(){
    window.location.href = $(this).attr('data-href');
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
    //only show signup popup on frontpage
    if($('body').hasClass('page-id-13')){
      window.headerVideoOpen = false;
    }
    else {
      window.headerVideoOpen = true;
    }
    
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
    $('body').toggleClass('popup-active');
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
    if($(hash).hasClass('expandable')){
      $(hash).find('.entry').addClass('active');
    }
    setTimeout(function(){
      $('html, body').animate({
          scrollTop: $(hash).offset().top - 90
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
    var youtube = $el.attr('data-youtube');
    $('.customer-popup').addClass('active');
    $('body,html').addClass('popup-active');
    $('.client-modal-title').text(title);
    $('.client-modal-body').html(body);
    if(image != ''){
      $('.client-modal-image').css('background-image','url('+image+')');
      $('.client-modal-image').show();
    }
    else {
      $('.client-modal-image').hide();
    }
    if(youtube != ''){
      var myregexp = /(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/ ]{11})/i;
      var ytid = youtube.match(myregexp)[1];
      $('.client-modal-youtube').html('<iframe width="560" height="315" src="https://www.youtube.com/embed/'+ytid+'?rel=0&amp;showinfo=0" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>');
      $('.client-modal-youtube').show();
    }
    if($('.client-modal-content').outerHeight() > $(window).height()){
      $('.client-modal').addClass('fullscreen');
    }
    else {
      $('.client-modal').removeClass('fullscreen');
    }
  });
  $('.get-contacted').click(function(){
    openContactForm();
  });
  $('.contact-form .button').click(function(e){
    if(!$('#contact-form')[0].checkValidity()){
      return;
    }
    else {
      e.preventDefault();
    }
    var data = {
      fullname: $('#contact-form-name').val(),
      company: $('#contact-form-company').val(),
      email: $('#contact-form-email').val(),
      phone: $('#contact-form-phone').val()
    };
    console.log(data);
    ga('gtag_UA_110408257_1.send', 'event', "button", "Bli Kontaktad - Skicka");
    postContactForm(data,function(){
      $('.contact-form').hide(300);
      $('.contact-form-thanks').delay(300).show(300);
      $('.request-popup').removeClass('fullscreen');
    });
  });
  $('.make-a-request').click(function(){
    console.log('click');
    ga('gtag_UA_110408257_1.send', 'event', "button", "Gör en förfrågan - Öppna formulär");
    $('.request-popup').addClass('active');
    if($('body').hasClass('page-id-190')){
      if(window.location.href.indexOf('/en/') !== -1){
        $('.request-popup h1').first().text('About your träning programme');
      }
      else {
        $('.request-popup h1').first().text('Om ditt träningsprogram');
      }
    }
    $('body,html').addClass('popup-active');
  });
  $('.request-form .button').click(function(e){
    if(!$('#request-form')[0].checkValidity()){
      return;
    }
    else {
      e.preventDefault();
    }
    ga('gtag_UA_110408257_1.send', 'event', "button", "Gör en förfrågan - Skicka");
    var data = {};
    $('.request-form input[type="text"],.request-form input[type="email"], .request-form select, .request-form textarea').each(function(){
      var idtag = String( $(this).attr('id').replace('request-form-',''));
      var val = $(this).val();
      if(val === 'hide'){
        val = '';
      }
      data[idtag] = val;
    });
    console.log(data);
    postRequestForm(data,function(){
      $('.request-form').hide(300);
      $('.request-form-thanks').delay(300).show(300);
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

  $('.client-modal-content').click(function(e){e.stopPropagation()});
  $('.client-modal-close, .client-modal').click(function(){
    $('.client-modal').removeClass('active');
    $('.client-modal-youtube').empty();
    $('body,html').removeClass('popup-active');
  });

  $(window).scroll(checkMenu);

  function checkMenu(){
    var scrollTop = $(window).scrollTop();
    if(scrollTop > 0){
      $('.menu').addClass('fixed');
      $('body').addClass('has-scrolled');
      $('body').addClass('intercom-ok');
      $('section.main-content').addClass('active');
      $('.video-header').addClass('inactive');
    }
    else {
      $('.menu').removeClass('fixed');
      $('body').removeClass('has-scrolled');
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


  var $form = $('#newsletter-form');
  if ( $form.length > 0 ) {
      $('#newsletter-form input[type="submit"]').bind('click', function ( event ) {
          if ( event ) event.preventDefault();
          // validate_input() is a validation function I wrote, you'll have to substitute this with your own.
          register($form,function(){
            $('#newsletter p').first().remove()
            $('#newsletter h1').first().remove()
            $('#newsletter h4').first().css({"color": "white","font-size": "38px",
              "margin-bottom": "0"});
            $('.newsletter .thank-you').show();
            console.log('does this even run?');
          });
      });
  }
  var $videoform = $('#video-form');
  if ( $videoform.length > 0 ) {
    $('#video-form input[type="submit"]').bind('click', function ( event ) {
        if ( event ) event.preventDefault();
        // validate_input() is a validation function I wrote, you'll have to substitute this with your own.
        register($videoform,function(){
          $('.get-contacted-thanks').show();
          $('.hide-sub').hide();
        });
    });
}
});

function register($form,cb) {
  $.ajax({
      type: $form.attr('method'),
      url: $form.attr('action'),
      data: $form.serialize(),
      cache       : false,
      dataType    : 'json',
      contentType: "application/json; charset=utf-8",
      error       : function(err) { alert("Could not connect to the registration server. Please try again later."); },
      success     : function(data) {
          if (data.result != "success") {
            alert(data.msg);
              // Something went wrong, do something to notify the user. maybe alert(data.msg);
          } else {
            $form.hide();
            cb();
              // It worked, carry on...
          }
      }
  });
}



function openContactForm(){
  console.log('click');
  ga('gtag_UA_110408257_1.send', 'event', "button", "Bli kontaktad - Öppna formulär");
  $('.get-contacted-popup').addClass('active');
  $('body,html').addClass('popup-active');
}

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

function findGetParameter(parameterName) {
  var result = null,
      tmp = [];
  location.search
      .substr(1)
      .split("&")
      .forEach(function (item) {
        tmp = item.split("=");
        if (tmp[0] === parameterName) result = decodeURIComponent(tmp[1]);
      });
  return result;
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