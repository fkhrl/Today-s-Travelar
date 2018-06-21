<?php
include './include/config.php';
$our_service = $obj->FlyQuery("SELECT * FROM `our_service`");
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
        <link href='//fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300' rel='stylesheet' type='text/css'>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" type="text/css">
        <style>
            /*custom */
            .service_box{
                width: 100%;
                background-color: #00AD8A;
                overflow: hidden;

            }
            .service_box span{text-align: center}
        </style>
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
                        <div class="col-md-4 about-grid">
                            <h4>OUR SERVICES</h4>
                            <span><dfn>Welcome to Today’s Traveler</dfn></span>
                            <p><?php echo html_entity_decode($our_service[0]->details); ?></p>
                        </div>
                        <div class="col-md-8 text-center service-box">
                            <div class="row">
                                <?php
                                $lstservice = $obj->SelectAll("service_name");
                                if (!empty($lstservice)) {
                                    foreach ($lstservice as $service):
                                        ?>
                                        <div class="col-md-6 ">
                                            <div class="service-desc">
                                                <i class="fa fa-plane" aria-hidden="true" ></i>
                                                <h5><?php echo html_entity_decode($service->name); ?></h5>
                                                <?php
                                                $our_service_list = $obj->FlyQuery("SELECT 
                                                    sl.id,
                                                    sl.name as service_name
                                                    FROM service_list as sl WHERE sl.service_id='" . $service->id . "'");
                                                if (!empty($our_service_list)) {
                                                    foreach ($our_service_list as $service_list):
                                                        ?>
                                                        <p><span>*&nbsp;</span><?php echo html_entity_decode($service_list->service_name); ?></p>
                                                        <?php
                                                    endforeach;
                                                }
                                                ?>
                                            </div>
                                        </div>
                                        <?php
                                    endforeach;
                                }
                                ?>
                                <!--                                <div class="col-md-6">
                                                                    <div class="service-desc">
                                                                        <i class="fa fa-bus" aria-hidden="true" ></i>
                                                                        <h5>TRANSPORT SERVICES</h5>
                                                                        <p>
                                                                            <span>* </span>AIRPORT PICKUP & DROP<br>
                                                                            <span>* </span>TRANSPORT RENTAL <br> 
                                                                            <span>* </span>RENT-A-CAR SERVICE <br>
                                                                            <span>* </span>INTERNATIONAL AND DOMESTIC TICKET<br>
                                                                            BOOKING
                                                                        </p>
                                                                    </div>
                                                                </div>-->
                            </div>
                        </div>



                        <!--                        <br><br><br><br>
                                                <div class="col-md-8 text-center service-box">
                                                    <div class="row">
                                                        <div class="col-md-6" style="margin-top: 61px;">
                                                            <div class="service-desc">
                                                                <i class="fa fa-suitcase" aria-hidden="true" ></i>
                                                                <h5>SPECIAL TOUR SERVICES</h5>
                                                                <p>
                                                                    <span>* </span>BUSINESS TOUR<br>
                                                                    <span>* </span>STUDY TOUR<br> 
                                                                    <span>* </span>SPECIAL INTEREST TOUR FOR FAMILIES <br>
                                                                    <span>* </span>UNIVERSITY AND OTHER ORGANIZATIONS <br>
                                                                    <span>* </span>CORPORATE TOUR
                                                                </p>
                                                            </div>
                                                        </div><br><br><br>
                                                        <div class="col-md-6">
                                                            <div class="service-desc">
                                                                <i class="fa fa-train" aria-hidden="true" ></i>
                                                                <h5>OTHER SPECIAL SERVICES</h5>
                                                                <p>
                                                                    <span>* </span>HOTEL RESERVATION<br>
                                                                    <span>* </span>LANGUAGE GUIDE <br> 
                                                                    <span>* </span>HOME STAY SERVICE <br>
                                                                    <span>* </span>EVENT MANAGEMENT <br>
                                                                    <span>* </span>VISA ASSISTANCE
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>-->
                        <div class="clearfix"></div>
                    </div>

                </div>
            </div>	


        </div>
        <div class="footer-section">
            <?php include './include/footer.php'; ?>
        </div>
        <!--footer-->

    </body>
</html>
