<!-- Page contenant les infos d'un enseignants -->
<?php
/**
 * Template Name: Projet
 * Template Post Type: post
 * @package WordPress
 * @subpackage e4_5w5
 */
    get_header();
    $description = get_the_content();
    $imageBlank = get_bloginfo('template_directory')."/images/blank.jpg";
?>

<main class="site__main"><!-- style="background-color: <?php the_field('couleur'); ?>;" -->
   <section class="unProf">
      <h1 class="unProf__titre"><?php the_title() ?></h1>

      <div class="unProf__infos">
            <!-- Afficher la photo de l'enseignant -->
            <img src="<?php if (has_post_thumbnail()) { echo get_the_post_thumbnail_url(); } else { echo $imageBlank; } ?>" alt="">
         <div class="unProf__desc">
            <p><?= $description; ?></p>
            <p class="unProf__auteur">Auteur: <?php the_field('auteur'); ?></p>
            
            <?php if (get_field('logiciel') != "") : ?>
               <p class="unProf__Logiciel">Réalisé avec: <?php the_field('logiciel'); ?></p>
            <?php endif; ?>

            <?php if (get_field('cours') != "") : ?>
               <a target="popup" onclick="window.open('<?php the_field('cours'); ?>','popup','width=600,height=900'); return false;"> <?php the_field('nom_du_cours'); ?> </a></p>
            <?php endif; ?>

         </div>
      </div>
   </section>
</main>

<?php get_footer(); ?>