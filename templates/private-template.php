<?php /* Template Name: Private Label Template */ ?>
<?php get_header(); ?>
<?php

$layout = array(
    "parts_intro"   => "intro",             
    "sticky"        => "sticky_scroll",     
    "step"          => "step_block",
    "seller"        => "sellers_block",
    "getintouch"    => "getintouch",
    "brochure"      => "brochure",
    "parts_known"   => "known",
    "clients"       => "clients_slider",
    "nutrition"     => "nutrition_block",
    "partial"       => "partial_descblock",
);

foreach ($layout as $section => $content) {
    get_template_part('templates/module/content', $content, array(
        "clients_slider_bottom" => true,
        "brochure_owner" => 'private',
        "step_owner" => 'private',
    ));

    if (str_contains($section, "parts"))
        get_template_part('templates/parts/private', $content);
}
?>
<?php get_footer(); ?>
