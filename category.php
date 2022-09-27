<?php get_header() ?>
<main class="principal">
<section class="formation">
        <h2 class="formation__titre">Liste de cours - Techniques d'intégration multimédia</h2>
        <div class="formation__liste">

        <nav>
            <a href="?">Tout</a>
            <a href="?session=1">Session 1</a>
            <a href="?session=2">Session 2</a>
            <a href="?session=3">Session 3</a>
            <a href="?session=4">Session 4</a>
            <a href="?session=5">Session 5</a>
            <a href="?session=6">Session 6</a>
        </nav>
        
            <?php if (have_posts()):
                    while (have_posts()): the_post(); ?>
                    <?php
                        $titre = get_the_title();
                        $titreFiltreCours = substr($titre, 7, -6);
                        $nbHeures = substr($titre, -6);
                        $codeCours = substr($titre, 0,7);
                        $descCours = get_the_excerpt();
                    ?>
                    
                    <?php
                        if ( (isset($_GET["session"]) && $_GET["session"] == $codeCours[4]) || (!isset($_GET["session"]))) :?>

                        <article style="background-image: url('<?= get_the_post_thumbnail_url(); ?>');"
                            class="formation__cours <?= $etat; ?>">
                            <?php /*the_post_thumbnail('thumbnail'); */?>
                            <h3 class="cours__titre"> <a href="<?= get_permalink(); ?>"> <?= $titreFiltreCours; ?> </a></h3>
                            <!-- <div class="cours__nbre-heure"><?= $nbHeures; ?></div> -->
                            <!-- <p class="cours__code"><?= $codeCours; ?> </p> -->
                            <!-- <p class="cours__desc"> <?= $descCours; ?></p> -->
                        </article>

                    <?php endif ?>
                    
                    <?php endwhile ?>
                <?php endif ?>
        </div>
    </section>
</main>
<?php get_footer() ?>