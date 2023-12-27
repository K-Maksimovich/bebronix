<?php
session_start();

use App\Services\Page;
?>

<?php Page::part("header"); ?>

<section class="home">
    <h1 class="text">Бизнес</h1>

    <?php Page::part("menu_buiss"); ?>

    <form action="" method="post">
        <div class="border">
            <img src="../../assets/img/di_kaprio.jpg" alt="">
            <h2>Название</h2>
            <p>краткое название для карточки бизнеса</p>
            <button type="submit">Подробнее</button>
        </div>

    </form>



</section>



<?php Page::part("footer"); ?>
