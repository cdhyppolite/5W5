<form action="<?= get_home_url('/') ?>" class="recherche" method="get">

    <input type="text" name="s" placeholder="Recherche..." class="recherche__input" value="<?php if (isset($_GET['s'])) {echo $_GET['s'];} ?>">
    <button class="recherche__bouton">
        <div></div>
    </button>
</form>