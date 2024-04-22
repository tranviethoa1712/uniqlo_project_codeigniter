$(document).ready(function () {
    $('.swipper-horizonal').slick({
        slidesToShow: 4,
        prevArrow:"<button type='button' class='slick-prev pull-left ml20 top50'><i class='fa-solid fa-arrow-left'></i></button>",
        nextArrow:"<button type='button' class='slick-next pull-right top50'><i class='fa-solid fa-arrow-right'></i></button>",
        responsive: [
            {
                breakpoint: 720,
                settings: {
                  slidesToShow: 2,
                  slidesToScroll: 1,
                  infinite: true,
                }
              },
        ]
    });

    $('.swipper-spetitle').slick({
        slidesToShow: 4,
        prevArrow:"<button type='button' class='slick-prev pull-left ml-20'><i class='fa-solid fa-arrow-left'></i></button>",
        nextArrow:"<button type='button' class='slick-next pull-right'><i class='fa-solid fa-arrow-right'></i></button>",
        responsive: [
            {
                breakpoint: 720,
                settings: {
                  slidesToShow: 2,
                  slidesToScroll: 1,
                  infinite: true,
                }
              },
        ]
    });

    $('.swipper-banner').slick({
        slidesToShow: 1,
        prevArrow:"<button type='button' class='slick-prev pull-left ml-0 top-50'><i class='fa-solid fa-chevron-left'></i></button>",
        nextArrow:"<button type='button' class='slick-next pull-right top-50'><i class='fa-solid fa-chevron-right'></i></button>"
    });

    $('.swipper-thumbnail').slick({
        slidesToShow: 1,
        prevArrow:"<button type='button' class='slick-prev pull-left'><i class='fa-solid fa-chevron-left'></i></button>",
        nextArrow:"<button type='button' class='slick-next pull-right'><i class='fa-solid fa-chevron-right'></i></button>"
    });
});



