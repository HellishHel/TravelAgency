<?php
include_once 'config.php';

$page_name = 'регистрация';
$title = \PensionFund\Config::getProjectName() . ': ' . $page_name;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/styles/customForm.css">
    <title><?= $title; ?></title>
</head>
<body>
    <div class="wrapper">
        <div class="clear"></div>
        <!-- <div class="content-bl"> -->

            <div class="customForm" id="regBlock">
                <h1>Регистрация пользователя</h1>
                <fieldset>
                    <form action="" method="POST">
                        <input name="email" type="email" placeholder="Email">
                        <input name="password" type="password" placeholder="Пароль">
                        <input name="passwordAgain" type="password" placeholder="Повторите пароль">

                        <input name="signIn" id="signIn" type="submit" value="Регистрация">
                        <footer class="clearfix">
                            <p><a href="/authorization">Авторизация</a></p>
                            <p><a href="/main">На главную</a></p>
                        </footer>
                    </form>
                    <p>
                        <?= $_SESSION['authorizationMessage']; ?>
                    </p>
                </fieldset>
            </div>
        <!-- </div> -->
        <div class="clear"></div>
    </div>
</body>
</html>