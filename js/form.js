;(function ($) {
  $('#form').submit(function (event) {
    event.preventDefault()
    // Сохраняем в переменную form id текущей формы, на которой сработало событие submit
    let form = $('#' + $(this).attr('id'))[0]
    // Сохраняем в переменную класс с параграфом для вывода сообщений
    let message = $(this).find('.contact-form__message')
    let fd = new FormData(form)
    $.ajax({
      url: '/send.php',
      type: 'POST',
      data: fd,
      processData: false,
      contentType: false,
      success: function success(res) {
        let respond = $.parseJSON(res)
        if (respond.err) {
          message.html(respond.err).css('color', '#d42121')
          setTimeout(() => {
            message.text('')
          }, 3000)
        } else if (respond.okSend) {
          message.html(respond.okSend).css('color', '#21D43D')
          setTimeout(() => {
            message.text('')
          }, 3000)
          $('#form-btn').prop('disabled', true)
        } else {
          alert('Необработанная ошибка. Проверьте консоль и устраните.')
        }
      },
    })
  })
})(jQuery)
