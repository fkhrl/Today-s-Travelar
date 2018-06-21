<?php 
		include("class/auth.php");
		include("plugin/plugin.php");
		$plugin=new cmsPlugin();
		$table="related_category_photo"; ?>
		<?php 
		if(isset($_POST['create'])){
			extract($_POST);
			if(!empty($category_id) && !empty($photo_id))
			{  $insert=array('category_id'=>$category_id,'photo_id'=>$photo_id,'date'=>date('Y-m-d'),'status'=>1);
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
			extract($_POST);if(!empty($category_id) && !empty($photo_id))
			{$updatearray=array("id"=>$id);$upd2=array('category_id'=>$category_id,'photo_id'=>$photo_id,'date'=>date('Y-m-d'),'status'=>1);
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
		echo $plugin->TableCss(); ?>
    </head>
    <body class="">
		<?php include('include/topnav.php'); include('include/mainnav.php'); ?>
        




        <div id="content">
        	<h1 class="content-heading bg-white border-bottom">Related Category Photo</h1>
            <div class="innerAll bg-white border-bottom">
                <ul class="menubar">
                    <li class="active"><a href="#">Create New Related Category Photo</a></li>
                    <li><a href="related_category_photo_data.php">Related Category Photo List</a></li>
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
                                <h4 class="heading">Update/Change - Related Category Photo</h4>
                            </div>
                            <!-- // Widget heading END -->
							
                            <div class="widget-body"><form  class="form-horizontal" method="post" action="" role="form">
								<input type="hidden" name="id" value="<?php echo $_GET['edit']; ?>"><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Category Id </label>
		
											<div class='col-sm-6'>
												<input type='text' id='form-field-1' name='category_id' placeholder='Category Id'  value='<?php echo $obj->SelectAllByVal($table,"id",$_GET['edit'],"category_id"); ?>'  class='form-control' />
											</div>
										</div><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Photo Id </label>
		
											<div class='col-sm-6'>
												<input type='text' id='form-field-1' name='photo_id' placeholder='Photo Id'  value='<?php echo $obj->SelectAllByVal($table,"id",$_GET['edit'],"photo_id"); ?>'  class='form-control' />
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
                                <h4 class="heading">Create New Related Category Photo</h4>
                            </div>
                            <!-- // Widget heading END -->
							
                            <div class="widget-body"><form  class="form-horizontal" method="post" action="" role="form"><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Category Id </label>
		
											<div class='col-sm-6'>
												<select name="category_id">
                                                	<option>Select A Category Name</option>
                                                    <?php 
														$sql_category_id = $obj->FlyQuery("Select id,name from category ");
														if(!empty($sql_category_id)){
															foreach($sql_category_id as $category_id):
															
													?>
                                                    <option value="<?php echo $category_id->id; ?>"><?php echo $category_id->name;?></option>
                                                    
                                                    <?php 
														endforeach;
														}
													?>
                                                </select>
                                                <!--<input type='text' id='form-field-1' name='category_id' placeholder='Category Id' class='form-control' />-->
											</div>
										</div><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Photo Id </label>
		
											<div class='col-sm-6'>
												<select name="photo_id">
                                                	<option>Select A Photo Name</option>
                                                    <?php 
														$sql_photo_id = $obj->FlyQuery("Select id,name from photo_info ");
														if(!empty($sql_photo_id)){
															foreach($sql_photo_id as $photo_id):
															
													?>
                                                    <option value="<?php echo $photo_id->id; ?>"><?php echo $photo_id->name;?></option>
                                                    
                                                    <?php 
														endforeach;
														}
													?>
                                                </select>
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
    
    <?php echo $plugin->TableJs(); ?></body>
</html>