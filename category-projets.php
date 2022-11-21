<!-- Page pour afficher la liste des profs et des projets -->
<?php get_header();
    $imageBlank = get_bloginfo('template_directory')."/images/blank.jpg"; //Image par défault
    $nomCategorie = get_queried_object() -> name;
    $count =0;
?>
<main class="site__main">
    <section class="listeProjets">
        <h2 class="listeProfs__titre">Liste <?= $nomCategorie; ?></h2>
        <input type="checkbox" id="chk-projets">
        <label for="chk-projets" class="btn-projets">
            <div>Changer l'affichage</div>
        </label>
        
        <div class="listeProjets__liste">

            <?php /* Début boucle */ ?>
            <?php if (have_posts()):
            while (have_posts()): the_post();
            $titre = get_the_title();  $count++?>


            <article class="projet" style="animation-delay:-<?= $count; ?>s;">
                <div class="projet__texte">
                    <h3 class="projet__titre"><?= $titre; ?></h3>
                </div>
                <a href="<?= get_permalink(); ?>">
                    <div class="projet__img">
                        <img src="<?php if (has_post_thumbnail()) { echo get_the_post_thumbnail_url(); } else { echo $imageBlank; } ?>" alt="">
                    </div>
                </a>
            </article>            

                <?php endwhile ?>
            <?php endif ?>
            <?php /* Fin boucle */ ?>
            
        </div>
    </section>
</main>
<style>
    .projet {
        animation-duration: <?= $count; ?>s;
    }
</style>
<?php get_footer() ?>