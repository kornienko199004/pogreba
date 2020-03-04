const resetForm = () => {
  const modalForm = document.querySelector('.modal__form');
  const inputs = modalForm.querySelectorAll('input');
  /* eslint-disable */
  inputs.forEach((input) => {
    input.value = '';
  });
  /* eslint-enable */
};


const modalFormRequest = ($) => {
  $(document).ready(function ($) {

    console.log('modal');
    const form = $('.modal__form');
    const action = form.attr('action');

    $('.modal__form').on('submit', function (e) {
      e.preventDefault();
      let formData = new FormData();
      formData.append('modal_name', $('.modal__input--name').val());
      formData.append('modal_phone', $('.modal__input--phone').val());
      $.ajax({
        type: 'POST',
        url: action,
        data: formData,
        processData: false, // Не обрабатываем файлы (Don't process the files)
        contentType: false,
        error: function (request, txtstatus, errorThrown) {
          // failureStatus();
          console.log('failure');
        },
        success: function () {
          // successStatus();
          console.log('success');
          $('.modal').modal('hide');
          resetForm();
        }
      });
    });
  });
};

modalFormRequest(window.jQuery);
