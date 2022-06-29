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

// Formats slider description show/hide action
$('.formats-content > h1 > span:first-child').on('click', function() {
    $(this).hide();
    $(this).next().css('display', 'flex');

    // Show description
    $(this).parents('.formats-content').find('.description').removeClass('invisible');
});
$('.formats-content > h1 > span:last-child').on('click', function() {
    $(this).hide();
    $(this).prev().css('display', 'flex');

    // Hide description
    $(this).parents('.formats-content').find('.description').addClass('invisible');
});

// Our work block description show/hide action
$('.client-block').hover(
    function () {
        $(this).find('div').removeClass('invisible');
    },
    function () {
        $(this).find('div').addClass('invisible');
    }
);