<?php
session_start();

use App\Services\Page;
?>

<?php Page::part("header"); ?>



<section class="home">

    <?php
    if($_SESSION['message-g']){
        echo '<div class="alert alert-success m-2 text" role="alert"> ' . $_SESSION['message-g'] . ' </div>';
    }
    unset($_SESSION['message-g']);
    ?>


    <div class="text"><h1>Главная</h1></div>
    <div class="desc"><span>BuissHub - сайт инвестиций</span> с проверенными перспективными проектами. Присоединяйтесь для выгодных возможностей!</div>
    <div class="photo-holder">
        <img class="home1 img_home" src="../../assets/img/fin.jpg" alt="">
        <img class="home2 img_home" src="../../assets/img/buiss.jpg" alt="">
        <img class="home3 img_home" src="../../assets/img/invest.jpg" alt="">
    </div>


</section>


<?php Page::part("footer"); ?>
