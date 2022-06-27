<?php /* Template Name: Products Template */ ?>
<?php get_header(); ?>
<?php
    $layout = array(
        "home" => "block"
    );

    foreach ($layout as $section => $content) {
        get_template_part('templates/module/content', $content);    
    }
?>
<?php get_footer(); ?>
