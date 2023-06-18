<?php include('./navbar_footer/navbar.php') ?>

<div id="content" class="site-content">
    <div class="page-header dtable text-center header-transparent page-header-contact"
        style="background-image: url('./images/contact.jpg')">
        <div class="dcell">
            <div class="container">
                <h1 class="page-title">Contact</h1>
                <ul id="breadcrumbs" class="breadcrumbs none-style">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Contacts</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<section class="contact-page" style="background : white">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center mb-5 mb-lg-0">
                <div class="contact-left">
                    <h2>Get in Touch</h2>
                    <p class="font14">Your email address will not be published. Required fields are marked *</p>
                    <form action="contact.php" method="post" class="wpcf7">
                        <div class="main-form">
                            <p>
                                <input type="text" name="name" value="" size="40" class="" aria-invalid="false"
                                    placeholder="Your Name *" required>
                            </p>
                            <p>
                                <input type="email" name="email" value="" size="40" class="" aria-invalid="false"
                                    placeholder="Your Email *" required>
                            </p>
                            <p>
                                <textarea name="message" cols="40" rows="10" class="" aria-invalid="false"
                                    placeholder="Message..." required></textarea>
                            </p>
                            <p><button type="submit" class="octf-btn">Send Message</button></p>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-right" style="background-image: url('./images/bg1-contact.jpg')">
                    <div class="ot-heading">
                        <span>[ our contact details ]</span>
                        <h2 class="main-heading">Let's Start a Project</h2>
                    </div>
                    <p>Give us a call or drop by anytime, we endeavour to answer all enquiries within 24 hours on
                        business days. We will be happy to answer your questions.</p>
                    <div class="contact-info">
                        <i class="ot-flaticon-place"></i>
                        <div class="info-text">
                            <h6>OUR ADDRESS:</h6>
                            <p><?php echo $adresse ?></p>
                        </div>
                    </div>
                    <div class="contact-info">
                        <i class="ot-flaticon-mail"></i>
                        <div class="info-text">
                            <h6>OUR MAILBOX:</h6>
                            <p><a href="<?php echo $mail ?>"><?php echo $mail ?></a></p>
                        </div>
                    </div>
                    <div class="contact-info">
                        <i class="ot-flaticon-phone-call"></i>
                        <div class="info-text">
                            <h6>OUR PHONE:</h6>
                            <p><a href="tel:<?php echo $tel1 ?>"><?php echo $tel1 ?></a></p>
                        </div>
                    </div>
                    <div class="list-social">
                        <ul>
                            <li><a href="<?php echo $twitter ?>" target="_self"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="<?php echo $facebook ?>" target="_self"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li><a href="<?php echo $instagram ?>" target="_self"><i class="fab fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include('./navbar_footer/footer.php') ?>