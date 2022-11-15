<?php get_header(); ?>
<main class="site__main">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
            <?php
                // Titre du cours
                $mon_titre = get_the_title();
                $mon_titre_filtre = substr($mon_titre,8);
                $mon_code = substr($mon_titre,0,7);
                $mon_titre_filtre = substr($mon_titre_filtre, 0, strrpos($mon_titre_filtre,'('));
                // Durée du cours
                $ma_duree = substr($mon_titre,strrpos($mon_titre,'(')+1);
                $ma_duree = substr($ma_duree,0, strrpos($ma_duree,')')-1);
            ?>
                <section class="carte__main">
                    <h3 class="carte__titre"><?= $mon_titre_filtre; ?></h3>
                    <p class="carte__code"><?= $mon_code; ?></p>
                    <p class="carte__duree"><?php echo($ma_duree ." heures"); ?></p>
                    <p class="carte__contenu"><?php echo get_the_excerpt(); ?></p>
                </section>
            <?php endwhile; ?>
        <?php endif; ?>
    </main>
<?php get_footer(); ?>