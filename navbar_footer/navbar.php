<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "majdoub";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die('connection failed :' . mysqli_connect_error());
}
$mail = "";
$url = "";
$Signature = "";
$nom = "";
$logo = "";
$tel1 = "";
$tel2 = "";
$tel3 = "";
$mail1 = "";
$mail2 = "";
$mail3 = "";
$adresse = "";
$adresse2 = "";
$linkedin = "";
$facebook = "";
$instagram = "";
$twitter = "";
$behance = "";

$req = "select * from parametres where id = 1";
$query = mysqli_query($conn, $req);
while ($enreg = mysqli_fetch_array($query)) {
    $mail = $enreg["mail"];
    $url = $enreg["url"];
    $signature = $enreg["signature"];
    $nom = $enreg["nom"];
    $logo = $enreg["logo"];
    $tel1 = $enreg["tel1"];
    $tel2 = $enreg["tel2"];
    $adresse = $enreg["adresse"];
    // $linkedin = $enreg["linkedin"];
    $twitter = $enreg["twitter"];
    $facebook = $enreg["facebook"];
    $instagram = $enreg["instagram"];
    $behance = $enreg["behance"];

}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Theratio</title>
    <link rel="shortcut icon" type="image/x-icon" href="./images/favicon.png" />
    <link rel="stylesheet" href="./css/font-awesome.min.css" />
    <link rel="stylesheet" href="./css/flaticon.css" />
    <link rel="stylesheet" href="./css/owl.carousel.min.css" />
    <link rel="stylesheet" href="./css/owl.theme.css" />
    <link rel="stylesheet" href="./css/magnific-popup.css" />
    <link rel="stylesheet" href="./css/lightgallery.css" />
    <link rel="stylesheet" href="./css/woocommerce.css" />
    <link rel="stylesheet" href="./css/royal-preload.css" />
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./style.css" />
    <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="./plugins/revolution/revolution/css/settings.css">
    <!-- REVOLUTION NAVIGATION STYLE -->
    <link rel="stylesheet" type="text/css" href="./plugins/revolution/revolution/css/navigation.css">
</head>

<body >
    <div id="royal_preloader"></div>
    <div id="page" class="site">
        <header id="site-header" class="site-header header-static">
            <!-- Main Header start -->
            <div class="header-desktop">
                <div class="top-header" style="background-image: url('./images/topbar.jpg');">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="top-info">
                                    <h6>Visit Us Daily:</h6>
                                    <p>
                                        <?php echo $adresse ?>
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 text-center">
                                <div class="top-logo">
                                    <a href="index.html">

                                        <img src="./assets/images/<?php echo $logo ?>" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="top-info text-right">
                                    <h6>Phone Us:</h6>
                                    <p>
                                        <?php echo $tel1 ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-header-s2" style="">
                    <div class="container">
                        <div class="octf-main-header">
                            <div class="octf-area-wrap">
                                <div class="container-fluid octf-mainbar-container">
                                    <div class="octf-mainbar">
                                        <div class="octf-mainbar-row octf-row">
                                            <div class="octf-col logo-col no-padding">
                                                <div class="octf-sidepanel octf-cta-header">
                                                    <div class="site-overlay panel-overlay"></div>
                                                    <div id="panel-btn" class="panel-btn octf-cta-icons">
                                                        <i class="ot-flaticon-menu"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="octf-col menu-col no-padding">
                                                <nav id="site-navigation" class="main-navigation">
                                                    <ul class="menu">
                                                        <li class=" current-menu-item current-menu-ancestor">
                                                            <a href="index.php">Home</a>
                                                        </li>
                                                        <li class=""><a href="portfolio.php">Portfolio</a>
                                                        </li>
                                                        <!-- <li class=""><a href="blog.php">Blog</a>
                                                        </li> -->
                                                        <li class="menu-item-has-children"><a href="#">Services</a>
                                                            <ul class="sub-menu">
                                                                
                                                                        <?php
                                                                $req = "select * from service_type"; 
                                                                $query = mysqli_query($conn, $req);
                                                                while ($enreg = mysqli_fetch_array($query)) {
                                                                    ?>
                                                                    <li><a href="servicedetails.php?ID=<?php echo $enreg['id']; ?>"><?php echo $enreg['title'] ?></a></li>
                                                                <?php } ?>
                                                                ?>
                                                            </ul>
                                                        </li>
                                                        <li><a href="contact.php">Contact</a></li>
                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header_mobile">
                <div class="container-fluid">
                    <div class="octf-mainbar-row octf-row">
                        <div class="octf-col">
                            <div class="mlogo_wrapper clearfix">
                                <div class="mobile_logo">
                                    <a href="index.html">
                                        <img src="images/logo.svg" alt="Theratio">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="octf-col justify-content-end">
                            <div class="octf-search octf-cta-header">
                                <div class="toggle_search octf-cta-icons">
                                    <i class="ot-flaticon-search"></i>
                                </div>
                                <!-- Form Search on Header -->
                                <div class="h-search-form-field collapse">
                                    <div class="h-search-form-inner">
                                        <form role="search" method="get" class="search-form">
                                            <input type="search" class="search-field" placeholder="SEARCH..." value=""
                                                name="s">
                                            <button type="submit" class="search-submit"><i
                                                    class="ot-flaticon-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="octf-menu-mobile octf-cta-header">
                                <div id="mmenu-toggle" class="mmenu-toggle">
                                    <button><i class="ot-flaticon-menu"></i></button>
                                </div>
                                <div class="site-overlay mmenu-overlay"></div>
                                <div id="mmenu-wrapper" class="mmenu-wrapper on-right">
                                    <div class="mmenu-inner">
                                        <a class="mmenu-close" href="#"><i class="ot-flaticon-right-arrow"></i></a>
                                        <div class="mobile-nav">
                                            <ul id="menu-main-menu" class="mobile_mainmenu none-style">
                                                <li
                                                    class="menu-item-has-children current-menu-item current-menu-ancestor">
                                                    <a href="index.html">Home</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="index.html">Main Home</a></li>
                                                        <li class="current-menu-item"><a href="index-2.html">Interior
                                                                Design</a></li>
                                                        <li><a href="index-3.html">Studio Home</a></li>
                                                        <li><a href="index-4.html">Architecture Agency</a></li>
                                                        <li><a href="index-5.html">Design Company</a></li>
                                                        <li><a href="index-6.html">Home Video</a></li>
                                                        <li><a href="home-full-screen.html">Home Full Screen</a></li>
                                                        <li><a href="one-page.html">Home One Page</a></li>
                                                        <li><a href="index-sidenav.html">Home with Side Menu</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children"><a href="#">Pages</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="about-us.html">About Us</a></li>
                                                        <li><a href="our-services.html">Our Services</a></li>
                                                        <li><a href="our-team.html">Our Team</a></li>
                                                        <li><a href="single-team.html">Single Team</a></li>
                                                        <li><a href="our-process.html">Our Process</a></li>
                                                        <li><a href="our-studio.html">Our Studio</a></li>
                                                        <li class="menu-item-has-children"><a href="shop.html">Shop</a>
                                                            <ul class="sub-menu">
                                                                <li><a href="single-product.html">Single Product</a>
                                                                </li>
                                                                <li><a href="checkout-page.html">Checkout Page</a></li>
                                                                <li><a href="cart-page.html">Cart Page</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="typography.html">Typography</a></li>
                                                        <li><a href="elements.html">Elements</a></li>
                                                        <li><a href="faq.html">FAQS</a></li>
                                                        <li><a href="cooming-soon.html">Coming Soon</a></li>
                                                        <li><a href="404-error.html">404 Error</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children"><a href="#">Services</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="servcies-detail-1.html">Design & Planning</a></li>
                                                        <li><a href="servcies-detail-2.html">Exterior Design</a></li>
                                                        <li><a href="servcies-detail-3.html">Custom Solutions</a></li>
                                                        <li><a href="servcies-detail-4.html">Furniture & Decor</a></li>
                                                        <li><a href="servcies-detail-5.html">Creating Concept</a></li>
                                                        <li><a href="servcies-detail-6.html">Author’s Control</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children"><a href="#">Portfolio</a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item-has-children"><a href="#">Portfolio
                                                                Types</a>
                                                            <ul class="sub-menu">
                                                                <li><a href="portfolio-masonry.html">Portfolio Grid
                                                                        Masonry</a></li>
                                                                <li><a href="portfolio-no-gap.html">Portfolio Grid No
                                                                        Gap</a></li>
                                                                <li><a href="portfolio-under.html">Portfolio Info Under
                                                                        Image</a></li>
                                                                <li><a href="portfolio-metro.html">Portfolio Metro</a>
                                                                </li>
                                                                <li><a href="portfolio-metro-no-gap.html">Portfolio
                                                                        Metro No Space</a></li>
                                                                <li><a href="portfolio-gallery.html">Portfolio
                                                                        Gallery</a></li>
                                                                <li><a href="portfolio-slider.html">Portfolio Slider</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="menu-item-has-children"><a href="#">Portfolio
                                                                Layout</a>
                                                            <ul class="sub-menu">
                                                                <li><a href="portfolio-two-column.html">Two Columns</a>
                                                                </li>
                                                                <li><a href="portfolio-three-column.html">Three
                                                                        Columns</a></li>
                                                                <li><a href="portfolio-three-column-wide.html">Three
                                                                        Columns Wide</a></li>
                                                                <li><a href="portfolio-four-column-wide.html">Four
                                                                        Columns Wide</a></li>
                                                                <li><a href="portfolio-five-column-wide.html">Five
                                                                        Columns Wide</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="menu-item-has-children"><a href="#">Portfolio Hover
                                                                Types</a>
                                                            <ul class="sub-menu">
                                                                <li><a href="portfolio-standar.html">Standar</a></li>
                                                                <li><a href="portfolio-detail-slider.html">Slider
                                                                        Images</a></li>
                                                                <li><a href="portfolio-left.html">Left Image</a></li>
                                                                <li><a href="portfolio-right.html">Right Image</a></li>
                                                                <li><a href="portfolio-small.html">Small Image</a></li>
                                                                <li><a href="portfolio-big.html">Big Image</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="menu-item-has-children"><a
                                                                href="image-scale.html">Image-scale</a>
                                                            <ul class="sub-menu">
                                                                <li><a href="image-scale.html">Image Scale</a></li>
                                                                <li><a href="show-overlay-info.html">Show Overlay
                                                                        Info</a></li>
                                                                <li><a href="hidden-overlay-info.html">Hidden Overlay
                                                                        Info</a></li>
                                                                <li><a href="background-solid.html">Background Solid</a>
                                                                </li>
                                                                <li><a href="hidden-1.html">Hidden 1</a></li>
                                                                <li><a href="hidden-2.html">Hidden 2</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children"><a href="blog.html">Blog</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="blog.html">Blog Listing</a></li>
                                                        <li><a href="blog-grid.html">Blog Grid</a></li>
                                                        <li><a href="post.html">Blog Single</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="contact.html">Contacts</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div id="side-panel" class="side-panel side-panel-left">
            <a href="#" class="side-panel-close"><i class="ot-flaticon-close-1"></i></a>
            <div class="side-panel-block">
                <div class="side-panel-wrap">
                    <div class="the-logo">
                        <a href="index-html">
                            <img src="./assets/images/<?php echo $logo ?>">
                        </a>
                    </div>
                    <div class="ot-heading ">
                        <h2 class="main-heading">Contact Info</h2>
                    </div>
                    <div class="side-panel-cinfo">
                        <ul class="panel-cinfo">
                            <li class="panel-list-item">
                                <span class="panel-list-icon"><i class="ot-flaticon-place"></i></span>
                                <span class="panel-list-text">
                                    <?php echo $adresse ?>
                                </span>
                            </li>
                            <li class="panel-list-item">
                                <span class="panel-list-icon"><i class="ot-flaticon-mail"></i></span>
                                <span class="panel-list-text">
                                    <?php echo $mail ?>
                                </span>
                            </li>
                            <li class="panel-list-item">
                                <span class="panel-list-icon"><i class="ot-flaticon-phone-call"></i></span>
                                <span class="panel-list-text">
                                    <?php echo $tel1 ?>
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class="side-panel-social">
                        <ul>
                            <li><a href="<?php echo $facebook ?>" target="_self"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li><a href="<?php echo $twitter ?>" target="_self"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="<?php echo $instagram ?>" target="_self"><i class="fab fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>