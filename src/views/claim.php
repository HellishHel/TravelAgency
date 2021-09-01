<?php
    include_once 'config.php';

    $page_name = 'Заказы';
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
                <table id="mainTable">
                    <tr class="t-colums">
                        <th data-value="id" data-caption="Номер брони">Номер брони</th>
                        <th data-value="name" data-caption="Название">Название</th>
                        <th data-value="user" data-caption="Пользователь">Пользователь</th>
                        <th data-value="adults_count" data-caption="Взрослых">Взрослых</th>
                        <th data-value="children_count" data-caption="Детей">Детей</th>
                        <th data-value="tour_type" data-caption="Тариф">Тариф</th>
                        <th data-value="cost" data-caption="Стоимость">Стоимость</th>
                    </tr>
                </table>

                <div id="loader"></div>

                <button class="primaryBtn reportBtn" id="reportBtn">Отчёт PDF</button>

            </div>          
        </div>
        <div class="clear"></div>
    </div>

    <script src="src/scripts/claim/config.js"></script>
    <script src="src/scripts/config.js"></script>

    <script>
        config.letUpdate = false;
        config.letDelete = true;
    </script>

    <?php if (!empty($_SESSION) && $_SESSION['user']->user['role'] != 1): ?>
        <script>
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

    <script src="src/scripts/main/jquery.slicknav.min.js"></script> <!-- nessesary for menu -->
    <script src="src/scripts/common/setMenuTabs.js"></script>
</body>
</html>