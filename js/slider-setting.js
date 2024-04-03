$(document).ready(function () {
  $('.first-screen-product-wrapper').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    vertical: true,

    verticalSwiping: true,
    autoplay: false,
    speed: 500,
    cssEase: 'linear',
    dots: false,
    arrow: true,
    nextArrow: $('.first-screen-arrow-left'),
    prevArrow: $('.first-screen-arrow-right'),
  })
  $('.first-screen-product-wrapper').on(
    'afterChange',
    function (event, slick, currentSlide, nextSlide) {
      const activeSlide = document.querySelector(
        `.first-screen-product-item[data-slick-index="${currentSlide}"]`
      )
      changeLink(activeSlide)
      activeCategoryProductsInCatalogProducts(activeSlide)
    }
  )
  const allProducts = document.querySelectorAll('.first-screen-catalog-item')
  const activeSlide = document.querySelector(
    `.first-screen-product-item[data-slick-index="0"]`
  )
  changeLink(activeSlide)

  // функция подставляющая ссылки активного слайда на в кнопки Learn More и  Make an Order
  function changeLink(slide) {
    const link = slide.querySelector('img').dataset.link
    document.querySelector('.first-screen-btn-wrapper a').href = link
  }

  function activeCategoryProductsInCatalogProducts(activeCategory) {
    const category = activeCategory.querySelector('img').dataset.slidecategory

    allProducts.forEach((product) => {
      if (category === product.dataset.productcategory) {
        product.classList.remove('first-screen-catalog-item-hide')
      } else {
        product.classList.add('first-screen-catalog-item-hide')
      }
    })
  }

  $('.first-screen-main-bg-wrapper').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: false,
    centerMode: true,
    variableWidth: true,
    infinite: true,
    swipe: false,
    speed: 500,
    cssEase: 'ease-in-out',
    dots: false,
    arrow: true,
    nextArrow: $('.first-screen-arrow-block-left'),
    prevArrow: $('.first-screen-arrow-block-right'),
  })

  $('.slider_navigation[data-slide]').click(function (e) {
    e.preventDefault()
    var slideno = $(this).data('slide')
    //Тут селектор вашего слайдера
    $('.first-screen-product-wrapper').slick('slickGoTo', slideno - 1)
    $('.first-screen-main-bg-wrapper').slick('slickGoTo', slideno - 1)
  })
})
