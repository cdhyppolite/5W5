<?php get_header() ?>
<?php $YT_Params = "autoplay=1&mute=1&loop=1controls=0" ?>

<main class="site__main">
    <h2 class="formation__titre">------- FRONT PAGE -------</h2>
            <?php if (have_posts()): ?>
                    <?php the_title(); the_content(); ?>
            <?php endif ?>
            <!-- <p>Ceci est la page principal</p> On voit que le thème du site et les éléments sont liés ensemble-->
            <!-- <iframe width="50%" height="50%" 
                src="https://www.youtube.com/embed/MhC2p4LgOJ8?<?= $YT_Params; ?>">
            </iframe> -->
            
        </div>
    </section>
</main>
<?php get_footer() ?>