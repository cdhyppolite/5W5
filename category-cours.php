<?php
    get_header();
    $count =0;
    $imageBlank = get_bloginfo('template_directory')."/images/blank.jpg";
?>
<main class="site__main">
    <section class="listeCours">
        <h1 class="listeCours__titre">Liste des cours</h1>
        <div class="listeCours__liste">

            <?php // Menu des cours pour les sessions ?>
            <nav class="triSession">
                <?php //Empêcher l'utilisateur d'écrire n'importe quoi dans la variable session
                $nbSessions = array(1,2,3,4,5,6);
                    if ((isset($_GET["session"])) && (!in_array($_GET["session"], $nbSessions))) {
                        unset($_GET["session"]); // Détruire la variable
                    }
                ?>
                <a href="?" <?php if (!isset($_GET["session"])) echo 'class="active"' ?>>Toutes les sessions</a>
                <?php // Boucle ?>
                <?php for ($nbSessions = 1; $nbSessions <= 6; $nbSessions++) : ?>
                <a title="Session <?= $nbSessions; ?>" href="?session=<?= $nbSessions; ?>"
                    <?= (isset($_GET["session"]) && ($_GET["session"]==$nbSessions)) ? 'class="active"' :""; ?>><?= $nbSessions; ?></a>
                <?php endfor; ?>
            </nav>

            <?php if (have_posts()):
                    while (have_posts()): the_post(); $count++?>
            <?php
                $titre = get_the_title();
                $codeCours = substr($titre, 0,3);
                $conditionSession = (isset($_GET["session"]) && $_GET["session"][0] == $codeCours[0]) || (!isset($_GET["session"]));
                $titreFiltreCours = substr($titre, 3, -6);
                $nbHeures = substr($titre, -6);
                $descriptionCours = get_the_excerpt();
            ?>

            <?php if ($conditionSession) :?>
            <article class="cours">
                <input type="checkbox" id="cours-btn_<?= $count; ?>">
                <h3 class="cours__titre" title="Voir la description complète"><a target="popup"
                        onclick="window.open('<?= get_permalink(); ?>','popup','width=600,height=900'); return false;">
                        <?= $titreFiltreCours; ?> </a>
                </h3>

                <label for="cours-btn_<?= $count; ?>">
                    <div class="cours__btn" title="En savoir plus">
                        <div></div>
                    </div>
                </label>

                <div class="cours__infos">
                    <div class="cours__infos__haut">
                        <div class="cours__img">
                            <?php //Afficher l'image ?>
                            <img src="<?= (has_post_thumbnail()) ? get_the_post_thumbnail_url() : $imageBlank; ?>" alt="">
                        </div>
                        <p class="cours__desc"> <?= wp_trim_words($descriptionCours,40); ?></p>
                    </div>
                    <?php if (get_field('logiciel') != "") : ?>
                        <p class="cours__logiciel">Logiciel(s) / Langage(s) utilisé(s): <?= get_field('logiciel'); ?></p>
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