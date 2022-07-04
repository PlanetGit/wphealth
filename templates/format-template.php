<?php /* Template Name: FormatPage Template */ ?>
<?php get_header(); ?>

<?php
global $property;
$property = array(
    "introblock_owner" => 'format',
    "module_owner" => 'format',
    "seller_owner" => 'format',
    "vertical_owner" => 'format',
    "newsletter_owner" => 'format',
    "brochure_owner" => 'format',
    "intro_bottom" => 'format',
    "getin_owner" => 'format',
);
?>

<div class="main relative center" role="main">

    <?php while (have_posts()) : the_post(); ?>

        <?php the_content(); ?>

    <?php endwhile; ?>

</div>

<?php get_footer(); ?>