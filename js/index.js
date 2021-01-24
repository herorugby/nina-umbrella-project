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
        pauseOnFocus: false
    });
});


// gallery slide show pics wuth slick
$(function() {
    $('.main-items-slide').slick( {
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        autoplay: true,
        autoplaySpeed: 2500,
        dots: false,
        asNavFor: '.sub-items-slide'
    });
    $('.sub-items-slide').slick( {
        slidesToShow: 2,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        dots: false,
        centerMode: true,
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