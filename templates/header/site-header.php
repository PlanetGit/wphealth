<?php

/**
 * Displays the site header.
 *
 * @package WordPress
 * @subpackage wphealth
 */

?>

<header id="header" class="z-10 relative header-effect-shrink">
	<div class="w-full mx-auto py-6">
		<nav class="relative flex items-center justify-between sm:h-10 px-4">
			<div class="flex items-center flex-grow flex-shrink-0 lg:flex-grow-0">
				<div class="flex items-center justify-between w-full md:w-auto px-4 md:mx-0">
					<a href="#">
						<span class="sr-only">HTCHealth</span>
						<img alt="Workflow" class="h-8 w-auto sm:h-10" src="<?= the_field('header_logo', 'option') ?>">
					</a>
					<div class="flex items-center md:hidden">
						<button type="button">
							<span class="sr-only">Open main menu</span>
							<!-- Heroicon name: outline/menu -->
							<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
								<circle cx="16" cy="16" r="15.5" fill="white" stroke="black" />
								<path d="M26.6978 16.2461L5.00006 16.2461" stroke="black" />
								<path d="M15.8486 27.6978L15.8486 6.00006" stroke="black" />
							</svg>
						</button>
					</div>
				</div>
			</div>
			<div class="hidden md:flex md:ml-10 md:pr-4 md:space-x-8">
				<?php if (have_rows('links', 'option')) : ?>
					<?php while (have_rows('links', 'option')) : the_row(); ?>
						<a href="/<?php the_sub_field('link_url'); ?>" class="htcLink">
							<span><?php the_sub_field('link_title'); ?></span>
							<?php if (have_rows('sub_link')) : ?>
								<img class="ml-2" src="<?= get_template_directory_uri() . '/assets/images/plus.svg' ?>" alt="plus" width="18" height="18">
							<?php endif; ?>
						</a>
					<?php endwhile; ?>
				<?php endif; ?>
				<a href="#" class="enquiry">Enquiry Now</a>
			</div>
		</nav>
	</div>
</header>