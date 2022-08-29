var msnry = new Masonry(document.querySelector('.gallery'), {
    columnWidth: '.gallery__sizer',
    itemSelector: '.gallery__item',
    gutter: '.gallery__gutter',
    percentPosition: true
});

const lightbox = GLightbox({});