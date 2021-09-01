<?php
$page_name = 'главная';
$title = \PensionFund\Config::getProjectName() . ': ' . $page_name;
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?= $title; ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
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
    <!-- <link rel="stylesheet" href="src/styles/main/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <?php require_once __DIR__ . '/menu-new.php'; ?>

    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="slider_active owl-carousel">
            <div class="single_slider d-flex align-items-center justify-content-center slider_bg_1">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text text-center">
                                <h3>Заботатур</h3>
                                <p>У нас самые выгодные предложения</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center justify-content-center slider_bg_2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text text-center">
                                <h3>Заботатур</h3>
                                <p>С нами вы проведете отпуск с комфортом</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- about_area_start -->
    <div class="about_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5">
                    <div class="about_info">
                        <div class="section_title mb-20px">
                            <span>О нас</span>
                            <h3>Шикарные отели <br>
                                с прекрасным видом из окна</h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7">
                    <div class="about_thumb d-flex">
                        <div class="img_1">
                            <img src="src/images/about/about_1.png" alt="">
                        </div>
                        <div class="img_2">
                            <img src="src/images/about/about_2.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about_area_end -->

    <!-- offers_area_start -->
    <div class="offers_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-100">
                        <span>Наши предложения</span>
                        <h3>Действующие предложения</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-4">
                    <div class="single_offers">
                        <div class="about_thumb">
                            <img src="src/images/offers/1.png" alt="">
                        </div>
                        <h3>Тур в Италию</h3>
                        <ul>
                            <li>Отель пять звезд</li>
                            <li>14 дней </li>
                            <li>Вид на Средиземное море</li>
                        </ul>
                        <a href="/tours" class="book_now">Оформить заявку</a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_offers">
                        <div class="about_thumb">
                            <img src="src/images/offers/2.png" alt="">
                        </div>
                        <h3>Тур в Грецию</h3>
                        <ul>
                            <li>Отель пять звезд</li>
                            <li>7 дней </li>
                            <li>Экскурсии по архитектурным памятникам культуры</li>
                        </ul>
                        <a href="/tours" class="book_now">Оформить заявку</a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_offers">
                        <div class="about_thumb">
                            <img src="src/images/offers/3.png" alt="">
                        </div>
                        <h3>Тур в Исландию</h3>
                        <ul>
                            <li>Отель пять звезд</li>
                            <li>5 дней </li>
                            <li>Купание в гейзерных источниках</li>
                        </ul>
                        <a href="/tours" class="book_now">Оформить заявку</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- offers_area_end -->

    <!-- video_area_start -->
    <div class="video_area video_bg overlay">
        <div class="video_area_inner text-center">
            <span>У нас лучший сервис</span>
            <h3>Доверьте организацию нам <br>
                и насладитесь отдыхом</h3>
            <a href="https://www.youtube.com/watch?v=vLnPwxZdW4Y" class="video_btn popup-video">
                <i class="fa fa-play"></i>
            </a>
        </div>
    </div>
    <!-- video_area_end -->

    <!-- about_area_start -->
    <div class="about_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-7">
                    <div class="about_thumb2 d-flex">
                        <div class="img_1">
                            <img src="src/images/about/1.png" alt="">
                        </div>
                        <div class="img_2">
                            <img src="src/images/about/2.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5">
                    <div class="about_info">
                        <div class="section_title mb-20px">
                            <span>Национальная кухня</span>
                            <h3>В наших отелях подается <br>
                                вкуснейшие блюда национальной кухни</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about_area_end -->

    <!-- features_room_startt -->
    <div class="features_room">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-100">
                        <span>Путешествия в любую точку мира</span>
                        <h3>Просто выберите подходящий вариант</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="rooms_here">
            <div class="single_rooms">
                <div class="room_thumb">
                    <img src="src/images/rooms/1.png" alt="">
                    <div class="room_heading d-flex justify-content-between align-items-center">
                        <div class="room_heading_inner">
                            <h3>Теплые страны</h3>
                        </div>
                        <a href="/tours" class="line-button">Оформить заявку</a>
                    </div>
                </div>
            </div>
            <div class="single_rooms">
                <div class="room_thumb">
                    <img src="src/images/rooms/2.png" alt="">
                    <div class="room_heading d-flex justify-content-between align-items-center">
                        <div class="room_heading_inner">
                            <h3>Увлекательные экскурсии</h3>
                        </div>
                        <a href="/tours" class="line-button">Оформить заявку</a>
                    </div>
                </div>
            </div>
            <div class="single_rooms">
                <div class="room_thumb">
                    <img src="src/images/rooms/3.png" alt="">
                    <div class="room_heading d-flex justify-content-between align-items-center">
                        <div class="room_heading_inner">
                            <h3>Вкусная еда</h3>
                        </div>
                        <a href="/tours" class="line-button">Оформить заявку</a>
                    </div>
                </div>
            </div>
            <div class="single_rooms">
                <div class="room_thumb">
                    <img src="src/images/rooms/4.png" alt="">
                    <div class="room_heading d-flex justify-content-between align-items-center">
                        <div class="room_heading_inner">
                            <h3>Новые впечатления</h3>
                        </div>
                        <a href="/tours" class="line-button">Оформить заявку</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- features_room_end -->

    <!-- instragram_area_start -->
    <div class="instragram_area">
        <div class="single_instagram">
            <img src="src/images/instragram/1.png" alt="">
            <div class="ovrelay">
                <a href="#">
                    <i class="fa fa-instagram"></i>
                </a>
            </div>
        </div>
        <div class="single_instagram">
            <img src="src/images/instragram/2.png" alt="">
            <div class="ovrelay">
                <a href="#">
                    <i class="fa fa-instagram"></i>
                </a>
            </div>
        </div>
        <div class="single_instagram">
            <img src="src/images/instragram/3.png" alt="">
            <div class="ovrelay">
                <a href="#">
                    <i class="fa fa-instagram"></i>
                </a>
            </div>
        </div>
        <div class="single_instagram">
            <img src="src/images/instragram/4.png" alt="">
            <div class="ovrelay">
                <a href="#">
                    <i class="fa fa-instagram"></i>
                </a>
            </div>
        </div>
        <div class="single_instagram">
            <img src="src/images/instragram/5.png" alt="">
            <div class="ovrelay">
                <a href="#">
                    <i class="fa fa-instagram"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- instragram_area_end -->

    <!-- footer -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                мы находимся по адресу
                            </h3>
                            <p class="footer_text"> 200, Green road, Mongla, <br>
                                New Yor City USA</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Контакты
                            </h3>
                            <p class="footer_text">+10 367 267 2678 <br>
                                reservation@montana.com</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Навигация
                            </h3>
                            <ul>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-8 col-md-7 col-lg-9">
                        <p class="copy_right">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Все права защищены
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                    <div class="col-xl-4 col-md-5 col-lg-3">
                        <div class="socail_links">
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-facebook-square"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- link that opens popup -->

    <!-- form itself end-->
        <form id="test-form" class="white-popup-block mfp-hide">
                <div class="popup_box ">
                        <div class="popup_inner">
                            <h3>Check Availability</h3>
                            <form action="#">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <input id="datepicker" placeholder="Check in date">
                                    </div>
                                    <div class="col-xl-6">
                                        <input id="datepicker2" placeholder="Check out date">
                                    </div>
                                    <div class="col-xl-6">
                                        <select class="form-select wide" id="default-select" class="">
                                            <option data-display="Adult">1</option>
                                            <option value="1">2</option>
                                            <option value="2">3</option>
                                            <option value="3">4</option>
                                        </select>
                                    </div>
                                    <div class="col-xl-6">
                                        <select class="form-select wide" id="default-select" class="">
                                            <option data-display="Children">1</option>
                                            <option value="1">2</option>
                                            <option value="2">3</option>
                                            <option value="3">4</option>
                                        </select>
                                    </div>
                                    <div class="col-xl-12">
                                        <select class="form-select wide" id="default-select" class="">
                                            <option data-display="Room type">Room type</option>
                                            <option value="1">Laxaries Rooms</option>
                                            <option value="2">Deluxe Room</option>
                                            <option value="3">Signature Room</option>
                                            <option value="4">Couple Room</option>
                                        </select>
                                    </div>
                                    <div class="col-xl-12">
                                        <button type="submit" class="boxed-btn3">Check Availability</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
            </form>
    <!-- form itself end -->

    <!-- JS here -->
    <script src="src/scripts/main/vendor/modernizr-3.5.0.min.js"></script>
    <script src="src/scripts/main/vendor/jquery-1.12.4.min.js"></script>
    <script src="src/scripts/main/popper.min.js"></script>
    <script src="src/scripts/main/bootstrap.min.js"></script>
    <script src="src/scripts/main/owl.carousel.min.js"></script>
    <script src="src/scripts/main/isotope.pkgd.min.js"></script>
    <script src="src/scripts/main/waypoints.min.js"></script>
    <script src="src/scripts/main/jquery.counterup.min.js"></script>
    <script src="src/scripts/main/imagesloaded.pkgd.min.js"></script>
    <script src="src/scripts/main/scrollIt.js"></script>
    <script src="src/scripts/main/jquery.scrollUp.min.js"></script>
    <script src="src/scripts/main/wow.min.js"></script>
    <script src="src/scripts/main/nice-select.min.js"></script>
    <script src="src/scripts/main/jquery.slicknav.min.js"></script> <!-- nessesary for menu -->
    <script src="src/scripts/main/jquery.magnific-popup.min.js"></script>
    <script src="src/scripts/main/plugins.js"></script>
    <script src="src/scripts/main/gijgo.min.js"></script>

    <!--contact js-->
    <script src="src/scripts/main/contact.js"></script>
    <script src="src/scripts/main/jquery.ajaxchimp.min.js"></script>
    <script src="src/scripts/main/jquery.form.js"></script>
    <script src="src/scripts/main/jquery.validate.min.js"></script>
    <script src="src/scripts/main/mail-script.js"></script>

    <script src="src/scripts/main/main.js"></script>

    <script src="src/scripts/common/setMenuTabs.js"></script>
    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
             rightIcon: '<span class="fa fa-caret-down"></span>'
         }
        });
        $('#datepicker2').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
             rightIcon: '<span class="fa fa-caret-down"></span>'
         }

        });
    </script>

</body>

</html>