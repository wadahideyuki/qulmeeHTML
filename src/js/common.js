

$(function () {
  $(".sp-menu-open").on("click", function () {
    $(".nav-qulmee .menu").toggleClass("show");
  });
  $(".nav-qulmee .menu").on("click", function () {
    $(this).removeClass("show");
  });
});
