<?php include('./navbar_footer/navbar.php') ?>
<?php

$tab_query = "SELECT * FROM portfolio ORDER BY project_type";
$tab_result = mysqli_query($conn, $tab_query);
$tab_menu = '';
$tab_content = '';
$i = 0;
while ($row = mysqli_fetch_array($tab_result)) {
    
    if ($i == 0) {
        $tab_menu .= '
   <li class="active btn-details" style="outline: none !important; margin :15px ; "  ><a   href="#' . $row["project_type"] . '" data-toggle="tab">' . $row["project_type"] . '</a></li>
  ';
        $tab_content .= '
   <div id="' . $row["project_type"] . '" class="tab-pane fade in active">
  ';
    } else {
        $tab_menu .= '
   <li class="btn-details" style="outline: none !important ; margin :15px ; " ><a   href="#' . $row["project_type"] . '" data-toggle="tab">' . $row["project_type"] . '</a></li>
  ';
        $tab_content .= '
   <div id="' . $row["project_type"] . '" class="tab-pane fade">
  ';
    }
    $product_query = "SELECT * FROM portfolio WHERE project_type = '" . $row["project_type"] . "'"; 
    $product_result = mysqli_query($conn, $product_query);
    while ($sub_row = mysqli_fetch_array($product_result)) {
        $i = "0";
        $titre = $sub_row["titre"] ;
        $reqImg = "select * from portfolio_images where titre='$titre'" ; 
        $queryImg = mysqli_query($conn , $reqImg) ; 
        $data = mysqli_fetch_array($queryImg);

        $res = $data['image'];
        $res = explode(" ", $res);
        $count = count($res) - 1;
        
          

        $tab_content .= '
        <div class="project-item category-14 ">
        <div class="projects-box">
            <div class="projects-thumbnail">
                <a href="protfolio-view.php?productId='.$sub_row['id'].'">
                    <img style ="width : 250px ; " src="./assets/portfolio/'.$res[$i].'" alt="">
                </a>
                
                <div class="overlay">
                    <h5>'.$sub_row["titre"].'</h5>
                    <i class="ot-flaticon-add"></i>
                </div>
            </div>
            <div class="portfolio-info">
                <div class="portfolio-info-inner">
                    <h5><a class="title-link" href="portfolio-detail-slider.html">'.$sub_row["titre"].'</a></h5>
                    <p class="portfolio-cates">
                        <a href="#">'.$sub_row["strategy"].'</a>
                        <br/>
                        <a href="#" style="font-size : 12px">[ '.$sub_row["date"].' ]</a>
                      
                    </p>
                </div>
                <a class="overlay" href="portfolio-detail-slider.html"></a>
            </div>
        </div>
    </div>
  ';
    }
    $tab_content .= '<div style="clear:both"></div></div>';
    $i++;
}
?>
<div id="content" class="site-content">
    <div class="page-header dtable text-center header-transparent" style="background-image: url(./assets/images/pheader-portfolio.jpg) ;     margin-top: 0px;
    margin-bottom: 0px;">
        <div class="dcell">
            <div class="container">
                <h1 class="page-title">Portfolio</h1>
                <ul id="breadcrumbs" class="breadcrumbs none-style">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Portfolio</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<section class="our-portfolio" style="background-color : white">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center theratio-align-center">
                <div class="ot-heading is-dots">
                    <span>[ our portfolio ]</span>
                    <h2 class="main-heading">Some of Our Works<br> and Case Studies for Clients</h2>
                </div>
                <div class="space-40"></div>
                <div class="project-filter-wrapper">
                    <ul class="nav nav-tabs" style="display : flex ; justify-content : center ;" >
                        <?php
            echo $tab_menu;
            ?>
                    </ul>
                </div>
                <div class="tab-content">
                    <br />
                    <?php
            echo $tab_content;
            ?>
                </div>
              
            </div>
        </div>
    </div>
    </div>
</section> -->


<!-- 
<div id="content" class="site-content">
    <div class="page-header dtable text-center header-transparent"
        style="background-image: url(./assets/images/pheader-portfolio.jpg) ">
        <div class="dcell">
            <div class="container">
                <h1 class="page-title">Portfolio</h1>
                <ul id="breadcrumbs" class="breadcrumbs none-style">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Portfolio</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<section class="our-portfolio" style="background-color : white">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center theratio-align-center">
                <div class="ot-heading is-dots">
                    <span>[ our portfolio ]</span>
                    <h2 class="main-heading">Some of Our Works<br> and Case Studies for Clients</h2>
                </div>
                <div class="space-40"></div>
                <div class="project-filter-wrapper">
                <ul style="display : flex ; justify-content : center ; list-style-type: none">
                        <?php
                      echo $tab_menu;
                     ?></ul>
                   
                    <?php    echo $tab_content; ?>  
                    <div class="btn-block text-center">
                        <a href="portfolio-five-column-wide.html" class="btn-loadmore octf-btn">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<?php include('./navbar_footer/footer.php') ?>  