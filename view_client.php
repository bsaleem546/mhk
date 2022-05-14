<?php include('header.php'); ?>

   <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Company CLients List</h4>
                                <p class="category"><a href="add_c_clients.php">Add A Company Client</a></p>
                            </div>
                            <div class="content table-responsive table-full-width">
                            	
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>ID</th>
                                    	<th>Name</th>
                                    	<th>Contact</th>
                                    	<th>Address</th>
                                    	<th>Status</th>
                                        <th>OPtions</th>
                                    </thead>
                                    <tbody>
                                        <?php
                                        	require('coding/crud_c_clients.php');
											$obj = new selection();
											$obj->sel_c_clients();
										
										?>                   
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
				</div>
                
                
                <div class="row" style="width:2100px">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">CLients List</h4>
                                <p class="category"><a href="add_client.php">Add A Client</a></p>
                            </div>
                            <div class="content table-responsive table-full-width">
                            	
                                <table class="table table-hover table-striped" width="100%">
                                    <thead>
                                        <th>ID</th>
                                    	<th>Name</th>
                                        <th>Father Name</th>
                                        <th>Date of birth</th>
                                        <th>CNIC</th>
                                        <th>E-mail</th>
                                        <th>Phone</th>
                                        <th>Mobile</th>
                                        <th>Area</th>
                                        <th>Building</th>
                                    	<th>Address</th>
										<th>Package</th>
                                        <th>Fees</th>
                                        <th>Costumer Type</th>
                                    	<th>Costumer Status</th>
										<th>Date of registeration</th>        
                                        <th>Options</th>
                                    </thead>
                                    <tbody>
                                        <?php
                                        	require('coding/crud_client.php');
											$obj1 = new selection1();
											$obj1->sel_clients();
										
										?>                   
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
				</div>
                
			</div>
		</div>
        
        
<?php include('footer.php'); ?>
