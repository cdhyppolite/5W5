<!-- Page contenant les infos d'un enseignants -->
<?php
/**
 * Template Name: Profs
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
            <p class="unProf__anciennete">Ancienneté: <?php the_field('annee'); ?></p>
            <p class="unProf__expertise">Expertise: <?php the_field('expertise'); ?></p>
            <p class="unProf__outils">Outils: <?php the_field('outils'); ?></p>
            <p class="unProf__interieur_TIM">Projets intérieur école: <?php the_field('interieur_TIM'); ?></p>
            <p class="unProf__exterieur_TIM">Projets extérieur école: <?php the_field('exterieur_TIM'); ?></p>
            <p class="unProf__passion">Passion: <?php the_field('passion'); ?></p>
            <p class="unProf__matiere_preferee">Matière favorite: <?php the_field('matiere_preferee'); ?></p>
            <p class="unProf__matiere_difficile">Matière moins appréciée: <?php the_field('matiere_difficile'); ?></p>
            <p class="unProf__one_liner">one_liner: <?php the_field('one_liner'); ?></p>
         </div>
      </div>
   </section>
</main>

<?php get_footer(); ?>