<?php

/**
 * Template part for page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage wphealth
 * @since wphealth 1.0
 */

?>
<style>
    input[id=range] {
        -webkit-appearance: none;
        margin: 10px 0;
        width: 138%;
    }

    input[id=range]:focus {
        outline: none;
    }

    input[id=range]::-webkit-slider-runnable-track {
        width: 100%;
        height: 1px;
        cursor: pointer;
        background: var(--htcBlack);
    }

    input[id=range]::-webkit-slider-thumb {
        height: 42px;
        width: 50px;
        background: url('<?= get_template_directory_uri() . '/assets/images/scroll.svg'; ?>');
        cursor: pointer;
        -webkit-appearance: none;
        margin-top: -25px;
        position: relative;
        padding-left: 30px;
    }

    input[id=range]:focus::-webkit-slider-runnable-track {
        background: var(--htcBlack);
    }

    input[id=range]::-moz-range-track {
        width: 100%;
        height: 1px;
        cursor: pointer;
        animate: 0.2s;
        background: var(--htcBlack);
        margin-top: 10px;
    }

    input[id=range]::-moz-range-thumb {
        height: 50px;
        width: 50px;
        background: url('<?= get_template_directory_uri() . '/assets/images/scroll.svg'; ?>');
        cursor: pointer;
        -webkit-appearance: none;
        border: none;
    }

    input[id=range]::-ms-track {
        width: 100%;
        height: 1px;
        cursor: pointer;
        animate: 0.2s;
    }

    input[id=range]::-ms-thumb {
        height: 40px;
        width: 50px;
        background: url('<?= get_template_directory_uri() . '/assets/images/scroll.svg'; ?>');
        cursor: pointer;
    }


    .range {
        transform: rotate(90deg);
        position: relative;
        top: -290px;
        right: 160px;
    }


    .steps-range {
        padding: 0;
        width: 130%;
        position: relative;
    }

    .steps-range div {
        position: relative;
        text-align: center;
        color: var(--htcBlack);
        cursor: pointer;
    }

    .steps-range div::before {
        position: absolute;
        top: -18px;
        right: 0;
        left: 0;
        display: block;
        content: "";
        /* margin: 0 auto; */
        width: 16px;
        height: 16px;
        background: var(--htcWhite);
        border: solid 1px var(--htcBlack);
        border-radius: 50%;
    }

    @-moz-document url-prefix() {
        .steps-range div::before {
            position: absolute;
            top: -35px;
            right: 0;
            left: 0;
            display: block;
            content: "";
            width: 16px;
            height: 16px;
            background: var(--htcWhite);
            border: solid 1px var(--htcBlack);
            border-radius: 50%;
        }

        .steps-range div:first-child::before,
        .steps-range div:last-child::before {
            width: 30px;
            height: 30px;
            position: absolute;
            top: -32px;
        }
    }


    .steps-range div:first-child::before,
    .steps-range div:last-child::before {
        width: 30px;
        height: 30px;
        margin-top: -8px;
    }

    .steps-range .active {
        color: var(--htcBlack);
    }

    .steps-range .selected::before {
        background: var(--htcBlack);
    }

    .steps-range .active.selected::before {
        display: none;
    }

    #drag_tooltip {
        width: 165px;
        text-align: center;
        font-size: 18px;
        top: 150px;
        z-index: 100;
    }

    .arrow_down_on_hover:before {
        content: "";
        width: 0;
        height: 0;
        border-left: 10px solid transparent;
        border-right: 10px solid transparent;
        border-top: 15px solid var(--htcPurple);
        position: absolute;
        right: 60%;
        margin-right: -10px;
        bottom: -13px;
    }


    @media (min-width: 640px) {
        .range {
            transform: rotate(0deg);
            top: 0;
            right: 0;
        }

        input[id=range] {
            -webkit-appearance: none;
            margin: 10px 0;
            width: 100%;
        }

        .steps-range {
            padding: 0;
            width: 98%;
            position: relative;
        }

        #drag_tooltip {
            bottom: 40px;
            width: 165px;
            text-align: center;
            font-size: 18px;
            top: unset;
        }

        .arrow_down_on_hover:before {
            content: "";
            width: 0;
            height: 0;
            border-left: 10px solid transparent;
            border-right: 10px solid transparent;
            border-top: 15px solid var(--htcPurple);
            position: absolute;
            right: 50%;
            margin-right: -10px;
            bottom: -13px;
        }
    }

    @-moz-document url-prefix() {
        #drag_tooltip {
            bottom: 55px;
            width: 165px;
            text-align: center;
            font-size: 18px;
        }
    }
</style>

<?php
    $steps = get_field('steps_slider');
    $steps_count = count($steps);
?>

<section>
    <div class="max-w-screen-xl mx-auto relative px-3 md:px-0">
        <div class="relative flex justify-between">
            <svg width="62" height="30" viewBox="0 0 62 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M54.1353 26.7231C57.928 26.7231 61.0025 23.6012 61.0025 19.7502C61.0025 15.8992 57.928 12.7773 54.1353 12.7773C50.3426 12.7773 47.2681 15.8992 47.2681 19.7502C47.2681 23.6012 50.3426 26.7231 54.1353 26.7231Z" fill="#973280" />
                <path d="M16.5247 25.2927C17.6866 26.2516 19.1587 26.8383 20.7641 26.8743C24.7151 26.9636 27.9685 23.6726 27.8976 19.6608C27.8292 15.8078 24.7322 12.7065 20.9217 12.7065C19.2394 12.7065 17.6976 13.3107 16.493 14.3167C15.0074 15.5572 12.8682 15.5324 11.3752 14.3006C10.2134 13.3417 8.74121 12.7549 7.13589 12.7189C3.18488 12.6321 -0.06854 15.9219 0.00109753 19.9337C0.0695133 23.7867 3.16655 26.888 6.97706 26.888C8.65936 26.888 10.2024 26.2838 11.407 25.2766C12.8914 24.0361 15.0318 24.0609 16.5235 25.2927H16.5247Z" fill="#973280" />
                <path d="M39.6206 4.93053L29.9106 14.7899C27.2287 17.513 27.2285 21.9277 29.9101 24.6506C32.5917 27.3734 36.9396 27.3732 39.6214 24.6501L49.3315 14.7908C52.0133 12.0677 52.0135 7.65292 49.3319 4.93009C46.6503 2.20726 42.3024 2.20746 39.6206 4.93053Z" fill="#973280" />
            </svg>
            <p class="uppercase" data-tooltip-target="tooltip-hover" data-tooltip-trigger="hover">Module title</p>
        </div>
        <div class="swiper stepSwiper">
            <div class="swiper-wrapper">
                <?php if (have_rows('steps_slider')) : ?>
                    <?php while (have_rows('steps_slider')) : the_row();
                        $image = get_sub_field('steps_image');
                        $title = get_sub_field('steps_title');
                        $sub_title = get_sub_field('steps_sub_title');
                        $description = get_sub_field('steps_description');
                    ?>
                        <div class="swiper-slide">
                            <div class="relative">
                                <h1 class="htcH1Title md:hidden"><?= $title ?></h1>
                                <div class="md:flex mt-2 justify-between md:grid grid-cols-2 pl-20 md:pl-0">
                                    <div class="max-w-md">
                                        <h1 class="htcH1Title hidden md:block"><?= $title ?></h1>
                                        <h3 class="htcH3SubTitle mt-10 md:mt-12"><?= $sub_title ?></h3>
                                        <div class="htcBodyFont mt-4">
                                            <?= $description ?>
                                        </div>
                                    </div>
                                    <?php
                                    if (!empty($image)) : ?>
                                        <img class="mt-4 md:mt-0 mb-2" src="<?= $image ?>" alt="Step image" width="569" height="333" />
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="step-pagination"></div>
        </div>
        <div class="range mt-14 relative z-10">
            <input id="range" data-tooltip-target="tooltip-hover" type="range" min="1" max="<?= $steps_count ?>" value="1" class="w-full appearance-none cursor-pointer">
            <div class="steps-range w-full flex justify-between">
                <div class="active selected"></div>
                <?php for ($i=1; $i < $steps_count; $i++):?>
                <div></div>
                <?php endfor; ?>
            </div>
        </div>
        <div id="drag_tooltip" role="tooltip" class="absolute hidden z-100 py-2 px-3 rounded-full tooltip uppercase text-white bg-purple">
            Drag To View
            <div class="arrow_down_on_hover"></div>
        </div>
    </div>
</section>

<script>
    var swiper = new Swiper(".stepSwiper", {
        pagination: {
            el: '.step-pagination',
            clickable: true,
            renderBullet: function(index, className) {
                return `<span class="dot swiper-pagination-bullet step-${index} hidden"></span>`;
            },
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        allowTouchMove: false,
    });

    // Dragging step slider action
    var $rangeInput = $('.range input'),
        prefs = ['webkit-slider-runnable-track', 'moz-range-track', 'ms-track'];

    var getTrackStyle = function(el) {
        const curVal = el.value;

        // Set active label
        $('.steps-range div').removeClass('active selected');
        const curLabel = $('.steps-range').find(`div:nth-child(${curVal})`);

        curLabel.addClass('active selected');
        curLabel.prevAll().addClass('selected');
        $(`.step-pagination .step-${(curVal-1)}`).trigger('click');

    }

    $rangeInput.on('input', function() {
        getTrackStyle(this);
    });

    // Change input value on label click
    $('.steps-range div').on('click', function() {
        const index = $(this).index();
        $rangeInput.val(index + 1).trigger('input');
    });

    // Title hover
    $('input[id="range"]').on('mouseover', function() {
        const activePos = $('.steps-range > .active.selected').position();
        const index = $('.steps-range > .active.selected').index();
        const len = $('.steps-range div').length;

        if (index < (len - 1)) $('#drag_tooltip').show();

        if ($(window).width() > 640) {
            $('#drag_tooltip').css('left', `${activePos.left - (60 + index * 3)}px`);
        }

    });
    $('input[id="range"]').on('mousedown', function() {
        $('#drag_tooltip').hide();
    });
    $('.steps-range div').on('mousedown', function() {
        $('#drag_tooltip').hide();
    });
</script>