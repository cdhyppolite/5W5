<?php get_header(); ?>
<main class="site__main">
    <h1>Résultat de la recherche: « <i class="recherche__mot"><?= $_GET['s']; ?></i> »</h1>
    <?php if (have_posts()):
        while (have_posts()): the_post(); ?>

        <article class="recherche__article">
            <?php /* Titre */ ?>
            <?php if (in_category('cours')) : ?>
                <?php $titreFiltreCours = substr(get_the_title(), 3, -6); ?>
                <h3 class="cours__titre" title="Voir la description complète"><a target="popup" onclick="window.open('<?= get_permalink(); ?>','popup','width=600,height=900'); return false;"><?= $titreFiltreCours; ?></a> </h3>
            <?php else: ?>
                <h3 class="cours__titre"> <a href="<?= get_permalink(); ?>"> <?= the_title(); ?> </a></h3>
            <?php endif ?>

            <?php if (get_the_content() !="") : ?>
                <p><?= wp_trim_words(get_the_content(),20, " ...") ?></p>
            <?php endif; ?>

        </article>

        <?php endwhile ?>

    <?php else: ?>
        <h3 class="cours__titre"> Aucun résultat trouvé...</h3>
    <?php endif ?>
</main>
<?php get_footer(); ?>