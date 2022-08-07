<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>CDF Trading Inc</title>
    <meta
        content="Starting as a small business in Calgary, Alberta, Canada of November 2020, we have big dreams. Our passion for DRIED FISH PRODUCTS, means that we provide our customers with nothing but the highest quality of products, that are guaranteed to meet their needs and keep them satisfied! With a motivated team."
        name="description">
    <meta content="DRIED FISH PRODUCTS" name="keywords">
    <link rel="icon" type="image/png" href="assets/img/Icon-bg.png" sizes="96x96" />

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

    <!-- Jquery -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>

</head>

<body>
    <!-- Header -->
    <header id="header" class="fixed-top header-scrolled">
        <div class="container d-flex align-items-center">
            <a href="#home" class="logo">
                <img src="assets/img/CDF-Icon.png" height="80">
                <h1 class="logo me-auto"><a href="index.php">CDF TRADING INC.</a></h1>
            </a>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto " href="index.php">Home</a></li>
                    <li><a class="nav-link scrollto" href="index.php#about">About</a></li>
                    <li><a class="nav-link scrollto" href="index.php#services">Services</a></li>
                    <li><a class="nav-link scrollto" href="product.php#product">Product</a></li>
                    <li><a class="nav-link scrollto" href="product.php#contact">Inquire</a></li>
                    <li><a class="nav-link scrollto" href="product.php#footer">Contact</a></li>
                    <li><a class="getstarted scrollto" href="index.php#about">Get Started</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
        </div>
    </header>
    <?php
        if(empty($_GET['product'])){
            echo "<script> window.location.href = 'product.php?product=p1' </script>";
        }
        $other_product_info=[
            'n1'=>'Boneless Dilis','p1'=>'boneless-dilis(m)1',
            'n2'=>'Dangit Boneless','p2'=>'dangit-boneless(L)1',
            'n3'=>'Dilis','p3'=>'dilis(m)1',
            'n4'=>'Pusit','p4'=>'pusit(s)3',
            'n5'=>'Tuyo','p5'=>'tuyo3',
            'n6'=>'Sapsap','p6'=>'sapsap1',
            'n7'=>'Pusit Ballpen','p7'=>'pusitballpen3',
            'n8'=>'Shrimp','p8'=>'shrimp2',
        ];

        $product = $_GET['product'];
        if($product=='p1'){
            $productinfo = ['name'=>'Boneless Dilis or Anchovy',
                'info'=>
                'Description<br><br>
                Boneless dilis /bon-les di-lis/ Tagalog dried fish) [n.] deboned anchovies. Dilis or anchovies are small 
                blue fish that abound in the Mediterranean Sea and the Pacific, Indian and Atlantic oceans. Dilis are between 
                1 and 15 inches (3 and 40 cm) long and there are about 144 species worldwide. What is this? They are abundantly present in the Philippine waters.
                <br><br>
                Process
                <br><br>
                The dilis (anchovies) are decapitated, butterflied and deboned of its backbone,
                then soaked in brine solution, drained, and sundried to become dried boneless dilis, packed and vacuum sealed to preserve and stored in cool dry place.
                '
            ];
            $productpic = ['boneless-dilis(m)1','boneless-dilis(m)2','boneless-dili5'];
        }
        if($product=='p2'){
            $productinfo = ['name'=>'Dangit Boneless or Rabbit Fish',
                'info'=>
                'Description<br><br>
                It’s a local Philippine favorite viand made from dried rabbitfish or spinefoot.
                It has been a popular and is well known as a product of Cebu. Usually fried to crisp and often consumed and dipped in vinegar.
                <br><br>
                Process
                <br><br>
                Clean the fish, butterfly cut, deboning and wash water with salt.
                Distribute it evenly on the drying trays, sundried and flip over to evenly dried, packed and vacuum sealed to preserved and stored in a cool dry place.
                '
            ];
            $productpic = ['dangit-boneless(L)1','dangit-boneless(m)1','danggit2'];
        }
        if($product=='p3'){
            $productinfo = ['name'=>'Dried Dilis or Anchovy',
                'info'=>
                'Description<br><br>
                Dilis tend to be quite salty. They are often used in salads, meat dishes, as well as sauces.
                In the Philippines they can be bought fresh, dried, as a paste (bagoong), or in fish sauce such as patis.
                <br><br>
                Process
                <br><br>
                For whole dried anchovies, rinse water with salt, fish is soaked in brine if necessary and then sundried to achieve the
                right dryness, packed and vacuum sealed to preserve and stored in cool dry place.
                '
            ];
            $productpic = ['dilis(m)1','dilis(m)2','dilis(s)last'];
        }
        if($product=='p4'){
            $productinfo = ['name'=>'Dried Pusit or Squid',
                'info'=>
                'Description<br><br>
                Pusit is a dried squid where many local Filipinos love to eat because of the soft, chewy texture and taste. It is very tasteful and is also best eaten during breakfast.
                <br><br>
                Process
                <br><br>
                Wash the squid thoroughly. Split and remove internal organs. Spread washed squids on the drying trays, sun dried and 
                turn over once or twice a day to attain uniform dryness. Packed and vacuum sealed to preserve, stored in cool dry place.
                '
            ];
            $productpic = ['pusit(s)1','pusit(s)3','pusit9'];
        }
        if($product=='p5'){
            $productinfo = ['name'=>'Tuyo or Salted Dried Fish',
                'info'=>
                'Description<br><br>
                Tuyo refers to salted dried fish (usually herring); this is also known as stockfish in some countries. 
                In the Philippines, tuyo is considered as a poor man’s food because of its cheap price – however, this 
                connotation has been expunged over the years since people of different social status learned to love and enjoy it
                <br><br>
                Process
                <br><br>
                Daing, tuyo, or bilad (literally "sun-dried" or "sun-baked") are dried fish from the Philippines. 
                Fish prepared as daing are usually split open (though they may be left whole), gutted, salted liberally,
                and then sun and air-dried. There are also "boneless" versions which fillets the fish before the drying process.
                '
            ];
            $productpic = ['tuyo3','tuyo4','tuyo5'];
        }
        if($product=='p6'){
            $productinfo = ['name'=>'Dried Sapsap or Slipmouth Fish',
                'info'=>
                'Description<br><br>
                The Common Pony fish is silvery with a brown saddle on the caudal peduncle. 
                It has faint bars on the back and sometimes a dark blotch on the forehead. 
                The anal fin is yellowish. Like all species in the genus Leiognathus, the Common Pony fish can extend its mouth into a downward pointing tube.
                <br><br>
                Process
                <br><br>
                Daing, tuyo, or bilad (literally "sun-dried" or "sun-baked") are dried fish from the Philippines. 
                Fish prepared as daing are usually split open (though they may be left whole), gutted, salted liberally,
                and then sun and air-dried. There are also "boneless" versions which fillets the fish before the drying process.
                '
            ];
            $productpic = ['sapsap1','sapsap2','sapsap5'];
        }
        if($product=='p7'){
            $productinfo = ['name'=>'Pusit Ballpen or Squid',
                'info'=>
                'Description<br><br>
                Dried pusit is a favorite Filipino breakfast staple, best served with fried garlic rice, an egg thats either 
                sunny side up or scrambled, vinegar with chilis as a dip, and a warm cup of coffee.
                <br><br>
                Process
                <br><br>
                Clean the whole pusit entirely, wash water with salt, arrange it on the drying tray to be sundried, 
                turned over to be dry evenly, packed and vacuum sealed to be preserved, stored and cool in dry place.
                '
            ];
            $productpic = ['pusitballpen3','pusitballpen2'];
        }
        if($product=='p8'){
            $productinfo = ['name'=>'Shrimp or Hibi',
                'info'=>
                'Description<br><br>
                Dried hibi rich source of carotenoids, including astaxanthin, that will bring out the colors in both marine and freshwater fish. Proper handling and drying keeps natural flavourants, proteins and lipids largely intact.
                <br><br>
                Process
                <br><br>
                Clean the shrimp totally, wash water with salt, scattered equally on the drying trays, sundried to achieve the desired dryness, packed and vacuum sealed, stored in cool dry place.
                '
            ];
            $productpic = ['shrimp','shrimp2','shrimp3'];
        }
    ?>

    <div>
        <!-- Privacy Policy -->
        <section id="privacy" class="privacy fixed-top d-flex justify-content-center d-none">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Privacy Policy</h2>
                </div>
                <div class="row content">
                    <div class="col-lg-6">
                        <p>
                        <h6>This privacy policy ("policy") will help you understand how [name] ("us", "we", "our") uses
                            and
                            protects the data you provide to us when you visit and use [website] ("website", "service").
                            We reserve the right to change this policy at any given time, of which you will be promptly
                            updated. If you want to make sure that you are up to date with the latest changes, we advise
                            you to frequently visit this page.</h6>
                        <br>
                        <h5>What User Data We Collect</h5>
                        <br>
                        <h6>When you visit the website, we may collect the following data</h6>
                        </p>
                        <ul>
                            <li><i class="ri-check-double-line"></i>Your IP address.</li>
                            <li><i class="ri-check-double-line"></i>Your contact information and email address.</li>
                            <li><i class="ri-check-double-line"></i>Other information such as interests and preferences
                            </li>
                        </ul>

                        <p>
                            We will be sharing your personal information to our sisters company (Don-Mar International
                            Consumer Goods Trading Inc & CanOtiental Cargo) for promotional purposes.
                        </p>
                        <br>
                        <h5>Why We Collect Your Data</h5>
                        <br>
                        <h6>We are collecting your data for several reasons:</h6>

                        <ul>
                            <li><i class="ri-check-double-line"></i>To better understand your needs.</li>
                            <li><i class="ri-check-double-line"></i>To improve our services and products</li>
                            <li><i class="ri-check-double-line"></i>To contact you to fill out surveys and participate
                                in
                                other types of market research.</li>
                        </ul>
                        <br>
                        <h5>Safeguarding and Securing the Data</h5>
                        <p>CDF TRADING is committed to securing your data and keeping it confidential. LGC IT TEAM has
                            done all in its power to prevent data theft, unauthorized access, and disclosure by
                            implementing
                            the latest technologies and software, which help us safeguard all the information we collect
                            online</p>
                        <br>

                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <br>
                        <h5>Links to Other Websites</h5>
                        <p>Our website contains links that lead to other websites. If you click on these links, [social
                            media]
                            is not held responsible for your data and privacy protection. Visiting those websites is not
                            governed by this privacy policy agreement. Make sure to read the privacy policy
                            documentation
                            of the website you go to from our website.</p>

                        <br>
                        <h5>Restricting the Collection of your Personal Data</h5>
                        <p>At some point, you might wish to restrict the use and collection of your personal data.
                            If you have already agreed to share your information with us, feel free to contact us via
                            email
                            and we will be more than happy to change this for you.
                            CDF TRADING will not lease, sell or distribute your personal information to any third
                            parties,
                            unless we have your permission. We might do so if the law forces us. Your personal
                            information
                            will be used when we need to send you promotional materials if you agree to this privacy
                            policy.
                        </p>

                        <button class="btn-learn-more" id="privacy-btn-close">Close</button>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Product -->
    <main>
        <div id="product" class="product">
            <section class="p-4"></section>
            <div class="container mt-5 mb-5" data-aos="fade-up">
                <div class="card">
                    <div class="row g-0">
                        <div class="col-lg-6 col-md-12 col-12 border-end">
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
                        <div class="col-lg-6 col-md-12 col-12">
                            <div class="p-3 right-side mt-2">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h3><?php echo $productinfo['name']; ?></h3>
                                </div>
                                <div class="mt-2 pr-3 content">
                                    <h6><?php echo $productinfo['info']; ?></h6>
                                </div>
                                <div class="buttons d-flex flex-row mt-5 gap-3">
                                    <a href="#contact" type="button" class="btn btn-inquire pt-2">Inquire</a>
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
        </div>

        <!-- Contact -->
        <?php include_once "contact.php"; ?>

        <!-- Footer -->
        <?php include_once "footer.php"; ?>

    </main>

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

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>

    <!-- Product function -->
    <script>
    function changeImage(element) {
        var main_prodcut_image = document.getElementById('main_product_image');
        main_prodcut_image.src = element.src;
    }
    </script>

    <!-- Custom JS -->
    <script src="assets/js/custom.js"></script>

</body>

</html>