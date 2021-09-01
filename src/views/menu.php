<?php
    include_once 'config.php';

    $title = \PensionFund\Config::getProjectName();
?>


<header>
    <div class="center-block-main">
        <div class="header-top">
            <p class="logo"><?= $title; ?></p>
            <div class="contact-basket">
                <p class="header-phone"><img src="src/views/mainPage/images/ico-phone.jpg">+371 282 20 760</p>
            </div>
            <div class="clear"></div>
        </div>

        <div class="header-bottom">
            <nav>
                <ul class="menu">
                    <li><a href="/main">Главная</a></li>
                    <li><a  href="/service">Услуги</a></li>
                    <?php if ($_SESSION['user']->user['role'] == 2): ?>
                        <li><a href="/claim">Заявки</a></li>
                        <li><a href="/employer">Сотрудники</a></li>
                        <li><a href="/competition">Компетенции</a></li>
                        <li><a href="/clients">Клиенты</a></li>
                    <?php endif; ?>
                </ul>
                <div class="search-wrap">
                    <input class="search" id="searchInput" type="text" placeholder="Поиск...">
			    </div>
                
                <ul class="auth">
                    <li><a href="/authorization">Войти</a></li>
                    <li><a href="/registration">Нет аккаунта?</a></li>
                    <li><a id="logoutBtn" href="/logout">Выход</a></li>
                </ul>
                <div class="clear"></div>
            </nav>
            
            
            
        </div>
    </div>
</header>