<!-- Page pour afficher la liste des profs et des projets -->
<?php get_header();
    $imageBlank = get_bloginfo('template_directory')."/images/blank.jpg"; //Image par défault
    $nomCategorie = get_queried_object() -> name;
?>
<main class="site__main">
    <section class="listeProfs">
        <h2 class="listeProfs__titre">Liste <?= $nomCategorie; ?></h2>
        <div class="listeProfs__liste">

            <!-- Début boucle -->
            <?php if (have_posts()):
            while (have_posts()): the_post();
            $titre = get_the_title(); ?>

            <!-- Afficher les infos -->
            <article class="prof">
                <a href="<?= get_permalink(); ?>">
                    <div class="prof__img">
                        <!-- Afficher l'image -->
                        <img src="<?php if (has_post_thumbnail()) { echo get_the_post_thumbnail_url(); } else { echo $imageBlank; } ?>" alt="">
                    </div>
                </a>
                <div class="prof__texte">
                    <h3 class="prof__titre"><?= $titre; ?></h3>
                </div>
            </article>

                <?php endwhile ?>
            <?php endif ?>
            <!-- Fin boucle -->
            
        </div>
    </section>
</main>
<?php get_footer() ?>