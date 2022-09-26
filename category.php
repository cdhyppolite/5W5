<?php get_header() ?>
<main class="principal">
<section class="formation">
        <h2 class="formation__titre">Liste de cours - Techniques d'intégration multimédia</h2>
        <div class="formation__liste">

        <nav>
            <a href="?session=0">Tout</a>
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
                    //----Afficher Bordu cours-----
                    $etat = "a-faire";
                    $reussi = array("1J1", "2J2", "3J3", "1W1","2W2","3W3","1M1","1M2","2M3","2M4", "3M5","3C1",);
                    $encours = array("4J4","4PA","4W4","4C2",);
                    if (in_array(substr($codeCours, 4,3), $reussi)) { 
                        $etat = "reussi";
                    } else if (in_array(substr($codeCours, 4,3), $encours)) { 
                        $etat = "en-cours";
                    }
                    //-----------------------------
                ?>
                
                
                <?php
                    if ( (isset($_GET["session"]) && $_GET["session"] == $codeCours[4]) || (!isset($_GET["session"]) || $_GET["session"] == 0 )) :?>

                <article style="background-image: url('<?= get_the_post_thumbnail_url(); ?>');"
                    class="formation__cours <?= $etat; ?>">
                    <?php /*the_post_thumbnail('thumbnail'); */?>
                    <h3 class="cours__titre"> <a href="<?= get_permalink(); ?>"> <?= $titreFiltreCours; ?> </a></h3>
                    <!-- <div class="cours__nbre-heure"><?= $nbHeures; ?></div> -->
                    <!-- <p class="cours__code"><?= $codeCours; ?> </p> -->
                    <!-- <div class="cours_etat"></div> -->
                    <!-- <p class="cours__desc"> <?= $descCours; ?></p> -->
                </article>

                <?php endif ?>

                
                    <?php endwhile ?>
                <?php endif ?>
        </div>
    </section>
</main>
<?php get_footer() ?>