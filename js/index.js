// modal menu


// slideShow
// $(function() {
//   $(".main__img-slide-show").each(function() {
//     let slides = $(this).find("img");
//     let slideCount = slides.length;
//     let currentIndex = 0;

//     slides.eq(currentIndex).fadeIn(1000);

//     setInterval(showNextSlide, 3000);

//     function showNextSlide() {
//       let nextIndex = (currentIndex + 1) % slideCount;
//       slides.eq(currentIndex).fadeOut(1000);
//       slides.eq(nextIndex).fadeIn(1000);
//       currentIndex = nextIndex;
//     }
//   });
// });

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



// copy right get full year
$(function() {
  let dayOption = new Date();
  let myYear = dayOption.getFullYear();
  let copyRight = $("#copyRight");
      copyRight.text("2020-" + myYear);
});