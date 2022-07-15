<?php

/**
 * Displays the site header.
 *
 * @package WordPress
 * @subpackage wphealth
 */

?>

<header id="header" class="z-10 absolute w-full mx-auto ">
	<div class="pt-6 pb-4">
		<nav class="md:relative block md:flex items-center justify-between sm:h-10 md:px-4">
			<div class="flex items-center flex-grow flex-shrink-0 lg:flex-grow-0">
				<div class="flex items-center justify-between w-full md:w-auto px-4 md:mx-0 z-10">
					<a href="/">
						<span class="sr-only">HTCHealth</span>
						<?php if (get_mode()) : ?>
							<img alt="Workflow" class="md:block hidden h-8 w-auto sm:h-10" src="<?= the_field('light_header_logo', 'option') ?>">
							<img alt="Workflow" class="md:hidden h-8 w-auto sm:h-10" src="<?= the_field('header_logo', 'option') ?>">
						<?php else : ?>
							<img alt="Workflow" class="h-8 w-auto sm:h-10" src="<?= the_field('header_logo', 'option') ?>">
						<?php endif; ?>
					</a>
					<div class="flex items-center md:hidden">
						<button class="menu" type="button">
							<span>
								<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
									<circle cx="16" cy="16" r="15.5" fill="white" stroke="black" />
									<path d="M26.6978 16.2461L5.00006 16.2461" stroke="black" />
									<path d="M15.8486 27.6978L15.8486 6.00006" stroke="black" />
								</svg>
							</span>
							<span class="hidden">
								<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
									<circle cx="16" cy="16" r="15.5" fill="white" stroke="black" />
									<path d="M23.4399 23.5876L8.09736 8.24506" stroke="black" />
									<path d="M7.6709 24.0137L23.0135 8.67109" stroke="black" />
								</svg>
							</span>
						</button>
					</div>
				</div>
			</div>
			<div class="hidden md:flex md:ml-10 md:pr-4 md:space-x-8">
				<?php if (have_rows('links', 'option')) : ?>
					<?php while (have_rows('links', 'option')) : the_row(); ?>
						<?php $parent_title = get_sub_field('link_title'); ?>
						<?php if (have_rows('sub_link')) : ?>
							<div class="htcSubContain">
								<div class="containSub cursor-pointer flex">
									<p class="<?php echo get_mode('light-link'); ?>"><?= $parent_title; ?></p>

									<span class="first"><img class="ml-2" src="<?= get_template_directory_uri() . '/assets/images/plus.svg' ?>" alt="plus" width="18" height="18" /></span>
									<span class="second hidden"><img class="ml-2" src="<?= get_template_directory_uri() . '/assets/images/plus-cross.svg' ?>" alt="plus" width="18" height="18" /></span>
								</div>
								<div class="absolute top-14 subLink hidden <?= (strtolower($parent_title) == 'more') ? "right-0" : ""; ?>">
									<div class="relative flex flex-wrap space-x-8 bg-white p-2 h-fit">
										<?php while (have_rows('sub_link', 'option')) : the_row(); ?>
											<div class="h-fit">
												<a href="/<?php the_sub_field('sub_link_url'); ?>" class="htcSubLink whitespace-nowrap">
													<?php the_sub_field('sub_link_title'); ?>
												</a>
											</div>
										<?php endwhile; ?>

										<?php if (strtolower($parent_title) == 'more') : ?>
											<div class="flex justify-between space-x-8 pr-4">
												<a href="<?php the_field('instagram', 'option'); ?>">
													<img alt="instagram" src="<?= get_template_directory_uri() . '/assets/images/instagram.svg' ?>">
												</a>
												<a href="<?php the_field('linkedin', 'option'); ?>">
													<img alt="linkedin" src="<?= get_template_directory_uri() . '/assets/images/linkedin.svg' ?>">
												</a>
												<a href="<?php the_field('twitter', 'option'); ?>">
													<img alt="twitter" src="<?= get_template_directory_uri() . '/assets/images/twitter.svg' ?>">
												</a>
											</div>
										<?php endif; ?>
									</div>
								</div>
							</div>
						<?php else : ?>
							<a href="/<?php the_sub_field('link_url'); ?>" class="htcLink">
								<span class="<?php echo get_mode('light-link'); ?>"><?php the_sub_field('link_title'); ?></span>
							</a>
						<?php endif; ?>
					<?php endwhile; ?>
				<?php endif; ?>
				<a href="#" class="enquiry"><?= !empty(get_field('enquiry_button', 'option')) ? the_field('enquiry_button', 'option') : "Enquiry Now" ?></a>
			</div>
			<div class="hidden mobileHeader top-0 grid grid-cols-2 md:hidden p-4 bg-white w-full pt-20 pb-10 z-1">
				<div>
					<?php if (have_rows('links', 'option')) : ?>
						<?php while (have_rows('links', 'option')) : the_row(); ?>
							<?php $parent_title = get_sub_field('link_title'); ?>
							<?php if (have_rows('sub_link')) : ?>
								<div class="hover:text-black mhtcSubContain htcSubContain relative block">
									<div class="mcontainSub cursor-pointer flex">
										<p class="color-black"><?= $parent_title; ?></p>

										<span class="first"><img class="ml-2" src="<?= get_template_directory_uri() . '/assets/images/plus.svg' ?>" alt="plus" width="18" height="18" /></span>
										<span class="second hidden"><img class="ml-2" src="<?= get_template_directory_uri() . '/assets/images/plus-cross.svg' ?>" alt="plus" width="18" height="18" /></span>
									</div>
									<div class="top-14 hidden">
										<div class="relative py-2 h-fit">
											<?php while (have_rows('sub_link', 'option')) : the_row(); ?>
												<div class="h-fit py-2">
													<a href="/<?php the_sub_field('sub_link_url'); ?>" class="htcSubLink whitespace-nowrap">
														<?php the_sub_field('sub_link_title'); ?>
													</a>
												</div>
											<?php endwhile; ?>
										</div>
									</div>
								</div>
							<?php else : ?>
								<a href="/<?php the_sub_field('link_url'); ?>" class="hover:text-black mhtcLink htcLink my-8">
									<?php the_sub_field('link_title'); ?>
								</a>
							<?php endif; ?>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
				<div class="flex justify-between space-x-8 pr-4">
					<a class="h-fit" href="<?php the_field('instagram', 'option'); ?>">
						<img alt="instagram" src="<?= get_template_directory_uri() . '/assets/images/instagram.svg' ?>">
					</a>
					<a class="h-fit" href="<?php the_field('linkedin', 'option'); ?>">
						<img alt="linkedin" src="<?= get_template_directory_uri() . '/assets/images/linkedin.svg' ?>">
					</a>
					<a class="h-fit" href="<?php the_field('twitter', 'option'); ?>">
						<img alt="twitter" src="<?= get_template_directory_uri() . '/assets/images/twitter.svg' ?>">
					</a>
				</div>
			</div>
		</nav>
	</div>
	<div class="sub-header bg-white w-full h-fit hidden"></div>
</header>

<script>
	$('.containSub').hover(function() {
		$(this).children('.first').addClass('hidden');
		$(this).children('.second').removeClass('hidden');
		$(this).next().removeClass('hidden');

		const subHeight = $(this).next().height();
		$('.sub-header').css('height', subHeight);
		$('.sub-header').removeClass('hidden');

		// Hide last selected sub header except current selected element
		$('.containSub').not(this).children('.first').removeClass('hidden');
		$('.containSub').not(this).children('.second').addClass('hidden');
		$('.containSub').not(this).next().addClass('hidden');
	});

	var hideSubHeader = function() {
		$('.containSub').children('.first').removeClass('hidden');
		$('.containSub').children('.second').addClass('hidden');
		$('.containSub').next().addClass('hidden');
		$('.sub-header').addClass('hidden');
	}

	$(document).click(function() {
		hideSubHeader();
	});

	$('.htcLink').hover(function() {
		hideSubHeader();
	});


	// Mobile action
	$('.mcontainSub').click(function() {
		if ($(this).children('.first').hasClass('hidden')) {
			$(this).children('.first').removeClass('hidden');
			$(this).children('.second').addClass('hidden');
			$(this).next().addClass('hidden');
		} else {
			$(this).children('.first').addClass('hidden');
			$(this).children('.second').removeClass('hidden');
			$(this).next().removeClass('hidden');
		}
	});

	$('.menu').on('click', function() {
		if ($(this).children('span:first-child').hasClass('hidden')) {
			$(this).children('span:first-child').removeClass('hidden');
			$(this).children('span:last-child').addClass('hidden');
			$('.mobileHeader').addClass('hidden').removeClass('absolute');
		} else {
			$(this).children('span:first-child').addClass('hidden');
			$(this).children('span:last-child').removeClass('hidden');
			$('.mobileHeader').addClass('absolute').removeClass('hidden');
		}
	});
</script>