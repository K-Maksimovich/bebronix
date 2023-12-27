<?php
session_start();

use App\Services\Page;
use App\Controllers\Auth;
use App\Services\App;

Auth::is_user();
App::ifsign_not();
Auth::is_busines();
?>

<?php Page::part("header"); ?>


<section class="home">
<!--    <h1 class="text">This is Profile page</h1>-->

    <?php
    if($_SESSION['message-g']){
        echo '<div class="alert alert-success m-2 text" role="alert"> ' . $_SESSION['message-g'] . ' </div>';
    }
    unset($_SESSION['message-g']);

    if ($_SESSION['message-d']){
        echo '<div class="alert alert-danger m-2 text" role="alert"> ' . $_SESSION['message-d'] . ' </div>';
    }
    unset($_SESSION['message-d']);
    ?>


    <div class="text"><h1>Мой профиль</h1></div>
    <div class="avatar">
        <div class="borderraduis">
            <img class="img_profile" src="<?php Auth::is_avatar() ?>" alt="">
        </div>
        <form action="auth/imgprofile" class="m-auto" enctype="multipart/form-data" method="post">
            <p>Change photo: <input type="file" name="avatar" ></p>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <div class="card-list">
        <div class="card">
            <h3>Имя</h3>
            <p><?= $_SESSION['user']['full_name'] ?></p>
        </div>
        <div class="card">
            <h3>Электронный адрес</h3>
            <p><?= $_SESSION['user']['email'] ?></p>
        </div>
        <div class="card">
            <h3>Номер телефона</h3>
            <p><?= $_SESSION['user']['number'] ?></p>
        </div>
        <div class="card">
            <h3>ИИН</h3>
            <p><?= $_SESSION['user']['iin'] ?></p>
        </div>
        <div class="card">
            <h3>Статус</h3>
            <p><?php
                    switch ($_SESSION['user']['user_gr']){
                    case 1:
                        echo 'Пользователь';
                        break;
                    case 2:
                        echo 'Инвалид';
                        break;
                    case 3:
                        echo 'Юр. Лицо';
                        break;
                    case 4:
                        echo ' ';
                        break;
                    case 5:
                        echo 'Админ';
                        break;
                }
                ?></p>
        </div>
    </div>
    <div class="line"></div>
    <div class="pay-holder">
        <div class="paycardface">
        </div>
        <div class="paycardback">
            <div class="black-line">
                <div class="white-line">***</div>
            </div>
        </div>
    </div>



</section>


<!-- Modal AVATAR-->
<div class="modal fade" id="add_img" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add images</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="auth/imgprofile" class="m-auto" enctype="multipart/form-data" method="post">
                    <p>Change photo: <input type="file" name="avatar" ></p>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>






<?php Page::part("footer"); ?>
