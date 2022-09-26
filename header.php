<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= get_bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body>
    <header class="entete">
        
        <a href="<?= esc_url( home_url( '/' ) ); ?>" rel="home">
            <h1 class="entete_principal"><?= get_bloginfo('name'); ?></h1>
        </a>
    </header>