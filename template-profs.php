<!-- Page contenant les infos d'un enseignants -->
<?php
/**
 * Template Name: Profs
 * Template Post Type: post
 * @package WordPress
 * @subpackage e4_5w5
 */
    get_header();
    if (have_posts()):
    //$description = get_the_content();
    $imageBlank = get_bloginfo('template_directory')."/images/blank.jpg";
?>

<main class="site__main">
   <section class="unProf">
      <h1 class="unProf__titre"><?php the_title() ?></h1>
      <br>
      <div class="unProf__infos">
            <!-- Afficher la photo de l'enseignant -->
           <!-- <img src="<!?php if (has_post_thumbnail()) { echo get_the_post_thumbnail_url(); } else { echo $imageBlank; } ?>" alt=""> -->
           
           <?php the_post_thumbnail('medium'); ?>
         <div class="unProf__desc">
            <p><?php the_content(); ?></p></div>
            <br>
            <div class="questions">
            <p class="unProf__anciennete">Depuis combien de temps enseignez-vous cette matière ?</p> <p><?php the_field('annee'); ?></p>
            <br>
            <p class="unProf__expertise">Quel est votre domaine d'expertise (en TIM et/ou ailleurs) ?</p> <p> <?php the_field('expertise'); ?></p>
            <br>
            <p class="unProf__outils">Quels sont vos outils de prédilection pour transmettre cette matière (logiciels, concepts, philosophie, etc.)? </p> <p> <?php the_field('outils'); ?></p>
            <br>
            <p class="unProf__passion">Qu'est-ce qui vous passionne particulièrement dans le multimédia? </p> <p> <?php the_field('passion'); ?></p>
         </div>
      </div>
   </section>
</main>
<?php endif ?>
<?php get_footer(); ?>