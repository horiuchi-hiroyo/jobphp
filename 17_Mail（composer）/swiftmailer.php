<?php
    require_once "vendor/autoload.php";

    // 送信設定
    $transport = new Swft_SmtpTransport("smtp.sample.com",25);
    $transport->setUsername("username");
    $transport->setPassword("password");

    $mailer = new Swift_Mailer($transport);

    // メール作成
    $message = new Swift_Message();
    $message->setFrom(["funada@manabiya-sakura.com" => "学舎さくら"]);
    $message->setTo("yamada@yahoo.com");
    $message->setSubject("ここはタイトルです。");
    $message->setBody(<<<_TEXT_
        こんにちは！ここにメール本文が入ります。
        _TEXT_
        );

    // メール送信
    $mailer->send($message);
?>