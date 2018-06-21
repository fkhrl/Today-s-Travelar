<?php
include './include/config.php';
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
        <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
        <link href='//fonts.googleapis.com/css?family=Nunito:400,700,300' rel='stylesheet' type='text/css'>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" type="text/css">
        <link href='//fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <!--	<div class="banner">
                        
                </div>-->
        <?php include './include/header.php'; ?>
        <!---header--->		
        <div class="content">
            <!---contact--->
            <div class="contact">
                <div class="container">
                    <h2 class="tittle">How To Find Us</h2>
                    <div class="col-lg-12 col-md-12 col-sm-12 contact-bottom">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3649.83837295177!2d90.35933461446665!3d23.82434579186542!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c13b65c079ab%3A0x9a933ebe3db1aeaf!2s10+Zohirul+Islam+Ave%2C+Dhaka!5e0!3m2!1sen!2sbd!4v1481622546232" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        <!--<iframe src="http://maps.googleapis.com/maps/api/js/StaticMapService.GetMapImage?1m2&1i2253&2i2873&2e1&3u5&4m2&1u400&2u300&5m5&1e0&5sen-US&6sus&10b1&12b1&token=98266"  frameborder="0" style="border:0" allowfullscreen></iframe>-->
                    </div>
                    <div class="col-md-4 contact-left">
                        <h4>Our Location</h4>
                        <h4>Today’s Traveler Tours & Travels</h4>
                        <p>
                            <dfn>Address: <?php echo html_entity_decode($site_basic_info[0]->address); ?></dfn> <br/>
                                        <dfn>Email: <?php echo html_entity_decode($site_basic_info[0]->email); ?></dfn> <br/>
                                        <dfn>Hotline: <?php echo $site_basic_info[0]->hotline_number; ?></dfn>
                                                <dfn>Mobile: <?php echo $site_basic_info[0]->	mobile_number; ?></dfn><br/>
                                                    <dfn>Telephone: <?php echo $site_basic_info[0]->telephone_number; ?></dfn> <br/>
                                                         
                        </p>
<!--                        <ul>
                            <li>Free Phone :+1 078 4589 2456</li>
                            <li>Telephone :+1 078 4589 2456</li>
                            <li>Fax :+1 078 4589 2456</li>
                            <li><a href="mailto:info@example.com">info@example.com</a></li>
                        </ul>-->
                    </div>
                    <div class="col-md-8 contact-left cont">
                        <h4>Contact Form</h4>
                        <form action="#" method="post">
                            <input type="text" name="Name" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {
                                        this.value = 'Name';
                                    }" required="">
                            <input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {
                                        this.value = 'Email';
                                    }" required="">
                            <input type="text" name="Phone" value="Phone" onfocus="this.value = '';" onblur="if (this.value == '') {
                                        this.value = 'Phone';
                                    }" required="">
                            <textarea type="text" name="Message"  onfocus="this.value = '';" onblur="if (this.value == '') {
                                        this.value = 'Message...';
                                    }" required="">Message...</textarea>
                            <input type="submit" value="Submit" >
                            <input type="reset" value="Clear" >
                        </form>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <!---contact--->
        </div>
        <div class="footer-section">
            <?php include './include/footer.php'; ?>
        </div>
        <!--footer-->

    </body>
</html>
