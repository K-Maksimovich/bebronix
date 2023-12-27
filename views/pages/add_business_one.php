<?php
session_start();

use App\Services\Page;
?>

<?php Page::part("header"); ?>

<section class="home">
    <h1 class="text">Бизнес</h1>

    <?php Page::part("menu_buiss"); ?>

    <div class="title-card-buiss">
        <div class="title">
            <p>шаг 1</p>
        </div>

        <p class="task">заполните данные о вашем бизнесе</p>
        <p class="explanation">это нужно для создания карточки вашего бизнеса</p>
    </div>

    <div class="card-add-buiss">
        <form action="">
            <button class="images-buiss">
                Add images business
            </button>

            <p>Название бизнеса: <input type="text" name="buiss_name"></p>
            <p>Краткое описание (что за бизнес): <input type="text" name="description"></p>

            <p>Подробная информация о бизнесе, всё что нужно знать пользователю</p>
            <input type="text" name="all_inf">
        </form>
    </div>



</section>



<?php Page::part("footer"); ?>

