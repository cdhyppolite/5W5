<section class="site__barre">
    <input type="checkbox" id="chk-burger" autocomplete="off">

    <div class="burgerMenuParent">
        <label for="chk-burger" id="burger">
            <div class="ligne"></div>
            <div class="ligne"></div>
            <div class="ligne"></div>
        </label>
    </div>
    <div class="btnBack" onclick="history.back()">
        <div></div>
    </div>

    <?php wp_nav_menu(
        array("menu"=>"principal",
        "container"=>"nav")
    ); ?>
    
</section>