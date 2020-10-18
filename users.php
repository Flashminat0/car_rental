<?php

include("../../app/database/db.php");


if (isset($_POST['register-btn'])) {

    $username = '';

    $_POST['admin'] = 0;
    $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
    unset($_POST['register-btn'], $_POST['confirmpassword']);

    $user_id = create('user', $_POST);
    $user = selectOne('user', ['id' => $user_id]);

    dd($user);
    die();
}
