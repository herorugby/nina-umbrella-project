// hamburger menu
// when to come hamburger icon
// $(function () {
//     $(window).on('load resize', function () {
//         infoBox = $('.main__new-info').offset().top();
//         winH = $(window).height();
//     });
//     $(function () {
//         var hamburgerIcon = $('.hamburger-icon');
//         hamburgerIcon.hide();
//         $(window).scroll(function () {
//             if ($(this).scrollTop() > infoBox - winH) {
//                 hamburgerIcon.fadeIN();
//             } else {
//                 hamburgerIcon.fadeOut();
//             }
//         });
//     });
// });

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
    fixedGnav();
});

function fixedGnav() {
    var $fixed = $("#gnav");
    var $startPos = $('.new-info__list__items');
    var $startPosTop = $startPos.offset().top;
    var $winScroll = $(window).scrollTop();
    if($winScroll > $startPosTop) {
      $fixed.addClass('is-fixed');
    } else {
      $fixed.removeClass('is-fixed');
    }
}



// $(function () {
    // var fixedPos = $(".gnav__container");
    // var fixedTop = fixedPos.offset().top;
    // var winScroll = $(window).scrollTop();
    // $(window).scroll(function () {
        // alert(fixedTop);
    //     if (winScroll >= fixedTop) {
    //         fixedPos.addClass("is-fixed");
    //     } else {
    //         fixedPos.removeClass("is-fixed");
    //     }
    // });
// });

// slide show with slick
$(function() {
    $('.header__img-slide-show').slick( {
        autoplay: true,
        autoplaySpeed: 2500,
        dots: false,
        arrows: false,
        infinite: true,
        fade: true,
        swipe: false,
        pauseOnHover: false,
        pauseOnFocus: false,
    });
});

// copy right get full year
$(function() {
  let dayOption = new Date();
  let myYear = dayOption.getFullYear();
  let copyRight = $("#copyRight");
      copyRight.text("2020-" + myYear);
});
