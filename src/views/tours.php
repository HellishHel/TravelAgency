<?php
    include_once 'config.php';

    $page_name = 'Туры';
    $title = \PensionFund\Config::getProjectName() . ': ' . $page_name;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    
    <!-- <link rel="stylesheet" href="src/styles/menu.css">
    <link rel="stylesheet" href="src/styles/measure.css"> -->
    <link rel="stylesheet" href="src/styles/customForm.css">

    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="src/styles/main/bootstrap.min.css">
    <link rel="stylesheet" href="src/styles/main/owl.carousel.min.css">
    <link rel="stylesheet" href="src/styles/main/magnific-popup.css">
    <link rel="stylesheet" href="src/styles/main/font-awesome.min.css">
    <link rel="stylesheet" href="src/styles/main/themify-icons.css">
    <link rel="stylesheet" href="src/styles/main/nice-select.css">
    <link rel="stylesheet" href="src/styles/main/flaticon.css">
    <link rel="stylesheet" href="src/styles/main/gijgo.css">
    <link rel="stylesheet" href="src/styles/main/animate.css">
    <link rel="stylesheet" href="src/styles/main/slicknav.css">
    <link rel="stylesheet" href="src/styles/main/style.css">
    <link rel="stylesheet" href="src/styles/general.css">

    <link href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" rel="stylesheet">
    <title><?= $title; ?></title>
</head>

<body>
    <div class="wrapper">
        <?php require_once __DIR__ . '/menu-new.php'; ?>
        <!-- <div class="clear"></div> -->
        <div class="content">
            <div class="insideContent">
                <?php if (empty($_SESSION)): ?>
                    <h3 class="auth-message">Для покупки тура <a href="/authorization">войдите</a> или <a href="/registration">зарегистрируйтесь</a></h3>
                <?php endif; ?>
                <div class="filters-wrap">
                    Фильтры: 
                    <div class="filter" data-f-type="price_min_num" data-f-value="">По цене<i></i></div>
                    <div class="filter" data-f-type="period" data-f-value="">По длительности<i></i></div>
                    <div class="clear"></div>
                </div>
                <table id="mainTable">
                    <tr class="t-colums">
                        <th data-value="name" data-caption="Название">Название</th>
                        <th data-value="description" data-caption="Описание">Описание</th>
                        <th data-value="country" data-caption="Страна">Страна</th>
                        <th data-value="date_from" data-caption="Начало">Начало</th>
                        <th data-value="date_to" data-caption="Окончание">Окончание</th>
                        <th data-value="period_text" data-caption="Длительность тура">Длительность тура</th>
                        <th data-value="price_min" data-caption="Стоимость">Стоимость</th>
                        <?php if ($_SESSION['user']->user['role'] == 1): ?>
                            <th></th>
                            <th></th>
                        <?php elseif (!empty($_SESSION) && $_SESSION['user']->user['role'] != 1): ?>
                            <th></th>
                        <?php endif; ?>
                    </tr>
                </table>

                <div id="loader"></div>

                <button class="primaryBtn reportBtn" id="reportBtn">Отчёт PDF</button>

                <?php if ($_SESSION['user']->user['role'] == 1): ?>
                <a class="ghostBtn" id="addNewBtn">Добавить <?= $page_name ?></a>
                
                <div class="customFormWrap" id="addBlock">
                    <div class="customForm addDataForm">
                        <h1>Добавить тур</h1>
                        <fieldset>
                            <form>
                                <input class="addElement" data-input="inputCtrl" type="text" name="name" placeholder="Название тура" data-valid-pattern="[А-Яа-я0-9\-]{1,40}"/>
                                <textarea class="addElement" data-input="inputCtrl" type="text" name="description" placeholder="Описание" data-valid-pattern="[А-Яа-я0-9\-]{1,40}"/></textarea>

                                <h4>Выберите страну</h4>
                                <select class="addElement"
                                        name="country_id"
                                        data-input="inputCtrl"
                                        data-select="countries"
                                        data-placeholder="Выберите страну">
                                </select>
                                <h4>Начало тура</h4>
                                <input class="addElement" data-input="inputCtrl" type="date" name="date_from"/>
                                <h4>Окончание тура</h4>
                                <input class="addElement" data-input="inputCtrl" type="date" name="date_to"/>
                                <input class="addElement" data-input="inputCtrl" type="number" name="price_tickets" placeholder="Стоимость билетов" data-valid-pattern="[0-9\-]{1,40}"/>
                                <input class="addElement" data-input="inputCtrl" type="number" name="price_day" placeholder="Стоимость 1 дня" data-valid-pattern="[0-9\-]{1,40}"/>
                                
                                <footer class="clearfix">
                                    <button class="addFormBtn primaryBtn" id="postBtn">Добавить</button>
                                    <button class="addFormBtn primaryBtn" id="cancelBtn">Отмена</button>
                                </footer>
                            </form>
                        </fieldset>
                    </div>
                </div>

                <?php elseif (!empty($_SESSION) && $_SESSION['user']->user['role'] != 1): ?>

                <div class="customFormWrap addClaim" id="addBlock" style="display: none">
                    <div class="customForm addDataForm">
                        <h1>Бронь тура</h1>
                        <fieldset>
                            <form>
                                <select class="addElement"
                                    name="tour_id"
                                    data-input="inputCtrl"
                                    data-select="tours"
                                    data-placeholder="Выберите тур"
                                    disabled>
                                </select>

                                <h5>Взрослых:</h5>
                                <input class="addElement" data-input="inputCtrl" type="number" name="adults_count" placeholder="Взрослых" value="2" data-valid-pattern="[0-9]{1,2}"/>
                                <h5>Детей:</h5>
                                <input class="addElement" data-input="inputCtrl" type="number" name="children_count" placeholder="Детей" value="0" data-valid-pattern="[0-9]{1,2}"/>

                                <h5>Тариф:</h5>
                                <select class="addElement"
                                    name="type_id"
                                    data-input="inputCtrl"
                                    data-select="types"
                                    data-placeholder="Выберите тариф">
                                </select>

                                <h6 data-form-value="price_tickets">Стоимость билетов: <span></span> руб.</h6>
                                <h6 data-form-value="price_day">Стоимость 1 дня проживания: <span></span> руб.</h6>
                                <h5 data-form-value="cost">Итого: <span></span> руб.</h5>

                                <footer class="clearfix">
                                    <button class="addFormBtn primaryBtn buyTour" id="buyTour">Забронировать</button>
                                    <button class="addFormBtn primaryBtn" id="cancelBtn">Отмена</button>
                                </footer>
                            </form>
                        </fieldset>
                    </div>
                </div>

                <div class="customFormWrap" id="message-block" style="display: none">
                    <div class="customForm">
                        <h3>Спасибо за то, что доверились нашему агенству!</h3>
                        <p>В ближайшее время наши менеджеры свяжутся с вами по электронному адресу <span><?= $_SESSION["login"] ?></span>
                        для уточнения деталей. Также Вы можете позвонить нам по номеру +7-999-99-99</p>

                        <button class="primaryBtn">Продолжить</button>
                    </div>
                    
                </div>

                <?php endif; ?>

            </div>          
        </div>
        <div class="clear"></div>
    </div>

    <script src="src/scripts/tours/config.js"></script>
    <script src="src/scripts/config.js"></script>

    <?php if (empty($_SESSION)): ?>
        <script>
            config.letUpdate = false;
            config.letDelete = false;
        </script>
    <?php endif; ?>

    <?php if (!empty($_SESSION) && $_SESSION['user']->user['role'] != 1): ?>
        <script>
            config.letUpdate = false;
            config.letDelete = false;

            <?php if ($_SESSION['auth'] != 0): ?>

            config.userId = <?= $_SESSION['user']->user['id'] ?>;

            config.additionFuelds = {
                user_id: <?= $_SESSION['user']->user['id']; ?>
            };
            <?php endif; ?>
        </script>
    <?php endif; ?>


    <script src="src/scripts/common/form.js"></script>
    <script src="src/scripts/common/update.js"></script>
    <script src="src/scripts/common/delete.js"></script>
    <script src="src/scripts/common/render.js"></script>
    <script src="src/scripts/common/search.js"></script>
    <script src="src/scripts/common/report.js"></script>
    
    <script src="src/scripts/common/fillSelectCtrl.js"></script>
    <script src="src/scripts/common/validate.js"></script>

    <script src="src/scripts/main/jquery.slicknav.min.js"></script> <!-- nessesary for menu -->
    <script src="src/scripts/common/setMenuTabs.js"></script>

    <?php if (!empty($_SESSION) && $_SESSION['user']->user['role'] != 1): ?>
        <script>
            var isAuth = true;
        </script>
        <script src="src/scripts/tours/calcForm.js"></script>
        <script src="src/scripts/tours/addClaim.js"></script>
    <?php endif; ?>

    <script src="src/scripts/common/post.js"></script>
    <script src="src/scripts/tours/filter.js"></script>
</body>
</html>