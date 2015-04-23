<?php
    $mail_body = '';
    $mail_body .= "Имя" . $_POST["name"] . "\n";
    $mail_body .= "Контакт" . $_POST["contact"] . "\n";
    $mail_body .= "Сообщение" . $_POST["message"];

    mail("info@granat.dp.ua", "Сообщение с сайта granat.dp.ua", $mail_body);
    mail("iam1992kreol@ya.ru", "Сообщение с сайта granat.dp.ua", $mail_body);
?>