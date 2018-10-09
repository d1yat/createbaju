<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo isset($title) ? $title : NULL ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="https://devitems.com/html/raptas-preview/raptas/img/favicon.png" />
    <!-- Place favicon.ico in the root directory -->
    <!-- all css here -->
    <!-- Bootstrap v3.3.6 css -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/domino/css/bootstrap.min.css">
    <!-- Animate css -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/domino/css/animate.css">
    <!-- jQuery-ui.min css -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/domino/css/jquery-ui.min.css">
    <!-- Owl carousel css -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/domino/css/owl.carousel.css">
    <!-- Font-awesome css -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/domino/css/font-awesome.min.css">
    <!-- Material design iconic css -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/domino/css/material-design-iconic-font.min.css">
    <!-- Nivo Slider css -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/domino/css/nivo-slider.css" />
    <!--Slider css -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/domino/css/slider.css" />
    <!-- Default css -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/domino/css/default.css">
    <!-- Mean menu css -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/domino/css/meanmenu.css">
    <!-- Main style css -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/domino/style.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/domino/css/responsive.css">
    <!-- modernizr css -->
    <script src="<?php echo base_url() ?>assets/domino/js/vendor/modernizr-2.8.3.min.js"></script>
    
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/site/css/main.css">
</head>
    <body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div class="header-area">
        <div class="header-topbar-area-top">
            <div class="container">
                <?php include 'header_top.php' ?>
            </div>
        </div>
        <div class="header-middle">
            <div class="container">
                <?php include 'header_middle.php' ?>
            </div>
        </div>
        <!--header main menu start-->

        <div id="sticky-header" class="main-menu-wrapper hp1-menu">
            <div class="container">
                <?php include 'header_main_menu.php' ?>
            </div>
            <div class="mobile-menu-area hp1-mobile-area">
                <div class="container">
                    <?php include 'header_main_menu_mobile.php' ?>
                </div>
            </div>
        </div>

        <!--header main menu end-->
    </div>
    <div class="clearfix"></div>
    <div id="main-content" class="container">
    <?php
        $this->load->view($content);
    ?>
        
    </div>
    <!-- Main footer area start-->

    <div class="main-footer-area">
        <div class="container">
            <?php include 'main_footer.php' ?>
        </div>
    </div>

    <!-- Main footer area end-->

    <!--Footer bottom area start-->

    <div class="footer-bottom-area">
        <div class="container">
            <?php include 'footer_bottom.php' ?>
        </div>
    </div>
    <div class="to-top posr">
        <a href="#"><i class="zmdi zmdi-arrow-merge"></i></a>
    </div>

    <!--Footer bottom area end-->
    <!-- all js here -->
    <!-- jquery latest version -->
    <script src="<?php echo base_url() ?>assets/domino/js/vendor/jquery-1.12.0.min.js"></script>
    <!-- bootstrap js -->
    <script src="<?php echo base_url() ?>assets/domino/js/bootstrap.min.js"></script>
    <!-- owl.carousel js -->
    <script src="<?php echo base_url() ?>assets/domino/js/owl.carousel.min.js"></script>
    <!-- meanmenu js -->
    <script src="<?php echo base_url() ?>assets/domino/js/jquery.meanmenu.js"></script>
    <!-- jquery-ui js -->
    <script src="<?php echo base_url() ?>assets/domino/js/jquery-ui.min.js"></script>
    <!-- wow js -->
    <script src="<?php echo base_url() ?>assets/domino/js/wow.min.js"></script>
    <!-- plugins js -->
    <script src="<?php echo base_url() ?>assets/domino/js/plugins.js"></script>
    <!-- Nivo slider pack js -->
    <script src="<?php echo base_url() ?>assets/domino/js/slider/jquery.nivo.slider.pack.js"></script>
    <!-- fancybox js -->
    <script src="<?php echo base_url() ?>assets/domino/js/jquery.fancybox.js"></script>
    <!-- Nivo active js -->
    <script src="<?php echo base_url() ?>assets/domino/js/slider/nivo-active.js"></script>
    <!-- counter up js -->
    <script src="<?php echo base_url() ?>assets/domino/js/jquery.counterup.min.js"></script>
    <!-- Treeview js -->
    <script src="<?php echo base_url() ?>assets/domino/js/jquery.treeview.js"></script>
    <!-- Google Map API js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-IIoucJ-70FQg6xZsORjQCUPHCVj9GV4"></script>
    <!-- Google Map js -->
    <script src="<?php echo base_url() ?>assets/domino/js/google-map.js"></script>
    <!-- main js -->
    <script src="<?php echo base_url() ?>assets/domino/js/main.js"></script>
    </body>
</html>
