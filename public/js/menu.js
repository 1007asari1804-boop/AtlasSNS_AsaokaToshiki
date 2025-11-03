$(function () {
  $(".accordion-button").on("click", function () {
    $(this).toggleClass('open');
    $('.accordion-menu').toggleClass('open');
  });
});
