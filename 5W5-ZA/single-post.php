<?php get_header(); ?>

<main class="site__main"
    style="background-image: url('<?php if (has_post_thumbnail()) { echo get_the_post_thumbnail_url(); } else { echo $imageBlank; } ?>');">
    <!-- Afficher Titre et contenu de l'article -->
    <article class="article__seul">
        <h2><?php the_title(); ?></h2>
        <div class="article__seul__contenu">
            <?php the_content(); ?>
        </div>
    </article>
</main>

<?php get_footer(); ?>