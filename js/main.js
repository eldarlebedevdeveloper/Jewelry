let arrowRight = $('.first-screen-arrow-right')
let arrowLeft = $('.first-screen-arrow-left')
let learnMore = $('.first-screen-btn')
let mainScreenBtn = $('.header-menu-btn-link')
let arrowAutoLeft = $('.first-screen-arrow-left-auto')
let arrowAutoRight = $('.first-screen-arrow-right-auto')

$('#about-us-page-main-btn').click(function () {
  $('.about-us-page-main-bg-wrapper').addClass('animation')
})

$(document).ready(function ($) {
  $('.first-screen').on('click', '.switcher', function () {
    $(this).toggleClass('active')
    $('.first-screen-catalog-wrapper-hide').toggleClass('active-catalog')
    $('.first-screen-catalog-wrapper-hide').slideToggle('slow')
    return false
  })
  $('#catalog_button_bottom').on('click', function () {
    $('.first-screen .switcher').toggleClass('active')
    $('.first-screen-catalog-wrapper-hide').slideDown('slow')

    var elementClick = '.first-screen-catalog-wrapper-hide'
    var destination = $(elementClick).offset().top
    jQuery('html:not(:animated),body:not(:animated)').animate(
      {
        scrollTop: destination,
      },
      500
    )

    return false
  })
})
