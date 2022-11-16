<!-- Page pour afficher la liste des profs et des projets -->
<?php get_header();
    $imageBlank = get_bloginfo('template_directory')."/images/blank.jpg"; //Image par défault
    $nomCategorie = get_queried_object() -> name;
    $count =0;
?>
<main class="site__main">
    <section class="listeProfs listeProjets">
        <h2 class="listeProfs__titre">Liste <?= $nomCategorie; ?></h2>
        <div class="listeProjets__liste">

            <?php /* Début boucle */ ?>
            <?php if (have_posts()):
            while (have_posts()): the_post();
            $titre = get_the_title();  $count++?>


            <!-- <article class="projet" style="animation-delay:-<?= $count; ?>s;">
                <a href="<?= get_permalink(); ?>">
                    <div class="prof__img">
                        <img src="<?php if (has_post_thumbnail()) { echo get_the_post_thumbnail_url(); } else { echo $imageBlank; } ?>" alt="">
                    </div>
                </a>
                <div class="prof__texte">
                    <h3 class="prof__titre"><?= $titre; ?></h3>
                </div>
            </article> -->
            

                <?php endwhile ?>
            <?php endif ?>
            <?php /* Fin boucle */ ?>
            <div class="projet" style="animation-delay:-1s;">PROGRAMADOR</div>
            <div class="projet" style="animation-delay:-2s;">HTML</div>
            <div class="projet" style="animation-delay:-3s;">CSS</div>
            <div class="projet" style="animation-delay:-4s;">JS</div>
            <div class="projet" style="animation-delay:-5s;">GIT</div>
            <div class="projet" style="animation-delay:-6s;">REACT</div>
            <div class="projet" style="animation-delay:-7s;">LÓGICA</div>
            
        </div>
    </section>
</main>
<style>
    .projet {
        /* -webkit-animation-duration: <?= $count*2.5; ?>s; */
        /* -moz-animation-duration: <?= $count*2.5; ?>s; */
        animation-duration: 10s;
        
    }
</style>
<?php get_footer() ?>