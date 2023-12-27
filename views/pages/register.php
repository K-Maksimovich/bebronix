<?php
session_start();

use App\Services\Page;
use App\Services\App;

App::ifsign();
?>

<?php Page::part("header"); ?>



<section class="home">
    <div class="mainAuth">
        <form action="auth/register" method="post">
            <h1>Регистрация</h1>
            <div class="input-group">
                <input class="input" required type="text" name="full_name" id="full_name">
                <label class="label" for="full_name">Фамилия Имя</label>
            </div>
            <div class="input-group">
                <input class="input" required type="email" name="email" id="email">
                <label class="label" for="email">Почта</label>
            </div>
            <div class="input-group">
                <input class="input" required type="password" name="password" id="password">
                <label class="label" for="password">Пароль</label>
            </div>
            <div class="input-group">
                <input class="input" required type="text" name="number" id="number">
                <label class="label" for="number">Номер телефона</label>
                <p>+7-000-000-0000</p>
            </div>
            <div class="input-group">
                <input class="input" required type="text" name="iin" id="iin">
                <label class="label" for="inn">ИИН</label>
            </div>

            <button type="submit" class="btn btn-primary px-4 py-2 mx-4">Зарегестрироваться</button>
            <h3 class="text-muted">У вас ещё нет аккаунта? <a href="/login">Войти</a></h3>
        </form>

        <?php
        if ($_SESSION['message-d']){
            echo '<div class="alert alert-danger m-2 text" role="alert"> ' . $_SESSION['message-d'] . ' </div>';
        }

        unset($_SESSION['message-d']);
        ?>
    </div>
</section>



<?php Page::part("footer"); ?>
