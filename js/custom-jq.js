// Lightbox
jQuery(document).ready(function ($) {
  $(document).on('click', '[data-toggle="lightbox"]', function (event) {
    event.preventDefault();
    $(this).ekkoLightbox();
  });
});

// Load
jQuery(document).ready(function ($) {
  setTimeout(function () {
    $('.loader-bg').fadeToggle();
  }, 5000);
});

jQuery(document).ready(function ($) {
  $('body').scrollspy({
    target: '#mainNav',
    offset: 200,
  });
});
