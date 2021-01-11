// modal menu


// slideShow
$(function() {
  $(".main__img-slide-show").each(function() {
    let slides = $(this).find("img");
    let slideCount = slides.length;
    let currentIndex = 0;

    slides.eq(currentIndex).fadeIn(1000);

    setInterval(showNextSlide, 3000);

    function showNextSlide() {
      let nextIndex = (currentIndex + 1) % slideCount;
      slides.eq(currentIndex).fadeOut(1000);
      slides.eq(nextIndex).fadeIn(1000);
      currentIndex = nextIndex;
    }
  });
});



// copy right get full year
let dayOption = new Date();
let myYear = dayOption.getFullYear();

$(function() {
  function copyRightYear() {
    copyRight = $("#copyRight");
    copyRight.text("2020-" + myYear);
  }
  copyRightYear();
});