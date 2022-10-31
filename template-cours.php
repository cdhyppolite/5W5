<?php
/**
 * Template Name: Cours solo
 * Template Post Type: post
 * @package WordPress
 * @subpackage cidw_5w5
 */
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title(); ?></title>
    <link rel="stylesheet" href="<?php echo (get_bloginfo('template_directory')."/style.css"); ?>">
</head>

<main class="site__main__cours">
    <?php if (have_posts()): the_post(); ?>

    <article class="article__seul">
        <h2><?php the_title(); ?></h2>
        <div class="article__seul__contenu">
            <?php the_content(); ?>
        </div>
    </article>

    <?php endif; ?>
</main>
</html>