//eng
$(document).ready(function(){
    var eng = $('.tNav #eng');
    eng.click(function(){
        alert('페이지를 준비중입니다.');
    });
});

//gnb
$(document).ready(function(){
    var subBg = $('<div class="subBg"></div>');

    $('header').append(subBg);
    
    var gnb = '.gnb';
    var main = '.gnb .mainNav';
    var sub = '.gnb .subNav' ;
    var bg = '.subBg' ;
    var speed = 'fast';
    
    //? 초기실행 - subNav보이지 않게
    
    $(gnb).hover(function(){
        //$('.subnav','.subbg)
        $(sub + ',' + bg).stop().slideDown(speed);
        $(main).removeClass('active');
    },function(){
        $(sub + ',' + bg).stop().slideUp(speed);
        $(main).removeClass('active');
    });//hover 종료
    
    
    $(main).first().focus(function(){ 
        $(sub + ',' + bg).stop().slideDown(speed);
        $(this).addClass('active');
    });

    $(main).focus(function(){
        $(main).removeClass('active'); 
        $(this).addClass('active'); 
    });
    
    $(main).first().keydown(function(e){
        if(e.keyCode == 9){
            if(e.shiftKey){ 
                $(sub + ', ' + bg).stop().slideUp(speed);
                $(this).removeClass('active');
            }
        }
    });

    $(sub).last().find('li:last a').keydown(function(e){
       if(e.keyCode == 9){ //tab키를 눌렀을 때
           if(!e.shiftKey){ //shift키는 누르지 않았을 때
               $(sub + ',' + bg).stop().slideUp(speed);
               $(main).removeClass('active');
           }
       }
    });
    
    $(sub).find('li:last a').focus(function(){
        $(main).removeClass('active');
        $(this).parents(sub).prev().addClass('acitve');
    });
    
    //header영역에서 벗어나면 사라지게 처리
    $('header').mouseleave(function(){
        $(main).removeClass('active');
        $(sub).stop().slideUp(speed);
    });
});


//family site
$(function(){
    var btn = '.family button';
    var icon = '.icon';
    var speed = 'fast'; 
    var active = 'active'; 
    var cnt = 0; 
    
    $(btn).next().find('a').fadeOut(0); 

    $(btn).click(function(){
        if(cnt == 0){ 
            $(this).next().find('a').stop().fadeIn(0);
            $(this).next().stop().animate({
                top: 0 
            },speed);
            
            cnt = 1;
        }else{ 
            $(this).next().stop().animate({
                top: 100
            },speed,function(){
                $(this).find('a').fadeOut(0);
            });
            
            cnt = 0;
        }
        
        $(this).find(icon).toggleClass(active);
        
    });

    $(btn).parent().mouseleave(function(){
        $(this).find('ul').animate({
            top: 100
        },speed,function(){
           $(this).find('a').fadeOut(0); 
        });
        
        $(this).find(icon).removeClass(active);
        cnt = 0;
    });
    
    $(btn).next().find('li:last a').keydown(function(e){
        if(e.keyCode == 9){
            if(!e.shiftKey){
                $(btn).parent().trigger('mouseleave');
            }
        }
        
    });

    $(btn).keydown(function(e){
        if(e.keyCode == 9){
            if(e.shiftKey){
                $(this).parent().trigger('mouseleave');
            }
        }
    });
});

//scrollTop
$(document).ready(function(){
    var btn = '.topBtn a';
    var speed = 1200; 
    var easing = 'easeOutQuart'; 
    
    $(window).scroll(function(){
        var top = $(window).scrollTop();
        
        if(top > 200){
            $(btn).parent().fadeIn(600);
        }else{
            $(btn).parent().fadeOut(600);
        }
    });
    
    $(btn).click(function(e){
        e.preventDefault(); 
    
        $('html, body').animate({
            scrollTop: 0 
        },speed,easing);
    });
});