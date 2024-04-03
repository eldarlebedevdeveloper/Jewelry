const menuBtn = document.querySelector('.header-mobile-menu')
const mainMenu = document.querySelector('.modal-menu')
const modalCloseBtns = document.querySelectorAll('.modal-menu-close-btn')
const modalsWrappers = document.querySelectorAll('.mobile-menu-bg')
const modalContainers = document.querySelectorAll('.modal__area__content')
const MODAL_ACTIVE_CLASS = 'modal-active'
const BODY_SCROLL_DISABLE_CLASS = 'body-scroll-disable'

enableCloseModalOnBgdClick()
hideModalOnMobileMenuElementsClick()

const modals = [mainMenu]
const buttons = [menuBtn]

buttons.forEach((btn, index) => {
  const projectModal = modals[index]

  if (btn) {
    btn.addEventListener('click', (event) => {
      event.preventDefault()
      projectModal.classList.add(MODAL_ACTIVE_CLASS)
      mobileMenuBtn.classList.add('menu-btn-actice')
      document.body.classList.add(BODY_SCROLL_DISABLE_CLASS)
    })
  }
})

modalCloseBtns.forEach((btn) => {
  btn.addEventListener('click', hideModal)
})

function enableCloseModalOnBgdClick() {
  if (modalContainers.length) {
    modalContainers.forEach((container) => {
      container.addEventListener('click', (event) => event.stopPropagation())
    })
  }

  if (modalsWrappers.length) {
    modalsWrappers.forEach((container) => {
      container.addEventListener('click', hideModal)
    })
  }
}

function hideModal() {
  const modalToClose = document.querySelector(`.${MODAL_ACTIVE_CLASS}`)

  if (modalToClose) {
    modalToClose.classList.remove(MODAL_ACTIVE_CLASS)
    document.body.classList.remove(BODY_SCROLL_DISABLE_CLASS)
    mobileMenuBtn.classList.remove('menu-btn-actice')
  }
}

function hideModalOnMobileMenuElementsClick() {
  const MOBILE_MENU_ITEM_CLOSE_DELAY = 150
  const menuElements = document.querySelectorAll('.modal-menu-hide')

  if (menuElements.length) {
    menuElements.forEach((container) => {
      container.addEventListener('click', () =>
        setTimeout(hideModal, MOBILE_MENU_ITEM_CLOSE_DELAY)
      )
    })
  }
}
