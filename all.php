<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "majdoub";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die('connection failed :' . mysqli_connect_error());
}

?>

<?php
 $req = "select * from portfolio";
 $query = mysqli_query($conn, $req);
 while ($enreg = mysqli_fetch_array($query)) {
     $id = $enreg["id"];
     $titre = $enreg["titre"];
     $description = $enreg["description"];
     $architect = $enreg["architect"];
     $terms = $enreg["terms"];
     $client = $enreg["client"];
     $strategy = $enreg["strategy"];
     $project_type = $enreg["project_type"];
     $date = $enreg["date"];
     ?>
<div class="projects-grid pf_3_cols style-3 img-scale w-auto">
    <div class="grid-sizer"></div>
    <div class="project-item category-19 ">
        <div class="projects-box">
            <div class="projects-thumbnail">
                <a href="portfolio-standar.html">
                    <img src="./assets/portfolio/<?php   $i = "0";
                    $reqImg = "select * from portfolio_images where titre='$titre'" ; 
                    $queryImg = mysqli_query($conn , $reqImg) ; 
                    $data = mysqli_fetch_array($queryImg);

                    $res = $data['image'];
                    $res = explode(" ", $res);
                    $count = count($res) - 1;
                    echo $res[$i] ; 
                        ?>" alt="">
                </a>
                <div class="overlay">
                    <h5><?php echo $titre ?></h5>
                    <i class="ot-flaticon-add"></i>
                </div>
            </div>
            <div class="portfolio-info">
                <div class="portfolio-info-inner text-center">
                    <h5><a class="title-link" href="portfolio-standar.html"><?php echo $titre ?></a></h5>
                    <p class="portfolio-cates"><a href="#"><?php echo $strategy ?></a></p>
                    <p class="portfolio-cates"><a href="#"><?php echo $date ?></a></p>
                </div>
                <a class="overlay" href="portfolio-standar.html"></a>
            </div>
        </div>
    </div>
</div>
<div class="btn-block text-center">
    <a href="portfolio-view.php" class="btn-loadmore octf-btn">Read More</a>
</div>

<?php } ?>