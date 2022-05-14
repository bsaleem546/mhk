<?php include('header.php'); ?>


<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">GENERATE A BILL</h4>
                            </div>
                            <div class="content">
                                <form action="" method="post">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Choose a month</label>
                                                <select name="txt1" class="form-control">
                                                	<option value="0">Choose any month</option>
                                                    <option value="1">January</option>
                                                    <option value="2">Febuary</option>
                                                    <option value="3">March</option>
                                                    <option value="4">April</option>
                                                    <option value="5">May</option>
                                                    <option value="6">June</option>
                                                    <option value="7">July</option>
                                                    <option value="8">August</option>
                                                    <option value="9">September</option>
                                                    <option value="10">October</option>
                                                    <option value="11">November</option>
                                                    <option value="12">December</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Choose a year</label>
                                                <select name="txt2" class="form-control">
                                                	<option value="0">Choose any year</option>
                                                    <option value="2017">2017</option>
                                                    <option value="2018">2018</option>
                                                    <option value="2019">2019</option>
                                                    <option value="2020">2020</option>
                                                    <option value="2021">2021</option>
                                                    <option value="2022">2022</option>
                                                    <option value="2023">2023</option>
                                                    <option value="2024">2024</option>
                                                    <option value="2025">2025</option>
                                                    <option value="2026">2026</option>
                                                    <option value="2027">2027</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>


                                    <input name="btn1" type="submit" class="btn btn-info btn-fill pull-right" value="GENERATE" />
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                            
                        </div>
                    </div>
                    
                    <?php
                   		if(isset($_POST['btn1']))
						{
							$m = $_POST['txt1'];
							$y = $_POST['txt2'];
							
							if($m == "0")
							{
								echo "<div class='col-md-6'>
								<div class='alert alert-danger'>
                                    <span>PLEASE SELECT ANY MONTH</span>
                                	</div></div>";
							}
							else if($y == "")
							{
								echo "<div class='col-md-6'>
								<div class='alert alert-danger'>
                                    <span>PLEASE TYPE ANY YEAR</span>
                                	</div></div>";	
							}		
							else
							{
								require('coding/crud_bill.php');
								$obj = new bill();
								$h = $obj->generate_bill($m, $y);
								if($h > 0 )
								{
									echo "<div class='col-md-6'>
									<div class='alert alert-info'>
										<span>BILL GENERATED</span>
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
