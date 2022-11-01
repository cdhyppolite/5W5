<?php get_header() ?>
<?php $YT_Params = "autoplay=1&mute=1&loop=1controls=0" ?>

<main class="site__main">
    <iframe width="1280" height="720" 
        src="https://www.youtube.com/embed/YOo92SwTZEs?<?= $YT_Params; ?>">
    </iframe>

            <p>Bienvenu sur le site du collège de Maisonneuve!</p>
            
        </div>
</main>
<?php get_footer() ?>