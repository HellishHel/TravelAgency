<!-- header-start -->
<header>
    <div class="header-area ">
        <div id="sticky-header" class="main-header-area">
            <div class="container-fluid p-0">
                <div class="row align-items-center no-gutters">
                    <div class="col-xl-5 col-lg-6">
                        <div class="main-menu  d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a href="/main">Главная</a></li>
                                    <li><a href="/tours">Туры</a></li>
                                    <?php if (!empty($_SESSION['auth']) && $_SESSION['user']->user['role'] == 1): ?>
                                        <li><a href="/claim">Заявки</a></li>
                                        <li><a href="/countries">Страны</a></li>
                                        <li><a href="/types">Тарифы</a></li>
                                    <?php elseif (!empty($_SESSION['auth']) && $_SESSION['user']->user['role'] != 1): ?>
                                        <li><a href="/claim">Личный кабинет</a></li>
                                    <?php endif; ?>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2">
                        <div class="logo-img">
                            <a href="index.html">
                                <img src="src/images/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-4 d-none d-lg-block">
                        <div class="book_room">
                            <?php if ($_SERVER['REQUEST_URI'] !== '/main'): ?>

                                <div class="search-wrap">
                                    <input class="search" id="searchInput" type="text" placeholder="Поиск...">
                                </div>

                            <?php endif; ?>

                            <?php if (empty($_SESSION['auth'])): ?>

                                <div class="book_btn d-none d-lg-block">
                                    <a href="/authorization">Войти</a>
                                </div>
                                <div class="book_btn d-none d-lg-block">
                                    <a href="/registration">Регистрация</a>
                                </div>

                            <?php else: ?>

                                <div class="book_btn d-none d-lg-block">
                                    <a id="logoutBtn" href="/logout">Выход</a>
                                </div>

                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header-end -->