<?php /* Template Name: FormatPage Template */ ?>
<?php get_header(); ?>
<?php

$layout = array(
    "intro"         => "intro_block",
    "module"        => "module_block",
    "range"         => "range_block",
    "brochure"      => "brochure",
    "seller"        => "sellers_block",
    "vertical"      => "vertical_slider",
    "newsletter"    => "newsletter",
    "getintouch"    => "getintouch"
);

foreach ($layout as $section => $content) {
    get_template_part('templates/module/content', $content, array(
        "step_owner" => 'format',
        "map_owner" => 'format',
        "seller_owner" => 'format',
        "vertical_owner" => 'format',
        "newsletter_owner" => 'format',
        "brochure_owner" => 'format',
        "intro_bottom" => 'format',
        "getin_bottom" => false,
    ));

    if (str_contains($section, "parts"))
        get_template_part('templates/parts/format', $content);
}
?>
<?php get_footer(); ?>
