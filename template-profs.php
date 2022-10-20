<!-- Ajout du fichier template-profs.php -->
<?php
/**
 * Template Name: Profs
 * Template Post Type: post
 * @package WordPress
 * @subpackage cidw_5w5
 */
    get_header();
    $imageBlank = get_bloginfo('template_directory')."/images/blank.jpg"; ?>
?>

<main class="site__main single" style="background-color: <?php the_field('couleur'); ?>;">
   <section class="unProf">
      <h1 class="unProf__titre"><?php the_title() ?></h1>

         <div class="unProf__img">
            <img src="<?php if (has_post_thumbnail()) { echo get_the_post_thumbnail_url(); } else { echo $imageBlank; } ?>" alt="">
         </div>
         <p class="prof_desc"><?php the_field('description'); ?></p>
         <p class="prof__anecdote">Anecdote: <?php the_field('anecdote'); ?></p>
   </section>
</main>

<?php get_footer(); ?>