// to display hamburger icon
jQuery(function () {
    jQuery(".hamburger-icon").on("click", function () {
        jQuery("#gnav").toggleClass("is-active");
        jQuery(this).next().slideToggle();
        jQuery("#hamburger-btn").toggleClass("fa-l#hamburger-btnst-ul");
        jQuery("#hamburger-btn").toggleClass("fa-times");
    });
});

// for tablet & desktop fixed
jQuery(window).scroll(function() {
    fixedGnav();
});

function fixedGnav() {
    var fixed = jQuery("#gnav");
    var startPos = jQuery('#about-nina');
    var startPosTop = startPos.offset().top;
    var winScroll = jQuery(window).scrollTop();
    if(winScroll > startPosTop) {
      fixed.addClass('is-fixed');
    } else {
      fixed.removeClass('is-fixed');
    }
}


// slide show with slick
jQuery(function() {
    jQuery('.header__img-slide-show').slick( {
        autoplay: true,
        autoplaySpeed: 3000,
        dots: false,
        arrows: false,
        infinite: true,
        fade: true,
        speed: 1500,
        swipe: false,
        pauseOnHover: false,
        pauseOnFocus: false,
    });
});


// page top btn fadein and fadeout function
jQuery(function () {
    let topBtn = jQuery(".page-up-icon");
    topBtn.hide();

    // will come of topBtn function
    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > 200) {
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


// copy right get full year
jQuery(function() {
  let dayOption = new Date();
  let myYear = dayOption.getFullYear();
  let copyRight = jQuery("#copyRight");
      copyRight.text("2021-" + myYear);
});
