let arrowRight = $('.first-screen-arrow-right');
let arrowLeft = $('.first-screen-arrow-left');
let learnMore = $('.first-screen-btn');
let mainScreenBtn = $('.header-menu-btn-link');
let arrowAutoLeft = $('.first-screen-arrow-left-auto');
let arrowAutoRight = $('.first-screen-arrow-right-auto');

// function clickArrowRight(){
//     arrowRight.click(function(){   
//         $('.first-screen-bg-wrapper-main').addClass('first-screen-bg-wrapper-active');
//         $('#first-screen-main-bg-item-stroke-animation').addClass('first-screen-main-bg-item-stroke');
//         $('#first-screen-main-bg-item-opacity-animation').addClass('first-screen-main-bg-item-opacity-animation');
//         $('.first-screen-bg-wrapper-animation').addClass('first-screen-bg-wrapper-animation-active');
//         $('.first-screen-product-01').addClass('first-screen-product-01-animation');
//         $('.first-screen-product-02').addClass('first-screen-product-02-animation');
//         $('.first-screen-btn-bg').addClass('first-screen-btn-bg-animation');
//         $('#first-screen-main-bg-item-stroke-animation').removeClass('first-screen-main-bg-item-stroke-animation');
//         $('.first-screen-product-wrapper').addClass('first-screen-product-wrapper-animate');
//         arrowRight.removeClass('first-screen-arrow-active');
//         arrowLeft.addClass('first-screen-arrow-active');
//     });
// }
// function clickArrowLeft(){
//     arrowLeft.click(function(){       
//         $('.first-screen-bg-wrapper-main').removeClass('first-screen-bg-wrapper-active');
//         $('#first-screen-main-bg-item-stroke-animation').removeClass('first-screen-main-bg-item-stroke');
//         $('#first-screen-main-bg-item-opacity-animation').removeClass('first-screen-main-bg-item-opacity-animation');
//         $('.first-screen-bg-wrapper-animation').removeClass('first-screen-bg-wrapper-animation-active');
//         $('.first-screen-product-01').removeClass('first-screen-product-01-animation');
//         $('.first-screen-product-02').removeClass('first-screen-product-02-animation');
//         $('.first-screen-btn-bg').removeClass('first-screen-btn-bg-animation');
//         $('#first-screen-main-bg-item-stroke-animation').addClass('first-screen-main-bg-item-stroke-animation');
//         $('.first-screen-product-wrapper').removeClass('first-screen-product-wrapper-animate');
//         arrowRight.addClass('first-screen-arrow-active');
//         arrowLeft.removeClass('first-screen-arrow-active');
//     });
// } 




// clearInterval(refreshIntervalId);




// function openInfo(){
//     learnMore.click(function(){
//         $('body').addClass('animation');        
//     });
// }

// function closeInfo(){
//     mainScreenBtn.click(function(){
//         $('body').removeClass('animation');
//     });
// }


// clickArrowLeft();
// clickArrowRight();

// openInfo();
// closeInfo();


$('#about-us-page-main-btn').click(function(){
    $('.about-us-page-main-bg-wrapper').addClass('animation');
    // $('.body-hidden').addClass('section-active');
});


$(document).ready(function($){

    $('.first-screen').on('click', '.switcher', function()
    {
        $(this).toggleClass('active');
        $('.first-screen-catalog-wrapper-hide').toggleClass('active-catalog');
        $('.first-screen-catalog-wrapper-hide').slideToggle('slow');
        return false;
    });
    $('#catalog_button_bottom').on('click',  function()
    {
        $('.first-screen .switcher').toggleClass('active');
        // $('.first-screen-catalog-wrapper-hide').toggleClass('active-catalog');
        $('.first-screen-catalog-wrapper-hide').slideDown('slow');
       
        var elementClick = ".first-screen-catalog-wrapper-hide"
        var destination = $(elementClick).offset().top;
        jQuery("html:not(:animated),body:not(:animated)").animate({
            scrollTop: destination
        }, 500);

        return false;
    });
});


// $(document).ready(function() {
//     $("a.scrollto").click(function() {
      
//       return false;
//     });
//   });