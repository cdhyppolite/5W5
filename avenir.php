<?php 
 /* 
 Template Name:Avenir
 */
get_header(); 


?>
<main class="site__main _page">
    <!-- Afficher titre et contenu -->
    <h1><?php the_title() ?></h1>

    <Section class="avenir">

    <a href="http://localhost/2022_4w4/universite">
    <div class="conteneur_avenir">
    <div class="blocImg"><img src="http://localhost/2022_4w4/wp-content/uploads/2022/11/inscription-1.png" alt=""></div>
    <div class="blocTxt"> <h2>Universite</h2></div>
    </div>
    </a>

    <a href="http://localhost/2022_4w4/stages">
    <div class="conteneur_avenir">
        <div class="blocImg"><img src="http://localhost/2022_4w4/wp-content/uploads/2022/11/inscription-2.png" alt=""></div>
        <div class="blocTxt"> <h2>Stages</h2></div>
    </div>
    </a>
    
    <a href="http://localhost/2022_4w4/emplois">
    <div class="conteneur_avenir">
    <div class="blocImg"><img src="http://localhost/2022_4w4/wp-content/uploads/2022/11/inscription-3.png" alt=""></div>
        <div class="blocTxt"><h2>Emplois</h2></div>
    </div>
    </a>

    </Section>

</main>


<?php get_footer() ?>