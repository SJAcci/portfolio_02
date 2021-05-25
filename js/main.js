//popUp
$(document).ready(function(){
    function setCookie(name, value, expiredays){
        var todayDate = new Date();
        todayDate.setDate(todayDate.getDate() + expiredays);
        document.cookie = name + '=' + escape( value ) + '; path=/; expires=' + todayDate.toGMTString() + ';'
    }

    var popup = '.popUp';
    var chkbox = '#chk';
    
    $(popup).find('form a').click(function(){ 
        var chk = $(chkbox).prop('checked');
        
        if(chk){ 
            setCookie('exCookie','done',1); 
        }
        
        $(popup).stop().fadeOut(0);
        $('html, body').css('overflow','visible');
    });
    
    var cookieData = document.cookie;

    if(cookieData.indexOf('exCookie=done') < 0){
        $(popup).fadeIn(0);
        $('html, body').css('overflow','hidden');
        
    }else{
        $(popup).fadeOut(0);
        $('html, body').css('overflow','visible');
    }
});


//mSlider
$(document).ready(function(){
    var swiper = new Swiper('#mSlider .swiper-container', {
        pagination: {
            el: '#mSlider .swiper-pagination',
            clickable: true,
        },
        navigation: { 
            nextEl: '#mSlider .swiper-button-next',
            prevEl: '#mSlider .swiper-button-prev',
        },
        loop: true, 
        autoplay: {
            delay: 5000,
        },
        effect: 'fade',
    });
});


//menu
$(document).ready(function(){ 
    var swiper = new Swiper('#menu .swiper-container', { 
        navigation: { 
            nextEl: '#menu .swiper-button-next',
            prevEl: '#menu .swiper-button-prev',
        },
        loop: true,
        slidesPerView: 3, 
        spaceBetween: 40, 
        
        breakpoints: { 
            1780: {
                slidesPerView: 4,
                spaceBetween: 40,
            },
        },
    });
});


//coupon
$(document).ready(function(){
    var swiper = new Swiper('#coupon .swiper-container', {
        navigation: {
            nextEl: '#coupon .swiper-button-next',
            prevEl: '#coupon .swiper-button-prev',
        },
        slidesPerView: 'auto',
        spaceBetween: 20,
        loop: true,
    });
});
