<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>CDF Trading</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/cdf_logo-removebg-preview.png" rel="icon">
    <link href="assets/img/cdf_logo-removebg-preview.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">


    <!-- new added -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="assets\css\style2.css">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="index.php">CDF TRADING</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto " href="index.php">Home</a></li>
                    <li><a class="nav-link scrollto" href="index.php">About</a></li>
                    <li><a class="nav-link scrollto" href="index.php">Services</a></li>
                    <li><a class="nav-link scrollto active" href="product.php">Product</a></li>
                    <!--
                    <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Drop Down 1</a></li>
                            <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i
                                        class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#">Deep Drop Down 1</a></li>
                                    <li><a href="#">Deep Drop Down 2</a></li>
                                    <li><a href="#">Deep Drop Down 3</a></li>
                                    <li><a href="#">Deep Drop Down 4</a></li>
                                    <li><a href="#">Deep Drop Down 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Drop Down 2</a></li>
                            <li><a href="#">Drop Down 3</a></li>
                            <li><a href="#">Drop Down 4</a></li>
                        </ul>
-->
                    </li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                    <li><a class="getstarted scrollto" href="index.php">Get Started</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <?php
        if(empty($_GET['product'])){
            echo "<script> window.location.href = 'product.php?product=p1' </script>";
        }
        $other_product_info=[
            'n1'=>'Boneless Dilis','p1'=>'boneless-dilis(m)1',
            'n2'=>'Dangit Boneless','p2'=>'dangit-boneless(L)1',
            'n3'=>'Dilis','p3'=>'dilis(m)1',
            'n4'=>'Pusit','p4'=>'pusit(s)1',
            'n5'=>'Tuyo','p5'=>'tuyo1',
            'n6'=>'Sapsap','p6'=>'sapsap1',
            'n7'=>'Pusit Ballpen','p7'=>'pusit-ballpen(m)1',
            'n8'=>'Srimp','p8'=>'shrimp',
        ];

        $product = $_GET['product'];
        if($product=='p1'){
            $productinfo = ['name'=>'Boneless Dilis',
                'info'=>'baklsdljsadjfbakshjdgbfkjhabwekfyihbawebfwefbuh'
            ];
            $productpic = ['boneless-dilis(m)1','boneless-dilis(m)2','boneless-dilis(m)3','boneless-dilis(m)4'];
        }
        if($product=='p2'){
            $productinfo = ['name'=>'Dangit Boneless',
                'info'=>'baklsdljsadjfbakshjdgbfkjhabwekfyihbawebfwefbuh'
            ];
            $productpic = ['dangit-boneless(L)1','dangit-boneless(m)1','dangit-boneless(s)1','dangit-boneless(s&m)1'];
        }
        if($product=='p3'){
            $productinfo = ['name'=>'Dilis',
                'info'=>'baklsdljsadjfbakshjdgbfkjhabwekfyihbawebfwefbuh'
            ];
            $productpic = ['dilis(m)1','dilis(m)2','dilis(m)4','dilis(s)1'];
        }
        if($product=='p4'){
            $productinfo = ['name'=>'Pusit',
                'info'=>'baklsdljsadjfbakshjdgbfkjhabwekfyihbawebfwefbuh'
            ];
            $productpic = ['pusit(s)1','pusit(s)3','pusit(s)6','pusit(s)8'];
        }
        if($product=='p5'){
            $productinfo = ['name'=>'Tuyo',
                'info'=>'baklsdljsadjfbakshjdgbfkjhabwekfyihbawebfwefbuh'
            ];
            $productpic = ['tuyo1','tuyo2','tuyo3'];
        }
        if($product=='p6'){
            $productinfo = ['name'=>'Sapsap',
                'info'=>'baklsdljsadjfbakshjdgbfkjhabwekfyihbawebfwefbuh'
            ];
            $productpic = ['sapsap1','sapsap2','sapsap4'];
        }
        if($product=='p7'){
            $productinfo = ['name'=>'Pusit Ballpen',
                'info'=>'baklsdljsadjfbakshjdgbfkjhabwekfyihbawebfwefbuh'
            ];
            $productpic = ['pusit-ballpen(m)1','pusit-ballpen(m)2'];
        }
        if($product=='p8'){
            $productinfo = ['name'=>'Srimp',
                'info'=>'baklsdljsadjfbakshjdgbfkjhabwekfyihbawebfwefbuh'
            ];
            $productpic = ['shrimp','shrimp1'];
        }
        
    ?>

    <main id="product">
        <section class="p-4"></section>
        <div class="container mt-5 mb-5" data-aos="fade-up">
            <div class="card">
                <div class="row g-0">
                    <div class="col-md-6 border-end">
                        <div class="d-flex flex-column justify-content-center">
                            <div class="main_image">
                                <?php
                                    echo '<img src="assets/img/products/'.$productpic[0].'.jpg" id="main_product_image"
                                        width="350">'

                                ?>
                            </div>
                            <div class="thumbnail_images">
                                <ul id="thumbnail">
                                    <?php
                                        foreach ($productpic as $value) {
                                            echo '<li><img onclick="changeImage(this)" src="assets/img/products/'.$value.'.jpg"
                                            width="70"></li>';
                                        }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-3 right-side mt-2">
                            <div class="d-flex justify-content-between align-items-center">
                                <h3><?php echo $productinfo['name']; ?></h3>
                            </div>
                            <div class="mt-2 pr-3 content">
                                <h6><?php echo $productinfo['info']; ?></h6>
                            </div>
                            <!--h3>$430.99</h3>
                            <div class="ratings d-flex flex-row align-items-center">
                                <div class="d-flex flex-row"> <i class='bx bxs-star'></i> <i class='bx bxs-star'></i> <i
                                        class='bx bxs-star'></i> <i class='bx bxs-star'></i> <i class='bx bx-star'></i>
                                </div> <span>441 reviews</span>
                            </div>
                            <div class="mt-5"> <span class="fw-bold">Color</span>
                                <div class="colors">
                                    <ul id="marker">
                                        <li id="marker-1"></li>
                                        <li id="marker-2"></li>
                                        <li id="marker-3"></li>
                                        <li id="marker-4"></li>
                                        <li id="marker-5"></li>
                                    </ul>
                                </div>
                            </div-->
                            <div class="buttons d-flex flex-row mt-5 gap-3">
                                <button class="btn btn-inquire">Inquire</button>
                            </div>

                            <!--
                            <div class="search-option"> <i class='bx bx-search-alt-2 first-search'></i>
                                <div class="inputs"> <input type="text" name=""> </div> <i
                                    class='bx bx-share-alt share'></i>
                            </div>
                            -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-4 mb-4" data-aos="fade-up">
                <div class="card p-4">
                    <h4>Other Products</h4>
                    <div class="row no-gutters similar-products d-flex flex-row">
                        <?php
                            if ($product!="p1"){
                                echo    '<a href="product.php?product=p1" class="col-3 p-2">
                                            <div class="card border p-1 m-2" style="width: 9rem;margin-right: 3px;"> 
                                                <img src="assets/img/products/'.$other_product_info['p1'].'.jpg" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h6 class="card-title link-dark">'.$other_product_info['n1'].'</h6>
                                                </div>
                                            </div>
                                        </a>';
                                }
                            if ($product!="p2"){
                                echo    '<a href="product.php?product=p2" class="col-3 p-2">
                                            <div class="card border p-1 m-2" style="width: 9rem;margin-right: 3px;"> 
                                                <img src="assets/img/products/'.$other_product_info['p2'].'.jpg" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h6 class="card-title link-dark">'.$other_product_info['n2'].'</h6>
                                                </div>
                                            </div>
                                        </a>';
                                }
                            if ($product!="p3"){
                                echo    '<a href="product.php?product=p3" class="col-3 p-2">
                                            <div class="card border p-1 m-2" style="width: 9rem;margin-right: 3px;"> 
                                                <img src="assets/img/products/'.$other_product_info['p3'].'.jpg" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h6 class="card-title link-dark">'.$other_product_info['n3'].'</h6>
                                                </div>
                                            </div>
                                        </a>';
                                }
                            if ($product!="p4"){
                                echo    '<a href="product.php?product=p4" class="col-3 p-2">
                                            <div class="card border p-1 m-2" style="width: 9rem;margin-right: 3px;"> 
                                                <img src="assets/img/products/'.$other_product_info['p4'].'.jpg" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h6 class="card-title link-dark">'.$other_product_info['n4'].'</h6>
                                                </div>
                                            </div>
                                        </a>';
                                }
                            if ($product!="p5"){
                                echo    '<a href="product.php?product=p5" class="col-3 p-2">
                                            <div class="card border p-1 m-2" style="width: 9rem;margin-right: 3px;"> 
                                                <img src="assets/img/products/'.$other_product_info['p5'].'.jpg" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h6 class="card-title link-dark">'.$other_product_info['n5'].'</h6>
                                                </div>
                                            </div>
                                        </a>';
                                }
                            if ($product!="p6"){
                                echo    '<a href="product.php?product=p6" class="col-3 p-2">
                                            <div class="card border p-1 m-2" style="width: 9rem;margin-right: 3px;"> 
                                                <img src="assets/img/products/'.$other_product_info['p6'].'.jpg" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h6 class="card-title link-dark">'.$other_product_info['n6'].'</h6>
                                                </div>
                                            </div>
                                        </a>';
                                }
                            if ($product!="p7"){
                                echo    '<a href="product.php?product=p7" class="col-3 p-2">
                                            <div class="card border p-1 m-2" style="width: 9rem;margin-right: 3px;"> 
                                                <img src="assets/img/products/'.$other_product_info['p7'].'.jpg" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h6 class="card-title link-dark">'.$other_product_info['n7'].'</h6>
                                                </div>
                                            </div>
                                        </a>';
                                }
                            if ($product!="p8"){
                                echo    '<a href="product.php?product=p8" class="col-3 p-2">
                                            <div class="card border p-1 m-2" style="width: 9rem;margin-right: 3px;"> 
                                                <img src="assets/img/products/'.$other_product_info['p8'].'.jpg" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h6 class="card-title link-dark">'.$other_product_info['n8'].'</h6>
                                                </div>
                                            </div>
                                        </a>';
                                }
                        ?>

                    </div>
                </div>
            </div>
        </div>

        <section class="p-4"></section>

    </main>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Contact</h2>
                <p>If you have any questions or queries we will be happy to help. Feel free to contact us by our email
                    form down below or telephone number and we will be sure to get back to you as soon as possible </p>
            </div>

            <div class="row">

                <div class="col-lg-5 d-flex align-items-stretch">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Location:</h4>
                            <p>A108 Adam Street, New York, NY 535022</p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>info@example.com</p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Call:</h4>
                            <p>+1 5589 55488 55s</p>
                        </div>

                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                            frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                    </div>

                </div>

                <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Your Name</label>
                                <input type="text" name="name" class="form-control" id="name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Your Email</label>
                                <input type="email" class="form-control" name="email" id="email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Subject</label>
                            <input type="text" class="form-control" name="subject" id="subject" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Message</label>
                            <textarea class="form-control" name="message" rows="10" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <!--
        <div class="footer-newsletter">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h4>Join Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
        </div>
-->
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>CDF TRADING</h3>
                        <p>
                            Bay-2 12127 44th Street <br>
                            SE, Calgary, AB T2Z4H3<br>
                            <br><br>
                            <strong>Phone:</strong> (825) 540-7207<br>
                            <strong>Email:</strong> info@cdftradinginc.com<br>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#services">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="product.php">Products</a></li>
                        </ul>
                    </div>

                    <!--
                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                        </ul>
                    </div> -->

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Social Networks</h4>
                        <p>Visit our social media to learn more about us!</p>
                        <div class="social-links mt-3">
                            <!--
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            -->
                            <a href="https://www.facebook.com/CDFIMPORTS/?ref=pages_you_manage" class="facebook"><i
                                    class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <!--
                            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                            -->

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; CDF TRADING <strong><span></span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
                Designed by <a href="#">CDF WEB DEVELOPER/DESIGNER</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

    <!-- Product function -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
    function changeImage(element) {
        var main_prodcut_image = document.getElementById('main_product_image');
        main_prodcut_image.src = element.src;
    }
    </script>

</body>

</html>