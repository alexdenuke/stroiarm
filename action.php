<?php
$name = $_POST['name'];
$tel = $_POST["tel"];
$response = "";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';


$mail = new PHPMailer(true);

try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.yandex.ru';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'stroiarmru@yandex.ru';                     //SMTP username
    $mail->Password   = 'utnbttpdznqtporr';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                   //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('stroiarmru@yandex.ru', 'Mailer');
    $mail->addAddress('stroiarmru@yandex.ru', 'Mr Xamid');     //Add a recipient
    // $mail->addAddress('alexdenuke@yandex.ru');               //Name is optional
    // $mail->addReplyTo('alexdenuke@yandex.ru', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = '<h1>'.htmlspecialchars($name).'</h1>'.
                      '<p>'.htmlspecialchars($tel).'</p>';
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    $responce = 'Спасибо! <br>
     Ваш запрос отправлен. Cкоро с вами свяжется менеджер.';
} catch (Exception $e) {
    $responce = 'Ошибка отправки запроса.';
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>stroiarm</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@100;200;300;400;500&amp;display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="swiper-bundle.css"> -->
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="header__wrap">
                <div class="header__logo-wrap">
                    <a href="/index.php" class="header__logo-img-link">
                        <img src="/img/logo.png" alt="логотип" class="header__logo-img">
                    </a>
                    <a href="/index.php" class="header__logo-img-link">
                        <p class="header__logo">СтройАрм</p>
                    </a>
                </div>
                <a href="tel:89253210861" class="header__tel">8 925 321 08 61</a>
                <a target="_blank" href="https://telegram.org/" class="header__telegram-icon">
                    <img src="/img/telegram.svg" alt="" class="header__social">
                </a>
                <a target="_blank" href="https://vk.com/id774591441" class="header__vk-icon">
                    <img src="/img/vk.svg" alt="" class="header__social">
                </a>
                <a target="_blank" href="https://www.whatsapp.com/" class="header__whatsup-icon">
                    <img src="/img/whats-app.svg" alt="" class="header__social">
                </a>
                <img src="/img/burger.svg" alt="" class="header__burger">
            </div>
            <div class="header__burger-menu">
                <p class="header__burger-menu-item">Галерея работ</p>
                <a href="tel:89253210861" class="header__burger-menu-item">8 925 321 08 61</a>
                <p class="header__burger-menu-item">stroiarmru@yandex.ru</p>
                <div class="header__burger-menu-item">
                    <a href="https://telegram.org/" class="header__burger-menu-link">
                        <img src="/img/telegram.svg" alt="" class="header__burger-menu-icon">
                    </a>
                    <a href="" class="header__burger-menu-link">
                        <img src="/img/vk.svg" alt="" class="header__burger-menu-icon">
                    </a>
                    <a href="" class="header__burger-menu-link">
                        <img src="/img/whats-app.svg" alt="" class="header__burger-menu-icon">
                    </a>
                </div>
                <p class="header__burger-menu-item"></p>
                <p class="header__burger-menu-item"></p>
            </div>
    </header>

    <div class="message-send">
        <div class="container">
            <div class="message-send__body">
                <p class="message-send__title">
                    <?php
                    echo $responce;
                    ?>
                </p>
                <!-- <buttton class="message-send__btn">на главную -->
                    <a href="index.php" class="message-send__link">
                        На главную
                    </a>
                <!-- </buttton> -->
            </div>
        </div>
    </div>
</body>
<script src="/burger.js"></script>
</html>
