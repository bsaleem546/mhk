<?php
$con = "";
class bill
{
		function __construct()
		{
			global $con;
			$con = mysqli_connect("localhost","root","","mhk_db");
		}
		
		
		// METHOD STARTS
		public function generate_bill($m, $y)
		{
			global $con;	
			$d = date("y-m-d");
			$q1 = mysqli_query($con, "SELECT * FROM `client` WHERE `costumer_type` = 'Charge' AND `costumer_status` = 'Active' ");
			while($r1 = mysqli_fetch_array($q1))
			{
				$id = $r1[0];
				$q2 = mysqli_query($con, "SELECT * FROM `bills` WHERE `c_id` = '$id' AND `month` = '$m' AND `year` = '$y'");
				$c1 = mysqli_num_rows($q2);
				
				if($c1 == 0)
				{
					
					if($m > 1)
					{
						$lm = $m - 1;
						$q3 = mysqli_query($con, "SELECT * FROM `bills` WHERE `c_id` = '$id' AND `month` = '$lm' AND `year` = '$y'");
						$c2 = mysqli_num_rows($q3);
						
						if($c2 > 0)
						{
							while($r2 = mysqli_fetch_array($q3))
							{
								$b = $r2['5'];
								$e = $r2['6'];
								if($b > 0)
								{
									$b1 = $b + $r1['12'];
									
									$insert1 = mysqli_query($con, "INSERT INTO `bills` (`id`, `c_id`, `month`, `year`, `total`, `balance`, `extra`, `status`, `given_date`) VALUES ('', '$id', '$m', '$y', '$b1', '0', '0', 'Pending', '$d')");
									if($insert1){ return 1; }
									else{ return 0; }	
								}
								else if($e > 0)
								{
									$e1 = $r1['12'] - $e;
									
									if($e1 > 0)
									{											
										$insert2 = mysqli_query($con, "INSERT INTO `bills` (`id`, `c_id`, `month`, `year`, `total`, `balance`, `extra`, `status`, `given_date`) VALUES ('', '$id', '$m', '$y', '$e1', '0', '0', 'Pending', '$d')");
										if($insert2){ return 1; }
										else{ return 0; }	
									}
									else
									{
										$insert3 = mysqli_query($con, "INSERT INTO `bills` (`id`, `c_id`, `month`, `year`, `total`, `balance`, `extra`, `status`, `given_date`) VALUES ('', '$id', '$m', '$y', '0', '0', '0', 'Paid', '$d')");
										if($insert3){ return 1; }
										else{ return 0; }	
									}		
								}
								else
								{
									$insert4 = mysqli_query($con, "INSERT INTO `bills` (`id`, `c_id`, `month`, `year`, `total`, `balance`, `extra`, `status`, `given_date`) VALUES ('', '$id', '$m', '$y', '$r1[12]', '0', '0', 'Pending', '$d')");
									if($insert4){ return 1; }
									else{ return 0; }
								}		
							}	
						}	
					}
					else
					{
						$ly = $y - 1;
						$q4 = mysqli_query($con, "SELECT * FROM `bills` WHERE `c_id` = '$id' AND `month` = '12' AND `year` = '$ly'");
						$c3 = mysqli_num_rows($q4);
						if($c3 > 0)
						{
							while($r3 = mysqli_fetch_array($q4))
							{
									$b = $r3['5'];
									$e = $r3['6'];
									if($b > 0)
									{
										$b1 = $b + $r1[12];
										
										$insert1 = mysqli_query($con, "INSERT INTO `bills` (`id`, `c_id`, `month`, `year`, `total`, `balance`, `extra`, `status`, `given_date`) VALUES ('', '$id', '$m', '$y', '$b1', '0', '0', 'Pending', '$d')");
										if($insert1){ return 1; }
										else{ return 0; }	
									}
									else if($e > 0)
									{
										$e1 = $r1[12] - $e;
										echo "<script>alert('$e1')</script>";
										if($e1 > 0)
										{											
											$insert2 = mysqli_query($con, "INSERT INTO `bills` (`id`, `c_id`, `month`, `year`, `total`, `balance`, `extra`, `status`, `given_date`) VALUES ('', '$id', '$m', '$y', '$e1', '0', '0', 'Pending', '$d')");
											if($insert2){ return 1; }
											else{ return 0; }	
										}
										else
										{
											$insert3 = mysqli_query($con, "INSERT INTO `bills` (`id`, `c_id`, `month`, `year`, `total`, `balance`, `extra`, `status`, `given_date`) VALUES ('', '$id', '$m', '$y', '0', '0', '0', 'Paid', '$d')");
											if($insert3){ return 1; }
											else{ return 0; }	
										}		
									}
									else
									{
										$insert4 = mysqli_query($con, "INSERT INTO `bills` (`id`, `c_id`, `month`, `year`, `total`, `balance`, `extra`, `status`, `given_date`) VALUES ('', '$id', '$m', '$y', '$r1[12]', '0', '0', 'Pending', '$d')");
										if($insert4){ return 1; }
										else{ return 0; }
										
									}
							}	
						}
					}
					
				}			
			}
		}
		/////////////////////////////////// METHOD ENDS ////////////////////////////////////////////////////
		
		/////////////////////////////////// METHOD STARTS ////////////////////////////////////////////////////
		public function sel_bills($m, $y, $s)
		{
			global $con;	
		/*	$per_page=5;
		
			if(isset($_GET['page']))
			{
				$page = $_GET['page'];
				
			}
			else 
			{
				$page=1;
			}
			$start_from = ($page-1) * $per_page;*/
			$q = mysqli_query($con, "SELECT 
					bills.id, client.name, client.package, client.fees, client.address,
					client.area, client.building, bills.month, bills.year, bills.total,
					bills.balance, bills.extra, bills.status        
			FROM bills INNER JOIN client ON bills.c_id = client.id where bills.month = '$m' and bills.year = '$y' and bills.status = '$s' ");
			/*if($q == false)
			{
				die(mysqli_error());
			}*/
		
			while($r = mysqli_fetch_array($q))
			{
				echo "<tr>";
						echo "<td>".$r[0]."</td>";
						echo "<td>".$r[1]."</td>";
						echo "<td>".$r[2]."</td>";
						echo "<td>".$r[3]."</td>";
						echo "<td>".$r[4]."</td>";
						echo "<td>".$r[5]."</td>";
						echo "<td>".$r[6]."</td>";
						echo "<td>".$r[7]."</td>";
						echo "<td>".$r[8]."</td>";
						echo "<td>".$r[9]."</td>";
						echo "<td>".$r[10]."</td>";
						echo "<td>".$r[11]."</td>";
						echo "<td>".$r[12]."</td>";
						echo "<td>"."<a href='#?k=$row[0]'>Edit</a>"."</td>";
					echo "</tr>";	
			}
			
			
			/*	$next_query = "SELECT 
					bills.id, client.name, client.package, client.fees, client.address,
					client.area, client.building, bills.month, bills.year, bills.total,
					bills.balance, bills.extra, bills.status        
					FROM bills INNER JOIN client ON bills.c_id = client.id where `bills.month` = '$m' and `bills.year` = '$y' and `bills.status` = '$s'";
				$result = mysqli_query($con,$next_query);
				$total_records = mysqli_num_rows($result);
				$total_pages = ceil($total_records / $per_page);
				
				echo "<div class='row'>";
					echo "<div class='col-md-12'>";
						echo "<center><a href='view_client.php?page=1' class='more go' >".'First Page '."</a>";	
							for ($i=1; $i<=$total_pages; $i++) 
									{
										echo "<a href='view_client.php?page= ".$i."' class='more go' style='margin-left:4px;' >".$i."</a> ";
									}
						echo "<a href='view_client.php?page=$total_pages' class='more go' >".'Last Page'."</a></center>";					
					echo "</div>";
				echo "</div>";	*/
		}
		/////////////////////////////////// METHOD ENDS ////////////////////////////////////////////////////
}

?>