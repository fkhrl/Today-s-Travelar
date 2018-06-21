<?php
include './include/config.php';
$about_us = $obj->FlyQuery("SELECT * FROM `about_us` ");
$our_team = $obj->FlyQuery("SELECT * FROM `our_team` ");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Todays Travelar Bangladesh</title>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery.min.js"></script>
        <!-- Custom Theme files -->
        <!--theme-style-->
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
        <!--//theme-style-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta property="og:title" content="Vide" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Best Hotel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!---->
        <script src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/font-awesome.min.css"> 
        <!---->
        <script type="text/javascript" src="js/numscroller-1.0.js"></script>
        <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
        <link href='//fonts.googleapis.com/css?family=Nunito:400,700,300' rel='stylesheet' type='text/css'>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" type="text/css">
        <link href='//fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <!--<div class="banner">
                        
                </div>-->
        <?php include './include/header.php'; ?>
        <!---header--->		
        <div class="content">
            <div class="about-section">
                <div class="container">
                    <!--<h2 class="tittle">About the Todays Travelar</h2>-->
                    <div class="about-grids">
                        <div class="col-md-7 about-grid">
                            <h4>INTRODUCTION</h4>
                            <span><dfn>OUR TEAM</dfn></span>
                            <p><?php echo html_entity_decode($our_team[0]->details);?></p>
                        </div>
                        <div class="col-md-5 about-grid">
                            <div class="about-top1">
                                <div class="col-md-12 about-right">
                                    <div class="about-img">
                                        <img src="cms-admin/upload/<?php echo $our_team[0]->image; ?>" class="img-responsive gray" alt=""/>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    
                    <br>
                    <div class="about-grids">
                        <div class="col-md-7 about-grid">
                            <h4>ABOUT US</h4>
                            <p><?php echo html_entity_decode($about_us[0]->details);?></p>
                        </div>
                        <div class="col-md-5 about-grid">
                            <div class="about-top1">
                                <div class="col-md-12 about-right">
                                    <div class="about-img">
                                        <img src="cms-admin/upload/<?php echo $about_us[0]->image; ?>" class="img-responsive gray" alt=""/>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>	
<!--            <div class="statistics">
                <div class="container">
                    <h3 class="tittle1">Hotel Statistics</h3>
                    <div class="statistics-grids">
                        <div class="col-md-3 statistics-grid">
                            <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='190' data-delay='.5' data-increment="100">190</div>
                            <h5>Guest Stay</h5>
                        </div>
                        <div class="col-md-3 statistics-grid">
                            <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='372' data-delay='.5' data-increment="100">372</div>
                            <h5>Book Room</h5>
                        </div>
                        <div class="col-md-3 statistics-grid">
                            <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='10520' data-delay='.5' data-increment="100">10520</div>
                            <h5>Members Stay</h5>
                        </div>
                        <div class="col-md-3 statistics-grid">
                            <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='256' data-delay='.5' data-increment="100">256</div>
                            <h5>Meals Served</h5>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>-->
            <!--team-->
<!--            <div class="team">
                <div class="container">
                    <h3 class="tittle">Our Team </h3>
                    <div class="team-row">
                        <div class="col-md-3 team-grids wow fadeInUp animated" data-wow-delay=".5s">
                            <h5>Mark Smithy</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipi est eligendi scing elit consectetur</p>
                            <div class="social-icons">
                                <a href="#"><i class="icon"></i></a>
                                <a href="#"><i class="icon1"></i></a>
                                <a href="#"><i class="icon2"></i></a>
                            </div>
                            <div class="team-img">
                                <img src="images/t4.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-md-3 team-grids team-mdl wow fadeInUp animated" data-wow-delay=".5s">
                            <h5>Aliquam amet</h5>
                            <p>Consectetur adipi lorem ipsum dolor sit amet, est eligendi scing elit consectetur.</p>
                            <div class="social-icons">
                                <a href="#"><i class="icon"></i></a>
                                <a href="#"><i class="icon1"></i></a>
                                <a href="#"><i class="icon2"></i></a>
                            </div>
                            <div class="team-img">
                                <img src="images/t5.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-md-3 team-grids team-mdl1 wow fadeInUp animated" data-wow-delay=".5s">
                            <h5>Daniel Nyari</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipi est eligendi scing elit consectetur.</p>
                            <div class="social-icons">
                                <a href="#"><i class="icon"></i></a>
                                <a href="#"><i class="icon1"></i></a>
                                <a href="#"><i class="icon2"></i></a>
                            </div>
                            <div class="team-img">
                                <img src="images/t6.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-md-3 team-grids wow fadeInUp animated" data-wow-delay=".5s">
                            <h5>Alan ipsum</h5>
                            <p>Eligendi scing elit lorem ipsum dolor sit amet, consectetur dolore magnam aliquam</p>
                            <div class="social-icons">
                                <a href="#"><i class="icon"></i></a>
                                <a href="#"><i class="icon1"></i></a>
                                <a href="#"><i class="icon2"></i></a>
                            </div>
                            <div class="team-img">
                                <img src="images/t7.jpg" alt="">
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>	-->
            <!--//team-->		

        </div>
        <div class="footer-section">
            <?php include './include/footer.php';?>
        </div>
        <!--footer-->

    </body>
</html>
