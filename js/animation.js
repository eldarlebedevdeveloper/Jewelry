const animItems = document.querySelectorAll('._anim__items')

if (animItems.length > 0) {
  window.addEventListener('scroll', animOnScroll)
  function animOnScroll() {
    for (let index = 0; index < animItems.length; index++) {
      const animItem = animItems[index]
      const animItemHeight = animItem.offsetHeight
      const animItemOffset = offset(animItem).top
      const animStart = 1
      const animStart2 = 4

      let animItemPoint = window.innerHeight - animItemHeight / animStart
      if (animItemHeight > window.innerHeight) {
        animItemPoint = window.innerHeight - window.innerHeight / animStart
      }

      let animItemPoint2 = window.innerHeight - animItemHeight / animStart2
      if (animItemHeight > window.innerHeight) {
        animItemPoint2 = window.innerHeight - window.innerHeight / animStart2
      }

      if (
        pageYOffset > animItemOffset - animItemPoint &&
        pageYOffset < animItemOffset + animItemHeight
      ) {
        animItem.classList.add('animation')
        // clearInterval(refreshIntervalId);
      } else {
        if (!animItem.classList.contains('_anim__no__hide')) {
          animItem.classList.remove('animation')
        }
      }
      if (
        pageYOffset > animItemOffset - animItemPoint2 &&
        pageYOffset < animItemOffset + animItemHeight
      ) {
        animItem.classList.add('animation2')
        // clearInterval(refreshIntervalId);
      } else {
        if (!animItem.classList.contains('_anim__no__hide')) {
          animItem.classList.remove('animation2')
        }
      }
    }
  }
  function offset(el) {
    const rect = el.getBoundingClientRect(),
      scrollLeft = window.pageXOffset || document.documentElement.scrollLeft,
      scrollTop = window.pageYOffset || document.documentElement.scrollTop
    return { top: rect.top + scrollTop, left: rect.left + scrollLeft }
  }
  setTimeout(() => {
    animOnScroll()
  }, 600)
}
