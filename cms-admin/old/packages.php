<?php 
		include("class/auth.php");
		include("plugin/plugin.php");
		$plugin=new cmsPlugin();
		$table="packages"; ?>
		<?php 
		if(isset($_POST['create'])){
			extract($_POST);
			if(!empty($package_name) && !empty($content_head) && !empty($content_details))
			{  $insert=array('package_name'=>$package_name,'content_head'=>$content_head,'content_details'=>$content_details,'date'=>date('Y-m-d'),'status'=>1);
				if($obj->insert($table,$insert)==1)
				{
					$plugin->Success("Successfully Saved",$obj->filename());
				}
				else 
				{
					$plugin->Error("Failed",$obj->filename());
				}
			}
			else 
			{
				$plugin->Error("Fields is Empty",$obj->filename());
			}   
		}
		elseif(isset($_POST['update'])) 
		{
			extract($_POST);if(!empty($package_name) && !empty($content_head) && !empty($content_details))
			{$updatearray=array("id"=>$id);$upd2=array('package_name'=>$package_name,'content_head'=>$content_head,'content_details'=>$content_details,'date'=>date('Y-m-d'),'status'=>1);
						$update_merge_array=array_merge($updatearray,$upd2);
						if($obj->update($table,$update_merge_array)==1)
						{ 
							$plugin->Success("Successfully Updated",$obj->filename());
						} 
						else 
						{ 
							$plugin->Error("Failed",$obj->filename()); 
						}}}
		elseif(isset($_GET['del'])=="delete") 
		{
			$delarray=array("id"=>$_GET['id']);if($obj->delete($table,$delarray)==1)
			{ 
				$plugin->Success("Successfully Delete",$obj->filename());  
			} 
			else 
			{ 
				$plugin->Error("Failed",$obj->filename()); 
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
		?>
    </head>
    <body class="">
		<?php include('include/topnav.php'); include('include/mainnav.php'); ?>
        




        <div id="content">
        	<h1 class="content-heading bg-white border-bottom">Packages</h1>
            <div class="innerAll bg-white border-bottom">
                <ul class="menubar">
                    <li class="active"><a href="#">Create New Packages</a></li>
                    <li><a href="packages_data.php">Packages List</a></li>
                </ul>
            </div>
          <div class="innerAll spacing-x2">
				<?php echo $plugin->ShowMsg(); ?>
                <!-- Widget -->

                        <!-- Widget -->
                        <div class="widget widget-inverse" >
							<?php 
							if(isset($_GET['edit']))
							{
							?>
                            <!-- Widget heading -->
                            <div class="widget-head">
                                <h4 class="heading">Update/Change - Packages</h4>
                            </div>
                            <!-- // Widget heading END -->
							
                            <div class="widget-body"><form  class="form-horizontal" method="post" action="" role="form">
								<input type="hidden" name="id" value="<?php echo $_GET['edit']; ?>"><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Package Name </label>
		
											<div class='col-sm-9'>
												<input type='text' id='form-field-1' name='package_name' value='<?php echo $obj->SelectAllByVal($table,"id",$_GET['edit'],"package_name"); ?>' placeholder='Package Name' class='form-control' />
											</div>
										</div><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Content head </label>
		
											<div class='col-sm-9'>
												<input type='text' id='form-field-1' name='content_head' value='<?php echo $obj->SelectAllByVal($table,"id",$_GET['edit'],"content_head"); ?>' placeholder='Content head' class='form-control' />
											</div>
										</div><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Content details </label>
		
											<div class='col-sm-9'>
												<textarea id='editor' name='content_details' placeholder='Content details' class='form-control'><?php echo $obj->SelectAllByVal($table,"id",$_GET['edit'],"content_details"); ?></textarea>
                                                
                                                <script>
													$(document).ready(function() {
														$("#editor").kendoEditor({
															resizable: {
																content: false,
																toolbar: true
															}
														});
									
														var editor = $("#editor").data("kendoEditor");
									
														var setValue = function () {
															editor.value($("#value").val());
														};
									
														$("#get").click(function() {
															alert(editor.value());
														});
									
														$("#set").click(setValue);
													});
											   </script>
											</div>
										</div><div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button  onclick="javascript:return confirm('Do You Want change/update These Record?')"  type="submit" name="update" class="btn btn-primary">Save Change</button>
                                            <button type="reset" class="btn btn-danger">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
							<?php }else{ ?>
                            <!-- Widget heading -->
                            <div class="widget-head">
                                <h4 class="heading">Create New Packages</h4>
                            </div>
                            <!-- // Widget heading END -->
							
                            <div class="widget-body"><form  class="form-horizontal" method="post" action="" role="form"><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Package Name </label>
		
											<div class='col-sm-9'>
												<input type='text' id='form-field-1' name='package_name' placeholder='Package Name' class='form-control' />
											</div>
										</div><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Content head </label>
		
											<div class='col-sm-9'>
												<input type='text' id='form-field-1' name='content_head' placeholder='Content head' class='form-control' />
											</div>
										</div><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Content details </label>
		
											<div class='col-sm-9'>
												<textarea id='editor' name='content_details' placeholder='Content details' class='form-control'></textarea>
											</div>
                                            
                                            <script>
												$(document).ready(function() {
													$("#editor").kendoEditor({
														resizable: {
															content: false,
															toolbar: true
														}
													});
								
													var editor = $("#editor").data("kendoEditor");
								
													var setValue = function () {
														editor.value($("#value").val());
													};
								
													$("#get").click(function() {
														alert(editor.value());
													});
								
													$("#set").click(setValue);
												});
										   </script>
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
	?>
    </body>
</html>