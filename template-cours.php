<!-- Afficher les infos d'un cours dans un page vide -->
<?php
/**
 * Template Name: Cours solo
 * Template Post Type: post
 * @package WordPress
 * @subpackage e4_5w5
 */
    $imageBlank = get_bloginfo('template_directory')."/images/blank.jpg";
    $titre = get_the_title();
    $titreFiltreCours = substr($titre, 3, -6);
    $codeCours = get_field('code_du_cours');

    $nbHeures = substr($titre,strrpos($titre,'(')+1);
    $nbHeures = substr($nbHeures,0, strrpos($nbHeures,')')-1);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titreFiltreCours; ?> | <?php bloginfo('name'); ?></title>
    <!-- Récupérer le ficher style.css -->
    <link rel="stylesheet" href="<?php echo (get_bloginfo('template_directory')."/style.css"); ?>">
</head>

<!-- Afficher le titre et la description complète du cours -->
<div class="btnBack seul" onclick="window.close()">
    <div></div>
</div>

<main class="site__main__cours">
    <article class="article__seul">
        <h2><?= $titreFiltreCours; ?></h2>
        <div>
            <p>Code du cours: <?= $codeCours; ?></p>
            <p>Nombre d'heures: <?= "$nbHeures Heures"; ?></p>
            
            <?php if (get_field('logiciel') != "") : ?>
                <p>Logiciel(s) / Langage(s) utilisé(s): <?= get_field('logiciel'); ?></p>
            <?php endif; ?>
        </div>
        <div class="article__seul__contenu">
            <?php the_content(); ?>
        </div>
        <div class="cours__solo__img">
            <img src="<?php if (has_post_thumbnail()) { echo get_the_post_thumbnail_url(); } else { echo $imageBlank; } ?>" alt="">
        </div>
    </article>
</main>
</html>