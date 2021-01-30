// modal menu


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
        autoplaySpeed: 3500,
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
        arrows: true,
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
