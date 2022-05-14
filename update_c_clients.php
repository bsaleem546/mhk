<?php include('header.php'); ?>



<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">UPDATE COMPANY CLIENT</h4>
                            </div>
                            <?php
                           		$id = $_GET['k'];
								
								require('coding/crud_c_clients.php');
								$obj = new selection();
								
								$val = $obj->sel_c_client_edti($id);
								
							?>
                            
                            <div class="content">
                                <form action="" method="post">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Name</label>
                                             <input type="text" class="form-control" placeholder="Name" name="txt1" required value="<?php echo $val[1]; ?>" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Contact No</label>
                                                <input type="text" class="form-control" placeholder="Contact No" name="txt2" required value="<?php echo $val[2]; ?>"/>
                                            </div>
                                        </div>
                                    </div>


                                    
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <textarea rows="5" class="form-control" placeholder="Address" name="txt3" required ><?php echo $val[3]; ?></textarea>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Status</label>
                                                <select name="txt4" class="form-control">
                                                	<option value="0">Select Any Status</option>
                                                    <option value="Activated">Activated</option>
                                                    <option value="Deactivated">Deactivated</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <input name="btn2" type="submit" class="btn btn-info btn-fill pull-right" value="UPDATE" />
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                            
                        </div>
                    </div>
                    <?php
                    	if(isset($_POST['btn2']))
						{
							$n = $_POST['txt1'];
							$c = $_POST['txt2'];
							$a = $_POST['txt3'];
							$s = $_POST['txt4'];
							if($s == "0")
							{
								
								echo "<script>alert('Please Select Any Status')</script>";	
							}
							else
							{
							   $h = $obj->update($n, $c ,$a ,$s, $id);
							   if($h > 0)
							   {									   
									echo "<div class='col-md-6'>
											<div class='alert alert-info'>
												<span>CLIENT UPDATED</span>
											</div></div>";	
							   }
							   else
							   {
								   	echo "<div class='col-md-6'>
											<div class='alert alert-danger'>
												<span>SOMR ERROR</span>
											</div></div>";   
							   }	
							}
								
						}
					
					?>
            </div>
      </div>
</div>


<?php include('footer.php'); ?>
