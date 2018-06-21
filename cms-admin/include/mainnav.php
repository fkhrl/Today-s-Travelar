<div id="menu" class="hidden-print hidden-xs">
    <div class="sidebar sidebar-inverse">
        <div class="sidebarMenuWrapper" style="top:0px !important;">
            <ul class="list-unstyled">
                <li><a href="index.php"><i class=" icon-projector-screen-line"></i><span>Dashboard</span></a></li>
                <!--                <li class="hasSubmenu">
                                    <a href="#" data-target="#menu-style" data-toggle="collapse"><i class="icon-compose"></i><span>Menu &amp; Navbar</span></a>
                                    <ul class="collapse" id="menu-style">
                                        <li><a href=""><span class="pull-right badge badge-primary"><i class="fa fa-check"></i></span>Sidebar Menu Dark</a></li>
                                        <li><a href="">Sidebar Menu Light</a></li>
                                        <li><a href="">Top Menu Dark</a></li>
                                        <li><a href="">Top Menu Light</a></li>
                                        <li><a href=""><span class="pull-right badge badge-primary"><i class="fa fa-check"></i></span>Top Menu Primary</a></li>
                                    </ul>
                                </li>-->

                <!--<li><a href="setting.php"><i class="icon-cogs"></i><span> Setting</span></a></li>-->

                <?php
//                $sqlpage=$obj->FlyQuery("SELECT * FROM page_info ORDER BY page_name ASC");
//                if (!empty($sqlpage))
//                    foreach ($sqlpage as $page):
//                        
                ?>
                        <!--<li><a href="<?php //echo $page->page_name; ?>"><i class="fa fa-folder-o"></i><span> <?php //echo $page->menu_name; ?></span></a></li>-->
                <?php
//                                endforeach;
                ?>
                <li><a href="site_basic_info.php"><i class="icon-cogs"></i><span>Site Setting</span></a></li>
                <li><a href="slider.php"><i class="icon-cogs"></i><span>Slider</span></a></li>
                <li><a href="./member_of.php"><i class="icon-cogs"></i><span>Member Of</span></a></li>
                <li class="hasSubmenu">
                    <a href="#" data-target="#about" data-toggle="collapse"><i class="icon-compose"></i>About Us</a>
                    <ul class="collapse" id="about">
                        <li><a href="./our_team.php"><i class="fa fa-caret-right"></i>Our Team</a></li>
                        <li><a href="./about_us.php"><i class="fa fa-caret-right"></i>About Us</a></li>
                    </ul>
                </li>
                <li class="hasSubmenu">
                    <a href="#" data-target="#package" data-toggle="collapse"><i class="icon-compose"></i>Package</a>
                    <ul class="collapse" id="package">
                        <li><a href="./location.php"><i class="fa fa-caret-right"></i>Location Name</a></li>
                        <li><a href="./package.php"><i class="fa fa-caret-right"></i>Package</a></li>
                    </ul>
                </li>
                <li class="hasSubmenu">
                    <a href="#" data-target="#gallery" data-toggle="collapse"><i class="icon-compose"></i>Gallery</a>
                    <ul class="collapse" id="gallery">
                        <li><a href="./gallery_name.php"><i class="fa fa-caret-right"></i>Gallery Name</a></li>
                        <li><a href="./gallery_photo.php"><i class="fa fa-caret-right"></i>Gallery Photo</a></li>
                    </ul>
                </li>
                <li class="hasSubmenu">
                    <a href="#" data-target="#service" data-toggle="collapse"><i class="icon-compose"></i>Service</a>
                    <ul class="collapse" id="service">
                        <li><a href="./our_service.php"><i class="fa fa-caret-right"></i>Our Service</a></li>
                        <li><a href="./service_name.php"><i class="fa fa-caret-right"></i>Service Name</a></li>
                        <li><a href="./service_list.php"><i class="fa fa-caret-right"></i>Service List</a></li>
                    </ul>
                </li>
                <li class="hasSubmenu">
                    <a href="#" data-target="#Ads" data-toggle="collapse"><i class="icon-compose"></i>Ads</a>
                    <ul class="collapse" id="Ads">
                        <li><a href="./top_ad.php"><i class="fa fa-caret-right"></i>Top Ads</a></li>
                        <li><a href="./left_ad.php"><i class="fa fa-caret-right"></i>Left Ads</a></li>
                        <li><a href="./left_bottom_ad.php"><i class="fa fa-caret-right"></i>Left Bottom Ads</a></li>
                        <li><a href="./bottom_ad.php"><i class="fa fa-caret-right"></i>Bottom Ads</a></li>
                        <li><a href="./right_ad.php"><i class="fa fa-caret-right"></i>Right Ads</a></li>
                        <li><a href="./right_bottom_ad.php"><i class="fa fa-caret-right"></i>Right Bottom Ads </a></li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</div>