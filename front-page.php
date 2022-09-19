<?php get_header() ?>
<main class="principal">
    <h2 class="formation__titre">------- Front page -------</h2>
            <?php if (have_posts()): ?>
                    <?php
                        the_title();
                        the_content();
                    ?>
            <?php endif ?>
            <p>Ceci est la page principal</p>
        </div>
    </section>
</main>
<?php get_footer() ?>