<?php
session_start();

use App\Services\Page;
?>

<?php Page::part("header"); ?>

<section class="home">
    <h1 class="text">This is Finance page</h1>
</section>



<?php Page::part("footer"); ?>
