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
            <div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id))
            return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=260070431060837";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<div class="container">
    <div class="footer-grids">
        <div class="col-md-3 footer-grid">
            <h4>Get In Touch</h4>
            <ul>
                <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i> Office : <?php echo $site_basic_info[0]->telephone_number; ?></li>
                <li><i class="glyphicon glyphicon-phone" aria-hidden="true"></i> Mobile : <?php echo $site_basic_info[0]->hotline_number; ?></li>
                <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i> <a href="#"><a href="mailme@todaystravelerbd.com">mailme@todaystravelerbd.com</a></a></li>
            </ul>
        </div>
        <div class="col-md-3 footer-grid">
            <h4>Quick links</h4>
            <ul>
                <li><a href="about.php" data-hover="About">About Today's</a></li>
                <li><a data-hover="Restaurant" href="service.php">Our Services</a></li>
                <li><a data-hover="Gallery" href="gallery.php">Gallery</a></li>
                <li><a data-hover="Contact" href="contact.php">Contact Us</a></li>
            </ul>
        </div>
        <div class="col-md-3 footer-grid">
            <h4>Member Of</h4>
            <!--member of start-->
            <div class="flexslider" style="height: 200px; min-height: 60px;">
			    <ul class="slides">
			        <?php
			        $slider_image = $obj->FlyQuery("SELECT * FROM member_of ORDER BY id DESC LIMIT 8");
			        if(!empty($slider_image)){
			            foreach($slider_image as $slider):
			        ?>
			        <li>
			            <div class="slider-info">
			                <img src="cms-admin/upload/<?php echo $slider->photo; ?>" class="img-responsive" alt="slider image" style="width: 170px; height: 203px;"/>
			            </div>
			        </li>
			        <?php 
			    endforeach;
			        }
			        ?>
			       
			    </ul>
</div>
            <!--member of end-->
        </div>
        <div class="col-md-3 footer-grid" >
            <h4>Our Facebook Funpage</h4>
            <ul>
                <li><div class="fb-page" data-href="https://www.facebook.com/techinfotips/" data-tabs="timeline" data-width="400" data-height="200" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/techinfotips/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/techinfotips/">Information Technology</a></blockquote></div></li>
            </ul>
        </div>
        <!--        <div class="col-md-3 footer-grid">
                    <h4>Our Services </h4>
                    <ul>
                        <li>Room services</li>
                        <li>Free internet Wifi</li>
                        <li>Television (50 channels)</li>
                        <li>Pets allowed</li>
                    </ul>
                </div>-->
        <div class="clearfix"></div>
    </div>
</div>
</div>	
<!--footer-->
<div class="copy-section">
    <div class="container">

        <div class="row">
            <div class="col-md-11">
                <div class="footer-top">
                    <p>&copy; <?php echo date('Y') ?> Today’s Traveler. All rights reserved | Design by <a href="http://amsoftltd.com/" target="_blank"> a.m. Soft Ltd.</a></p>
                </div>
                <div class="social-icons">
                    <a href="<?php echo $site_basic_info[0]->facebook_link ?>" target="_blank"><i class="icon"></i></a>
                    <a href="<?php echo $site_basic_info[0]->twitter_link ?>" target="_blank"><i class="icon1"></i></a>
                    <a href="<?php echo $site_basic_info[0]->google_plus_link ?>" target="_blank"><i class="icon2"></i></a>
                    <a href="<?php echo $site_basic_info[0]->linkedin_link ?>" target="_blank"><i class="icon3"></i></a>
                </div>

            </div>
            <div class="col-md-1" id="footer-i">
                <a href="#"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>