<?php
session_start();

use App\Services\Page;
use App\Services\App;

App::ifsign();
?>

<?php Page::part("header"); ?>



<div class="mainAuth">
    <form method="post" action="auth/login">
        <h1>Авторизация</h1>

        <div class="input-group">
            <input class="input" required type="email" name="email" id="email">
            <label class="label" for="email">Почта</label>
        </div>
        <div class="input-group">
            <input class="input" required type="password" name="password" id="password">
            <label class="label" for="password">Пароль</label>
        </div>

        <button type="submit" class="btn btn-primary px-4 py-2 mx-4">Войти</button>
        <h3 class="text-muted">Не зарегестрированы? <a href="/register">Зарегестрируйтесь</a></h3>
    </form>

    <?php
    if ($_SESSION['message-d']){
        echo '<div class="alert alert-danger m-2 text" role="alert"> ' . $_SESSION['message-d'] . ' </div>';
    }

    unset($_SESSION['message-d']);
    ?>

</div>


<?php Page::part("footer"); ?>
