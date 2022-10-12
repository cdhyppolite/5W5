<?php get_header();
        $count =0; ?>
<main class="site__main">
<section class="listeCours">
        <h2 class="listeCours__titre">Liste de cours - Techniques d'intégration multimédia</h2>
        <div class="listeCours__liste">

        <nav class="triSession">
            <a href="?" class="<?php if (!isset($_GET["session"])) echo "active" ?>">Tout</a>
            <!-- Boucle -->
            <?php for ($nbSessions = 1; $nbSessions <= 6; $nbSessions++) : ?>
                <a href="?session=<?= $nbSessions; ?>" class="<?= (isset($_GET["session"]) && ($_GET["session"]==$nbSessions)) ? "active" :""; ?>">Session <?= $nbSessions; ?></a>
            <?php endfor; ?>
        </nav>
        
        <?php if (have_posts()):
                    while (have_posts()): the_post(); $count++?>
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
                        <article class="cours">
                        <input type="checkbox" id="cours-btn_<?= $count; ?>">
                            <h3 class="cours__titre"> <a href="<?= get_permalink(); ?>"> <?= $titreFiltreCours /*. " - ". $count*/; ?> </a></h3>

                            <label for="cours-btn_<?= $count; ?>">
                                <div class="cours__btn"></div>
                            </label>

                            <div class="cours__infos">
                                <!-- <div class="cours__nbre-heure"><?= $nbHeures; ?></div> -->
                                <p class="cours__code"><?= $codeCours; ?> </p>
                                <p class="cours__desc"> <?= $descCours; ?></p>
                            </div>
                                
                            <?php /*the_post_thumbnail('thumbnail'); */?>
                        </article>

                    <?php endif ?>
                    
                    <?php endwhile ?>
                <?php endif ?>
        </div>
    </section>
</main>
<?php get_footer() ?>