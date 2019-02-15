<?php
include 'functions.php';
if ( checkValue('username', $_POST['username']) == false ){
    if( checkValue('password', md5($_POST['password'])) == false) {

        echo 'Hello ' . $_POST['username'];

    }else{
        echo 'Не верный пароль пользователя';
    }
}else{
    echo 'Пользователь не зарегистирован';
}
