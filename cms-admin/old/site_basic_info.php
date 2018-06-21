<?php 
		include("class/auth.php");
		include("plugin/plugin.php");
		$plugin=new cmsPlugin();
		$table="site_basic_info"; ?>
		<?php 
		if(isset($_POST['create'])){
			extract($_POST);
			if(!empty($_FILES['site_logo']['name']) && !empty($site_logo_moto) && !empty($footer_text) && !empty($phone_number) && !empty($email))
			{ include('class/uploadImage_Class.php'); $imgclassget=new image_class(); 
			$site_logo=$imgclassget->upload_fiximage("upload","site_logo","site_logo_upload_".$table_name."_".time());  $insert=array('site_logo'=>$site_logo,'site_logo_moto'=>$site_logo_moto,'footer_text'=>$footer_text,'phone_number'=>$phone_number,'email'=>$email,'date'=>date('Y-m-d'),'status'=>1);
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
			extract($_POST);if(!empty($site_logo_moto) && !empty($footer_text) && !empty($phone_number) && !empty($email))
			{$updatearray=array("id"=>$id);if(!empty($_FILES['site_logo']['name']))
					{
						include('class/uploadImage_Class.php'); $imgclassget=new image_class(); $site_logo_1=$imgclassget->upload_fiximage("upload","site_logo","site_logo_upload_".$table_name."_".time());
						$site_logo=$site_logo_1;
						@unlink("upload/".$ex_site_logo);
					}else{
						$site_logo=$ex_site_logo;
					}$upd2=array('site_logo'=>$site_logo,'site_logo_moto'=>$site_logo_moto,'footer_text'=>$footer_text,'phone_number'=>$phone_number,'email'=>$email,'date'=>date('Y-m-d'),'status'=>1);
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
			$delarray=array("id"=>$_GET['id']);$photolink=$obj->SelectAllByVal($table,'id',$_GET['id'],'site_logo'); @unlink("upload/".$photolink);if($obj->delete($table,$delarray)==1)
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
		echo $plugin->FileUploadCss();
		?>
    </head>
    <body class="">
		<?php include('include/topnav.php'); include('include/mainnav.php'); ?>
        




        <div id="content">
        	<h1 class="content-heading bg-white border-bottom">Site Basic Info</h1>
            <div class="innerAll bg-white border-bottom">
                <ul class="menubar">
                    <li class="active"><a href="#">Create New Site Basic Info</a></li>
                    <li><a href="site_basic_info_data.php">Site Basic Info List</a></li>
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
                                <h4 class="heading">Update/Change - Site Basic Info</h4>
                            </div>
                            <!-- // Widget heading END -->
							
                            <div class="widget-body"><form enctype='multipart/form-data' class="form-horizontal" method="post" action="" role="form">
								<input type="hidden" name="id" value="<?php echo $_GET['edit']; ?>"><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Site Logo </label>
		
											<div class='col-sm-3'>
                                            <?php 
												$site_logo=$obj->SelectAllByVal($table,"id",$_GET['edit'],"site_logo"); 
												echo $plugin->FileUploadBox("1",$site_logo,"site_logo");
											?>
                                            
											</div>
										</div><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Site Logo Moto </label>
		
											<div class='col-sm-9'>
												<input type='text' id='form-field-1' name='site_logo_moto' value='<?php echo $obj->SelectAllByVal($table,"id",$_GET['edit'],"site_logo_moto"); ?>' placeholder='Site Logo Moto' class='form-control' />
											</div>
										</div>
                                        <div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> footer text </label>
		
											<div class='col-sm-9'>
												<input type='text' id='form-field-1' name='footer_text' value='<?php echo $obj->SelectAllByVal($table,"id",$_GET['edit'],"footer_text"); ?>' placeholder='footer text' class='form-control' />
											</div></div>
                                            <div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Phone Number </label>
		
											<div class='col-sm-9'>
												<input type='text' id='form-field-1' name='phone_number' value='<?php echo $obj->SelectAllByVal($table,"id",$_GET['edit'],"phone_number"); ?>' placeholder='Phone Number' class='form-control' />
											</div>
                                            </div>
                                            <div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Email </label>
		
											<div class='col-sm-9'>
												<input type='text' id='form-field-1' name='email' value='<?php echo $obj->SelectAllByVal($table,"id",$_GET['edit'],"email"); ?>' placeholder='Email' class='form-control' />
											</div>
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
                                <h4 class="heading">Create New Site Basic Info</h4>
                            </div>
                            <!-- // Widget heading END -->
							
                            <div class="widget-body"><form enctype='multipart/form-data' class="form-horizontal" method="post" action="" role="form"><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Site Logo </label>
		
											<div class='col-sm-3'>
											<?php 
												echo $plugin->FileUploadBox("0","","site_logo");
											?>
                                            
											</div>
										</div><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Site Logo Moto </label>
		
											<div class='col-sm-9'>
												<input type='text' id='form-field-1' name='site_logo_moto' placeholder='Site Logo Moto' class='form-control' />
											</div>
										</div><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> footer text </label>
		
											<div class='col-sm-9'>
												<input type='text' id='form-field-1' name='footer_text' placeholder='footer text' class='form-control' />
											</div></div>
                                            <div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Phone Number </label>
		
											<div class='col-sm-9'>
												<input type='text' id='form-field-1' name='phone_number' placeholder='Phone Number' class='form-control' />
											</div></div>
                                            <div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> email </label>
		
											<div class='col-sm-9'>
												<input type='text' id='form-field-1' name='email' placeholder='Email' class='form-control' />
											</div></div>
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
	  ?>
    
    </body>
</html>