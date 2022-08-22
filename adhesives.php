<?php
if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(isset($_REQUEST['save'])){
    //store the session data
    $_SESSION['id'] = $_POST['id'];
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['quantity'] = $_POST['quantity'];
    print_r($_SESSION);
}
?>

<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0" />
    <title>Adhesives | Laminin Industries</title>
    <meta name="Keywords" content="" />
    <meta name="Description"
        content="Laminin Industries offers solutions for high-quality adhesive products that bond surfaces with exceptional durability. " />
    <?php include "includes/header-code.php"; ?>
</head>

<body>
    <div id="page" class="site page-adhesives">
        <header id="masthead" class="site-header clearfix" role="banner">
            <?php include "includes/sticky-header.php"; ?>

            <div class="main-header">
                <div class="main-header-side clearfix">
                    <?php include "includes/left-header.php"; ?>
                </div>

                <div class="main-header-large">
                    <nav id="access" class="main-menu">
                        <?php include "includes/menu.php"; ?>
                    </nav>

                    <div class="content-header">
                        <div class="content-header-image">
                            <img src="images/contents/adhesives.jpg" alt="Cover" class="cushycms">
                        </div>
                        <div class="content-header-overlay">
                            <div class="content-header-text clearfix">
                                <div class="container">
                                    <h3 class="page-title cushycms" title="Title">
                                        <small>Products</small>
                                        <strong>Adhesives</strong>
                                    </h3>
                                    <div class="cushycms" title="Overview">
                                        <p>Adhesives are non-metallic materials used to join surfaces permanently. You
                                            can bind materials together and distribute load stress evenly across
                                            surfaces. Browse our Floor Prep Products complete with product and safety
                                            data sheets for each item.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- /#masthead -->

        <main id="content" class="site-main" role="main">
            <div class="site-content-wrapper clearfix">
                <div class="container">
                    <div class="site-content clearfix">

                        <ul class="list-card">
                            <?php include "includes/adhesivesCards.php"; ?>
                            <!--<li>
                                <div class="card">
                                    <h3 class="card-header cushycms">COLOSSAL 117-HMA (100% RH, 14PH)</h3>
                                    <div class="card-body cushycms">
                                        <h5 class="card-title">Adhesive for Resilient & Sport Flooring Installation</h5>
                                        <p>Colossal 117-HMA is an ideal selection for areas with high or heavy traffic,
                                            rolling loads, and building entrances where high moisture is to be expected.
                                        </p>
                                    </div>
                                    <div class="card-footer cushycms">
                                        <ul class="card-buttons">
                                            <li><a href="https://lamininindustries.com/wp-content/uploads/2020/11/Colossal-117-HMA-Product-Data-Sheet.pdf"
                                                    class="card-button" target="_blank">Product Data Sheet</a></li>
                                            <li><a href="https://lamininindustries.com/wp-content/uploads/2021/04/Colossal-117-HMA-SDS.pdf"
                                                    class="card-button" target="_blank">Safety Data Sheet</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="card">
                                    <h3 class="card-header cushycms">COLOSSAL 117-RVA9511</h3>
                                    <div class="card-body cushycms">
                                        <h5 class="card-title">Rollable Vinyl Adhesive (95RH/11PH)</h5>
                                        <p>This breakthrough, user-friendly adhesive is ideal for vinyl tile, vinyl
                                            plank, vinyl composition tile and solid vinyl sheet goods. Ideal for heavy
                                            rolling loads (hospital beds, furniture, etc.).</p>
                                    </div>
                                    <div class="card-footer cushycms">
                                        <ul class="card-buttons">
                                            <li><a href="https://lamininindustries.com/wp-content/uploads/2022/01/Colossal-117-RVA9511_PDS.pdf"
                                                    class="card-button" target="_blank">Product Data Sheet</a></li>
                                            <li><a href="https://lamininindustries.com/wp-content/uploads/2021/01/Colossal-117-RVA9511-RollableVinylAdhesive-SDS.pdf"
                                                    class="card-button" target="_blank">Safety Data Sheet</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="card">
                                    <h3 class="card-header cushycms">COLOSSAL 117-RVA9912</h3>
                                    <div class="card-body cushycms">
                                        <h5 class="card-title">Rollable Vinyl Adhesive (99RH/12PH)</h5>
                                        <p>Approved for use with vinyl composition tile (VCT), luxury vinyl tile, luxury
                                            vinyl plank, vinyl enhanced tile, quartz tile, bio-based tile,
                                            fiberglass-reinforced vinyl sheet flooring, solid vinyl sheet flooring,
                                            reground rubber underlayment, cork underlayment, and vinyl-backed and
                                            polyolefin-backed carpet tile.</p>
                                    </div>
                                    <div class="card-footer cushycms">
                                        <ul class="card-buttons">
                                            <li><a href="https://lamininindustries.com/wp-content/uploads/2022/01/Colossal-117_RVA9912_PDS.pdf"
                                                    class="card-button" target="_blank">Product Data Sheet</a></li>
                                            <li><a href="https://lamininindustries.com/wp-content/uploads/2022/01/Colossal-117_RVA9912_SDS.pdf"
                                                    class="card-button" target="_blank">Safety Data Sheet</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="card">
                                    <h3 class="card-header cushycms">COLOSSAL 117-SFA</h3>
                                    <div class="card-body cushycms">
                                        <h5 class="card-title">Sport Flooring Adhesive</h5>
                                        <p>Colossal 117-SFA Sport Flooring Adhesive spreads easily and has a non-slump
                                            formula that will help ensure contact transfer and adhesive because the
                                            ridges will bridge normal gaps between the flooring and substrate.</p>
                                    </div>
                                    <div class="card-footer cushycms">
                                        <ul class="card-buttons">
                                            <li><a href="https://lamininindustries.com/wp-content/uploads/2021/04/Colossal-117-SFA_Sport_Flooring_Adhesive_PDS.pdf"
                                                    class="card-button" target="_blank">Product Data Sheet</a></li>
                                            <li><a href="https://lamininindustries.com/wp-content/uploads/2021/04/Colossal-117-SFA_Sport_Flooring_Adhesive_SDS.pdf"
                                                    class="card-button" target="_blank">Safety Data Sheet</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>-->
                        </ul>

                    </div>
                </div>
            </div>

            <div class="site-bottom clearfix">
                <?php include "includes/footer-text.php"; ?>
            </div>
        </main>
        <!-- /#content -->

        <?php include "includes/footer.php"; ?>
    </div>
    <!-- /#page -->

    <?php include "includes/footer-code.php"; ?>
</body>

</html>