

$(function () {
  $(".l-header .menu").on("click", function () {
    $(this).toggleClass("open");
  });
  $(".l-header .toggle").on("click", function () {
    $(this).toggleClass("open");
  });
  $(".jsDropMenu").on("click", function () {
    $(this).toggleClass("open");
  });
  $(".jsModalClose").on("click", function () {
    $(".l-modal").hide();
  });

});
