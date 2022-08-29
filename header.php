<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thème de base</title>
    <?php wp_head(); ?>
</head>
<body>
    <header class="entete">
        <h1 class="entete_principal"><?= get_bloginfo('name'); ?></h1>
    </header>