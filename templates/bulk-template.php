<?php /* Template Name: Bulk Template */ ?>
<?php get_header(); ?>
<?php

$layout = array(
    "intro"         => "intro_block",
    "module"        => "module_block",
    "step"          => "step_block",
    "map"           => "map_block",
    "seller"        => "sellers_block",
    "brochure"      => "brochure",
    "getintouch"    => "getintouch",
    "vertical"      => "vertical_slider",
    "nutrition"     => "nutrition_block",
    "partial"       => "partial_descblock",
);

foreach ($layout as $section => $content) {
    get_template_part('templates/module/content', $content, array(
        "step_owner" => 'bulk',
        "map_owner" => 'bulk',
        "seller_owner" => 'bulk',
        "vertical_owner" => 'bulk',
        "brochure_owner" => 'bulk',
        "intro_bottom" => 'bulk',
        "getin_bottom" => false,
    ));

    if (str_contains($section, "parts"))
        get_template_part('templates/parts/bulk', $content);
}
?>
<?php get_footer(); ?>
