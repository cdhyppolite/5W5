<?php get_header(); ?>
<main class="site__main">
    <h1>Résultat de la recherche: « <i class="recherche__mot"><?= $_GET['s']; ?></i> »</h1>
    <?php if (have_posts()):
        while (have_posts()): the_post(); ?>

        <article class="site__main__recherche">
            <h3 class="cours__titre"> <a href="<?= get_permalink(); ?>"> <?= the_title(); ?> </a></h3>
            <p><?= wp_trim_words(get_the_content(),20, " ...") ?></p>
        </article>

        <?php endwhile ?>

    <?php else: ?>
        <h3 class="cours__titre"> Aucun résultat trouvé...</h3>
    <?php endif ?>
</main>

<?php get_footer(); ?>