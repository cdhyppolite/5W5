<?php get_header() ?>
<main class="site__main">
<section class="formation">
        <h2 class="formation__titre">Liste de cours - Techniques d'intégration multimédia</h2>
        <div class="formation__liste">

        <nav>
            <a href="?">Tout</a>
            <!-- Boucle -->
            <?php for ($nbSessions = 1; $nbSessions <= 6; $nbSessions++) : ?>
                <a href="?session=<?= $nbSessions; ?>">Session <?= $nbSessions; ?></a>
            <?php endfor; ?>
        </nav>
        
        <?php if (have_posts()):
                    while (have_posts()): the_post(); ?>
                    <?php
                        $titre = get_the_title();
                        $titreFiltreCours = substr($titre, 3, -6);
                        $nbHeures = substr($titre, -6);
                        $codeCours = substr($titre, 0,3);
                        $descCours = get_the_excerpt();
                    ?>
                    
                    <?php
                        if ( (isset($_GET["session"]) && $_GET["session"] == $codeCours[0]) || (!isset($_GET["session"]))) :?>
                        <?php /** style="background-image: url('<?= get_the_post_thumbnail_url(); ?>');" */ ?>
                        <article class="formation__cours">
                            <?php /*the_post_thumbnail('thumbnail'); */?>
                            <h3 class="cours__titre"> <a href="<?= get_permalink(); ?>"> <?= $titreFiltreCours; ?> </a></h3>
                                <?php
                                /**<div class="cours__nbre-heure"><?= $nbHeures; ?></div>
                                <p class="cours__code"><?= $codeCours; ?> </p>
                                <p class="cours__desc"> <?= $descCours; ?></p> */
                                ?>
                        </article>

                    <?php endif ?>
                    
                    <?php endwhile ?>
                <?php endif ?>
        </div>
    </section>
</main>
<?php get_footer() ?>