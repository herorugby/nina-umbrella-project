// to display hamburger icon
$(function () {
    $(".hamburger-icon").on("click", function () {
        $("#gnav").toggleClass("is-active");
        $(this).next().slideToggle();
        $("i").toggleClass("fa-list-ul");
        $("i").toggleClass("fa-times");
    });
});

// for tablet & desktop fixed
$(window).scroll(function() {
    fixedGnavSinglePage();
});

function fixedGnavSinglePage() {
    var $fixed = $("#gnav");
    var $startPos = $('.breadcrumb__list');
    var $startPosTop = $startPos.offset().top;
    var $winScroll = $(window).scrollTop();
    if($winScroll > $startPosTop) {
      $fixed.addClass('is-fixed');
    } else {
      $fixed.removeClass('is-fixed');
    }
}

// copy right get full year
$(function() {
  let dayOption = new Date();
  let myYear = dayOption.getFullYear();
  let copyRight = $("#copyRight");
      copyRight.text("2020-" + myYear);
});
