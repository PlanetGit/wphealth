/**
 * Style actions
 */
$('.service_action').hover(
    function () {
        const plus = $(this).find('span').first();
        if (!plus.hasClass('hidden')) {
            plus.addClass('hidden');
            $(this).find('span').last().removeClass('hidden');
        }
    },
    function () {
        const plus = $(this).find('span').first();
        if (plus.hasClass('hidden')) {
            plus.removeClass('hidden');
            $(this).find('span').last().addClass('hidden');
        }
    }
);


// Carousel hover action
$('.swiper-button-next').hover(
    function () {
        let hover = $(this).data('hover');
        $(this).css('background-image', `url(${hover})`);
    },
    function () {
        let initial = $(this).data('initial');
        $(this).css('background-image', `url(${initial})`);
    }
);
$('.swiper-button-prev').hover(
    function () {
        let hover = $(this).data('hover');
        $(this).css('background-image', `url(${hover})`);
    },
    function () {
        let initial = $(this).data('initial');
        $(this).css('background-image', `url(${initial})`);
    }
);