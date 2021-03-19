// to display hamburger icon
jQuery(function () {
    jQuery(".hamburger-icon").on("click", function () {
        jQuery("#gnav").toggleClass("is-active");
        jQuery(this).next().slideToggle();
        jQuery("#hamburger-btn").toggleClass("fa-list-ul");
        jQuery("#hamburger-btn").toggleClass("fa-times");
    });
});


// for tablet & desktop gnav fixed
jQuery(window).scroll(function() {
    fixedGnavSinglePage();
});
function fixedGnavSinglePage() {
    var fixed = jQuery("#gnav");
    var startPos = jQuery('.other-main__title');
    var startPosTop = startPos.offset().top;
    var winScroll = jQuery(window).scrollTop();
    if(winScroll > startPosTop) {
      fixed.addClass('is-fixed');
    } else {
      fixed.removeClass('is-fixed');
    }
}


// page top btn fadein and fadeout function
jQuery(function () {
    let topBtn = jQuery(".page-up-icon");
    topBtn.hide();

    // will come of topBtn function
    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > 100) {
            topBtn.fadeIn(600);
        } else {
            topBtn.fadeOut(300);
        }
    });

    // to page top when click the topBtn
    topBtn.on("click", function () {
        jQuery("body, html").animate({
            scrollTop: 0
        }, 1500, "swing");
        return false;
    });
});


//text fadeIn
jQuery(window).on("load scroll", function (){
  let box = jQuery(".fadeIn");

  box.each(function(){
    let boxOffset = jQuery(this).offset().top;
    let scrollPos = jQuery(window).scrollTop();
    let wh = jQuery(window).height();
    if(scrollPos > boxOffset - wh + 250){
      jQuery(this).addClass("animated");
    }
  });
});


// copy right get full year
jQuery(function() {
  let dayOption = new Date();
  let myYear = dayOption.getFullYear();
  let copyRight = jQuery("#copyRight");
      copyRight.text("2021-" + myYear);
});
