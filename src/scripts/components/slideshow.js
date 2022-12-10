var slider = tns({
    container: '.slideshow__inner',
    items: 1,
    nav: false,
    autoHeight: true,
    nextButton: '.slideshow__arrow--next',
    prevButton: '.slideshow__arrow--prev',
    responsive: {
        768: {
            autoHeight: false
        }
    }
});