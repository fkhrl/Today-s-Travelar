<?php
include './include/config.php';
$pack_id = $_GET['travel'];


$package = $obj->FlyQuery("SELECT
                            p.id,
                            l.name_ as location_name,
                            p.image,
                            p.days,
                            p.duration,
                            p.`destination`,
                            p.price,
                            p.package_included,
                            p.package_exclude,
                            p.`support_number`
                            FROM package as p
                            LEFT JOIN location as l ON l.id = p.location_id 
                            WHERE p.location_id='" . $pack_id . "'                            
                            ORDER BY p.id ASC"); 
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
        <meta property="og:title" content="Vide" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Best Hotel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!---->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <link href='//fonts.googleapis.com/css?family=Nunito:400,700,300' rel='stylesheet' type='text/css'>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" type="text/css">
        <link href='//fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300' rel='stylesheet' type='text/css'>
        <!---strat-date-piker---->
        <!-- requried-jsfiles-for owl -->
        <link href="css/owl.carousel.css" rel="stylesheet">
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

        </div>

        <div class="content">
            <!---welcome--->
            <div class="welcome">
                <div class="container">
                    <div class="wel-grids">
                        <div class="row">
                            <?php
                            if (!empty($package)) {
                                
                                ?>
                                <div class="col-sm-12 col-md-12">
                                    <div class="thumbnail travel-info">
                                        <img src="cms-admin/upload/<?php echo $package[0]->image; ?>" alt="<?php echo $package[0]->location_name; ?>" class="img-responsive">
                                        <div class="caption">
                                            <h4><span>Package Name:&nbsp;</span><?php echo $package[0]->location_name; ?></h4>

                                            <table class="table table-bordered table-hover table-responsive" style="width: 100%">
                                                <thead>
                                                    <tr>
                                                        <th>Duration</th>
                                                        <th>Departure</th>
                                                        <th>Price</th>
                                                        <th>Package Included</th>
                                                        <th>Package Exclude</th>
                                                        <th>More Details</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($package as $pack){ ?>
                                                    <tr>
                                                        <td><?php echo $pack->days; ?></td>
                                                        <td><?php echo $pack->duration; ?></td>
                                                        <td><?php echo $pack->price; ?></td>
                                                        <td><?php echo html_entity_decode($pack->package_included);?></td>
                                                        <td><?php echo html_entity_decode($pack->package_exclude);?></td>
                                                        <td><?php echo $pack->support_number; ?></td>
                                                    </tr> 
                                                    <?php } ?>
                                                </tbody>
                                            </table>


                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                        </div>

                        <div class="clearfix"></div>
                    </div>





                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!---welcome--->
        <!--            <div class="resort-section">
                        <div class="container">
                            <h3 class="tittle">Our Packages</h3>
                            <div class="resort-grids">
                                 start content_slider 
                                <div id="owl-demo" class="owl-carousel">
                                    <div class="item">
                                        <div class="col-md-6 cap-img">
                                            <img src="images/p.jpg" class="img-responsive gray" alt=""/>
                                        </div>
                                        <div class="col-md-6 cap">
                                            <h4>Surrounded By Custom Designed</h4>	
                                            <ul class="cap1">
                                                <li><i class="glyphicon glyphicon-map-marker"></i> 33 Street Name, City Name United States</li>
                                                <li><i class="glyphicon glyphicon-plane"></i> US Airlines</li>
                                                <li><i class="glyphicon glyphicon-road"></i> Free Transport</li>
                                            </ul>										
                                            <p>Duis at ante nec neque rhoncus pretium. Ut placerat euismod nibh industry's stand orci donec mollis, est non scelerisque blandit, velit nunc laoreet dol scrambled it to augue non elit aliquam in vehicula sem phasellu  consectetur adipiscing elit donec porttitor lectus at neque sollicitudin.</p>
                                            <div class="detais">
                                                <div class="col-md-9 deatils-left">
                                                    <div class="list">
                                                        <ul>
                                                            <li><i class="glyphicon glyphicon-thumbs-up"></i> Free Private Parking is Available</li>
                                                            <li><i class="glyphicon glyphicon-cutlery"></i> In Room Dining is Available 09:00 P.M. - 12:09 P.M.</li>
                                                            <li><i class="glyphicon glyphicon-signal"></i> Free High Speed Wi-Fi Internet in Room</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 deatils-right">
                                                    <div class="detail-top">
                                                        <span>PER NIGHT</span>
                                                        <h4>$45</h4>
                                                    </div>
                                                </div>
                                                <div class="clearfix"> </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="item">
                                        <div class="col-md-6 cap-img">
                                            <img src="images/p1.jpg" class="img-responsive gray" alt=""/>
                                        </div>
                                        <div class="col-md-6 cap">
                                            <h4>Free High Speed Wi-Fi Internet in Room</h4>
                                            <ul class="cap1">
                                                <li><i class="glyphicon glyphicon-map-marker"></i> 33 Street Name, City Name United States</li>
                                                <li><i class="glyphicon glyphicon-plane"></i> US Airlines</li>
                                                <li><i class="glyphicon glyphicon-road"></i> Free Transport</li>
                                            </ul>		
                                            <p>Duis at ante nec neque rhoncus pretium. Ut placerat euismod nibh industry's stand orci donec mollis, est non scelerisque blandit, velit nunc laoreet dol scrambled it to augue non elit aliquam in vehicula sem phasellu  consectetur adipiscing elit donec porttitor lectus at neque sollicitudin.</p>
                                            <div class="detais">
                                                <div class="col-md-9 deatils-left">
                                                    <div class="list">
                                                        <ul>
                                                            <li><i class="glyphicon glyphicon-thumbs-up"></i> Free Private Parking is Available</li>
                                                            <li><i class="glyphicon glyphicon-cutlery"></i> In Room Dining is Available 09:00 P.M. - 12:09 P.M.</li>
                                                            <li><i class="glyphicon glyphicon-signal"></i> Free High Speed Wi-Fi Internet in Room</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 deatils-right">
                                                    <div class="detail-top">
                                                        <span>PER NIGHT</span>
                                                        <h4>$45</h4>
                                                    </div>
                                                </div>
                                                <div class="clearfix"> </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="item">
                                        <div class="col-md-6 cap-img">
                                            <img src="images/p2.jpg" class="img-responsive gray" alt=""/>
                                        </div>
                                        <div class="col-md-6 cap">
                                            <h4>Surrounded By Custom Designed</h4>	
                                            <ul class="cap1">
                                                <li><i class="glyphicon glyphicon-map-marker"></i> 33 Street Name, City Name United States</li>
                                                <li><i class="glyphicon glyphicon-plane"></i> US Airlines</li>
                                                <li><i class="glyphicon glyphicon-road"></i> Free Transport</li>
                                            </ul>										
                                            <p>Duis at ante nec neque rhoncus pretium. Ut placerat euismod nibh industry's stand orci donec mollis, est non scelerisque blandit, velit nunc laoreet dol scrambled it to augue non elit aliquam in vehicula sem phasellu  consectetur adipiscing elit donec porttitor lectus at neque sollicitudin.</p>
                                            <div class="detais">
                                                <div class="col-md-9 deatils-left">
                                                    <div class="list">
                                                        <ul>
                                                            <li><i class="glyphicon glyphicon-thumbs-up"></i> Free Private Parking is Available</li>
                                                            <li><i class="glyphicon glyphicon-cutlery"></i> In Room Dining is Available 09:00 P.M.-12:09 P.M.</li>
                                                            <li><i class="glyphicon glyphicon-signal"></i> Free High Speed Wi-Fi Internet in Room</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 deatils-right">
                                                    <div class="detail-top">
                                                        <span>PER NIGHT</span>
                                                        <h4>$45</h4>
                                                    </div>
                                                </div>
                                                <div class="clearfix"> </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>	
                                </div>
                            </div>
                        </div>
                    </div>-->
        <div class="superlist"></div>

        <div class="footer-section">
            <?php include './include/footer.php'; ?>
        </div>
        <!--footer-->

    </body>
</html>
