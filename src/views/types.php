<?php
    include_once 'config.php';

    $page_name = 'Тарифы';
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
                <table id="mainTable">
                    <tr class="t-colums">
                        <th data-value="name" data-caption="Название">Название</th>
                        <th data-value="mult" data-caption="Мультипликатор">Мультипликатор</th>
                        <?php if ($_SESSION['user']->user['role'] == 1): ?>
                            <th></th>
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
                        <h1>Добавить страну</h1>
                        <fieldset>
                            <form>
                                <input class="addElement" data-input="inputCtrl" type="text" name="name" placeholder="Название" data-valid-pattern="[А-Яа-я\-]{1,40}"/>
                                <input class="addElement" data-input="inputCtrl" type="text" name="mult" placeholder="Мультипликатор" data-valid-pattern="[0-9\-]{1,40}"/>

                                <footer class="clearfix">
                                    <button class="addFormBtn primaryBtn" id="postBtn">Добавить</button>
                                    <button class="addFormBtn primaryBtn" id="cancelBtn">Отмена</button>
                                </footer>
                            </form>
                        </fieldset>
                    </div>
                </div>

                <!-- <div class="addDataForm" id="addBlock">
                    <h2>Добавить услугу</h2>
                    <input class="addElement" data-input="inputCtrl" type="text" name="name" placeholder="Наименование услуги" data-valid-pattern="[А-Яа-я0-9\-]{1,40}"/>
                    <input class="addElement" data-input="inputCtrl" type="number" name="price" placeholder="Цена услуги" data-valid-pattern="[А-Яа-я0-9\-]{1,40}"/>

                    <button class="addFormBtn primaryBtn" id="postBtn">Добавить</button>
                    <a class="addFormBtn ghostBtn" id="cancelBtn">Отмена</a>
                </div> -->
                <?php endif; ?>

            </div>          
        </div>
        <div class="clear"></div>
    </div>

    <script src="src/scripts/types/config.js"></script>
    <script src="src/scripts/config.js"></script>

    <script src="src/scripts/common/form.js"></script>
    <script src="src/scripts/common/update.js"></script>
    <script src="src/scripts/common/delete.js"></script>
    <script src="src/scripts/common/render.js"></script>
    <script src="src/scripts/common/search.js"></script>
    <script src="src/scripts/common/report.js"></script>
    <script src="src/scripts/common/post.js"></script>
    <script src="src/scripts/common/validate.js"></script>

    <script src="src/scripts/main/jquery.slicknav.min.js"></script> <!-- nessesary for menu -->
    <script src="src/scripts/common/setMenuTabs.js"></script>
</body>
</html>