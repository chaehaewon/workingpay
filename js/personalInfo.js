function personalInfo() {
    $("personalInfo").each(function(){
        element = $(this);
        element.load(element.attr("target"),eval(element.attr("completed")));
    });
}


// $(function(){
//      var scrollTopNum=0;//변수선언은 밖에서
//         var fixPosition=1;//paseInt($('nav).css('top))  /  
//         $(window).scroll(function(){
//           scrollTopNum=$(document).scrollTop();  //값 선언은 안에서
//           if(scrollTopNum>=fixPosition){ //scroll값이 0보다 클 때, 스크롤을 내렸을 때
//               //scrol되는 수치가 header높이 값을 넘어 서면 (header의 높이값)
//           $('#main_header').addClass('top');
//           }else{$('#main_header').removeClass('top');}
//         });
    
    
//     var header_bg = $('#main_header')
//     var header = $('#main_header .navigation .gnb>li>a')
//     var sub = $('#main_header .navigation .gnb>li')

//     $('#main_header .navigation .gnb').mouseenter(function () {
//         $('#main_header').addClass('black_bg');
//     }).mouseleave(function () {
//         $('#main_header').removeClass('black_bg');
//     });


//     header.mouseenter(function () {
//         $(this).addClass('active');
//     });
//     header.mouseleave(function () {
//         $(this).removeClass('active');
//     });
//     $('#main_header .navigation .gnb').mouseover(function () {
//         $(this).parent().find('.sub').stop().slideDown(500);
//         $('nav').find('.sub_bg').stop().slideDown(500);
//     }).mouseout(function () {
//         $(this).parent().find('.sub').stop().slideUp(500);
//         $('nav').find('.sub_bg').stop().slideUp(500);
//     });


//     var mouseoverstate = false;
//     sub.on('mouseenter', function () {
//         var listIndex = $(this).index(); //console.log(listIndex); 0,1,2,3
//         $('.bar').stop().animate({
//             left: listIndex *200,
//             opacity: 1
//         }, 400);
//         /* if(mouseoverstate==false){
//              $(this).find('.sub').stop().slideDown(300);
//          }else{
//              $('.sub:visible').stop().hide();
//              $(this).children('.sub').stop().show();
//          }
//          mouseoverstate=true;*/
//         mouseoverstate = true;
//     });
//     $('#main_header .navigation .gnb').on('mouseleave', function () {
//         $('.bar').stop().animate({
//             left: -150,
//             opacity: 0
//         }, 400);
//         /*  $('.sub:visible').stop().slideUp(300);
//           mouseoverstate=false;*/
//         mouseoverstate = false;
//     });
    
//     $('a[href="#"]').click(function(ignore){ //a href click prevent
//   ignore.preventDefault();  
// });
// });