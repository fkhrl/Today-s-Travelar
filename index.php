<?php

include './include/config.php';
$package = $obj->FlyQuery("SELECT 
                            DISTINCT
                            p.location_id,
                            l.id,
                            l.name_ as location_name,
                            p.image,
                            p.days,
                            p.duration,
                            p.destination,
                            p.price,
                            p.package_included,
                            p.package_exclude,
                            p.support_number
                            FROM location as l
                            LEFT JOIN package as p ON p.location_id = l.id 
                            GROUP BY l.id
                            ORDER BY id DESC 
                            ");

$top_ad = $obj->FlyQuery("SELECT * FROM top_ad order by id DESC LIMIT 1");
$left_ad = $obj->FlyQuery("SELECT * FROM left_ad order by id DESC  LIMIT 1");
$left_bottom_ad = $obj->FlyQuery("SELECT * FROM left_bottom_ad order by id DESC  LIMIT 1");
$right_ad = $obj->FlyQuery("SELECT * FROM right_ad order by id DESC  LIMIT 1");
$right_bottom_ad = $obj->FlyQuery("SELECT * FROM right_bottom_ad order by id DESC  LIMIT 1");
$bottom_ad = $obj->FlyQuery("SELECT * FROM bottom_ad order by id DESC  LIMIT 1");

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Todays Travelar Bangladesh</title>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <!--theme-style-->
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
        <link href="css/font-awesome.css" rel="stylesheet">
        <!--//theme-style-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!---->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!---->
        <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
        <link href='//fonts.googleapis.com/css?family=Nunito:400,700,300' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300' rel='stylesheet' type='text/css'>
        <!---strat-date-piker---->
        <!-- requried-jsfiles-for owl -->
        <link href="css/owl.carousel.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" type="text/css">
        <script src="js/owl.carousel.js"></script>
        <script>
            $(document).ready(function () {
                $("#owl-demo").owlCarousel({
                    items: 1,
                    lazyLoad: true,
                    autoPlay: true,
                    navigation: false,
                    navigationText: false,
                    pagination: true,
                });
            });
        </script>
        <!-- //requried-jsfiles-for owl -->

    </head>
    <body>
        <div class="banner-section">
            <?php include './include/header.php'; ?>
            <!---header--->	
            <section class="slider">
                <?php include './include/slider.php'; ?>
            </section>
            <!-- FlexSlider -->
            <script defer src="js/jquery.flexslider.js"></script>
            <script type="text/javascript">
            $(function () {
                SyntaxHighlighter.all();
            });
            $(window).load(function () {
                $('.flexslider').flexslider({
                    animation: "slide",
                    start: function (slider) {
                        $('body').removeClass('loading');
                    }
                });
            });
            </script>
            <!-- FlexSlider -->
            <!-- slider -->
        </div>

        <div class="content">
            <!---welcome---->
            <div class="welcome">
                <div id="remove" class="thumbnail" style="float: left; border: 1px solid #ededed; width: 120px; margin-left: 20px;">
                    <img src="cms-admin/upload/<?php echo $left_ad[0]->image;?>" alt="..." style="width: 100%; height: 500px;" class="img-responsive">
                    <br/>
                    <img src="cms-admin/upload/<?php echo $left_bottom_ad[0]->image;?>" alt="..." style="width: 100%; height: 500px;" class="img-responsive">
                    </div>
                 <div id="remove" class="thumbnail" style="float: right; border: 1px solid #ededed; width: 120px; margin-right: 20px;">
                        <img src="cms-admin/upload/<?php echo $right_ad[0]->image;?>" alt="..." style="width: 100%; max-height: 500px;" class="img-responsive">
                        <br/>
                        <img src="cms-admin/upload/<?php echo $right_bottom_ad[0]->image;?>" alt="..." style="width: 100%; max-height: 500px;" class="img-responsive">
                    </div>
                <div class="container" style="width: 75%;">
                    <h2 class="tittle">Welcome To Todays Travelar</h2>
                    
                    <!------add-------->
                    <div class="col-sm-12 col-md-12">
                                        <div id="remove" class="thumbnail wel-grid">
                                            <img src="cms-admin/upload/<?php echo $top_ad[0]->image;?>" alt="..." style="width: 100%; height: 150px;" class="img-responsive">
                                            
                                        </div>
                                    </div>
                    <!------add-------->
                    <div class="clear"></div>
                    <!--<p class="wel text">Semper ac dolor vitae accumsan. Cras interdum hendrerit lacinia. Phasellus accumsan urna vitae molestie interdum. Nam sed placerat libero, non eleifend dolor.</p>-->
                    <div class="wel-grids text-center">
                        <div class="row">
                            <?php
                            if (!empty($package)) {
                                foreach ($package as $pack):
                                    ?>
                                    <div class="col-sm-4 col-md-4">
                                        <div class="thumbnail wel-grid" style="width:100%;">
                                            <img src="cms-admin/upload/<?php echo $pack->image; ?>" alt="travel image" class="img-responsive">
                                            <div class="caption">
                                                <h4><?php echo $pack->location_name; ?></h4>
                                                <p>Duration: <dfn><?php echo $pack->duration; ?> </dfn></p>
                                                <p>Price : <dfn><span style="color: #ff0000"><?php echo $pack->price; ?></span></dfn></p>
                                                <a href="travel-info.php?travel=<?php echo $pack->id;?>" class="btn btn-success">For More Info</a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                endforeach;
                            }
                            ?>
                            <!------add-------->
                    <div  class="col-sm-12 col-md-12">
                                        <div id="remove" class="thumbnail wel-grid">
                                            <img src="cms-admin/upload/<?php echo $bottom_ad[0]->image;?>" alt="ad" style="width: 100%; height: 150px;">
                                            
                                        </div>
                                    </div>
                    <!------add------->
                    <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="superlist"></div>
            <div class="footer-section">
                <?php include './include/footer.php'; ?>
            </div>
            <!--footer-->

    </body>
</html>
