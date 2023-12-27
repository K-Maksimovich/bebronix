<?php
session_start();

use App\Services\Page;
?>

<?php Page::part("header"); ?>

<section class="home">
    <h1 class="text">Бизнес</h1>

    <?php Page::part("menu_buiss"); ?>
		<form action="">
			<div class="bg-card">
			<div class="text"><h4>Шаг 1</h4></div>
			<p class="ribbon-desc">Заполните данные о вашем бизнесе</p>
			<div class="ribbon-desc1">Это нужно для создания карточки вашего бизнеса</div>
			<button class="imgage">Добавить фото</button>
			<div class="ribbon-title">Title</div>
			<div class="ribbon-sdesc">Краткое описание для карточки<br><textarea name="" id="" cols="50" rows="1"></textarea></div>
			<div class="ribbon-email">Почта для связи<br><input type="email"></div>
			<div class="ribbon-email">Цена бизнеса: <br><input type="text"></div>
			<div class="ribbon-email">БИН: <br><input type="text"></div>
			<div class="ribbon-desc">Подробная инфорамция о бизнесе<textarea name="" id="" cols="165" rows="5"></textarea></div>

			<div class="button-holder">		
			<button class="invest" href="/add_business_two">Далее</button>
			</div>
			</div>
		</form>




</section>



<?php Page::part("footer"); ?>

