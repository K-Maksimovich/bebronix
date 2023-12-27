<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../assets/css/style.css">

<!--    <link rel="stylesheet" href="../../libs/bootstrap/css/bootstrap.css">-->
<!--    <link rel="stylesheet" href="../../libs/bootstrap/css/bootstrap-grid.css">-->
<!--    <link rel="stylesheet" href="../../libs/bootstrap/css/bootstrap.min.css">-->

    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <title>BuissHub</title>
</head>
<body>
<nav class="sidebar close">
    <header>
        <div class="image-text">
                <span class="image">
                    <img src="../../assets/img/logo.png" alt="">
                </span>

            <div class="text logo-text">
                <span class="name">BuissHub</span>
            </div>
        </div>

        <i class='bx bx-chevron-right toggle'></i>
    </header>

    <div class="menu-bar">
        <div class="menu">

            <ul class="menu-links">
                <li class="nav-link">
                    <a href="/">
                        <i class='bx bx-home-alt icon' ></i>
                        <span class="text nav-text">Главная</span>
                    </a>
                </li>

                <li class="nav-link">
                    <a href="/finance">
                        <i class='bx bx-bar-chart-alt-2 icon' ></i>
                        <span class="text nav-text">Финансы</span>
                    </a>
                </li>

                <li class="nav-link">
                    <a href="/business">
                        <i class='bx bx-briefcase icon'></i>
                        <span class="text nav-text">Бизнес</span>
                    </a>
                </li>

                <li class="nav-link">
                    <a href="/ribbon">
                        <i class='bx bx-pie-chart-alt icon' ></i>
                        <span class="text nav-text">Лента</span>
                    </a>
                </li>



                <?php

                if ($_SESSION['user']){
                    echo '
                        <li class="nav-link">
                            <a href="/profile">
                                <i class="bx bx-user icon"></i>
                                <span class="text nav-text">Мой профиль</span>
                            </a>
                        </li>
                    ';
                }
                else{

                    echo '
                        <li class="nav-link">
                            <a href="/register">
                                <i class="bx bx-check-square icon"></i>
                                <span class="text nav-text">Зарегестрироваться</span>
                            </a>
                        </li>
                    ';

                    echo '
                        <li class="nav-link">
                            <a href="/login">
                            <i class="bx bx-log-out-circle icon"></i>
                                <span class="text nav-text">Войти</span>
                            </a>
                        </li>
                    ';
                }
                ?>





                <li class="search-box">
                </li>
            </ul>
        </div>

        <div class="bottom-content">
            <?php

                if ($_SESSION['user']){
                    echo '<li class="">
                <a href="auth/logout">
                    <i class="bx bx-log-out icon" ></i>
                    <span class="text nav-text">Выйти</span>
                </a>
            </li>';
                }

            ?>

            <li class="mode">
                <div class="sun-moon">
                    <i class='bx bx-moon icon moon'></i>
                    <i class='bx bx-sun icon sun'></i>
                </div>
                <span class="mode-text text">Dark mode</span>

                <div class="toggle-switch">
                    <span class="switch"></span>
                </div>
            </li>

        </div>
    </div>
</nav>

