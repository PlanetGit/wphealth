<?php /* Template Name: Home Template */ ?>
<?php get_header(); ?>

<?php
global $property;
$property = array(
    "introblock_owner" => 'home',
    "step_owner" => 'home',
    "newsletter_owner" => 'home',
);
?>

<div class="main relative center" role="main">

    <?php while (have_posts()) : the_post(); ?>

        <?php the_content(); ?>

    <?php endwhile; ?>

</div>

<?php get_footer(); ?>