<div class="login-menu">
    <div class="category">Catégories : <span class="cat_title"><?= category_selected($_GET["active"]) ?></span></div>
    <div class="container-secondary">
        <div class="searchbar">
            <?php
            $path="";
            if ($GLOBALS['root']) {
                $path = "pages/";
            }
            include_once($path . "compo_searchbar.php");
            ?>
        </div>
        <div class="login-menu-container">
            <?php include("compo_logmenu.php"); ?>
        </div>
    </div>
</div>