<?php include('header.php'); ?>


<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">ADD COMPANY CLIENT</h4>
                            </div>
                            <div class="content">
                                <form action="" method="post">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" class="form-control" placeholder="Name" name="txt1" required />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Contact No</label>
                                                <input type="text" class="form-control" placeholder="Contact No" name="txt2" required />
                                            </div>
                                        </div>
                                    </div>


                                    
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <textarea rows="5" class="form-control" placeholder="Address" name="txt3" required ></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <input name="btn1" type="submit" class="btn btn-info btn-fill pull-right" value="ADD" />
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                            
                        </div>
                    </div>
                    
                    <?php
                    	if(isset($_POST['btn1']))
						{
							$n = $_POST['txt1'];
							$c = $_POST['txt2'];
							$a = $_POST['txt3'];
							require('coding/crud_c_clients.php');
							$obj = new selection();
							$h = $obj->insert($n,$c,$a);
							if($h > 0 )
							{
								echo "<div class='col-md-6'>
								<div class='alert alert-info'>
                                    <span>CLIENT ADDED</span>
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
					
					?>
                    
            </div>
      </div>
</div>


<?php include('footer.php'); ?>
