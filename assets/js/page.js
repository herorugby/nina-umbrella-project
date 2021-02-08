// to display hamburger icon
jQuery(function () {
    jQuery(".hamburger-icon").on("click", function () {
        jQuery("#gnav").toggleClass("is-active");
        jQuery(this).next().slideToggle();
        jQuery("i").toggleClass("fa-list-ul");
        jQuery("i").toggleClass("fa-times");
    });
});

// for tablet & desktop fixed
jQuery(window).scroll(function() {
    fixedGnavSinglePage();
});

function fixedGnavSinglePage() {
    var $fixed = jQuery("#gnav");
    var $startPos = jQuery('.breadcrumb__list');
    var $startPosTop = $startPos.offset().top;
    var $winScroll = jQuery(window).scrollTop();
    if($winScroll > $startPosTop) {
      $fixed.addClass('is-fixed');
    } else {
      $fixed.removeClass('is-fixed');
    }
}

// copy right get full year
jQuery(function() {
  let dayOption = new Date();
  let myYear = dayOption.getFullYear();
  let copyRight = jQuery("#copyRight");
      copyRight.text("2020-" + myYear);
});
