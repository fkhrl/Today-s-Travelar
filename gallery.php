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
        <link href="css/galleryeffect.css" rel="stylesheet" type="text/css" media="all" />	
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
<?php
                                $gallery_name = $obj->SelectAll("gallery_name");
                                if (!empty($gallery_name)) {
                                    foreach ($gallery_name as $gallery):
                                        ?>
            <!-- gallery -->
            <div class="gallery">
                <div class="container">
                    <h2 class="tittle"><?php echo $gallery->name; ?></h2>
                    <div class="gal-btm">
                        <?php
                            $gallery_photo = $obj->FlyQuery("SELECT 
                                                    gp.id,
                                                    gp.gallery_name,
                                                    gp.image,
                                                    gp.image_details
                                                    FROM gallery_photo as gp
                                                    WHERE gp.gallery_name='" . $gallery->id . "'");
                            if(!empty($gallery_photo)){
                                foreach ($gallery_photo as $photo):
                        ?>
                        <div class="col-md-4 gal-gd wow fadeInLeft animated" data-wow-delay=".5s">
                            <a href="#image-<?php echo $photo->id; ?>" >
                                <div class="nd-wrap nd-style-8">
                                    <img src="cms-admin/upload/<?php echo $photo->image; ?>" class="img-responsive" alt=" " />
                                    <div class="nd-content">
                                        <div class="nd-content_inner">
                                            <div class="nd-content_inner1">
                                                <h4 class="nd-title"><?php echo $gallery->name; ?></h4>
                                                <span class="nd-icon">
                                                    <i class="glyphicon glyphicon-link"></i>
                                                </span>
                                                <span class="nd-icon">
                                                    <i class="glyphicon glyphicon-search"></i>
                                                </span>

                                            </div>					
                                        </div>				
                                    </div>
                                </div>
                            </a>
                        </div>
                         <?php
                    endforeach;
                            }
                        ?>
<!--                        <div class="col-md-4 gal-gd wow fadeInUp animated" data-wow-delay=".5s">
                            <a href="#image-2" >
                                <div class="nd-wrap nd-style-8">
                                    <img src="images/n2.jpg" class="img-responsive" alt=" " />
                                    <div class="nd-content">
                                        <div class="nd-content_inner">
                                            <div class="nd-content_inner1">
                                                <h4 class="nd-title">Nature</h4>
                                                <span class="nd-icon">
                                                    <i class="glyphicon glyphicon-link"></i>
                                                </span>
                                                <span class="nd-icon">
                                                    <i class="glyphicon glyphicon-search"></i>
                                                </span>

                                            </div>					
                                        </div>				
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 gal-gd wow fadeInRight animated" data-wow-delay=".5s">
                            <a href="#image-3" >
                                <div class="nd-wrap nd-style-8">
                                    <img src="images/n3.jpg" class="img-responsive" alt=" " />
                                    <div class="nd-content">
                                        <div class="nd-content_inner">
                                            <div class="nd-content_inner1">
                                                <h4 class="nd-title">Nature</h4>
                                                <span class="nd-icon">
                                                    <i class="glyphicon glyphicon-link"></i>
                                                </span>
                                                <span class="nd-icon">
                                                    <i class="glyphicon glyphicon-search"></i>
                                                </span>

                                            </div>					
                                        </div>				
                                    </div>
                                </div>
                            </a>
                        </div>
                        
                        <div class="col-md-4 gal-gd wow fadeInLeft animated" data-wow-delay=".5s">
                            <a href="#image-4" >
                                <div class="nd-wrap nd-style-8">
                                    <img src="images/n4.jpg" class="img-responsive" alt=" " />
                                    <div class="nd-content">
                                        <div class="nd-content_inner">
                                            <div class="nd-content_inner1">
                                                <h4 class="nd-title">Nature</h4>
                                                <span class="nd-icon">
                                                    <i class="glyphicon glyphicon-link"></i>
                                                </span>
                                                <span class="nd-icon">
                                                    <i class="glyphicon glyphicon-search"></i>
                                                </span>

                                            </div>					
                                        </div>				
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 gal-gd wow fadeInLeft animated" data-wow-delay=".5s">
                            <a href="#image-5" >
                                <div class="nd-wrap nd-style-8">
                                    <img src="images/n5.jpg" class="img-responsive" alt=" " />
                                    <div class="nd-content">
                                        <div class="nd-content_inner">
                                            <div class="nd-content_inner1">
                                                <h4 class="nd-title">Nature</h4>
                                                <span class="nd-icon">
                                                    <i class="glyphicon glyphicon-link"></i>
                                                </span>
                                                <span class="nd-icon">
                                                    <i class="glyphicon glyphicon-search"></i>
                                                </span>

                                            </div>					
                                        </div>				
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 gal-gd wow fadeInLeft animated" data-wow-delay=".5s">
                            <a href="#image-6" >
                                <div class="nd-wrap nd-style-8">
                                    <img src="images/n6.jpg" class="img-responsive" alt=" " />
                                    <div class="nd-content">
                                        <div class="nd-content_inner">
                                            <div class="nd-content_inner1">
                                                <h4 class="nd-title">Nature</h4>
                                                <span class="nd-icon">
                                                    <i class="glyphicon glyphicon-link"></i>
                                                </span>
                                                <span class="nd-icon">
                                                    <i class="glyphicon glyphicon-search"></i>
                                                </span>

                                            </div>					
                                        </div>				
                                    </div>
                                </div>
                            </a>
                        </div>-->
                        <div class="clearfix"></div>
                    </div>
                </div>
                
            </div>
              
            <!-- //gallery -->
            <?php
                            $gallery_photo = $obj->FlyQuery("SELECT 
                                                    gp.id,
                                                    gp.gallery_name,
                                                    gp.image,
                                                    gp.image_details
                                                    FROM gallery_photo as gp
                                                    WHERE gp.gallery_name='" . $gallery->id . "'");
                            if(!empty($gallery_photo)){
                                foreach ($gallery_photo as $photo):
                        ?>
            <div class="lb-overlay" id="image-<?php echo $photo->id; ?>">
                <img src="cms-admin/upload/<?php echo $photo->image; ?>" alt="image1" />
                <div class="gal-info">							
                    <h3><?php echo $gallery->name;?></h3>
                    <p><?php echo html_entity_decode($photo->image_details);?></p>
                </div>
                <a href="gallery.php" class="lb-close">Close</a>
            </div>
           <?php
                            endforeach;
                            
                            }
                    endforeach;
                                }
            ?>
          
<!--            <div class="lb-overlay" id="image-2">
                <img src="images/n2.jpg" alt="image1" />
                <div class="gal-info">							
                    <h3>Nature</h3>
                    <p>Neque porro quisquam est, qui dolorem ipsum 
                        quia dolor sit amet, consectetur, adipisci velit, 
                        sed quia non numquam eius modi tempora incidunt ut
                        labore et dolore magnam aliquam quaerat voluptatem.</p>
                </div>
                <a href="gallery.php" class="lb-close">Close</a>
            </div>
            <div class="lb-overlay" id="image-3">
                <img src="images/n3.jpg" alt="image1" />
                <div class="gal-info">							
                    <h3>Nature</h3>
                    <p>Neque porro quisquam est, qui dolorem ipsum 
                        quia dolor sit amet, consectetur, adipisci velit, 
                        sed quia non numquam eius modi tempora incidunt ut
                        labore et dolore magnam aliquam quaerat voluptatem.</p>
                </div>
                <a href="gallery.php" class="lb-close">Close</a>
            </div>
            <div class="lb-overlay" id="image-4">
                <img src="images/n4.jpg" alt="image1" />
                <div class="gal-info">							
                    <h3>Nature</h3>
                    <p>Neque porro quisquam est, qui dolorem ipsum 
                        quia dolor sit amet, consectetur, adipisci velit, 
                        sed quia non numquam eius modi tempora incidunt ut
                        labore et dolore magnam aliquam quaerat voluptatem.</p>
                </div>
                <a href="gallery.php" class="lb-close">Close</a>
            </div>
            <div class="lb-overlay" id="image-5">
                <img src="images/n5.jpg" alt="image1" />
                <div class="gal-info">							
                    <h3>Nature</h3>
                    <p>Neque porro quisquam est, qui dolorem ipsum 
                        quia dolor sit amet, consectetur, adipisci velit, 
                        sed quia non numquam eius modi tempora incidunt ut
                        labore et dolore magnam aliquam quaerat voluptatem.</p>
                </div>
                <a href="gallery.php" class="lb-close">Close</a>
            </div>
            <div class="lb-overlay" id="image-6">
                <img src="images/n6.jpg" alt="image1" />
                <div class="gal-info">							
                    <h3>Nature</h3>
                    <p>Neque porro quisquam est, qui dolorem ipsum 
                        quia dolor sit amet, consectetur, adipisci velit, 
                        sed quia non numquam eius modi tempora incidunt ut
                        labore et dolore magnam aliquam quaerat voluptatem.</p>
                </div>
                <a href="gallery.php" class="lb-close">Close</a>
            </div>-->


            
            
            
            <!-------->
<!--            <div class="gallery">
                <div class="container">
                    <h2 class="tittle">Tour's </h2>
                    <div class="gal-btm">
                        <div class="col-md-4 gal-gd wow fadeInLeft animated" data-wow-delay=".5s">
                            <a href="#img-1" >
                                <div class="nd-wrap nd-style-8">
                                    <img src="images/to1.jpg" class="img-responsive" alt=" " />
                                    <div class="nd-content">
                                        <div class="nd-content_inner">
                                            <div class="nd-content_inner1">
                                                <h4 class="nd-title">Tour's</h4>
                                                <span class="nd-icon">
                                                    <i class="glyphicon glyphicon-link"></i>
                                                </span>
                                                <span class="nd-icon">
                                                    <i class="glyphicon glyphicon-search"></i>
                                                </span>

                                            </div>					
                                        </div>				
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 gal-gd wow fadeInUp animated" data-wow-delay=".5s">
                            <a href="#img-2" >
                                <div class="nd-wrap nd-style-8">
                                    <img src="images/to2.jpg" class="img-responsive" alt=" " />
                                    <div class="nd-content">
                                        <div class="nd-content_inner">
                                            <div class="nd-content_inner1">
                                                <h4 class="nd-title">Tour's</h4>
                                                <span class="nd-icon">
                                                    <i class="glyphicon glyphicon-link"></i>
                                                </span>
                                                <span class="nd-icon">
                                                    <i class="glyphicon glyphicon-search"></i>
                                                </span>

                                            </div>					
                                        </div>				
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 gal-gd wow fadeInRight animated" data-wow-delay=".5s">
                            <a href="#img-3" >
                                <div class="nd-wrap nd-style-8">
                                    <img src="images/to3.jpg" class="img-responsive" alt=" " />
                                    <div class="nd-content">
                                        <div class="nd-content_inner">
                                            <div class="nd-content_inner1">
                                                <h4 class="nd-title">Tour's</h4>
                                                <span class="nd-icon">
                                                    <i class="glyphicon glyphicon-link"></i>
                                                </span>
                                                <span class="nd-icon">
                                                    <i class="glyphicon glyphicon-search"></i>
                                                </span>

                                            </div>					
                                        </div>				
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 gal-gd wow fadeInRight animated" data-wow-delay=".5s">
                            <a href="#img-4" >
                                <div class="nd-wrap nd-style-8">
                                    <img src="images/to4.jpg" class="img-responsive" alt=" " />
                                    <div class="nd-content">
                                        <div class="nd-content_inner">
                                            <div class="nd-content_inner1">
                                                <h4 class="nd-title">Tour's</h4>
                                                <span class="nd-icon">
                                                    <i class="glyphicon glyphicon-link"></i>
                                                </span>
                                                <span class="nd-icon">
                                                    <i class="glyphicon glyphicon-search"></i>
                                                </span>

                                            </div>					
                                        </div>				
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 gal-gd wow fadeInRight animated" data-wow-delay=".5s">
                            <a href="#img-5" >
                                <div class="nd-wrap nd-style-8">
                                    <img src="images/to5.jpg" class="img-responsive" alt=" " />
                                    <div class="nd-content">
                                        <div class="nd-content_inner">
                                            <div class="nd-content_inner1">
                                                <h4 class="nd-title">Tour's</h4>
                                                <span class="nd-icon">
                                                    <i class="glyphicon glyphicon-link"></i>
                                                </span>
                                                <span class="nd-icon">
                                                    <i class="glyphicon glyphicon-search"></i>
                                                </span>

                                            </div>					
                                        </div>				
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 gal-gd wow fadeInRight animated" data-wow-delay=".5s">
                            <a href="#img-6" >
                                <div class="nd-wrap nd-style-8">
                                    <img src="images/to6.jpg" class="img-responsive" alt=" " />
                                    <div class="nd-content">
                                        <div class="nd-content_inner">
                                            <div class="nd-content_inner1">
                                                <h4 class="nd-title">Tour's</h4>
                                                <span class="nd-icon">
                                                    <i class="glyphicon glyphicon-link"></i>
                                                </span>
                                                <span class="nd-icon">
                                                    <i class="glyphicon glyphicon-search"></i>
                                                </span>

                                            </div>					
                                        </div>				
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                
            </div>-->
            <!-- //gallery -->
<!--            <div class="lb-overlay" id="img-1">
                <img src="images/to1.jpg" alt="image1" />
                <div class="gal-info">							
                    <h3>Tour's</h3>
                    <p>Neque porro quisquam est, qui dolorem ipsum 
                        quia dolor sit amet, consectetur, adipisci velit, 
                        sed quia non numquam eius modi tempora incidunt ut
                        labore et dolore magnam aliquam quaerat voluptatem.</p>
                </div>
                <a href="gallery.php" class="lb-close">Close</a>
            </div>
            <div class="lb-overlay" id="img-2">
                <img src="images/to2.jpg" alt="image1" />
                <div class="gal-info">							
                    <h3>Tour's</h3>
                    <p>Neque porro quisquam est, qui dolorem ipsum 
                        quia dolor sit amet, consectetur, adipisci velit, 
                        sed quia non numquam eius modi tempora incidunt ut
                        labore et dolore magnam aliquam quaerat voluptatem.</p>
                </div>
                <a href="gallery.php" class="lb-close">Close</a>
            </div>
            <div class="lb-overlay" id="img-3">
                <img src="images/to3.jpg" alt="image1" />
                <div class="gal-info">							
                    <h3>Tour's</h3>
                    <p>Neque porro quisquam est, qui dolorem ipsum 
                        quia dolor sit amet, consectetur, adipisci velit, 
                        sed quia non numquam eius modi tempora incidunt ut
                        labore et dolore magnam aliquam quaerat voluptatem.</p>
                </div>
                <a href="gallery.php" class="lb-close">Close</a>
            </div>
            <div class="lb-overlay" id="img-4">
                <img src="images/to4.jpg" alt="image1" />
                <div class="gal-info">							
                    <h3>Tour's</h3>
                    <p>Neque porro quisquam est, qui dolorem ipsum 
                        quia dolor sit amet, consectetur, adipisci velit, 
                        sed quia non numquam eius modi tempora incidunt ut
                        labore et dolore magnam aliquam quaerat voluptatem.</p>
                </div>
                <a href="gallery.php" class="lb-close">Close</a>
            </div>
            <div class="lb-overlay" id="img-5">
                <img src="images/to5.jpg" alt="image1" />
                <div class="gal-info">							
                    <h3>Tour's</h3>
                    <p>Neque porro quisquam est, qui dolorem ipsum 
                        quia dolor sit amet, consectetur, adipisci velit, 
                        sed quia non numquam eius modi tempora incidunt ut
                        labore et dolore magnam aliquam quaerat voluptatem.</p>
                </div>
                <a href="gallery.php" class="lb-close">Close</a>
            </div>
            <div class="lb-overlay" id="img-6">
                <img src="images/to6.jpg" alt="image1" />
                <div class="gal-info">							
                    <h3>Tour's</h3>
                    <p>Neque porro quisquam est, qui dolorem ipsum 
                        quia dolor sit amet, consectetur, adipisci velit, 
                        sed quia non numquam eius modi tempora incidunt ut
                        labore et dolore magnam aliquam quaerat voluptatem.</p>
                </div>
                <a href="gallery.php" class="lb-close">Close</a>
            </div>
            
            
        </div>-->
        <div class="footer-section">
            <?php include './include/footer.php';?>
        </div>
        <!--footer-->

    </body>
</html>
