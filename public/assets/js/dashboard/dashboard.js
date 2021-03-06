function previewImage(elem) {
  const file = $(elem).get(0).files;
  const reader = new FileReader();

  reader.readAsDataURL(file[0]);
  reader.addEventListener('load', function (e) {
    const image = e.target.result;
    $('.img-preview').attr('src', image);
  });
}

$(function () {
  // * Datatable
  $('table').DataTable();

  // * Custom file input
  bsCustomFileInput.init();

  // * Datetime picker
  flatpickr(document.querySelectorAll('[data-datetimepicker]'), {
    enableTime: true,
    time_24hr: true,
    dateFormat: "Y-m-d H:i",
  });

  // * Date only picker
  flatpickr(document.querySelectorAll('[data-datepicker]'), {
    dateFormat: "Y-m-d",
  });
});