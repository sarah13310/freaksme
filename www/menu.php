
<?php include_once 'pages/functions.php';
exist_active();?>
<div class="menu">
<ul style='text-decoration:none;list-style-type:none;'>
    <li><a href='' style='color:whitesmoke'>Genre</a></li>
    <li><a href=''>&nbsp</a></li>
    <li><a <?= set_Selected($_GET["active"],1)?> href='pages/fantastic.php?active=1'>Fantastique</a></li>
    <li><a <?= set_Selected($_GET["active"],2)?> href='pages/horror.php?active=2'>Horreur</a></li>
    <li><a <?= set_Selected($_GET["active"],3)?> href='pages/scifi.php?active=3'>Sci-fi</a></li>
    <li><a href=''>&nbsp</a></li>
    <li><a <?= set_Selected($_GET["active"],4)?> href='pages/contact.php?active=4' >Nous contacter</a></li>
</ul>

</div>
