<?php

/**
 * Displays the site header.
 *
 * @package WordPress
 * @subpackage wphealth
 */

?>

<div class="relative w-full md:grid grid-cols-2 px-8 py-20">
    <div>
        <a href="/">
            <img alt="Workflow" class="h-8 w-auto sm:h-10" src="<?= the_field('footer_logo', 'option') ?>">
        </a>
        <div class="mt-16 md:pr-32">
            <?php if (get_field('newsletter_active', 'option')) : ?>
                <span>
                    <svg width="62" height="30" viewBox="0 0 62 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M55.024 26.723C58.8166 26.723 61.8912 23.6011 61.8912 19.7501C61.8912 15.8991 58.8166 12.7772 55.024 12.7772C51.2313 12.7772 48.1567 15.8991 48.1567 19.7501C48.1567 23.6011 51.2313 26.723 55.024 26.723Z" fill="black" />
                        <path d="M17.4134 25.2927C18.5753 26.2516 20.0474 26.8383 21.6527 26.8743C25.6038 26.9636 28.8572 23.6726 28.7863 19.6608C28.7179 15.8078 25.6209 12.7065 21.8103 12.7065C20.128 12.7065 18.5862 13.3107 17.3816 14.3167C15.896 15.5572 13.7568 15.5324 12.2639 14.3006C11.102 13.3417 9.62989 12.7549 8.02456 12.7189C4.07355 12.6321 0.820132 15.9219 0.889769 19.9337C0.958185 23.7867 4.05522 26.888 7.86574 26.888C9.54803 26.888 11.0911 26.2838 12.2957 25.2766C13.78 24.0361 15.9205 24.0609 17.4122 25.2927H17.4134Z" fill="black" />
                        <path d="M40.5092 4.93053L30.7992 14.7899C28.1174 17.513 28.1172 21.9277 30.7988 24.6506C33.4804 27.3734 37.8283 27.3732 40.5101 24.6501L50.2201 14.7908C52.9019 12.0677 52.9021 7.65292 50.2206 4.93009C47.539 2.20726 43.1911 2.20746 40.5092 4.93053Z" fill="black" />
                    </svg>
                </span>
                <h3 class="htcH3SubTitle mt-4 mb-6">Newsletter Signup</h3>
                <form action="#">
                    <div class="flex justify-between border-b border-black">
                        <input type="email" name="newsletter_email" id="newsletter_email" class="outline-none bg-htcGrey" placeholder="Email Address">
                        <input class="rounded-full border border-black px-6 uppercase mb-2 bg-white hover:bg-black hover:text-white" type="submit" value="Submit">
                    </div>
                </form>
            <?php endif; ?>
            <div class="md:flex w-full justify-between grid grid-cols-3 mt-16 gap-2">
                <?php if (have_rows('accreditations', 'option')) : ?>
                    <?php while (have_rows('accreditations', 'option')) : the_row(); ?>
                        <img alt="accreditation" src="<?php the_sub_field('accreditation'); ?>">
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="relative grid grid-cols-3 mt-16 md:mt-0">
        <div>
            <h2 class="uppercase htcH5Title">Site Map</h2>
            <div class="mt-4 grid">
                <?php if (have_rows('site_map_links', 'option')) : ?>
                    <?php while (have_rows('site_map_links', 'option')) : the_row(); ?>
                        <a class="htcFooterLink" href="/<?php the_sub_field('page_url'); ?>"><?php the_sub_field('link_title'); ?></a>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="mt-12">
                <h2 class="uppercase htcH5Title">Follow Us</h2>
                <div class="flex justify-between mt-4 md:w-3/5">
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
            </div>
        </div>
        <div>
            <h2 class="uppercase htcH5Title">More</h2>
            <div class="mt-4 grid">
                <?php if (have_rows('more', 'option')) : ?>
                    <?php while (have_rows('more', 'option')) : the_row(); ?>
                        <a class="htcFooterLink" href="/<?php the_sub_field('page_url'); ?>"><?php the_sub_field('link_title'); ?></a>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
        <div>
            <?php
                $contact = get_field('contact', 'option');
            ?>
            <h2 class="uppercase htcH5Title">Contact</h2>
            <p class="mt-6"><?= $contact['address'] ?></p>
            <p class="mt-6"><?= $contact['phone_number'] ?></p>
            <p><?= $contact['email'] ?></p>
            <p class="mt-6"><?= $contact['company_info'] ?></p>
        </div>
    </div>
</div>