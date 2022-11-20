<section class="site__barre">
    <input type="checkbox" id="chk-burger">

        <label  class="burgerMenuParent" for="chk-burger" id="burger">
            <div class="ligne"></div>
            <div class="ligne"></div>
            <div class="ligne"></div>
        </label>

    <?php wp_nav_menu(
        array("menu"=>"principal",
        "container"=>"nav")
    ); ?>
    
</section>