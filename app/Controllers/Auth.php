<?php

namespace App\Controllers;


use App\Services\App;
use App\Services\Router;

class Auth
{
    public static function exReg()
    {
        header('Location: /register');
        exit();
    }
    public static function exLog()
    {
        header('Location: /login');
        exit();
    }

    public function register($data)
    {
        $full_name = $data["full_name"];
        $email = $data["email"];
        $password = $data["password"];
        $number = $data["number"];
        $iin = $data["iin"];


        if (strlen($full_name) <= 5){
            $_SESSION['message-d'] = 'Пожалуйста введите корректные Имя Фамилию';
            self::exReg();
        } elseif(strlen($email) <= 5){
            $_SESSION['message-d'] = 'Пожалуйста введите корректную почту';
            self::exReg();
        } elseif (strlen($password) <= 7){
            $_SESSION['message-d'] = 'Пожалуйста введите корректный пароль (мин. 8 символов)';
            self::exReg();
        } elseif (strlen($number) >= 14 || strlen($number) <= 9){
            $_SESSION['message-d'] = 'Пожалуйста введите корректный номер телефона';
            self::exReg();
        } elseif (strlen($iin) >= 13 || strlen($iin) <= 11){
            $_SESSION['message-d'] = 'Пожалуйста введите корректный ИИН';
            self::exReg();
        } else{

//            echo $full_name . "</br>";
//            echo $email . "</br>";
//            echo $password . "</br>";
//            echo $number . "</br>";
//            echo $iin . "</br>";

//            $password = md5($password);
//
//            $add_user = "INSERT INTO `users` (`id`, `full_name`, `email`, `password`, `number`, `iin`)
//            VALUES (NULL, '$full_name', '$email', '$password', '$number', '$iin')";
//            mysqli_query(App::$connect_db, $add_user);

            $_SESSION['message-g'] = 'Вы успешно Зарегестрированны. Можете войти в свой аккаунт';
            header('Location: /');
            exit();
        }

    }


    public function login($data)
    {
        $email = $data["email"];
        $password = md5($data["password"]);
        $check_user = mysqli_query(App::$connect_db,
            "SELECT * FROM `users` WHERE `email` = '$email' AND  `password` = '$password'");
        if (mysqli_num_rows($check_user) > 0){
            $user = mysqli_fetch_assoc($check_user);

            $_SESSION['user'] = [
                "id" => $user['id'],
                "full_name" => $user['full_name'],
                "email" => $user['email'],
                "number" => $user['number'],
                "iin" => $user['iin'],
                "avatar" => "",
                "user_gr" => $user['group_user'], /* Значение от 1 до 5, Пользователь, Инвалид, Юр. Лицо, , Админ */
                "bin" => $user['bin'],
                "ip_to" => $user['ip_to'],
                "numb_my_buiss" => $user['numb_my_buiss'],
                "numb_card_bank" => $user['numb_card_bank'],
                "data_card_bank" => $user['data_card_bank'],
                "css_card_bank" => $user['css_card_bank']
            ];


            $_SESSION['message-g'] = 'Вы успешно Вошли';
            header('Location: /');
            exit();
        } else{
            $_SESSION['message-d'] = 'Неправильная почта или пароль';
            self::exLog();
        }

    }


    public function logout()
    {
        if ($_SESSION['user']){
            unset($_SESSION['user']);
            header('Location: /');
            exit();
        } else{
            header('Location: /');
        }
    }

    public function imgprofile($data, $files)
    {
        $id = $_SESSION['user']['id'];

        echo 'This page then add profile photo';
        $avatar = $files["avatar"];

        $fileName = time() . '_' . $avatar["name"];
        $path = "uploads/avatars/" . $fileName;
        $sql_path_avatar = $path;

        if (move_uploaded_file($avatar["tmp_name"], $path)){
            mysqli_query(App::$connect_db, "UPDATE `users` SET `avatar` =
                '$sql_path_avatar' WHERE `users`.`id` = '$id'");
        } else{
            Router::error(500);
        }
        $check_avatar = mysqli_query(App::$connect_db, "SELECT * FROM `users` WHERE `avatar` = '$sql_path_avatar'");
        $avatars_path_forIMG = mysqli_query(App::$connect_db, "SELECT `avatar` FROM `users`");
        $avatars_path_forIMG = mysqli_fetch_all($avatars_path_forIMG);

        if (mysqli_num_rows($check_avatar) > 0){
            foreach ($avatars_path_forIMG as $avatar_path_forIMG){
                $_SESSION['user']['avatar'] = $avatar_path_forIMG;
            }
            header('Location: /profile');
            exit();
        } else{
            echo "ERROR: avatar not found";
        }

    }

    public static function is_avatar()
    {
        $id = $_SESSION['user']['id'];


        $check_avatar = mysqli_query(App::$connect_db, "SELECT `avatar` FROM `users` WHERE `id` = '$id'");

        $check_avatar = mysqli_fetch_row($check_avatar);

//        print_r($_SESSION['user']['avatar']);
//        echo $_SESSION['user']['avatar']['0'];
//        print_r($check_avatar);
        echo $check_avatar['0'];

    }

    public static function who_user()
    {
        $id = $_SESSION['user']['id'];
        $check_group = mysqli_query(App::$connect_db, "SELECT `gr_user` FROM `users` WHERE `id` = '$id'");
        $check_group = mysqli_fetch_row($check_group);
//        print_r($check_group);

        echo $check_group['0'];
    }

    public static function is_user()
    {
        $id = $_SESSION['user']['id'];
        $check_group = mysqli_query(App::$connect_db, "SELECT `gr_user` FROM `users` WHERE `id` = '$id'");
        $check_group = mysqli_fetch_row($check_group);
        $_SESSION['user']['user_gr'] = $check_group['0'];
    }


}