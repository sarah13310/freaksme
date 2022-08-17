<?php include_once 'pages/functions.php';
exist_active(); ?>
<svg xmlns="http://www.w3.org/2000/svg" style="display:none">
    <symbol xmlns="http://www.w3.org/2000/svg" id="sbx-icon-search-5" viewBox="0 0 40 41">
        <path d="M25.098 27.967c-2.63 2.023-5.925 3.227-9.5 3.227C6.982 31.194 0 24.21 0 15.597S6.983 0 15.597 0s15.597 6.983 15.597 15.597c0 4.106-1.587 7.842-4.18 10.627l1.343 1.344.025-.025c.78-.778 2.043-.775 2.822.004l7.814 7.813c.78.78.78 2.047.004 2.823l-1.88 1.878c-.777.78-2.042.777-2.82-.002l-7.815-7.814c-.78-.78-.78-2.046-.003-2.822l.024-.025-1.43-1.43zm-9.5.627c7.177 0 12.996-5.82 12.996-12.997 0-7.178-5.82-12.998-12.997-12.998C8.42 2.6 2.6 8.42 2.6 15.596c0 7.178 5.82 12.997 12.997 12.997z"
              fill-rule="evenodd"/>
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="sbx-icon-clear-4" viewBox="0 0 20 20">
        <path d="M11.664 9.877l4.485 4.485-1.542 1.54-4.485-4.485-4.485 4.485-1.54-1.54 4.485-4.485-4.485-4.485 1.54-1.54 4.485 4.484 4.485-4.485 1.54 1.542-4.484 4.485zM10 20c5.523 0 10-4.477 10-10S15.523 0 10 0 0 4.477 0 10s4.477 10 10 10z"
              fill-rule="evenodd"
        />
    </symbol>
    <symbol id="filter" height="21" width="21" viewBox="0 0 32 32">
        <path d="M18,28H14a2,2,0,0,1-2-2V18.41L4.59,11A2,2,0,0,1,4,9.59V6A2,2,0,0,1,6,4H26a2,2,0,0,1,2,2V9.59A2,2,0,0,1,27.41,11L20,18.41V26A2,2,0,0,1,18,28ZM6,6V9.59l8,8V26h4V17.59l8-8V6Z"
              fill-rule="evenodd"
        />
    </symbol>
</svg>
<form novalidate="novalidate" onsubmit="return false;" class="searchbox sbx-custom">
    <div role="search" class="sbx-amazon__wrapper">
        <button type="submit" title="Filter votre recherche." class="sbx-custom__filter form_filter">
            <svg role="img" aria-label="Filter">
                <use xlink:href="#filter"></use>
            </svg>
        </button>
        <input type="search" name="search" placeholder="Chercher un film" autocomplete="off" required="required"
               class="sbx-custom__input">
        <button type="submit" title="Rechercher." class="sbx-custom__submit">
            <svg role="img" aria-label="Search">
                <use xlink:href="#sbx-icon-search-5"></use>
            </svg>
        </button>
        <button type="reset" title="Clear the search query." class="sbx-custom__reset">
            <svg role="img" aria-label="Reset">
                <use xlink:href="#sbx-icon-clear-4"></use>
            </svg>
        </button>
    </div>
</form>

<script type="text/javascript">
    document.querySelector('.searchbox [type="reset"]').addEventListener('click', function () {
        this.parentNode.querySelector('input').focus();
    });
</script>