<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= get_bloginfo('name'); ?></title>
    <!-- Police Last Enter -->
    <link rel="preload" href="<?php echo (get_bloginfo('template_directory')."/fonts/LasEnterPersonalUseOnly.woff2") ?>" as="font" type="font/woff2" crossorigin>
    <!-- Police Neon Blitz -->
    <link rel="preload" href="<?php echo (get_bloginfo('template_directory')."/fonts/Neonblitz.woff2") ?>" as="font" type="font/woff2" crossorigin>
    <!-- Police Neon Sans -->
    <link rel="preload" href="<?php echo (get_bloginfo('template_directory')."/fonts/NeonSans.woff2") ?>" as="font" type="font/woff2" crossorigin>
    <!-- Police Lobster -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lobster">
    <?php wp_head(); ?>
</head>

<body <?php body_class("site"); ?>>
    <header class="site__header">
        <a class="site__header__titre" href="<?= esc_url( home_url( '/' ) ); ?>" rel="home">
            <h1 class="header__principal"><?= get_bloginfo('name'); ?></h1>
            <h6 class="header__secondaire"> <?php echo (get_bloginfo('description', 'display')); ?> </h6>
        </a>
    </header>
    
    <!-- Menu avec la liste des cours -->
<?php include('inclusions/menuBarreCours.php');?>