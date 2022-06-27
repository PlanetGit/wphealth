<?php /* Template Name: Portal Template */ ?>
<?php get_header(); ?>
<?php
    $layout = array(
        "intro" => "intro_block",
        "slider" => "formats_slider",
    );

    foreach ($layout as $section => $content) {
        get_template_part('templates/module/content', $content);    
    }
?>
<?php get_footer(); ?>
