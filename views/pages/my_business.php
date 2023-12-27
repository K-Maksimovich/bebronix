
<?php
session_start();

use App\Services\Page;
?>

<?php Page::part("header"); ?>

<section class="home">
    <h1 class="text">Бизнес</h1>

    <?php Page::part("menu_buiss"); ?>



</section>



<?php Page::part("footer"); ?>
