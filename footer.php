<?php $logo1 = get_bloginfo('template_directory')."/images/logo-college.svg"; ?>

<label class="boiteTransparent" for="chk-burger"></label>
<footer class="site__footer">
    <div class="site__footer__conteneur">
        <div class="site__footer__logo">
            <a href="https://www.cmaisonneuve.qc.ca" target="_blank">
                <img src="<?= $logo1; ?>" alt="">
            </a>
        </div>
        <div class="site__footer__adresse">
            <h4>Adresse</h4>
            <p>3800 Rue Sherbrooke E, Montréal, QC</p>
            <p>H1X 2A2</p>
            <p>(514) 254-7131</p>
        </div>
        <?php get_sidebar('reseaux_sb'); ?>
        <div class="site__footer__copyright">
            <h2>&copy; <?php echo date("Y"); ?> - TIM Maisonneuve - Tous droits réservés</h2>
        </div>
    </div>
</footer>
</body>
<?php get_search_form(); ?>
<?php wp_footer(); ?>
