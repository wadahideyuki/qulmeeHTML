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

  //カレンダーのPlaceHolder
  $(".dateInput").on("input", function () {
    if ($(this).val()) {
      $(".spanMessage").hide(); // 日付が入力されたら非表示
    } else {
      $(".spanMessage").show(); // 日付がクリアされたら再表示
    }
  });

  //selectのPlaceholder

  $(".u-select").on("change", function () {
    if ($(this).val() === "") {
      $(this).addClass("select-empty").removeClass("select-filled");
    } else {
      $(this).addClass("select-filled").removeClass("select-empty");
    }
  });
});
