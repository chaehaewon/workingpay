$(function(){
    var scrollTopNum=0;//변수선언은 밖에서
        var fixPosition=1;//paseInt($('nav).css('top))  /  
        $(window).scroll(function(){
          scrollTopNum=$(document).scrollTop();  //값 선언은 안에서
          if(scrollTopNum>=fixPosition){ //scroll값이 0보다 클 때, 스크롤을 내렸을 때
              //scrol되는 수치가 header높이 값을 넘어 서면 (header의 높이값)
          $('#header').addClass('top');
          }else{$('#header').removeClass('top');}
        });  
    
    
    var mouseoverstate = false;
    var header_bar=$('#header #gnb li')

    header_bar.on('mouseenter', function () {
        var listIndex = $(this).index(); //console.log(listIndex); 0,1,2,3
        $('.bar').stop().animate({
            left: listIndex *200,
            opacity: 1
        }, 400);
        mouseoverstate = true;
    });
    $('#header #gnb').on('mouseleave', function () {
        $('.bar').stop().animate({
            left: -200,
            opacity: 0
        }, 400);
        mouseoverstate = false;
    });


    var myFullpage = new fullpage('#fullpage', {
        verticalCentered: true,
    });
});