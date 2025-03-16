<!DOCTYPE html>
<html lang=<?php language_attributes() ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head()?>
</head>
<body>

    <header class="header">
        <div class="container navbar">
            <div class="logo">
                <img src="<?php echo get_template_directory_uri()?>/img/logo.svg" alt="logo">
            </div>
            <?php
            $args = array(
                'theme_location' => 'main-menu',
                "container" => "nav",
                "container_class" => "main-menu"
            );

            wp_nav_menu($args)
        ?>
        </div>

    </header>