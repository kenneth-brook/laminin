<?php
if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}

?>

<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0" />
    <title>Laminin Industries</title>
    <meta name="Keywords" content="" />
    <meta name="Description"
        content="Laminin Industries serves commercial and industrial construction clients with high-quality cleaning and manufacturing equipment and products. " />
    <?php include "includes/header-code.php"; ?>
</head>

<body>

    <div id="page" class="site page-home">
        <header id="masthead" class="site-header clearfix" role="banner">
            <?php include "includes/sticky-header.php"; ?>

            <div class="home-header">
                <?php include "includes/left-header.php"; ?>
                <?php include "includes/home-header.php"; ?>
            </div>
        </header>
        <!-- /#masthead -->


        <main id="content" class="site-main" role="main">
            <div class="container">
                <div class="welcome">
                    <div class="welcome-top cushycms" title="Welcome top">
                        <p>Welcome to Laminin Industries. We are a national account distributor and wholesaler serving
                            our clients across the United States.</p>
                    </div>
                    <hr>
                    <div class="welcome-bottom cushycms" title="Welcome bottom">
                        <p> We specialize in high-quality flooring installation products, equipment, cleaning tools and
                            supplies for both commercial and industrial construction industries.</p>
                    </div>
                </div>
            </div>

            <div class="site-content-wrapper clearfix">
                <div class="container">
                    <div class="site-content clearfix">

                        <div class="product-wrapper">
                            <div class="product-overview">
                                <h3 class="heading"><span>PRODUCTS</span></h3>
                                <div class="cushycms" title="Overview">
                                    <p>As your full-service supplier, Laminin continually adds to our product lines with
                                        equipment and commercial construction solutions that make it easier for you to
                                        build, construct, trim, repair, clean, and more! <strong
                                            class="d-inline-block">Contact us</strong> or call us directly <span
                                            class="d-inline-block">at 706.676.2298.</span></p>
                                    <p class="pl-2"><a href="contact-us.php" class="button">Contact Us</a></p>
                                </div>
                            </div>

                            <div class="product-list-wrapper">
                                <ul class="product-list cushycms" title="Products">
                                    <li class="cushycms">
                                        <a href="index.php?adhesives.php" class="product-item">
                                            <div>
                                                <img src="images/contents/adhesives-thumbnail.jpg" alt="">
                                                <h4>ADHESIVES</h4>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="cushycms">
                                        <a href="floor-prep.php" class="product-item">
                                            <div>
                                                <img src="images/contents/floor-prep-thumbnail.jpg" alt="">
                                                <h4>FLOOR PREP</h4>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="cushycms">
                                        <a href="turf-products.php" class="product-item">
                                            <div>
                                                <img src="images/contents/turf-products-thumbnail.jpg" alt="">
                                                <h4>TURF <span>PRODUCTS</span></h4>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="cushycms">
                                        <a href="concrete-restoration.php#slurry-transformation" class="product-item">
                                            <div>
                                                <img src="images/contents/slurry-transformation-thumbnail.jpg" alt="">
                                                <h4>SLURRY <span>TRANSFORMER</span></h4>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="cushycms">
                                        <a href="floor-pads.php" class="product-item">
                                            <div>
                                                <img src="images/contents/floor-pads-thumbnail.jpg" alt="">
                                                <h4>FLOOR PADS</h4>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="cushycms">
                                        <a href="cleaning-equipment.php" class="product-item">
                                            <div>
                                                <img src="images/contents/cleaning-equipment-thumbnail.jpg" alt="">
                                                <h4>CLEANING <span>EQUIPMENT</span></h4>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="cushycms">
                                        <a href="concrete-restoration.php" class="product-item">
                                            <div>
                                                <img src="images/contents/concrete-restoration-thumbnail.jpg" alt="">
                                                <h4>CONCRETE <span>RESTORATION</span></h4>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="cushycms">
                                        <a href="primers-sealers.php" class="product-item">
                                            <div>
                                                <img src="images/contents/primers-sealers-thumbnail.jpg" alt="">
                                                <h4>PRIMERS & <span>SEALERS</span></h4>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="cushycms">
                                        <a href="self-levelers-patches.php" class="product-item">
                                            <div>
                                                <img src="images/contents/self-levelers-patches-thumbnail.jpg" alt="">
                                                <h4>SELF-LEVELERS <span>& PATCHES</span></h4>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="site-bottom clearfix">
                <img src="images/contents/home-bottom.jpg" alt="">
                <?php include "includes/footer-text.php"; ?>
            </div>
        </main>
        <!-- /#content -->

        <?php include "includes/footer.php"; ?>
    </div>
    <!-- /#page -->

    <?php include "includes/footer-code.php"; ?>
    <script type="text/javascript" src="js/script-home.js"></script>
</body>

</html>