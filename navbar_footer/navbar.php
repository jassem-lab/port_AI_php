<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "majdoub";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die('connection failed :' . mysqli_connect_error());
}
$sql = "UPDATE Counter SET visits = visits+1 WHERE id = 1";
$conn->query($sql);

$sql = "SELECT visits FROM Counter WHERE id = 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $visits = $row["visits"];
    }
} else {
    echo "no results";
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
    <title>Mohamed Majdoub</title>
    <link rel="shortcut icon" type="image/x-icon" href="./assets/images/<?php echo $logo ?>" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/owl.theme.css" />
    <link rel="stylesheet" href="css/magnific-popup.css" />
    <link rel="stylesheet" href="css/lightgallery.css" />
    <link rel="stylesheet" href="css/woocommerce.css" />
    <link rel="stylesheet" href="css/royal-preload.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css" />
    <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="plugins/revolution/revolution/css/settings.css">
    <!-- REVOLUTION NAVIGATION STYLE -->
    <link rel="stylesheet" type="text/css" href="plugins/revolution/revolution/css/navigation.css">
</head>

<body>
    <div id="royal_preloader"></div>
    <div id="page" class="site">
        <header id="site-header" class="site-header header-transparent">
            <!-- Main Header start -->
            <div class="octf-main-header">
 
  

  
                <div class="octf-area-wrap">
                    <div class="container-fluid octf-mainbar-container">
                        <div class="octf-mainbar">
                            <div class="octf-mainbar-row octf-row">
                                <div class="octf-col logo-col no-padding">
                                    <div id="site-logo" class="site-logo">
                                        <a href="index.php">
                                            <img src="./assets/images/<?php echo $logo ?>" alt="Majdoub" class="">
                                        </a>
                                    </div>
                                </div>
                                <div class="octf-col menu-col no-padding">
                                    <nav id="site-navigation" class="main-navigation">
                                        <ul class="menu">
                                            <li class="current-menu-item"><a href="index.php">Home</a> </li>
                                            <!-- <li><a href="our-services.html">Our Services</a></li> -->
                                            <li class=""><a href="portfolio.php">Portfolio</a> </li>
                                            <li class=""><a href="blog.php">Blog</a> </li>
                                            <li class=""><a href="devis.php">Devis</a> </li>
                                            <li><a href="contact.php">Contacts</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="octf-col cta-col text-right no-padding">
                                    <!-- Call To Action -->
                                    <div class="octf-btn-cta">
                                        <div class="octf-sidepanel octf-cta-header">
                                            <div class="site-overlay panel-overlay"></div>
                                            <div id="panel-btn" class="panel-btn octf-cta-icons">
                                                <i class="ot-flaticon-menu"></i>
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
                                        <img src="./assets/images/<?php echo $logo ?>" alt="mMajdoub">
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
                                                    <a href="index.php">Home</a>

                                                </li>
                                                
                                                <li class=""><a href="#">Services</a>
                                                
                                                </li>
                                                <li class=""><a href="#">Portfolio</a>
                                                    
                                                </li>
                                                <li class="menu-item-has-children"><a href="blog.html">Blog</a>
                                                  
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

        <div id="side-panel" class="side-panel">
            <a href="#" class="side-panel-close"><i class="ot-flaticon-close-1"></i></a>
            <div class="side-panel-block">
                <div class="side-panel-wrap">
                    <div class="the-logo">
                        <a href="index-html">
                            <img src="./assets/images/<?php echo $logo ?>" alt="Majdoub">
                        </a>
                    </div>
                 
                    
                    <div class="ot-heading ">
                        <h2 class="main-heading">Contact Info</h2>
                    </div>
                    <div class="side-panel-cinfo">
                        <ul class="panel-cinfo">
                            <li class="panel-list-item">
                                <span class="panel-list-icon"><i class="ot-flaticon-place"></i></span>
                                <span class="panel-list-text"><?php echo $adresse ?></span>
                            </li>
                            <li class="panel-list-item">
                                <span class="panel-list-icon"><i class="ot-flaticon-mail"></i></span>
                                <span class="panel-list-text"><?php echo $mail ?></span>
                            </li>
                            <li class="panel-list-item">
                                <span class="panel-list-icon"><i class="ot-flaticon-phone-call"></i></span>
                                <span class="panel-list-text">+216 <?php echo $tel1 ?></span>
                            </li>
                        </ul>
                    </div>
                    <div class="side-panel-social">
                        <ul>
                            <li><a href="https://<?php echo $twitter ?>" target="_self"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="https://<?php echo $facebook ?>" target="_self"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://<?php echo $linkedin ?>" target="_self"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="https://<?php echo $instagram ?>" target="_self"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>