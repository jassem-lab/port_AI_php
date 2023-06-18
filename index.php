<?php include('./navbar_footer/navbar.php') ?>

<div id="content" class="site-content">
    <div id="rev_slider_one_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="mask-showcase"
        data-source="gallery">
        <div id="rev_slider_two" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
            <ul>
                <?php
        
      $query = $conn->query("select * from slider") ; 
      if($query->num_rows > 0 ){
        while($row = $query -> fetch_assoc()){
            $imageURL = $row["slide"] ; 
            $title = $row["title"] ; 
            $content = $row["content"] ; 

        ?>
                <li data-index="rs-70" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                    data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300"
                    data-thumb="<?php echo $imageURL ?>" data-rotate="0" data-saveperformance="off" data-title=""
                    data-param1="1" data-param2="" data-param3="" data-param4="" data-param5="" data-param6=""
                    data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="<?php echo $imageURL ?>" data-bgcolor='rgba(255,255,255,0)' style='' alt=""
                        data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                        data-bgparallax="off" class="rev-slidebg" data-no-retina>

                    <!-- LAYER 1  right image overlay dark-->


                    <!-- LAYER 3  Thin text title-->
                    <div class="tp-caption tp-resizeme caption-big-2" id="slide-70-layer-1"
                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                        data-y="['center','center','center','center']" data-voffset="['-38','-30','-30','-18']"
                        data-fontsize="['150',142','110','70']" data-lineheight="['150','130','110','70']"
                        data-fontweight="['200','200','200','200']" data-color="['#fff','#fff','#fff','#fff']"
                        data-whitespace="nowrap" data-type="text" data-responsive_offset="on"
                        data-frames='[{"delay":0,"speed":1000,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":1000,"frame":"999","to":"x:50px;opacity:0;","ease":"power3.inOut"}]'
                        data-textAlign="['center','center','center','center']"><?php echo $title ?>
                    </div>

                    <!-- LAYER 4  Bold Title-->
                    <div class="tp-caption   tp-resizeme tp-desc-2" id="slide-70-layer-6"
                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                        data-y="['center','center','center','center']" data-voffset="['60','58','50','35']"
                        data-fontsize="['18','18','16','16']" data-lineheight="['20','20','16','16']"
                        data-color="['#fff','#fff','#fff','#fff']" data-letterspacing="['8','8','8','8']"
                        data-fontweight="['300','300','300','300']" data-whitespace="nowrap" data-type="text"
                        data-responsive_offset="on"
                        data-frames='[{"delay":0,"speed":1000,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":1000,"frame":"999","to":"x:50px;opacity:0;","ease":"power3.inOut"}]'
                        data-textAlign="['left','left','left','left']"><?php echo $content ?>
                    </div>
                    <!-- LAYER 5  Paragraph-->
                    <div class="tp-caption tp-resizeme" id="slide-70-layer-3" data-x="['left','left','left','left']"
                        data-hoffset="['15','15','15','15']" data-y="['top','top','top','top']"
                        data-voffset="['420','279','271','235']" data-fontsize="['18','18','22','16']"
                        data-lineheight="['30','34','32','28']" data-whitespace="nowrap" data-type="text"
                        data-responsive_offset="on"
                        data-frames='[{"delay":2900,"speed":1000,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":1000,"frame":"999","to":"x:50px;opacity:0;","ease":"power3.inOut"}]'
                        data-textAlign="['left','left','left','left']">
                    </div>

                    <!-- LAYER 6  Read More-->
                    <div class="tp-caption rev-btn" id="slide-70-layer-4" data-x="['left','left','left','left']"
                        data-hoffset="['15','15','15','15']" data-y="['top','top','top','top']"
                        data-voffset="['525','385','370','320']" data-lineheight="['18','18','16','16']"
                        data-width="none" data-height="none" data-whitespace="nowrap" data-responsive_offset="on"
                        data-frames='[{"delay":3400,"speed":1000,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":1000,"frame":"999","to":"x:50px;opacity:0;","ease":"power3.inOut"}]'
                        data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
                    </div>
                </li>
                <?php 
        }}
        ?>
            </ul>

        </div>
    </div>

    <section class="pb-0 pt-xl-0">
        <div class="container">
            <div class="row mt-xl--40 justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-12 mb-5 mb-lg-0">
                    <div class="ot-features-box max-w-350 mx-auto">
                        <div class="features-image">
                            <a href="#">
                                <span class="overlay flex-middle"><i class="ot-flaticon-add"></i></span>
                                <img src="https://via.placeholder.com/750x921.png" alt="">
                            </a>
                        </div>
                        <div class="features-content">
                            <h6><a href="#"><span>01.</span> Quality Furniture</a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-5 mb-lg-0">
                    <div class="ot-features-box max-w-350 mx-auto">
                        <div class="features-image">
                            <a href="#">
                                <span class="overlay flex-middle"><i class="ot-flaticon-add"></i></span>
                                <img src="https://via.placeholder.com/750x921.png" alt="">
                            </a>
                        </div>
                        <div class="features-content">
                            <h6><a href="#"><span>02.</span> Unique Concept</a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-5 mb-lg-0">
                    <div class="ot-features-box max-w-350 mx-auto">
                        <div class="features-image">
                            <a href="#">
                                <span class="overlay flex-middle"><i class="ot-flaticon-add"></i></span>
                                <img src="https://via.placeholder.com/750x921.png" alt="">
                            </a>
                        </div>
                        <div class="features-content">
                            <h6><a href="#"><span>03.</span> Attention to Details</a></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 mb-5 mb-lg-0">
                    <div class="benefits-desc-1">
                        <div class="ot-heading">
                            <span>[ our benefits ]</span>
                            <h2 class="main-heading">Ambitious Studio with a Successful Concept & Ideas</h2>
                        </div>
                        <div class="ot-button">
                            <a href="portfolio-masonry.html" class="octf-btn octf-btn-light border-hover-light">View
                                Projects</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 mb-5 mb-md-0">
                            <div class="icon-box icon-box--classic icon-box--icon-top s-light">
                                <div class="icon-main"><span class="ot-flaticon-sphere"></span></div>
                                <div class="content-box">
                                    <h5><a href="#" class="title-link">Customer Focus</a></h5>
                                    <p>Customers choose us for the simplicity of communication and an understanding of
                                        what it’s necessary to receive in the end.</p>
                                </div>
                            </div>
                            <div class="d-none d-md-block space-70"></div>
                        </div>
                        <div class="col-lg-6 col-md-6 mb-5 mb-md-0">
                            <div class="icon-box icon-box--classic icon-box--icon-top s-light">
                                <div class="icon-main"><span class="ot-flaticon-measure"></span></div>
                                <div class="content-box">
                                    <h5><a href="#" class="title-link">Professionalism</a></h5>
                                    <p>We develop a full cycle of project documentation: an outline sketch, a design
                                        project, working documentation.</p>
                                </div>
                            </div>
                            <div class="d-none d-md-block space-70"></div>
                        </div>
                        <div class="col-lg-6 col-md-6 mb-5 mb-md-0">
                            <div class="icon-box icon-box--classic icon-box--icon-top s-light">
                                <div class="icon-main"><span class="ot-flaticon-home"></span></div>
                                <div class="content-box">
                                    <h5><a href="#" class="title-link">Multi Experience</a></h5>
                                    <p>We provide a wide range of services, we work in different styles, we project
                                        commercial and residential properties.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="icon-box icon-box--classic icon-box--icon-top s-light">
                                <div class="icon-main"><span class="ot-flaticon-house"></span></div>
                                <div class="content-box">
                                    <h5><a href="#" class="title-link">Author`s Supervision</a></h5>
                                    <p>We develop an attractive and convenient space for work and leisure time, working
                                        on units, selecting materials, manufacturers. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our-portfolio-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center theratio-align-center">
                    <div class="ot-heading is-dots s-light">
                        <span>[ our portfolio ]</span>
                        <h2 class="main-heading">Introduce Our Projects</h2>
                    </div>
                    <div class="space-40"></div>
                </div>
            </div>
        </div>
        <div class="container container-large">
            <div class="project-filter-wrapper">
                <ul class="project_filters s-light">
                    <li><a href="#" data-filter="*" class="selected btn-details">All<span
                                class="filter-count"></span></a></li>
                    <li><a class="btn-details" href="#" data-filter=".category-14">Architecture<span
                                class="filter-count"></span></a></li>
                    <li><a class="btn-details" href="#" data-filter=".category-15">Decor<span
                                class="filter-count"></span></a></li>
                    <li><a class="btn-details" href="#" data-filter=".category-20">Furniture<span
                                class="filter-count"></span></a></li>
                    <li><a class="btn-details" href="#" data-filter=".category-19">Interior<span
                                class="filter-count"></span></a></li>
                </ul>
                <div class="projects-grid pf_4_cols style-1 img-scale w-auto">
                    <div class="grid-sizer"></div>
                    <div class="project-item category-19 ">
                        <div class="projects-box">
                            <div class="projects-thumbnail">
                                <a href="portfolio-standar.html">
                                    <img src="https://via.placeholder.com/720x720.png" alt="">
                                </a>
                                <div class="overlay">
                                    <h5>Stylish Family Appartment</h5>
                                    <i class="ot-flaticon-add"></i>
                                </div>
                            </div>
                            <div class="portfolio-info">
                                <div class="portfolio-info-inner">
                                    <h5><a class="title-link" href="portfolio-standar.html">Stylish Family
                                            Appartment</a></h5>
                                    <p class="portfolio-cates"><a href="#">Interior</a></p>
                                </div>
                                <a class="overlay" href="portfolio-standar.html"></a>
                            </div>
                        </div>
                    </div>
                    <div class="project-item category-14 ">
                        <div class="projects-box">
                            <div class="projects-thumbnail">
                                <a href="portfolio-detail-slider.html">
                                    <img src="https://via.placeholder.com/720x720.png" alt="">
                                </a>
                                <div class="overlay">
                                    <h5>Minimal Guests House</h5>
                                    <i class="ot-flaticon-add"></i>
                                </div>
                            </div>
                            <div class="portfolio-info">
                                <div class="portfolio-info-inner">
                                    <h5><a class="title-link" href="portfolio-detail-slider.html">Minimal Guests
                                            House</a></h5>
                                    <p class="portfolio-cates">
                                        <a href="#">Decor</a>
                                        <a href="#">Interior</a>
                                    </p>
                                </div>
                                <a class="overlay" href="portfolio-detail-slider.html"></a>
                            </div>
                        </div>
                    </div>
                    <div class="project-item category-15 ">
                        <div class="projects-box">
                            <div class="projects-thumbnail">
                                <a href="portfolio-left.html">
                                    <img src="https://via.placeholder.com/720x720.png" alt="">
                                </a>
                                <div class="overlay">
                                    <h5>Art Family Residence</h5>
                                    <i class="ot-flaticon-add"></i>
                                </div>
                            </div>
                            <div class="portfolio-info">
                                <div class="portfolio-info-inner">
                                    <h5><a class="title-link" href="portfolio-left.html">Art Family Residence</a></h5>
                                    <p class="portfolio-cates"><a href="#">Architecture</a></p>
                                </div>
                                <a class="overlay" href="portfolio-left.html"></a>
                            </div>
                        </div>
                    </div>
                    <div class="project-item category-20 ">
                        <div class="projects-box">
                            <div class="projects-thumbnail">
                                <a href="portfolio-right.html">
                                    <img src="https://via.placeholder.com/720x720.png" alt="">
                                </a>
                                <div class="overlay">
                                    <h5>Private House in Spain</h5>
                                    <i class="ot-flaticon-add"></i>
                                </div>
                            </div>
                            <div class="portfolio-info">
                                <div class="portfolio-info-inner">
                                    <h5><a class="title-link" href="portfolio-right.html">Private House in Spain</a>
                                    </h5>
                                    <p class="portfolio-cates"><a href="#">Furniture</a></p>
                                </div>
                                <a class="overlay" href="portfolio-right.html"></a>
                            </div>
                        </div>
                    </div>
                    <div class="project-item category-19 ">
                        <div class="projects-box">
                            <div class="projects-thumbnail">
                                <a href="portfolio-small.html">
                                    <img src="https://via.placeholder.com/720x720.png" alt="">
                                </a>
                                <div class="overlay">
                                    <h5>Modern Villa in Belgium</h5>
                                    <i class="ot-flaticon-add"></i>
                                </div>
                            </div>
                            <div class="portfolio-info">
                                <div class="portfolio-info-inner">
                                    <h5><a class="title-link" href="portfolio-small.html">Modern Villa in Belgium</a>
                                    </h5>
                                    <p class="portfolio-cates"><a href="#">Furniture</a></p>
                                </div>
                                <a class="overlay" href="portfolio-small.html"></a>
                            </div>
                        </div>
                    </div>
                    <div class="project-item category-14 ">
                        <div class="projects-box">
                            <div class="projects-thumbnail">
                                <a href="portfolio-big.html">
                                    <img src="https://via.placeholder.com/720x720.png" alt="">
                                </a>
                                <div class="overlay">
                                    <h5>Minimalistic Style Appartment</h5>
                                    <i class="ot-flaticon-add"></i>
                                </div>
                            </div>
                            <div class="portfolio-info">
                                <div class="portfolio-info-inner">
                                    <h5><a class="title-link" href="portfolio-big.html">Minimalistic Style
                                            Appartment</a></h5>
                                    <p class="portfolio-cates"><a href="#">Furniture</a><a href="#">interior</a></p>
                                </div>
                                <a class="overlay" href="portfolio-big.html"></a>
                            </div>
                        </div>
                    </div>
                    <div class="project-item category-15">
                        <div class="projects-box">
                            <div class="projects-thumbnail">
                                <a href="portfolio-standar.html">
                                    <img src="https://via.placeholder.com/720x720.png" alt="">
                                </a>
                                <div class="overlay">
                                    <h5>Luxury Bathroom Interior</h5>
                                    <i class="ot-flaticon-add"></i>
                                </div>
                            </div>
                            <div class="portfolio-info">
                                <div class="portfolio-info-inner">
                                    <h5><a class="title-link" href="portfolio-standar.html">Luxury Bathroom Interior</a>
                                    </h5>
                                    <p class="portfolio-cates"><a href="#">decor</a><a href="#">Furniture</a></p>
                                </div>
                                <a class="overlay" href="portfolio-standar.html"></a>
                            </div>
                        </div>
                    </div>
                    <div class="project-item category-14">
                        <div class="projects-box">
                            <div class="projects-thumbnail">
                                <a href="portfolio-detail-slider.html">
                                    <img src="https://via.placeholder.com/720x720.png" alt="">
                                </a>
                                <div class="overlay">
                                    <h5>Loft Kitchen Interior</h5>
                                    <i class="ot-flaticon-add"></i>
                                </div>
                            </div>
                            <div class="portfolio-info">
                                <div class="portfolio-info-inner">
                                    <h5><a class="title-link" href="portfolio-detail-slider.html">Loft Kitchen
                                            Interior</a></h5>
                                    <p class="portfolio-cates"><a href="#">architecture</a></p>
                                </div>
                                <a class="overlay" href="portfolio-detail-slider.html"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="space-70"></div>
                <div class="space-5"></div>
                <div class="ot-button text-center">
                    <a href="portfolio-masonry.html" class="octf-btn octf-btn-light border-hover-light">all Projects</a>
                </div>
            </div>
        </div>
    </section>

    <section class="p-0 bg-dark-theratio">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="about-img-2">
                        <img src="https://via.placeholder.com/943x827.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="about-content-2 ml-xl-70">
                        <div class="ot-heading">
                            <span>[ about company ]</span>
                            <h2 class="main-heading text-light">Our Philosophy in Simply and Quality Design</h2>
                        </div>
                        <div class="ot-tabs tabs-light">
                            <ul class="tabs-heading unstyle">
                                <li class="tab-link current" data-tab="tab-1">awards</li>
                                <li class="tab-link" data-tab="tab-2">concept</li>
                                <li class="tab-link" data-tab="tab-3">history</li>
                            </ul>
                            <div id="tab-1" class="tab-content current">
                                We call our style ‘live minimalism’. Live minimalism is not about a 'wrap' or visual
                                look. It refers to inner feelings, to your true self. The place you are comfortable to
                                live in.
                                <ul>
                                    <li>Best Office Interior Design in New York,, 2018</li>
                                    <li>Between tradition and innovation, Dutch Design Week, 2017</li>
                                    <li>CUBE project, Best Home Design List in Germany, 2015</li>
                                    <li>International Industrial Design Award, 2015</li>
                                </ul>
                            </div>
                            <div id="tab-2" class="tab-content">
                                We call our style ‘live minimalism’. Live minimalism is not about a 'wrap' or visual
                                look. It refers to inner feelings, to your true self. The place you are comfortable to
                                live in.
                                <ul>
                                    <li>Between tradition and innovation, Dutch Design Week, 2019</li>
                                    <li>Best Office Interior Design in New York,, 2018</li>
                                    <li>International Industrial Design Award, 2015</li>
                                    <li>CUBE project, Best Home Design List in Germany, 2013</li>
                                </ul>
                            </div>
                            <div id="tab-3" class="tab-content">
                                We call our style ‘live minimalism’. Live minimalism is not about a 'wrap' or visual
                                look. It refers to inner feelings, to your true self. The place you are comfortable to
                                live in.
                                <ul>
                                    <li>Beginning Our Services, 2006</li>
                                    <li>Offering More Services, 2008</li>
                                    <li>Opening Our First Branch Office, 2009</li>
                                    <li>Expansion and Transformations, 2011</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Your Dream House</h2>
                    <p>Original design project of high quality raises profit – this is proved in practice by many of our
                        customers.</p>
                    <div class="ot-button">
                        <a href="contact.html" class="octf-btn octf-btn-light border-hover-light">get in touch</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="progress-studio">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 text-center mb-5 mb-xl-0">
                    <div class="circle-progress tbottom text-light" data-color="#939393" data-height="2" data-size="165"
                        data-processed="true">
                        <div class="inner-bar" data-percent="75"><span><span class="percent">0</span>%</span></div>
                        <h4>interior sketch</h4>
                        <p class="main-color-stext">All kinds of buildings in chematic or working design</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 text-center mb-5 mb-xl-0">
                    <div class="circle-progress tbottom text-light" data-color="#939393" data-height="2" data-size="165"
                        data-processed="true">
                        <div class="inner-bar" data-percent="50"><span><span class="percent">0</span>%</span></div>
                        <h4>3D MODELING</h4>
                        <p class="main-color-stext">Studio provides a full range of 3D interior modeling</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 text-center mb-5 mb-md-0">
                    <div class="circle-progress tbottom text-light" data-color="#939393" data-height="2" data-size="165"
                        data-processed="true">
                        <div class="inner-bar" data-percent="75"><span><span class="percent">0</span>%</span></div>
                        <h4>ROOM MEASUREMENT</h4>
                        <p class="main-color-stext">Development of iperfect design of the project</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 text-center">
                    <div class="circle-progress tbottom text-light" data-color="#939393" data-height="2" data-size="165"
                        data-processed="true">
                        <div class="inner-bar" data-percent="85"><span><span class="percent">0</span>%</span></div>
                        <h4>2D PLANNING</h4>
                        <p class="main-color-stext">We provide 2D planning for great visualization</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testi-2 bg-dark-theratio">
        <div class="container">
            <div class="row m-0">
                <div class="studio-testi-slide s-light mb-5 mb-xl-0">
                    <div class="studio-testi-slide-block z-index-2 position-relative">
                        <div class="ot-heading is-dots s-light">
                            <span>[ testimonials ]</span>
                            <h2 class="main-heading">What People Say</h2>
                        </div>
                        <div class="ot-testimonials v-dark">
                            <div class="testimonials-slide-2 ot-testimonials-slider-s2 owl-theme owl-carousel">
                                <div class="testi-item">
                                    <div class="ttext">
                                        “I have very much enjoyed with your services. Lorem ipsum dolor sit amet,
                                        consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                        laboris nisi ut aliquip.”
                                    </div>
                                    <div class="t-head flex-middle">
                                        <div class="tinfo">
                                            <h5>Kristina Lee</h5>
                                            <span>Client of Company</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="testi-item">
                                    <div class="ttext">
                                        “You will never fake the feeling of being in such a place. The live minimalism
                                        base on the natural materials and alive unprocessed textures — true, authentic,
                                        close to nature. It has memory and appreciates to the culture, roots,
                                        archetypes.”
                                    </div>
                                    <div class="t-head flex-middle">
                                        <div class="tinfo">
                                            <h5>Pablo Gusterio</h5>
                                            <span>Client of Company</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="testi-item">
                                    <div class="ttext">
                                        I’m always impressed with the services. Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                        aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                                        ut aliquip.”
                                    </div>
                                    <div class="t-head flex-middle">
                                        <div class="tinfo">
                                            <h5>Anna Paulina</h5>
                                            <span>Client of Company</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="studio-testi-img text-center">
                    <div class="studio-testi-img-block z-index-1">
                        <img src="https://via.placeholder.com/640x575.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="team-clients bg-dark-theratio">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="clients-slide owl-theme owl-carousel">
                        <div class="img-item">
                            <figure><img src="https://via.placeholder.com/300x145.png" alt=""></figure>
                        </div>
                        <div class="img-item">
                            <figure><img src="https://via.placeholder.com/300x145.png" alt=""></figure>
                        </div>
                        <div class="img-item">
                            <figure><img src="https://via.placeholder.com/300x145.png" alt=""></figure>
                        </div>
                        <div class="img-item">
                            <figure><img src="https://via.placeholder.com/300x145.png" alt=""></figure>
                        </div>
                        <div class="img-item">
                            <figure><img src="https://via.placeholder.com/300x145.png" alt=""></figure>
                        </div>
                        <div class="img-item">
                            <figure><img src="https://via.placeholder.com/300x145.png" alt=""></figure>
                        </div>
                        <div class="img-item">
                            <figure><img src="https://via.placeholder.com/300x145.png" alt=""></figure>
                        </div>
                        <div class="img-item">
                            <figure><img src="https://via.placeholder.com/300x145.png" alt=""></figure>
                        </div>
                        <div class="img-item">
                            <figure><img src="https://via.placeholder.com/300x145.png" alt=""></figure>
                        </div>
                        <div class="img-item">
                            <figure><img src="https://via.placeholder.com/300x145.png" alt=""></figure>
                        </div>
                        <div class="img-item">
                            <figure><img src="https://via.placeholder.com/300x145.png" alt=""></figure>
                        </div>
                        <div class="img-item">
                            <figure><img src="https://via.placeholder.com/300x145.png" alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="our-blog-2">
        <div class="container">
            <div class="row pb-50">
                <div class="col-lg-8 col-md-12 mb-4 mb-lg-0">
                    <div class="ot-heading is-dots s-light">
                        <span>[ our blog ]</span>
                        <h2 class="main-heading">Read Our Latest News</h2>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 text-lg-right align-self-center">
                    <div class="ot-button">
                        <a href="blog.html" class="octf-btn octf-btn-light border-hover-light">View all</a>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="post-box masonry-post post-item v-dark">
                        <div class="post-inner">
                            <div class="entry-media post-cat-abs">
                                <a href="post.html"><img src="https://via.placeholder.com/570x484.png" alt=""></a>
                                <div class="post-cat">
                                    <div class="posted-in"><a href="#">Interior</a></div>
                                </div>
                            </div>
                            <div class="inner-post">
                                <div class="entry-header">
                                    <div class="entry-meta">
                                        <span class="posted-on"><a href="#">March 19, 2020</a></span>
                                        <span class="byline">
                                            <span class="author vcard"><a class="url fn n" href="#">Tom Black</a></span>
                                        </span>
                                    </div><!-- .entry-meta -->

                                    <h5 class="entry-title">
                                        <a class="title-link" href="post.html">Top 10 Tips for Your Kitchen Interior
                                            Design</a>
                                    </h5>
                                </div><!-- .entry-header -->

                                <div class="the-excerpt">
                                    A faceting effect livens up and interrupts...
                                </div><!-- .entry-content -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="post-box masonry-post post-item v-dark">
                        <div class="post-inner">
                            <div class="entry-media post-cat-abs">
                                <a href="post.html"><img src="https://via.placeholder.com/570x484.png" alt=""></a>
                                <div class="post-cat">
                                    <div class="posted-in"><a href="#">Interior</a></div>
                                </div>
                            </div>
                            <div class="inner-post">
                                <div class="entry-header">
                                    <div class="entry-meta">
                                        <span class="posted-on"><a href="#">March 19, 2020</a></span>
                                        <span class="byline">
                                            <span class="author vcard"><a class="url fn n" href="#">Tom Black</a></span>
                                        </span>
                                    </div><!-- .entry-meta -->

                                    <h5 class="entry-title">
                                        <a class="title-link" href="post.html">The Golden Ratio Rules for Best 2D
                                            Sketch</a>
                                    </h5>
                                </div><!-- .entry-header -->

                                <div class="the-excerpt">
                                    A faceting effect livens up and interrupts...
                                </div><!-- .entry-content -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="post-box masonry-post post-item v-dark">
                        <div class="post-inner">
                            <div class="entry-media post-cat-abs">
                                <a href="post.html"><img src="https://via.placeholder.com/570x484.png" alt=""></a>
                                <div class="post-cat">
                                    <div class="posted-in"><a href="#">Interior</a></div>
                                </div>
                            </div>
                            <div class="inner-post">
                                <div class="entry-header">
                                    <div class="entry-meta">
                                        <span class="posted-on"><a href="#">March 19, 2020</a></span>
                                        <span class="byline">
                                            <span class="author vcard"><a class="url fn n" href="#">Tom Black</a></span>
                                        </span>
                                    </div><!-- .entry-meta -->

                                    <h5 class="entry-title">
                                        <a class="title-link" href="post.html">Use Pastel Colors & Natural Materials</a>
                                    </h5>
                                </div><!-- .entry-header -->

                                <div class="the-excerpt">
                                    A faceting effect livens up and interrupts...
                                </div><!-- .entry-content -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

<?php include('./navbar_footer/footer.php') ?>