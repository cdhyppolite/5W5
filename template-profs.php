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

<main class="site__main">
   <section class="unProf">
      <h1 class="unProf__titre"><?php the_title() ?></h1>

      <div class="unProf__infos">
            <!-- Afficher la photo de l'enseignant -->
            <img src="<?php if (has_post_thumbnail()) { echo get_the_post_thumbnail_url(); } else { echo $imageBlank; } ?>" alt="">
         <div class="unProf__desc">
            <p><?= $description; ?></p>
            <p class="unProf__anciennete">Depuis combien de temps enseignez-vous cette matière ? <?php the_field('annee'); ?></p>
            <p class="unProf__expertise">Quel est votre domaine d'expertise (en TIM et/ou ailleurs) ?  <?php the_field('expertise'); ?></p>
            <p class="unProf__outils">Quels sont vos outils de prédilection pour transmettre cette matière (logiciels, concepts, philosophie, etc.)? <?php the_field('outils'); ?></p>
            <p class="unProf__interieur_TIM">À l'intérieur de TIM, y a-t-il un ou des projets desquels vous êtes particulièrement fier/fière? Lesquels? <?php the_field('interieur_TIM'); ?></p>
            <p class="unProf__exterieur_TIM">En dehors de TIM, y a-t-il ou ou des projets desquels vous êtes particulièrement fier/fière ? Lesquels? <?php the_field('exterieur_TIM'); ?></p>
            <p class="unProf__passion">Qu'est-ce qui vous passionne particulièrement dans le multimédia? <?php the_field('passion'); ?></p>
            <p class="unProf__matiere_preferee">Votre matière préférée à enseigner? <?php the_field('matiere_preferee'); ?></p>
            <p class="unProf__matiere_difficile">La matière pour laquelle vous n’avez aucune compétence ? <?php the_field('matiere_difficile'); ?></p>
            <p class="unProf__one_liner">Si vous étiez un personnage de fiction, quel serait votre « one-liner »? <?php the_field('one_liner'); ?></p>
         </div>
      </div>
   </section>
</main>

<?php get_footer(); ?>