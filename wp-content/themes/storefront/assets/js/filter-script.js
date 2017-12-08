$(document).ready(function(){
    $('.cat-checkbox').click(function(e){
        $(e.currentTarget).toggleClass('active');
    });
    $('.filter-button').click(function(e){
        var catArr = [];
        $('.cat-checkbox').each(function(e){
            if($(this).hasClass('active')){
                catArr.push($(this).attr('data-cat'));
            }
        });
        var catStr = '';
        for(var i = 0; i < catArr.length;i++){
            catStr += catArr[i]+',';
        }
        if(catArr.length > 0){
            catStr = catStr.substr(0,catStr.length-1);
        }
        else {

        }
        

        var fromDate = $('#datepicker-from').val();
        var toDate = $('#datepicker-to').val();
    
        var searchURL = '?categories='+catStr+'&'+'datestart='+fromDate+'&dateend='+toDate;
        console.log(searchURL);
        window.location.href = searchURL;
    });
    $.fn.datepicker.languages['sv-SE'] = {
        format: 'yyyy-mm-dd',
        days: ['Söndag', 'Måndag', 'Tisdag', 'Onsdag', 'Torsdag', 'Fredag', 'Lördag'],
        daysShort: ['Sön', 'Mån', 'Tis', 'Ons', 'Tor', 'Fre', 'Lör'],
        daysMin: ['Sö', 'Må', 'Ti', 'On', 'To', 'Fr', 'Lö'],
        weekStart: 1,
        months: ['Januari', 'Februari', 'Mars', 'April', 'Maj', 'Juni', 'Juli', 'Augusti', 'September', 'Oktober', 'November', 'December'],
        monthsShort: ['Jan', 'Feb', 'Mar', 'Apr', 'Maj', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Dec']
    };
    var lang = 'en-US';
    if(window.location.href.indexOf('/sv/') !== -1){
        lang = 'sv-SE';
    }
    $('[data-toggle="datepicker"]').datepicker({
        language: lang,
        format: 'yyyy-mm-dd'

    });

});