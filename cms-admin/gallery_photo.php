<?php
include("class/auth.php");
include("plugin/plugin.php");
$plugin = new cmsPlugin();
$table = "gallery_photo";
?>
<?php
if (isset($_POST['create'])) {
    extract($_POST);
    if (!empty($gallery_name) && !empty($_FILES['image']['name']) && !empty($image_details) && !empty($priority)) {
        include('class/uploadImage_Class.php');
        $imgclassget = new image_class();
        $image = $imgclassget->upload_fiximage("upload", "image", "image_upload_" . $table_name . "_" . time());
        $insert = array('gallery_name' => $gallery_name, 'image' => $image, 'image_details' => $image_details, 'priority' => $priority, 'date' => date('Y-m-d'), 'status' => 1);
        if ($obj->insert($table, $insert) == 1) {
            $plugin->Success("Successfully Saved", $obj->filename());
        } else {
            $plugin->Error("Failed", $obj->filename());
        }
    } else {
        $plugin->Error("Fields is Empty", $obj->filename());
    }
} elseif (isset($_POST['update'])) {
    extract($_POST);
    if (!empty($gallery_name) && !empty($image_details) && !empty($priority)) {
        $updatearray = array("id" => $id);
        if (!empty($_FILES['image']['name'])) {
            include('class/uploadImage_Class.php');
            $imgclassget = new image_class();
            $image_1 = $imgclassget->upload_fiximage("upload", "image", "image_upload_" . $table_name . "_" . time());
            $image = $image_1;
            @unlink("upload/" . $ex_photo);
        } else {
            $image = $ex_photo;
        }$upd2 = array('gallery_name' => $gallery_name, 'image' => $image, 'image_details' => $image_details, 'priority' => $priority, 'date' => date('Y-m-d'), 'status' => 1);
        $update_merge_array = array_merge($updatearray, $upd2);
        if ($obj->update($table, $update_merge_array) == 1) {
            $plugin->Success("Successfully Updated", $obj->filename());
        } else {
            $plugin->Error("Failed", $obj->filename());
        }
    }
} elseif (isset($_GET['del']) == "delete") {
    $delarray = array("id" => $_GET['id']);
    $photolink = $obj->SelectAllByVal($table, 'id', $_GET['id'], 'image');
    @unlink("upload/" . $photolink);
    if ($obj->delete($table, $delarray) == 1) {
        $plugin->Success("Successfully Delete", $obj->filename());
    } else {
        $plugin->Error("Failed", $obj->filename());
    }
}
?><!doctype html>
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>    <html class="ie lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>    <html class="ie lt-ie9"> <![endif]-->
<!--[if gt IE 8]> <html> <![endif]-->
<!--[if !IE]><!--><html><!-- <![endif]-->
    <head>
        <?php
        echo $plugin->softwareTitle();
        echo $plugin->TableCss();
        echo $plugin->KendoCss();
        echo $plugin->FileUploadCss();
        ?>
    </head>
    <body class="">
        <?php include('include/topnav.php');
        include('include/mainnav.php');
        ?>





        <div id="content">
            <h1 class="content-heading bg-white border-bottom">Gallery Photo</h1>
            <div class="innerAll bg-white border-bottom">
                <ul class="menubar">
                    <li class="active"><a href="#">Create New Gallery Photo</a></li>
                    <li><a href="gallery_photo_data.php">Gallery Photo List</a></li>
                </ul>
            </div>
            <div class="innerAll spacing-x2">
<?php echo $plugin->ShowMsg(); ?>
                <!-- Widget -->

                <!-- Widget -->
                <div class="widget widget-inverse" >
                    <?php
                    if (isset($_GET['edit'])) {
                        ?>
                        <!-- Widget heading -->
                        <div class="widget-head">
                            <h4 class="heading">Update/Change - Gallery Photo</h4>
                        </div>
                        <!-- // Widget heading END -->

                        <div class="widget-body"><form enctype='multipart/form-data' class="form-horizontal" method="post" action="" role="form">
                                <input type="hidden" name="id" value="<?php echo $_GET['edit']; ?>"><div class='form-group'>
                                    <label  for="inputEmail3" class="col-sm-2 control-label"> Gallery Name </label>

                                    <div class='col-sm-6'>
                                            <!--<input type='text' id='form-field-1' name='gallery_name' placeholder='Gallery Name'  value='<?php //echo $obj->SelectAllByVal($table,"id",$_GET['edit'],"gallery_name");   ?>'  class='form-control' />-->
                                        <select name='gallery_name' class='form-control'>
                                            <option>Select A Gallery Name</option>
                                            <?php
                                            $gallery_id = $obj->SelectAllByVal($table, "id", $_GET['edit'], "gallery_name");
                                            $gallery_name = $obj->FlyQuery("SELECT * FROM gallery_name");
                                            if (!empty($gallery_name)) {
                                                foreach ($gallery_name as $gallery):
                                                    ?>
                                                    <option <?php if ($gallery_id == $gallery->id) { ?>selected="selected"<?php } ?> value="<?php echo $gallery->id; ?>"><?php echo $gallery->name; ?></option>
                                                    <?php
                                                endforeach;
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div><div class='form-group'>
                                    <label  for="inputEmail3" class="col-sm-2 control-label"> Image </label>

                                    <div class='col-sm-3'>
                                            <!--<input type='file' id='id-input-file-1' name='image' placeholder='Image' class='form-control' />-->
                                        <?php
                                        $image = $obj->SelectAllByVal($table, "id", $_GET['edit'], "image");
                                        echo $plugin->FileUploadBox("1", $image, "image");
                                        ?>
                                    </div>
                                </div><div class='form-group'>
                                    <label  for="inputEmail3" class="col-sm-2 control-label"> Image Details </label>

                                    <div class='col-sm-9'>
                                        <textarea id='editor' name='image_details' placeholder='Image Details' class='form-control'><?php echo $obj->SelectAllByVal($table, "id", $_GET['edit'], "image_details"); ?></textarea>
                                        <script>
                                            $(document).ready(function () {
    // create Editor from textarea HTML element with default set of tools
                                                $("#editor").kendoEditor({resizable: {
                                                        content: true,
                                                        toolbar: true

                                                    }});
                                            });
                                        </script>
                                    </div>
                                </div><div class='form-group'>
                                    <label  for="inputEmail3" class="col-sm-2 control-label"> Priority </label>

                                    <div class='col-sm-6'>
                                        <input type='text' id='form-field-1' name='priority' placeholder='Priority'  value='<?php echo $obj->SelectAllByVal($table, "id", $_GET['edit'], "priority"); ?>'  class='form-control' />
                                    </div>
                                </div><div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button  onclick="javascript:return confirm('Do You Want change/update These Record?')"  type="submit" name="update" class="btn btn-primary">Save Change</button>
                                        <button type="reset" class="btn btn-danger">Reset</button>
                                    </div>
                                </div>
                            </form>
                        </div>
<?php } else { ?>
                        <!-- Widget heading -->
                        <div class="widget-head">
                            <h4 class="heading">Create New Gallery Photo</h4>
                        </div>
                        <!-- // Widget heading END -->

                        <div class="widget-body"><form enctype='multipart/form-data' class="form-horizontal" method="post" action="" role="form"><div class='form-group'>
                                    <label  for="inputEmail3" class="col-sm-2 control-label"> Gallery Name </label>

                                    <div class='col-sm-6'>
                                            <!--<input type='text' id='form-field-1' name='gallery_name' placeholder='Gallery Name' class='form-control' />-->
                                        <select name='gallery_name' class='form-control'>
                                            <option>Select A Gallery Name</option>
                                            <?php
                                            $gallery_name = $obj->FlyQuery("SELECT * FROM gallery_name");
                                            if (!empty($gallery_name)) {
                                                foreach ($gallery_name as $gallery):
                                                    ?>
                                                    <option value="<?php echo $gallery->id; ?>"><?php echo $gallery->name; ?></option>
                                                    <?php
                                                endforeach;
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div><div class='form-group'>
                                    <label  for="inputEmail3" class="col-sm-2 control-label"> Image </label>

                                    <div class='col-sm-3'>
                                            <!--<input type='file' id='id-input-file-1' name='image' placeholder='Image' class='form-control' />-->
                                        <?php
                                        echo $plugin->FileUploadBox("0", "", "image");
                                        ?>
                                    </div>
                                </div><div class='form-group'>
                                    <label  for="inputEmail3" class="col-sm-2 control-label"> Image Details </label>

                                    <div class='col-sm-9'>
                                        <textarea id='editor' name='image_details' placeholder='Image Details' class='form-control'></textarea>
                                        <script>
                                            $(document).ready(function () {
    // create Editor from textarea HTML element with default set of tools
                                                $("#editor").kendoEditor({resizable: {
                                                        content: true,
                                                        toolbar: true

                                                    }});
                                            });
                                        </script>
                                    </div>
                                </div><div class='form-group'>
                                    <label  for="inputEmail3" class="col-sm-2 control-label"> Priority </label>

                                    <div class='col-sm-6'>
                                        <input type='text' id='form-field-1' name='priority' placeholder='Priority' class='form-control' />
                                    </div>
                                </div><div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit"   onclick="javascript:return confirm('Do You Want Create/save These Record?')"  name="create" class="btn btn-info">Save</button>
                                        <button type="reset" class="btn btn-danger">Reset</button>
                                    </div>
                                </div>
                            </form>
                        </div>
<?php } ?>
                </div>
                <!-- // Widget END -->




                <!-- // Widget END -->
            </div>
        </div>
        <!-- // Content END -->

        <div class="clearfix"></div>
        <!-- // Sidebar menu & content wrapper END -->
<?php include('include/footer.php'); ?>
        <!-- // Footer END -->
    </div>
    <!-- // Main Container Fluid END -->
    <!-- Global -->

    <?php
    echo $plugin->TableJs();
    echo $plugin->KendoJS();
    echo $plugin->FileUploadJS();
    ?>
</body>
</html>