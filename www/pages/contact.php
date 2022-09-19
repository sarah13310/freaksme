<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Freaksme- nous contacter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="../css/help.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <link href="../css/searchbar.css" rel="stylesheet">
    <link href="../css/google.css" rel="stylesheet">
</head>
<body>
<?php
$_GET['active'] = 4;
$GLOBALS["root"] = false;
require_once("functions.php");
include_once ("compo_navbar.php");
include_once("main_menu.php");
include_once("compo_help.php");
include_once ("contact_mail.php");
include_once ("compo_google.php");

?>
<script src="../js/menu.js" type="text/javascript"></script>
<script src="../js/help.js" type="text/javascript"></script>

</body>
</html>
