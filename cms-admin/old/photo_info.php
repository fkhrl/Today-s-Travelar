<?php 
		include("class/auth.php");
		include("plugin/plugin.php");
		$plugin=new cmsPlugin();
		$table="photo_info"; ?>
		<?php 
		if(isset($_POST['create'])){
			extract($_POST);
			if(!empty($name) && !empty($_FILES['photo']['name']) && !empty($category) && !empty($sub_category) && !empty($photo_tag) && !empty($photo_taken_by) && !empty($photo_taken_date) && !empty($photo_short_details) && !empty($photo_long_details) && !empty($priority))
			{ include('class/uploadImage_Class.php'); $imgclassget=new image_class(); 
			$photo=$imgclassget->upload_fiximage("upload","photo","photo_upload_".$table_name."_".time());  $insert=array('name'=>$name,'photo'=>$photo,'category'=>$category,'sub_category'=>$sub_category,'photo_tag'=>$photo_tag,'photo_taken_by'=>$photo_taken_by,'photo_taken_date'=>$photo_taken_date,'photo_short_details'=>$photo_short_details,'photo_long_details'=>$photo_long_details,'priority'=>$priority,'date'=>date('Y-m-d'),'status'=>1);
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
			extract($_POST);if(!empty($name) && !empty($category) && !empty($sub_category) && !empty($photo_tag) && !empty($photo_taken_by) && !empty($photo_taken_date) && !empty($photo_short_details) && !empty($photo_long_details) && !empty($priority))
			{$updatearray=array("id"=>$id);if(!empty($_FILES['photo']['name']))
					{
						include('class/uploadImage_Class.php'); $imgclassget=new image_class(); $photo_1=$imgclassget->upload_fiximage("upload","photo","photo_upload_".$table_name."_".time());
						$photo=$photo_1;
						@unlink("upload/".$ex_photo);
					}else{
						$photo=$ex_photo;
					}$upd2=array('name'=>$name,'photo'=>$photo,'category'=>$category,'sub_category'=>$sub_category,'photo_tag'=>$photo_tag,'photo_taken_by'=>$photo_taken_by,'photo_taken_date'=>$photo_taken_date,'photo_short_details'=>$photo_short_details,'photo_long_details'=>$photo_long_details,'priority'=>$priority,'date'=>date('Y-m-d'),'status'=>1);
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
			$delarray=array("id"=>$_GET['id']);$photolink=$obj->SelectAllByVal($table,'id',$_GET['id'],'photo'); @unlink("upload/".$photolink);if($obj->delete($table,$delarray)==1)
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
				echo $plugin->FileUploadCss();
				?>
			  
				 <script>
				 
					
					$(document).ready(function() {
						// create DatePicker from input HTML element
					   $("#datepicker").kendoDatePicker({
						format: "yyyy-MM-dd",
						parseFormats: ["yyyy-MM-dd", "MM/dd/yyyy"]
					});
									
					});
				</script>
    </head>
    <body class="">
		<?php include('include/topnav.php'); include('include/mainnav.php'); ?>
        




        <div id="content">
        	<h1 class="content-heading bg-white border-bottom">Photo Info</h1>
            <div class="innerAll bg-white border-bottom">
                <ul class="menubar">
                    <li class="active"><a href="#">Create New Photo Info</a></li>
                    <li><a href="photo_info_data.php">Photo Info List</a></li>
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
                                <h4 class="heading">Update/Change - Photo Info</h4>
                            </div>
                            <!-- // Widget heading END -->
							
                            <div class="widget-body"><form enctype='multipart/form-data' class="form-horizontal" method="post" action="" role="form">
								<input type="hidden" name="id" value="<?php echo $_GET['edit']; ?>"><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Name </label>
		
											<div class='col-sm-9'>
												<input type='text' id='form-field-1' name='name' value='<?php echo $obj->SelectAllByVal($table,"id",$_GET['edit'],"name"); ?>' placeholder='Name' class='form-control' />
											</div>
										</div><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Photo </label>
		
											<div class='col-sm-3'>
												<?php 
													$photo = $obj->SelectAllByVal($table,"id",$_GET['edit'],"photo"); 
													echo $plugin->FileUploadBox("1","$photo","photo");
												?>
											</div>
										</div><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Category </label>
		
											<div class='col-sm-6'>
												<input type='text' id='form-field-1' name='category' placeholder='Category'  value='<?php echo $obj->SelectAllByVal($table,"id",$_GET['edit'],"category"); ?>'  class='form-control' />
											</div>
										</div><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Sub Category </label>
		
											<div class='col-sm-6'>
												<input type='text' id='form-field-1' name='sub_category' placeholder='Sub Category'  value='<?php echo $obj->SelectAllByVal($table,"id",$_GET['edit'],"sub_category"); ?>'  class='form-control' />
											</div>
										</div><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Photo Tag </label>
		
											<div class='col-sm-6'>
												<input type='text' id='form-field-1' name='photo_tag' placeholder='Photo Tag'  value='<?php echo $obj->SelectAllByVal($table,"id",$_GET['edit'],"photo_tag"); ?>'  class='form-control' />
											</div>
										</div><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Photo Taken By </label>
		
											<div class='col-sm-9'>
												<input type='text' id='form-field-1' name='photo_taken_by' value='<?php echo $obj->SelectAllByVal($table,"id",$_GET['edit'],"photo_taken_by"); ?>' placeholder='Photo Taken By' class='form-control' />
											</div>
										</div><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Photo Taken Date </label>
		
											<div class='col-sm-9'>
												<input type='text' id='form-field-1' name='photo_taken_date' value='<?php echo $obj->SelectAllByVal($table,"id",$_GET['edit'],"photo_taken_date"); ?>' placeholder='Photo Taken Date' class='form-control' />
											</div>
										</div><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Photo Short Details </label>
		
											<div class='col-sm-9'>
												<textarea id='editor' name='photo_short_details' placeholder='Photo Short Details' class='form-control'><?php echo $obj->SelectAllByVal($table,"id",$_GET['edit'],"photo_short_details"); ?></textarea>
                                                
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
										</div><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Photo Long Details </label>
		
											<div class='col-sm-9'>
												<textarea id='editor1' name='photo_long_details' placeholder='Photo Long Details' class='form-control'><?php echo $obj->SelectAllByVal($table,"id",$_GET['edit'],"photo_long_details"); ?></textarea>
                                                
                                                <script>
													$(document).ready(function() {
														$("#editor1").kendoEditor({
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
										</div><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Priority </label>
		
											<div class='col-sm-6'>
												<input type='text' id='form-field-1' name='priority' placeholder='Priority'  value='<?php echo $obj->SelectAllByVal($table,"id",$_GET['edit'],"priority"); ?>'  class='form-control' />
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
                                <h4 class="heading">Create New Photo Info</h4>
                            </div>
                            <!-- // Widget heading END -->
							
                            <div class="widget-body"><form enctype='multipart/form-data' class="form-horizontal" method="post" action="" role="form"><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Name </label>
		
											<div class='col-sm-9'>
												<input type='text' id='form-field-1' name='name' placeholder='Name' class='form-control' />
											</div>
										</div><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Photo </label>
		
											<div class='col-sm-3'>
												<?php 
													echo $plugin->FileUploadBox("0","","photo");
												?>
											</div>
										</div><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Category </label>
		
											<div class='col-sm-6'>
												<select name="category">
                                                	<option value="">Select A Category</option>
                                                    <?php 
														$sql_category = $obj->FlyQuery("Select * from category");
														if(!empty($sql_category)){
															foreach($sql_category as $category):
															
													?>
                                                    <option value="<?php echo $category->id?>"><?php echo $category->name?></option>
                                                    
                                                    <?php 
														endforeach;
														}
													?>
                                                </select>
											</div>
										</div><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Sub Category </label>
		
											<div class='col-sm-6'>
												<select name="sub_category">
                                                	<option value="">Select A Sub Category</option>
                                                    <?php 
														$sql_sub_category = $obj->FlyQuery("Select * from sub_category");
														if(!empty($sql_sub_category)){
															foreach($sql_sub_category as $sub_category):
															
													?>
                                                    <option value="<?php echo $sub_category->id; ?>"><?php echo $sub_category->name;?></option>
                                                    
                                                    <?php 
														endforeach;
														}
													?>
                                                </select>
											</div>
										</div><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Photo Tag </label>
		
											<div class='col-sm-6'>
												<select name="photo_tag">
                                                	<option value="">Select A photo Tag</option>
                                                    <?php 
														$sql_photo_tag = $obj->FlyQuery("Select * from photo_tag");
														if(!empty($sql_photo_tag)){
															foreach($sql_photo_tag as $photo_tag):
															
													?>
                                                    <option value="<?php echo $photo_tag->id; ?>"><?php echo $photo_tag->name; ?></option>
                                                    
                                                    <?php 
														endforeach;
														}
													?>
                                                </select>
											</div>
										</div><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Photo Taken By </label>
		
											<div class='col-sm-9'>
												<input type='text' id='form-field-1' name='photo_taken_by' placeholder='Photo Taken By' class='form-control' />
											</div>
										</div><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Photo Taken Date </label>
		
											<div class='col-sm-9'>
												<input type='text' id='datepicker' name='photo_taken_date' placeholder='Photo Taken Date' class='form-control' />
											</div>
										</div><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Photo Short Details </label>
		
											<div class='col-sm-9'>
												<textarea id="editor1" name='photo_short_details' placeholder='Photo Short Details' class='form-control' rows="10" cols="30" style="height:200px"></textarea>
                                                <script>
												$(document).ready(function() {
													$("#editor1").kendoEditor({
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
										</div><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Photo Long Details </label>
		
											<div class='col-sm-9'>
												 <textarea id="editor" name='photo_long_details'placeholder='Photo Long Details' class='form-control' rows="10" cols="30" style="height:200px"></textarea>
                    
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
		  echo $plugin->FileUploadJS();
		   echo $plugin->KendoJS();
	 ?>
    </body>
</html>