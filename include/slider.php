<div class="flexslider">
    <ul class="slides">
        <?php
        $slider_image = $obj->FlyQuery("SELECT * FROM slider ORDER BY id DESC LIMIT 8");
        if(!empty($slider_image)){
            foreach($slider_image as $slider):
        ?>
        <li>
            <div class="slider-info">
                <img src="cms-admin/upload/<?php echo $slider->image; ?>" class="img-responsive" alt="slider image">
            </div>
        </li>
        <?php 
    endforeach;
        }
        ?>
       
    </ul>
</div>