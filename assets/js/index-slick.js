// gallery slide show pics wuth slick
jQuery(function() {
    jQuery('.main-items-slide').slick( {
        asNavFor: '.sub-items-slide',
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2500,
        arrows: false,
        fade: true,
    });
    jQuery('.sub-items-slide').slick( {
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
