<?php
$email = $_POST['email'];
$message = $_POST['message'];
$error = '';

    if (trim($email) == '')
        $error = 'Введите ваш email';
    else if (trim($message) == '')
        $error = 'Введите само сообщение';
    else if (trim($email) > 10)
        $error = 'Сообщение должно быть более 10 символов';

    if ($error != '') {
        echo $error;
        exit;
    }
