$('.slideshow').slick({
    autoplay: true,
    infinity: true,
    slidesToShow: 3,
    sliderToScroll: 3,
    prevArrow: '<div class="slick-prev"></div>',
    nextArrow: '<div class="slick-next"></div>',
    dots: true,
    responsive: [
        {
        breakpoint: 769,
        settings: {
            sliderToShow:2,
            sliderToScroll: 2,
        }
        },
    {
        breakpoint: 426,
        settings: {
            sliderToShow: 1,
            sliderToScroll: 1,
        }
    }
    ]
});