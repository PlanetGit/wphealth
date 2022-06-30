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

// Range Block icon show/hide action
$('.range-btn').on('click', function() {
    if ($(this).find('span:first-child').hasClass('hidden')) {
        $(this).find('span:first-child').removeClass('hidden');
        $(this).find('span:last-child').addClass('hidden');

        // Hide description
        $(this).next().addClass('hidden');
        $(this).next().next().addClass('hidden');
    } else {
        $(this).find('span:first-child').addClass('hidden');
        $(this).find('span:last-child').removeClass('hidden');

        // Show description
        $(this).next().removeClass('hidden');
        $(this).next().next().removeClass('hidden');
    }
});

// Testimonial Block hover action
$('.testimonial').hover(
    function () {
        $(this).find('.content').removeClass('hidden');
        $(this).find('.flex').addClass('hidden');
    },
    function () {
        $(this).find('.content').addClass('hidden');
        $(this).find('.flex').removeClass('hidden');
    }
);
