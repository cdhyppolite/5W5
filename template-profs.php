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
            <?php //Afficher la photo de l'enseignant ?>
            <img src="<?php if (has_post_thumbnail()) { echo get_the_post_thumbnail_url(); } else { echo $imageBlank; } ?>" alt="">
         <div class="unProf__desc">
            <p class = "unProf__anecdote"><?= $description; ?></p>
            <br> <br>
            <p class="unProf__anciennete">Depuis combien de temps enseignez-vous cette matière ?</p> <p><?php the_field('annee'); ?></p>
            <br>
            <p class="unProf__expertise">Quel est votre domaine d'expertise (en TIM et/ou ailleurs) ?</p> <p><?php the_field('expertise'); ?></p>
            <br>
            <p class="unProf__outil">Quels sont vos outils de prédilection pour transmettre cette matière (logiciels, concepts, philosophie, etc.)?</p> <p><?php the_field('outils'); ?></p>
            <br>
            <p class="unProf__passion">Qu'est-ce qui vous passionne particulièrement dans le multimédia?</p> <p><?php the_field('passion'); ?></p>
         </div>
      </div>
   </section>
</main>

<?php get_footer(); ?>