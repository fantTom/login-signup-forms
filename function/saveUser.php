<?php
include 'functions.php';
if($_POST['password'] == $_POST['confirm']){
    if ( checkValue('username', $_POST['username']) == true){
        if ( checkValue('email', $_POST['email']) == true) {

            $array = [
                'name' => $_POST['name'],
                'username' => $_POST['username'],
                'email' => $_POST['email'],
                'password' => md5($_POST['password']),
            ];
            saveUser($array);

            print ('Вы успешно зарегистрировались');
           // echo '<pre>', print_r($_POST), '</pre>';
        }else{
            echo 'Пользователь стаким e-mail уже существует';
        }
    } else{
        echo 'Логин занят';
    }
}else{
    echo 'Пароли не совпадают!' ;
}