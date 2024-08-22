<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <?php wp_head() ?>

</head>

<body>
    <div class="principal-header">
        <img class="logo" src="http://localhost:8888/Sites/wordpress/wp-content/uploads/2024/08/aquakids-logo.png" alt="">
        <?php wp_nav_menu(array('theme_location' => 'header')); ?>
    </div>