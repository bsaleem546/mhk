<?php include('header.php'); ?>

<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">UPDATE CLIENT</h4>
                            </div>
                            <?php
								$id = $_GET['k'];
                            	require('coding/crud_client.php');
								$obj = new selection1();
								$val = $obj->sel_edit($id);
							?>
                            <div class="content">
                                <form action="" method="post">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" class="form-control" placeholder="Name" name="txt1" required value="<?php echo $val['1']; ?>" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Father Name</label>
                                           <input type="text" class="form-control" placeholder="Father Name" name="txt2" required value="<?php echo $val['2']; ?>" />
                                            </div>
                                        </div>
                                    </div>
                                    
 									<div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Date of birth</label>
                                                <input type="text" value="<?php echo $val['3']; ?>" class="form-control" placeholder="Date of birth" name="txt3" required  />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>CNIC</label>
                                                <input type="text" value="<?php echo $val['4']; ?>" class="form-control" placeholder="CNIC (Unique)" name="txt4" required />
                                            </div>
                                        </div>
                                    </div>

                                    
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>E-mail</label>
                                                <input type="email" value="<?php echo $val['5']; ?>" class="form-control" placeholder="E-mail" name="txt5" required />
                                            </div>
                                        </div>
                                    </div>

                                    
 									<div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Phone</label>
                                                <input type="text" value="<?php echo $val['6'] ?>" class="form-control" placeholder="Phone" name="txt6" required />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Mobile</label>
                                                <input type="text" value="<?php echo $val['7'] ?>" class="form-control" placeholder="Mobile" name="txt7" required />
                                            </div>
                                        </div>
                                    </div>


                                    
 									<div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Area</label>
                                                <select name="txt8" class="form-control">
                                                	<option value="0">Select any area</option>
                                                    <option value="a">a</option>
                                                    <option value="b">b</option>
                                                    <option value="c">c</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Building</label>
                                                <select name="txt9" class="form-control">
                                                	<option value="0">Select any building</option>
                                                    <option value="a">a</option>
                                                    <option value="b">b</option>
                                                    <option value="c">c</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    
									<div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <textarea class="form-control"  placeholder="Address" name="txt10" required ><?php echo $val['10'] ?></textarea>
                                            </div>
                                        </div>
                                    </div>
	
									<div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Package</label>
                                                <select name="txt11" class="form-control">
                                                	<option value="0">Select any package</option>
                                                    <option value="a">a</option>
                                                    <option value="b">b</option>
                                                    <option value="c">c</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Fees</label>
                                                <input type="text" value="<?php echo $val['12'] ?>" name="txt12" class="form-control" required placeholder="Fees" />
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Costumer Type</label>
                                                <select name="txt13" class="form-control">
                                                	<option value="0">Select any type</option>
                                                    <option value="Wave">Wave</option>
                                                    <option value="Charge">Charge</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Costumer Status</label>
                                                <select name="txt14" class="form-control">
                                                	<option value="0">Select any status</option>
                                                    <option value="Active">Active</option>
                                                    <option value="Deactive">Deactive</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <input name="btn1" type="submit" class="btn btn-info btn-fill pull-right" value="UPDATE" />
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                            
                        </div>
                    </div>

                    <?php
                    	if(isset($_POST['btn1']))
						{
							$n = $_POST['txt1'];
							$fn = $_POST['txt2'];
							$dob = $_POST['txt3'];
							$cnic = $_POST['txt4'];
							$email = $_POST['txt5'];
							$ph = $_POST['txt6'];
							$mob = $_POST['txt7'];
							$ar = $_POST['txt8'];
							$bl = $_POST['txt9'];
							$ad = $_POST['txt10'];
							$pk = $_POST['txt11'];
							$fee = $_POST['txt12'];
							$ct = $_POST['txt13'];
							$cs = $_POST['txt14'];
							if($ar == "0")
							{
								echo "<div class='col-md-6'>
								<div class='alert alert-danger'>
                                    <span>Select any area</span>
                                	</div></div>";
							}
							else if($bl == "0")
							{
								echo "<div class='col-md-6'>
								<div class='alert alert-danger'>
                                    <span>Select any building</span>
                                	</div></div>";
							}
							else if($pk == "0")
							{
								echo "<div class='col-md-6'>
								<div class='alert alert-danger'>
                                    <span>Select any package</span>
                                	</div></div>";
							}
							else if($ct == "0")
							{
								echo "<div class='col-md-6'>
								<div class='alert alert-danger'>
                                    <span>Select any costumer type</span>
                                	</div></div>";
							}
							else if($cs == "0")
							{
								echo "<div class='col-md-6'>
								<div class='alert alert-danger'>
                                    <span>Select any costumer status</span>
                                	</div></div>";
							}
							else
							{
								$h = $obj->update($n, $fn, $dob, $cnic, $email, $ph, $mob, $ar, $bl, $ad, $pk, $fee, $ct, $cs, $id);
								if($h > 0 )
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
