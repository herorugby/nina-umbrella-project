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

// how to display hamburger icon
$(function () {
    // ハンバーガーアイコンをクリックでgnavがスライドイン、アウト
    $(".hamburger-icon").on("click", function () {
        $("#gnav").toggleClass("is-active");
        $(this).next().slideToggle();
        $("i").toggleClass("fa-list-ul");
        $("i").toggleClass("fa-times");
    });

    // gnavアイテムをクリックでgnavがスライドアウト
    $(".gnav__list__item").on("click", function () {
        $("#gnav").toggleClass("is-active");
        $(".hamburger-icon").next().slideToggle();
        $("i").toggleClass("fa-list-ul");
        $("i").toggleClass("fa-times");
    });
});


// slide show with slick
$(function() {
    $('.main__img-slide-show').slick( {
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


// gallery slide show pics wuth slick
$(function() {
    $('.main-items-slide').slick( {
        asNavFor: '.sub-items-slide',
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2500,
        arrows: false,
        fade: true,
    });
    $('.sub-items-slide').slick( {
        asNavFor: '.main-items-slide',
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        accessibility: true,
        speed: 400,
        arrows: false,
        focusOnSelect: true,
    });
});

// copy right get full year
$(function() {
  let dayOption = new Date();
  let myYear = dayOption.getFullYear();
  let copyRight = $("#copyRight");
      copyRight.text("2020-" + myYear);
});
