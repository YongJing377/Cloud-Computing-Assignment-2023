<?php
$servername = "proton-db-1.c3iemkdozdsc.us-east-1.rds.amazonaws.com";
$username = "admin1234";
$password = "admin1234";
$dbname = "Proton";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="facebook-domain-verification" content="36811ahc3o68bjsltdjzg78vv75hqi" />
    <title>PROTON - ADMIN</title>
    <meta name="description"
        content="Experience the difference in every drive at Proton. Find out more about our cars, explore our latest promotions or book your next service and test drive here." />

    <meta name="application_name" content="Proton 2.0" />

    <meta name="og:image" content="https://www.proton.com" />

    <!-- Standard Icons -->
    <link rel="icon" type="image/png" href="/img/favicon.ico" sizes="196x196" />
    <link rel="icon" type="image/png" href="/img/favicon.ico" sizes="96x96" />
    <link rel="icon" type="image/png" href="/img/favicon.ico" sizes="32x32" />
    <link rel="icon" type="image/png" href="/img/favicon.ico" sizes="16x16" />
    <link rel="icon" type="image/png" href="/img/favicon.ico" sizes="128x128" />
    <link rel="icon" type="image/png" href="/img/favicon.ico" sizes="128x128" />

    <!-- Font-Awesome -->
    <link rel="stylesheet" href="./css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- SLICK CROUSEL --->
    <link rel="stylesheet" href="./css/slick.css">
    <link rel="stylesheet" href="./css/slick-theme.css">

    <!-- JQuery UI 1.12.1 -->
    <link rel="stylesheet" href="./css/jquery-ui.min.css">

    <!-- Jquery Selectize for custom dropdowns --->
    <link rel="stylesheet" href="./css/selectize.css">

    <!-- Compiled custom css -->
    <link rel="stylesheet" type="text/css" href="./css/main.css">

    <link rel="stylesheet" type="text/css" href="./css/modal.css" />

    <link rel="stylesheet" type="text/css" href="./css/bundle.css">

    <link rel="stylesheet" type="text/css" href="./css/form-register.css">


    <!-- Compiled free form custom css -->


    <!-- Compiled free form page level styling -->


    <!-- Compiled free form page level js -->


    <!-- Facebook Pixel Code -->
    <script>
        !function (f, b, e, v, n, t, s) {
            if (f.fbq) return; n = f.fbq = function () {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n; n.push = n; n.loaded = !0; n.version = '2.0';
            n.queue = []; t = b.createElement(e); t.async = !0;
            t.src = v; s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '868019153332404');
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1" src="https://www.facebook.com/tr?id=868019153332404&ev=PageView
    &noscript=1" />
    </noscript>
    <!-- End Facebook Pixel Code -->

    <!-- Google Tag Manager -->
    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5C9Q5M9');
    </script>
    <!-- End Google Tag Manager -->
    <style>
        .readonly {
            display: inline-block;
        }
    </style>
</head>

<body>
    <div class="container-fluid no-gutters">
        <header class="header-static">
            <nav class="navbar ">


                <a class="navbar-brand" href="./">
                    <img src="./img/PROTON Static Logo.png" alt="" width="338" height="60" DisableWebEdit="False" />
                </a>
                <button type="button" class="btn" onclick="changeReadonly()">Admin Mode</button>


                <div class="menu-toggle-button">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

                <div class="nav-search-button">
                    <a href="#">
                        <img src="./img/search-icon.png" alt="" width="24" height="24" />
                    </a>

                    <div class="nav-search-input">
                        <input type="text" value="" placeholder="Enter a text to search for...">
                    </div>
                </div>

                <div class="menu-wrapper">
                    <div class="lang-social-nav">
                        <ul>
                            <li>
                                <ul class="lang">
                                    <li class="country-select-item">
                                        <!-- Country Select Component -->
                                        <select name="country-select" class="country-select">
                                            <option value="/en" data-url="/en"
                                                data-imagesrc="./img/malaysia-flag-icon.png" data-description="">
                                                MY
                                            </option>
                                        </select>
                                        <!--/END Country Select Component -->
                                    </li>
                                    <li class="lang-select">
                                        <a href="./" class="selected-text-item">EN</a>
                                    </li>

                                </ul>
                            </li>
                            <li>
                                <ul class="social">
                                    <li>
                                        <a href="https://www.facebook.com/ProtonCarsOfficial/" class="" target="_blank">
                                            <img src="./img/fb_navicon_top.png" alt="fb-icon" width="60" height="60" />
                                        </a>

                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/protoncars" class="" target="_blank">
                                            <img src="./img/ig_navicon_top.png" alt="instagram-icon" width="60"
                                                height="60" />
                                        </a>

                                    </li>
                                    <li>
                                        <a href="https://www.youtube.com/protoninteractive" class="" target="_blank">
                                            <img src="./img/yt_navicon_top.png" alt="Youtube-icon" width="60"
                                                height="60" />
                                        </a>

                                    </li>
                                </ul>


                            </li>
                        </ul>
                    </div>
                    <!-- Mega Menu -->
                    <div class="mega-menu-wrapper d-flex justify-content-lg-center">
                        <div class="mega-menu justify-content-lg-center">
                            <div class="menu-nav-tabs">
                                <ul>
                                    <li class="menu-item-selected" data-targetmenu="find-a-car">
                                        <span>Find a car <i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                    </li>
                                    <li class="" data-targetmenu="shopping-tools">
                                        <span>Shopping Tools <i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                    </li>
                                </ul>
                            </div>
                            <div class="menu-item find-a-car  menu-item-active">
                                <div class="mobile-menu-nav-tab tablet-view mobile-view">
                                    <a class="collapsed" data-toggle="collapse" href="#find-a-car" role="button"
                                        aria-expanded="false" aria-controls="find-a-car">
                                        <h3>Find a car <span><i class="fa" aria-hidden="true"></i></span></h3>
                                    </a>

                                </div>

                                <div class="menu-items-wrapper collapse" id="find-a-car">
                                    <div class="car-item">
                                        <a href="./document/x50Details.pdf" target="_blank">
                                            <div class="car-item-desc">
                                                <span class="car-title">X50<br />
                                                    Starting at RM 86,300.00*</span>
                                            </div>
                                            <div>
                                                <img src="./img/X50.png" alt="" width="442" height="170"
                                                    DisableWebEdit="False" />
                                            </div>
                                        </a>
                                    </div>
                                    <div class="car-item">
                                        <a href="./document/x70Details.pdf" target="_blank">
                                            <div class="car-item-desc">
                                                <span class="car-title">X70<br />
                                                    Starting at RM 98,800.00*</span>
                                            </div>
                                            <div>
                                                <img src="./img/X70.png" alt="x70 thumbnail July 2022" width="442"
                                                    height="170" DisableWebEdit="False" />
                                            </div>
                                        </a>
                                    </div>
                                    <div class="car-item">
                                        <a href="./document/sagaDetails.pdf" target="_blank">
                                            <div class="car-item-desc">
                                                <span class="car-title">SAGA<br />
                                                    Starting at RM 34,800.00*</span>
                                            </div>
                                            <div>
                                                <img src="./img/saga.png" alt="Saga Navigation" width="442" height="170"
                                                    DisableWebEdit="False" />
                                            </div>
                                        </a>
                                    </div>
                                    <div class="car-item">
                                        <a href="./document/personaDetails.pdf" target="_blank">
                                            <div class="car-item-desc">
                                                <span class="car-title">PERSONA<br />
                                                    Starting at RM 47,800.00*</span>
                                            </div>
                                            <div>
                                                <img src="./img/persona.png" alt="" width="442" height="170"
                                                    DisableWebEdit="False" />
                                            </div>
                                        </a>
                                    </div>
                                    <div class="car-item">
                                        <a href="./document/irizDetails.pdf" target="_blank">
                                            <div class="car-item-desc">
                                                <span class="car-title">IRIZ<br />
                                                    Starting at RM 42,800.00*</span>
                                            </div>
                                            <div>
                                                <img src="./img/iriz.png" alt="" width="442" height="170"
                                                    DisableWebEdit="False" />
                                            </div>
                                        </a>
                                    </div>
                                    <div class="car-item">
                                        <a href="./document/exoraDetails.pdf" target="_blank">
                                            <div class="car-item-desc">
                                                <span class="car-title">EXORA<br />
                                                    Starting at RM 62,800.00*</span>
                                            </div>
                                            <div>
                                                <img src="./img/exora.png" alt="exora navigation thumbnail" width="442"
                                                    height="170" DisableWebEdit="False" />
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-item shopping-tools ">
                                <div class="mobile-menu-nav-tab tablet-view mobile-view">
                                    <a class="collapsed" data-toggle="collapse" href="#shopping-tools" role="button"
                                        aria-expanded="false" aria-controls="shopping-tools">
                                        <h3>Shopping Tools <span><i class="fa" aria-hidden="true"></i></span></h3>
                                    </a>
                                </div>
                                <div class="menu-items-wrapper collapse" id="shopping-tools">
                                    <div class="tool-item">

                                        <a href="/BookingPage.html">
                                            <img src="./img/testdrive-icon.svg" alt="" width="80" height="85"
                                                DisableWebEdit="False" />
                                            <span>Book Test Drive</span>
                                        </a>
                                    </div>
                                    <div class="tool-item">

                                        <a href="./Admin_index.php">
                                            <img src="./img/carpricelist-icon.svg" alt="" width="80" height="85"
                                                DisableWebEdit="False" />
                                            <span>Car Price List</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <main role="main">





            <!-- Home page Carousel -->
            <section id="section_carousel_herocarouselba08955179f24523b4f7bf90eb59afd1"
                class="container-fluid no-margin no-padding   section-margin-bottom-40">

                <div class="row no-gutters">

                    <div class="col">
                        <!-- ////START /// Main Carousel /// -->
                        <div id="carousel_main_container_herocarouselba08955179f24523b4f7bf90eb59afd1"
                            class="carousel-main-container">

                            <div class="carousel-main"
                                data-slick='{"infinite": false, "autoplay":true, "autoplaySpeed": , "speed": , "slidesToShow": 1, "slidesToScroll": 1, "dots":true, "arrows":false, "infinite": true, "useTransform": true, "fade": false, "cssEase":"ease-out"}'>

                                <div class="banner-wrapper" data-video-link="">
                                    <div class="banner-main feature-banner white left center-y"
                                        style="background-image: url('./img/Career_MainBanner_desktop.jpg')">


                                        <img src="./img/Career_MainBanner_mobile.jpg" class="sm-mobile-view" alt=""
                                            width="640" height="500" DisableWebEdit="False" />


                                        <div class="banner-text">


                                            <h2>CAR PRICE LIST</h2>




                                            <div class="banner-cta ">

                                            </div>

                                            <div class="banner-cta ">

                                            </div>

                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ////END /// Main Carousel /// -->
                    </div>

                </div>

            </section>
            <!-- /End Home page Carousel -->
            <?php
            // Get the ID of the record to be deleted from the POST request
            $id = $_POST["addId"];
            if ($id != 1) {
                $id = $id - 1;
            }
            // prepare and execute SELECT query
            $query = "SELECT * FROM Product WHERE ProductID = $id";
            $result = mysqli_query($conn, $query);

            // check if query executed successfully
            if (!$result) {
                echo "Error executing query: " . mysqli_error($conn);
                exit();
            }

            // fetch the first row from the result set
            $row = mysqli_fetch_assoc($result);
            // echo "<h1></h1>";

            ?>    

            <section class="container-fluid no-margin no-padding light-grey-2 cars-price-list-section-wrapper">
                <div class="container">
                    <div class="row no-gutters">
                        <div class="col text-center">
                            <form action="add-record-process.php" method="POST"
                                class="online-booking-form x50-booking-form text-left"
                                onsubmit="return confirm('Are you sure to add record?');">
                                <input type="text" value="<?php echo $id; ?>" id="productid" name="productid" hidden="true" readonly>
                                <div class="row no-gutters">
                                    <div class="col">
                                        <div class="form-group"
                                            style="display: flex; justify-content: center; align-items: center;">
                                            <label for="model">Model:</label>
                                            <input type="text" class="form-control" id="model" name="model"
                                                value="<?php echo $row['Model']; ?>" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="row no-gutters">
                                    <div class="col">
                                        <div class="form-group"
                                            style="display: flex; justify-content: center; align-items: center;">
                                            <label for="variant">Variant:</label>
                                            <input type="text" class="form-control" id="variant" name="variant"
                                                required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row no-gutters">
                                    <div class="col">
                                        <div class="form-group"
                                            style="display: flex; justify-content: center; align-items: center;">
                                            <label for="pmprice">PM Price:</label>
                                            <input type="text" class="form-control" id="pmprice" name="pmprice"
                                                required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row no-gutters">
                                    <div class="col">
                                        <div class="form-group"
                                            style="display: flex; justify-content: center; align-items: center;">
                                            <label for="emprice">EM Price:</label>
                                            <input type="text" class="form-control" id="emprice" name="emprice"
                                                required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row no-gutters">
                                    <div class="col">
                                        <div class="form-group"
                                            style="display: flex; justify-content: center; align-items: center;">
                                            <label for="labuan">Labuan Price:</label>
                                            <input type="text" class="form-control" id="labuan" name="labuan" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row no-gutters">
                                    <div class="col">
                                        <div class="form-group"
                                            style="display: flex; justify-content: center; align-items: center;">
                                            <label for="langkawi">Langkawi:</label>
                                            <input type="text" class="form-control" id="langkawi" name="langkawi"
                                                required>
                                        </div>
                                    </div>
                                </div>



                                <div class="form-submit-border"><input class="btn  btn-default" type="submit"
                                        value="Add"></input>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </section>

        </main>


        <footer>

            <div class="row no-gutters">
                <div class="col-sm-12 col-md-9 col-lg-9 col-xl-9">
                    <div class="footer-site-map">
                        <div class="row no-gutters">
                            <div class="col-sm-12 col-md-2">


                                <div class="site-map-title-wrapper">
                                    <span class="site-map-title">ABOUT US</span>
                                    <span class="site-map-item-toggle"></span>
                                </div>
                                <div class="site-map-items-wrapper">
                                    <a class="site-map-item" href="/en/corporate/about-us/brand-story">Brand Story</a><a
                                        class="site-map-item"
                                        href="/en/corporate/about-us/awards-recognition">Awards</a><a
                                        class="site-map-item" href="/en/corporate/about-us/management">Management</a><a
                                        class="site-map-item"
                                        href="/en/corporate/about-us/manufacturing">Manufacturing</a><a
                                        class="site-map-item"
                                        href="/en/corporate/about-us/research-development">R&D</a><a
                                        class="site-map-item" href="/en/corporate/oce-awards">OCE Awards</a>
                                </div>

                            </div>
                            <div class="col-sm-12 col-md-2">


                                <div class="site-map-title-wrapper">
                                    <span class="site-map-title">MOTORSPORTS</span>
                                    <span class="site-map-item-toggle"></span>
                                </div>
                                <div class="site-map-items-wrapper">
                                    <a class="site-map-item" href="/en/corporate/motorsports/the-team">Team</a><a
                                        class="site-map-item" href="/en/corporate/motorsports/fanzone">Fan Zone</a><a
                                        class="site-map-item" href="/en/corporate/motorsports/the-cars">Cars</a><a
                                        class="site-map-item" href="/en/corporate/motorsports/heritage">Heritage</a>
                                </div>

                            </div>
                            <div class="col-sm-12 col-md-2">


                                <div class="site-map-title-wrapper">
                                    <span class="site-map-title">PRESS RELEASE</span>
                                    <span class="site-map-item-toggle"></span>
                                </div>
                                <div class="site-map-items-wrapper">
                                    <a class="site-map-item" href="/en/corporate/press-release">Latest News</a>
                                </div>

                            </div>
                            <div class="col-sm-12 col-md-2">


                                <div class="site-map-title-wrapper">
                                    <span class="site-map-title">TALK TO US</span>
                                    <span class="site-map-item-toggle"></span>
                                </div>
                                <div class="site-map-items-wrapper">
                                    <a class="site-map-item" href="/en/shopping-tools/contact-us">Contact Form</a><a
                                        class="site-map-item" href="/en/corporate/proton-global-network">Proton Global
                                        Network</a><a class="site-map-item" href="/en/shopping-tools/contact">Call
                                        Customer Care Hotline : 1-800-88-8398</a><a class="site-map-item"
                                        href="/en/whistleblowing-policy">Whistleblowing Policy</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-sm-12 order-sm-1 col-md-6 order-md-2 col-lg-6 text-md-right">
                    <div class="footer-terms-condition">
                        <ul class="social-footer">
                            <li>
                                <a href="https://www.facebook.com/ProtonCarsOfficial/" class="" target="_blank">
                                    <img src="./img/fb_navicon_top.png" alt="fb-icon" width="60" height="60" />
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/protoncars" class="" target="_blank">
                                    <img src="./img/ig_navicon_top.png" alt="instagram-icon" width="60" height="60" />
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/protoninteractive" class="" target="_blank">
                                    <img src="./img/yt_navicon_top.png" alt="Youtube-icon" width="60" height="60" />
                                </a>
                            </li>
                        </ul>
                        <ul class="terms-condition">
                            <li><a rel="noopener noreferrer"
                                    href="/-/media/project/proton-group/proton/media/car-models/persona/new-360-visuals/online-booking-terms-and-conditions.ashx?la=en&amp;hash=9193A0E09217A873178A5B4AC9CBD5E4E3EE5B82"
                                    target="_blank">Terms & Conditions</a></li>
                            <li><a rel="noopener noreferrer"
                                    href="/-/media/project/proton-group/proton/media/footer/privacy-notice-proton.ashx?la=en&amp;hash=D02C138AFA284A466DA02AA59466B9F2A0F45650"
                                    target="_blank">Privacy Notice</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 order-sm-2 col-md-6 order-md-1 col-lg-6">
                    <div class="copyright-country-select">
                        <div class="footer-country-select country-select-item ">
                            <label for="countrySelectFooter">Select Country :</label>

                            <!-- Country Select Component -->

                            <!-- Country Select Component -->
                            <select name="country-select" class="country-select">
                                <option value="/en" data-url="/en" data-imagesrc="./img/malaysia-flag-icon.png"
                                    data-description="">
                                    MY
                                </option>
                            </select>
                            <!--/END Country Select Component -->


                            <!--/END Country Select Component -->

                        </div>


                        <div class="footer-copyright">
                            <img src="./img/DRB6-01.svg" alt="" width="87" height="29" DisableWebEdit="False" />
                            <span>&#169; 2023 PROTON HOLDINGS BERHAD (623177-A)</span>
                        </div>


                    </div>

                </div>

            </div>

        </footer>

    </div>

    <!--////////// Libraries ////////////-->
    <!-- Jquery 3.2.1 -->
    <script src="./js/jquery-3.2.1.min.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>


    <!-- JQuery UI 1.12.1 -->
    <script src="./js/jquery-ui.min.js"></script>

    <!-- ddSlick -->
    <script src="./js/ddSlick.js"></script>

    <!-- SLICK CROUSEL --->
    <script src="./js/slick.min.js"></script>

    <!-- Jquery Selectize for custom dropdowns --->
    <script src="./js/selectize.js"></script>

    <!--////////// END/ Libraries ////////////-->
    <!-- <script src="/assets/js/bundle.js"></script> -->

    <script src="./js/nav-bar.js"></script>

    <!--////////// Components Scripts ////////////-->
    <script src="./js/app.js"></script>
    <script src="./js/config.js"></script>
    <script src="./js/global-helpers-function.js"></script>
    <script src="./js/sub-menu-nav.js"></script>
    <script src="./js/secondary-nav.js"></script>
    <script src="./js/widgets.js"></script>
    <script src="./js/carousel.js"></script>
    <script src="./js/gallery-slider.js"></script>
    <script src="./js/video-banner.js"></script>
    <!---    || path.ToLower().Contains("protonx70") || path.ToLower().Contains("copy-of-x70") -->
    <!-- Compiled free form custom js -->
    <!--////////// END/ Components Scripts ////////////-->
</body>

</html>

<?php

// Close database connection
$conn->close();
?>