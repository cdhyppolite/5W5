<?php get_header();
        $count =0; 
        $imageBlank = get_bloginfo('template_directory')."/images/blank.jpg"; ?>
<main class="site__main">
<section class="listeCours">
        <h2 class="listeCours__titre">Liste de cours - Techniques d'intégration multimédia</h2>
        <div class="listeCours__liste">

        <!-- Menu des cours pour les sessions -->
        <nav class="triSession">
            <?php
            //Empêcher l'utilisateur d'écrire n'importe quoi dans la variable session
                if (isset($_GET["session"])) {
                    if (($_GET["session"]<1) || ($_GET["session"]> 6)) {
                        unset($_GET["session"]); // Détruire la vartiable
                    }
                }
            ?>
            <a href="?" class="<?php if (!isset($_GET["session"])) echo "active" ?>">Tous</a>
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
                        <article class="cours">
                        <input type="checkbox" id="cours-btn_<?= $count; ?>">
                            <h3 class="cours__titre" title="Voir la description complète"> <a target="popup" onclick="window.open('<?= get_permalink(); ?>','popup','width=600,height=600'); return false;"> <?= $titreFiltreCours /*. " - ". $count*/; ?> </a></h3>

                            <label for="cours-btn_<?= $count; ?>">
                                <div class="cours__btn" title="En savoir plus"></div>
                            </label>

                            <div class="cours__infos">
                                <div class="cours__infos__haut">
                                        <!-- <div class="cours__nbre-heure"><?= $nbHeures; ?></div> -->
                                    <div class="cours__img">
                                        <img src="<?php if (has_post_thumbnail()) { echo get_the_post_thumbnail_url(); } else { echo $imageBlank; } ?>" alt="">
                                    </div>
                                    <!-- <p class="cours__code"><?= $codeCours; ?> </p> -->
                                    <p class="cours__desc"> <?= $descCours; ?></p>
                                </div>
                                <?php if (get_field('logiciel') != "") : ?>
                                    <p class="cours__logiciel">Logiciel(s) / Langage(s)  utilisé(s): <?= get_field('logiciel'); ?></p>
                                <?php endif; ?>
                            </div>
                            
                        </article>

                    <?php endif ?>
                    
                    <?php endwhile ?>
                <?php endif ?>
        </div>
    </section>
</main>
<?php get_footer() ?>