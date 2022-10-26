<?php get_header();
    $imageBlank = get_bloginfo('template_directory')."/images/blank.jpg";
    $nomCategorie = get_queried_object() -> name;
?>
<main class="site__main">
    <section class="listeProfs">
        <h2 class="listeProfs__titre">Liste <?= $nomCategorie; ?></h2>
        <div class="listeProfs__liste">

            <?php if (have_posts()):
                    while (have_posts()): the_post();?>
            <?php $nomProf = get_the_title(); ?>

            <article class="prof">
                <a href="<?= get_permalink(); ?>">
                    <div class="prof__img">
                        <img src="<?php if (has_post_thumbnail()) { echo get_the_post_thumbnail_url(); } else { echo $imageBlank; } ?>" alt="">
                    </div>
                </a>
                <div class="prof__texte">
                    <h3 class="prof__titre"><?= $nomProf; ?></h3>
                </div>
            </article>

                <?php endwhile ?>
            <?php endif ?>
        </div>
    </section>
</main>
<?php get_footer() ?>