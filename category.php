<!-- Page pour afficher la liste des profs et des projets -->
<?php get_header();
    $imageBlank = get_bloginfo('template_directory')."/images/blank.jpg"; //Image par défault
    $nomCategorie = get_queried_object() -> name;
    $count =0;
    $isPageProjet = is_category('projets');
?>
<main class="site__main">
    <section class="listeProfs">
        <h2 class="listeProfs__titre">Liste <?= $nomCategorie; ?></h2>

        <?php if ($isPageProjet) : ?>
            <input type="checkbox" id="chk-projets">
            <label for="chk-projets" class="btn-projets">
                <div class="btn-projets__enfant">Affichage en grille</div>
            </label>
        <?php endif; ?>

        <div class="listeProfs__liste">

            <?php //Début boucle ?>
            <?php if (have_posts()):
            while (have_posts()): the_post();
            $titre = get_the_title(); $count++;?>

            <?php //Afficher les infos ?>
            <a href="<?= get_permalink(); ?>" class="prof" style="animation-delay:-<?= $count*3; ?>s;">
                    <div class="prof__img">
                        <?php //Afficher l'image ?>
                        <img src="<?= (has_post_thumbnail()) ? get_the_post_thumbnail_url() : $imageBlank; ?>" alt="">
                    </div>
                <div class="prof__texte">
                    <h3 class="prof__titre"><?= $titre; ?></h3>
                </div>
            </a>

                <?php endwhile ?>
            <?php endif ?>
            <?php //Fin boucle ?>
            
        </div>
    </section>
</main>
<?php if ($isPageProjet) : ?>
    <style>
        .prof {
            animation-duration: <?=$count*3; ?>s;
        }
    </style>
<?php endif; ?>
<?php get_footer() ?>