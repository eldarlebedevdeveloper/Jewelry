changeButtomBuy()
function changeButtomBuy() {
  const footerOffsetTop = document.querySelector('footer.footer').clientHeight
  const formClientHeight = document.querySelector(
    'section.form-section'
  ).clientHeight
  const indentForBottom = document.body.scrollHeight - formClientHeight
  const buttonBuy = document.querySelector('#button_buy')
  console.log(document.body.scrollHeight)
  console.log(indentForBottom)
  console.log(formClientHeight)

  window.addEventListener('scroll', function () {
    if (window.pageYOffset > indentForBottom) {
      buttonBuy.style.bottom = footerOffsetTop + 30 + 'px'
    }
    if (window.pageYOffset < indentForBottom) {
      buttonBuy.style.bottom = 2 + 'vw'
    }
  })
}
