<?php
    include_once 'config.php';

    $page_name = 'авторизация';
    $title = \PensionFund\Config::getProjectName() . ': ' . $page_name;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/styles/general.css">
    <link rel="stylesheet" href="src/styles/menu.css">
    <link rel="stylesheet" href="src/styles/customForm.css">
    <title><?= $title; ?></title>
</head>
<body>
    <div class="wrapper">
        <div class="clear"></div>
        <div class="">

        <div class="customForm" id="authBlock">
            <h1>Авторизация на сайте</h1>
            <fieldset>
                <form action="" method="POST">
                    <input type="email" name="email" required value="<?= $_SESSION['login']; ?>" placeholder="Email">
                    <input type="password" name="password" required value="<?= $_SESSION['password']; ?>" placeholder="Пароль" ">
                    <input name="sendLogIn" id="logIn" type="submit" value="ВОЙТИ">
                    <footer class="clearfix">
                        <p><a href="/registration">Нет аккаунта?</a></p>
                        <p><a href="/main">На главную</a></p>
                    </footer>
                </form>
                <p>
                    <?= $_SESSION['authorizationMessage']; ?>
                </p>
            </fieldset>
        </div>
    </div>
</body>
</html>