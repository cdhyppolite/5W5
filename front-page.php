<?php get_header() ?>
<!-- Paramètre de l'url de la vidéo YT -->
<?php $YT_Params = "&loop=1&autoplay=1&mute=1&controls=0" ?>

<main class="site__main">
    <!-- Afficher la vidéo -->
    <iframe class="embed-responsive-item" id="ytplayer" type="text/html" width="1280" height="720"
        src="https://www.youtube.com/embed/EwQ6_gHmx5U?&<?= $YT_Params;?>" frameborder="0" allowfullscreen>
    </iframe>
    <p>Bienvenue sur le site du collège de Maisonneuve!</p>
</main>
<?php get_footer() ?>