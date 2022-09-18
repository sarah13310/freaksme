<?php

function exist_active(): bool
{
    if (isset($_GET['active'])) {
        return true;
    }
    return false;
}

function category_selected($item): string
{
    $cat = "";

    if ($item == "0") {
        $cat = "Toutes";
    }
    if ($item == "1") {
        $cat = "Fantastique";
    }
    if ($item == "2") {
        $cat = "Horreur";
    }
    if ($item == "3") {
        $cat = "Sci-fi";
    }
    return $cat;
}

function set_Selected($active, $item): string
{
    $selected = "<a style='color:#95CCC6FF'";

    if ($active == $item) {
        return $selected;
    }
    return '';
}


function create_item_carousel($url_image, $title, $active = false): string
{
    if ($active) {
        $text = "<div class='carousel-item active'>";
    } else {
        $text = "<div class='carousel-item'>";
    }
    $text .= "<div class='col-md-3'>";
    $text .= "<div class='card-img'>";
    $text .= "<img src ='" . $url_image . "' class='img-fluid'>";
    $text .= "<div class='card-img-overlay'>" . $title . "</div>";
    $text .= "</div></div>";
    return $text;
}

function item_carousel($url, $title, $active = ""): string
{
    if ($active == "active") {
        $text = "<div class='carousel-item active'>\n";
    } else {
        $text = "<div class='carousel-item'>\n";
    }
    $text .= "<div class='col-md-3'>\n";
    $text .= "<div class='card'>\n";
    $text .= "<div class='card-img'>";
    $text .= "<img src='" . $url . "' class='img-fluid'>";
    $text .= "</div>\n";
    $text .= "<div class='card-img-overlay'>" . $title . "</div>\n";
    $text .= "</div>";
    $text .= "</div>";
    $text .= "</div>\n";

    return $text;
}


function generate_menu_links(): void
{
    $index = 0;
    $links_menu = [
        "Toutes"=>"index.php",
        "Fantastique" => "fantastic.php?active=1",
        "Horreur" => "horror.php?active=2",
        "Sci-fi" => "scifi.php?active=3",
        "Nous Contacter" => "contact.php?contact=4",
    ];
    $path_root="";
    if ($GLOBALS['root']){
        $path_root="pages/";
    }

    foreach ($links_menu as $name=>$link) {
        if ($index==0){
            echo "<li><a href='$link'>$name</a></li>";
        }
        else{
            echo "<li><a href='$path_root$link'>$name</a></li>";
        }
        $index++;
    }
}
