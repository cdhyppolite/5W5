<?php 
 /* 
 Template Name:Stages
 */
get_header(); 


?>
<main class="site__main _page">
    <!-- Afficher titre et contenu -->
    <h1><?php the_title() ?></h1>
    <Section class="stages">
        <div class="imgStages"> <img src="http://localhost/2022_4w4/wp-content/uploads/2022/11/GrosStage.jpg" alt=""></div>
        <div class="descStages"> <p>Durant votre sixième session, vous devrez participer à un stage de deux mois en entreprise. Encadré par vos enseignants et employeurs, vous aurez l'opportunité de travailler, et d’apprendre dans des compagnies tels que:</p>
        <ul class="listeStage">
            <li><a href="https://www.ubisoft.com/fr-ca/">Ubisoft</a></li>
            <li><a href="https://lg2.com/">LG2</a></li>
            <li><a href="https://bob.ca/fr/">Bob</a></li>
            <li><a href="https://www.valnetinc.com/fr/">Valnet</a></li>
            <li><a href="https://www.bhvr.com/fr/">Behaviour Interactive</a></li>
        </ul>
    </div>
    </Section>

</main>


<?php get_footer() ?>