<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>CDF Trading</title>
    <meta
        content="Starting as a small business in Calgary, Alberta, Canada of November 2020, we have big dreams. Our passion for DRIED FISH PRODUCTS, means that we provide our customers with nothing but the highest quality of products, that are guaranteed to meet their needs and keep them satisfied! With a motivated team."
        name="description">
    <meta content="DRIED FISH PRODUCTS" name="keywords">

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

    <!-- New Added -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style2.css">
</head>

<body>
    <!-- Header -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">
            <h1 class="logo me-auto"><a href="index.php">CDF TRADING</a></h1>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto " href="index.php">Home</a></li>
                    <li><a class="nav-link scrollto" href="index#about">About</a></li>
                    <li><a class="nav-link scrollto" href="index#services">Services</a></li>
                    <li><a class="nav-link scrollto" href="product#product">Product</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                    <li><a class="getstarted scrollto" href="index#about">Get Started</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
        </div>
    </header>
    <?php
        if(empty($_GET['product'])){
            echo "<script> window.location.href = 'product?product=p1' </script>";
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
                'info'=>'Dried fish (dilis) are anchovies. Anchovies are dried for food. You can snack on cooked dilis or they can be an accompaniment to rice as part of a meal.'
            ];
            $productpic = ['boneless-dilis(m)1','boneless-dilis(m)2','boneless-dilis(m)3'];
        }
        if($product=='p2'){
            $productinfo = ['name'=>'Dangit Boneless',
                'info'=>'Cebu is known for its danggit (“dang-git”)—salted, sun-dried rabbitfish (aka spinefoot), which is abundant and native to the islands shallower waters. The fish are split open, cleaned, salted, and spread out on drying racks under the sun.'
            ];
            $productpic = ['dangit-boneless(L)1','dangit-boneless(m)1','dangit-boneless(s)1'];
        }
        if($product=='p3'){
            $productinfo = ['name'=>'Dilis',
                'info'=>'Dilis is also known as anchovies. Health benefits of anchovies include healthy heart, skin care, weight loss, as well as healthy bones and teeth.'
            ];
            $productpic = ['dilis(m)1','dilis(m)2','dilis(s)1'];
        }
        if($product=='p4'){
            $productinfo = ['name'=>'Pusit',
                'info'=>'Pusit is a dried squid where many local Filipinos love to eat because of the soft, chewy texture and taste.'
            ];
            $productpic = ['pusit(s)1','pusit(s)3','pusit(s)8'];
        }
        if($product=='p5'){
            $productinfo = ['name'=>'Tuyo',
                'info'=>'Tuyo fish is a type of Filipino sun dried fish. This is usually fried quickly and eaten with spicy vinegar dip and rice'
            ];
            $productpic = ['tuyo1','tuyo2','tuyo3'];
        }
        if($product=='p6'){
            $productinfo = ['name'=>'Sapsap',
                'info'=>'We serve to bring you the best of Cebu has to offer. Our Sapsap (Dried Ponyfish) are prepared by using traditional drying techniques.'
            ];
            $productpic = ['sapsap1','sapsap2','sapsap4'];
        }
        if($product=='p7'){
            $productinfo = ['name'=>'Pusit Ballpen',
                'info'=>'Tarurot/Dried Pusit Ballpen/Pusit Buo. -is sun dried WHOLE squid from Cebu. “Pusit buo” has not been gutted, so most of its ink is still inside ( thus, the “ballpen” moniker). If you favor dried squid with stronger squid “flavor”, this one is the dried product for you.'
            ];
            $productpic = ['pusit-ballpen(m)1','pusit-ballpen(m)2'];
        }
        if($product=='p8'){
            $productinfo = ['name'=>'Srimp',
                'info'=>'In the Philippines, dried shrimp is called hibi or hibe and is used like salt to season dishes as well as in soup bases such as misua.'
            ];
            $productpic = ['shrimp','shrimp1'];
        }
    ?>

    <!-- Product -->
    <main id="product" class="product">
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
                            <div class="buttons d-flex flex-row mt-5 gap-3">
                                <a href="#contact" type="button" class="btn btn-outline-dark pt-2">Inquire</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-4 mb-4" data-aos="fade-up">
                <div class="card p-4">
                    <h4>Other Products</h4>
                    <div class="row no-gutters similar-products d-flex flex-row">
                        <?php
                            function other_product($p1,$n1,$link){
                                echo    '<a href="product.php?product='.$link.'" class="col-lg-2 col-md-3 col-sm-4 col-6 p-2">
                                            <div class="card border p-1 m-2" style="width: 9rem;margin-right: 3px;"> 
                                                <img src="assets/img/products/'.$p1.'.jpg" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h6 class="card-title link-dark">'.$n1.'</h6>
                                                </div>
                                            </div>
                                        </a>';
                            }

                            if ($product!="p1"){
                                other_product($other_product_info['p1'],$other_product_info['n1'],'p1');
                                }
                            if ($product!="p2"){
                                other_product($other_product_info['p2'],$other_product_info['n2'],'p2');
                                }
                            if ($product!="p3"){
                                other_product($other_product_info['p3'],$other_product_info['n3'],'p3');
                                }
                            if ($product!="p4"){
                                other_product($other_product_info['p4'],$other_product_info['n4'],'p4');
                                }
                            if ($product!="p5"){
                                other_product($other_product_info['p5'],$other_product_info['n5'],'p5');
                                }
                            if ($product!="p6"){
                                other_product($other_product_info['p6'],$other_product_info['n6'],'p6');
                                }
                            if ($product!="p7"){
                                other_product($other_product_info['p7'],$other_product_info['n7'],'p7');
                                }
                            if ($product!="p8"){
                                other_product($other_product_info['p8'],$other_product_info['n8'],'p8');
                                }
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Space -->
        <section class="p-4"></section>

    </main>

    <!-- Contact -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Contact</h2>
                <p>If you have any questions or queries we will be happy to help. Feel free to contact us by our
                    email
                    form down below or telephone number and we will be sure to get back to you as soon as possible
                </p>
            </div>
            <div class="row">
                <div class="col-lg-5 d-flex align-items-stretch">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Location:</h4>
                            <p>Bay-2 12127 44th Street SE, Calgary, AB T2Z4H3</p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>info@cdftradinginc.com</p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Call:</h4>
                            <p>(825) 540-7207</p>
                        </div>

                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2514.0396657523575!2d-113.97385064850467!3d50.941479479445796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x53717a19a9249117%3A0xcea2992710bff94b!2s44%20St%20SE%2C%20Calgary%2C%20AB%20T2Z%204H3%2C%20Canada!5e0!3m2!1sen!2sph!4v1658546413699!5m2!1sen!2sph"
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
    </section>

    <!-- Footer -->
    <?php include_once "footer.php"; ?>

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
    <script>
    function changeImage(element) {
        var main_prodcut_image = document.getElementById('main_product_image');
        main_prodcut_image.src = element.src;
    }
    </script>

</body>

</html>