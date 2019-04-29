<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, width=device-width">
    <?php if (is_post_type_archive("portfolio")):?>
        <title>portfolio</title>
    <?php else:?>
    <title><?= get_the_title(); ?></title>
    <?php endif;?>
<?php wp_head();?>
</head>
<body class="body_overflow_hidden app">
<div class="loader">
    <div class="loader__spinner loader__spinner_egg"></div>
</div>
