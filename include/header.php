<?php 
 $site_basic_info = $obj->FlyQuery("Select * from site_basic_info");
?>
<div class="header">
            <div class="container">
                <div class="header-menu">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <div class="navbar-brand logo">
                                    <!--<h1><a href="index.php"><span>Todays</span> Travelar </a></h1>-->
                                    <a href="./"><img src="cms-admin/upload/<?php echo $site_basic_info[0]->site_logo?>" class="img-responsive" alt="slider image" style="margin-top: -0px; width:"></a>
                                </div>
                            </div>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="margin-top: 25px;">
                                <ul class="nav navbar-nav">
                                   
                                    <li ><a href="index.php" data-hover="Home">Home </a></li>
                                    <li  ><a href="about.php" data-hover="About">About Today's</a></li>
                                    <li  ><a data-hover="Service" href="service.php">Services</a></li>
                                    <li ><a data-hover="Gallery" href="gallery.php">Gallery</a></li>
                                    <li ><a data-hover="Contact" href="contact.php">Contact</a></li>
                                    
                                </ul>
                            </div><!-- /.navbar-collapse -->
                        </div><!-- /.container-fluid -->
                    </nav>
                    <div class="clearfix"></div>
                </div>	
            </div> 
        </div>
        <?php 
        $page=$obj->filename();
        ?>
<script>
    $(document).ready(function(){
        $("li a[href='<?php echo $page; ?>']").parent("li").attr("class","active");
    });
</script>
