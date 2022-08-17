<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Freaks</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/searchbar.css" rel="stylesheet">
<!--    <link href="css/animista.css" rel="stylesheet">-->
    <link href="favori.ico" rel="icon" type="image/x-icon">
</head>
<body>
<div class="title_site">
    <span>F</span><span>R</span><span>E</span><span>A</span><span>K</span><span>S</span>
</div>
<?php
$_GET["active"] = 0;
include_once("pages/functions.php");
include_once("searchbar.php");
include_once ("menu.php");
include_once("pages/compo_carousel.php");
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>
<script src="js/carousel.js" type="text/javascript"></script>
<script src="js/menu.js" type="text/javascript"></script>
</body>
</html>