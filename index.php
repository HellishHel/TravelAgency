<?php
    namespace PensionFund;

    session_start();
    
    require_once __DIR__ . '/bootstrap.php';
    include_once __DIR__ . '/config.php';

    use PensionFund\Controller\{
        MainController,
        AuthorizationController,
        RegistrationController,
        ToursController,
        CountriesController,
        ClaimController,
        TypesController
    };

    $uri = $_SERVER['REQUEST_URI'];

    if ($_SESSION['auth'] !== 1 
        && $uri !== '/authorization' 
        && $uri !== '/registration' 
        && $uri !== '/tours' 
        && $uri !== '/main') {
            
        header("Location:/main");
    }

    // Получаем GET переменные.
    $uri = explode('?', $uri);
    $getParams = $uri[1];
    $uri = $uri[0];

    switch ($uri) {
        case '/authorization': {
            $page = new AuthorizationController();
            $checkUser = $page->checkLogIn();

            if (count($checkUser->errors) > 0) {
                $_SESSION['authorizationMessage'] = array_shift($checkUser->errors);

                header("Location:" . $_SERVER['HTTP_REFERER']);
            } else if ($checkUser->isLogin && empty($checkUser->errors)) {
                $_SESSION['auth'] = 1;
                $_SESSION['user'] = $checkUser;

                header('Location:/main');
            }

            $page->execute();
        } break;
        case '/registration': {
            $page = new RegistrationController();

            if (!empty($_POST['signIn'])) {
                $page->insert();
                
                header("Location:/main");
            }

            $page->execute();
        } break;
       case '/countries': {
           (new CountriesController())->execute();
       } break;
       case '/claim': {
           (new ClaimController())->execute();
       } break;
       case '/types': {
           (new TypesController())->execute();
       } break;
//        case '/schedule': {
//            (new ScheduleController())->execute();
//        } break;
        case '/tours': {
            (new ToursController())->execute();
        } break;
        case '/main': {
            (new MainController())->execute();
        } break;
        case '/logout': {
            session_destroy();
            header("Location:/main");
        } break;
    }