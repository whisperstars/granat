<?php

    $mail_body = '';
    $mail_body .= "Имя:       " . $_POST["name"] . "\n";
    $mail_body .= "Контакт:   " . $_POST["contact"] . "\n";
    $mail_body .= "Сообщение: " . $_POST["message"];
    
    $filename = "../data/siteMessage.txt";

    if (is_writable($filename)) {
        if (!$handle = fopen($filename, 'a')) {
            echo "Не могу открыть файл ($filename)";
            exit;
        }

        if (fwrite($handle, $mail_body . "\n \n [=========================================================================] \n \n") === FALSE) {
            echo "Не могу произвести запись в файл ($filename)";
            exit;
        }
    }

    

    mail("info@granat.dp.ua", "Сообщение с сайта granat.dp.ua", $mail_body);
    mail("iam1992kreol@ya.ru", "Сообщение с сайта granat.dp.ua", $mail_body);
?>