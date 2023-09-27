<?php include('./navbar_footer/navbar.php') ?>

<div id="content" class="site-content">

    <?php

$productId = $_GET['productId'];

$sql = "SELECT * FROM portfolio WHERE id = $productId";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($result))
{
    $i = "";
        $titre = $row["titre"] ;
        $reqImg = "select * from portfolio_images where titre='$titre'" ; 
        $queryImg = mysqli_query($conn , $reqImg) ; 
        $data = mysqli_fetch_array($queryImg);

        $res = $data['image'];
        $res = explode(" ", $res);
        $count = count($res) - 1;
        $count = count($res) - 1;
        for ($i = 0; $i < $count; ++$i) {
            ?>

    <?php
        }

    echo "<div class='page-header dtable text-center header-transparent' style='    margin-top: 0px;
    margin-bottom: 0px; background: url(./images/contact.jpg) ; background-size: cover;'>
    <div class='dcell'>
        <div class='container'>
            <h1 class='page-title'>$row[titre]</h1>
            <ul id='breadcrumbs' class='breadcrumbs none-style'>
                <li><a href='index.php'>Home</a></li>
                <li><a href='portfolio.php'>Portfolio</a></li>
                <li class='active'>$row[titre]</li>
            </ul>
        </div>
    </div>
</div>";
    echo '<section class="portfolio-detail p-0">
    <div class="container">
        <div class="row">
            <div class="space-90"></div>
            <div class="col-lg-6 col-md-12">';
            echo "<h4>$row[titre]</h4><br>";  
            echo "<p>$row[description] <br>";
            echo '  <div class="space-20"></div> <div class="space-5"></div>';
            echo ' <div class="row">
            <div class="col-md-4 col-sm-6 col-6">
                <div class="p-detail-info">';
                echo " <h6>architect:</h6>
                <p>$row[architect]</p>
            </div>";
            echo '   <div class="space-20"></div>
            </div>  <div class="col-md-4 col-sm-6 col-6">
            <div class="p-detail-info">' ; 
            echo " <h6>client:</h6>
            <p>$row[client]</p> </div>" ; 
            echo '<div class="space-20"></div>
            </div>';
            echo '<div class="col-md-4 col-sm-6 col-6">
            <div class="p-detail-info">';
            echo " <h6>Terms:</h6>
            <p>$row[terms]</p>
             </div>" ;
            echo '  <div class="space-20"></div>
            </div> <div class="col-md-4 col-sm-6 col-6">
            <div class="p-detail-info">';
            echo "  <h6>project type:</h6>
            <p>$row[project_type]</p>
              </div>";
            echo '  <div class="space-20"></div>
            </div>
            <div class="col-md-4 col-sm-6 col-6">
                <div class="p-detail-info">'; 
            echo "<h6>Strategy:</h6>
            <p>$row[strategy]</p>
              </div>";
            echo '   <div class="space-20"></div>
            </div>
            <div class="col-md-4 col-sm-6 col-6">
                <div class="p-detail-info">';
            echo " <h6>date:</h6>
            <p>$row[date]</p>
              </div>";
            echo '<div class="space-20"></div>
              </div>' ; 
            echo ' </div>
            </div>
            <div class="col-lg-6 col-md-12 mb-5 mb-lg-0">
                <div class="image-gallery">
                    <div id="gallery-2" class="gallery gallery-columns-1 s2">';
                    for ($i = 0; $i < $count; ++$i) {
                        ?>
    <figure class="gallery-item">
        <div class="gallery-icon portrait">

            <a href="./assets/portfolio/<?= $res[$i] ?>">
                <img src="./assets/portfolio/<?= $res[$i] ?>" />
                <span class="overlay"><i class="ot-flaticon-add"></i></span>
            </a>
        </div>
    </figure>
    <?php
                    }
            echo '</div>
            </div>
        </div>
    </div>  '; 
                echo '<div class="footer-social list-social">
                <ul>
                    <li><a href="https://'.$facebook.'" target="_self"><i style="color : black" class="fab fa-facebook-f"></i></a></li>
                    <li><a href="https://'.$twitter.'" target="_self"><i style="color : black" class="fab fa-twitter"></i></a></li>
                    <li><a href="https://'.$linkedin.'" target="_self"><i style="color : black" class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="https://'.$instagram.'" target="_self"><i style="color : black" class="fab fa-instagram"></i></a></li>
                </ul>
            </div>';
    echo '</div></div></div></section>' ; 
    
}
?>




    <?php include('./navbar_footer/footer.php') ?>