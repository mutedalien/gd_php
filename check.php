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

$subject = "=?utf-8?B?".base64_encode("Тестовое сообщение")."?=";   //  Заголовое сообщения
$headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html;charset=utf-8\r\n";

mail('chel_c@mail.ru', $subject, $message, $headers);

header('Location: /about.php');
