<?php include_once 'functions.php' ?>
<div class='container text-center my-3'>
    <div class='row mx-auto my-auto justify-content-center'>
        <div id='recipeCarousel' class='carousel slide' data-bs-ride='carousel'>
            <div class='carousel-inner' role='listbox'>
                <?= item_carousel("../img/freaks2.jpg", "Freaks", "active"); ?>
                <?= item_carousel("../img/grudge_1.jpg", "The Gudge"); ?>
                <?= item_carousel("../img/Fright-Night-1985.jpg", "Vampire vous avez dit vampire?"); ?>
                <?= item_carousel("../img/the_blob.jpg", "The Blob"); ?>
                <?= item_carousel("../img/constantine.jpg", "Constantine"); ?>
                <?= item_carousel("../img/thor3.jpg", "Thor Love and Thunder"); ?>
            </div>
            <a class='carousel-control-prev bg-transparent w-aut' href='#recipeCarousel' role='button'
               data-bs-slide='prev'>
                <span class='carousel-control-prev-icon' aria-hidden='true'></span>
            </a>
            <a class='carousel-control-next bg-transparent w-aut' href='#recipeCarousel' role='button'
               data-bs-slide='next'>
                <span class='carousel-control-next-icon' aria-hidden='true'></span>
            </a>
        </div>
    </div>
</div>
</div>