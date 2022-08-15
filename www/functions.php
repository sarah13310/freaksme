<?php

function exist_active():bool{

    if (isset($_GET['active'])){
        return true;
    }
    return false;
}


function set_Selected($active,$item):string
{
    $selected = "<a style='color:#95CCC6FF'";


    if ($active == $item) {
        return $selected;
    }
    return '';
}


function create_item_carousel($url_image, $title, $active=false):string
{

    if ($active){
        $text="<div class='carousel-item active'>";
    }
    else
    {
        $text="<div class='carousel-item'>";
    }
    $text.="<div class='col-md-3'>";
    $text.="<div class='card-img'>";
    $text.="<img src ='".$url_image."' class='img-fluid'>";
    $text.="<div class='card-img-overlay'>".$title."</div>";
    $text.="</div></div>";
    return $text;
}

function item_carousel($url, $title, $active=""):string{
    if ($active=="active"){
        $text="<div class='carousel-item active'>\n";
    }
    else{
        $text="<div class='carousel-item'>\n";
    }
    $text.="<div class='col-md-3'>\n";
    $text.="<div class='card'>\n";
    $text.="<div class='card-img'>";
    $text.="<img src='".$url."' class='img-fluid'>";
    $text.="</div>\n";
    $text.="<div class='card-img-overlay'>".$title."</div>\n";
    $text.="</div>";
    $text.="</div>";
    $text.="</div>\n";

    return $text;
}