
<div class="content table-responsive table-full-width">
                            	
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>Bill ID</th>
                                    	<th>Name</th>
                                    	<th>Package</th>
                                    	<th>Address</th>
                                        <th>Area</th>
                                        <th>Building</th>
                                        <th>Month</th>
                                        <th>Year</th>
                                        <th>Total</th>
                                        <th>Balance</th>
                                        <th>Extra</th>                                        
                                    	<th>Status</th>
                                        <th>OPtions</th>
                                    </thead>
                                    <tbody>
<?php

	$m = $_REQUEST['month'];
	$y = $_REQUEST['year'];
	$s = $_REQUEST['status'];
	echo "<script>alert('$m')</script>";
	require('coding/crud_bill.php');
	$obj = new bill();
	$obj->sel_bills($m, $y, $s);
	/*$c = json_encode($obj->sel_bills('1', '2018', 'Pending'));
	echo $c;*/
?>

		</tbody>
	</table>
</div>