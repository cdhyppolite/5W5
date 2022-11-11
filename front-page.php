<?php get_header() ?>
<!-- Paramètre de l'url de la vidéo YT -->
<?php $YT_Params = "autoplay=1&mute=1&loop=1controls=0" ?>

<main class="site__main">
    <!-- Afficher la vidéo -->
    <iframe width="1280" height="720" 
        src="https://www.youtube.com/embed/YOo92SwTZEs?<?= $YT_Params; ?>">
    </iframe>
    <p>Bienvenu sur le site du collège de Maisonneuve!</p>
</main>
<?php get_footer() ?>