<?php
$con = "";
class selection1
{
		function __construct()
		{
			global $con;
			$con = mysqli_connect("localhost","root","","mhk_db");
		}

		public function sel_clients()
		{
			global $con;
			$per_page=5;
		
			if(isset($_GET['page']))
			{
				$page = $_GET['page'];
				
			}
			else 
			{
				$page=1;
			}
				$start_from = ($page-1) * $per_page;
				$query = mysqli_query($con,"SELECT * FROM client ORDER BY `id` DESC  LIMIT $start_from, $per_page"); 
				if($query == false)
				{
					die(mysqli_error());
				}

				while($row = mysqli_fetch_array($query))
				{
					echo "<tr>";
						echo "<td>".$row[0]."</td>";
						echo "<td>".$row[1]."</td>";
						echo "<td>".$row[2]."</td>";
						echo "<td>".$row[3]."</td>";
						echo "<td>".$row[4]."</td>";
						echo "<td>".$row[5]."</td>";
						echo "<td>".$row[6]."</td>";
						echo "<td>".$row[7]."</td>";
						echo "<td>".$row[8]."</td>";
						echo "<td>".$row[9]."</td>";
						echo "<td>".$row[10]."</td>";
						echo "<td>".$row[11]."</td>";
						echo "<td>".$row[12]."</td>";
						echo "<td>".$row[13]."</td>";
						echo "<td>".$row[14]."</td>";
						echo "<td>".$row[15]."</td>";
						echo "<td>"."<a href='update_client.php?k=$row[0]'>Edit</a>"."</td>";
					echo "</tr>";
				}
				$next_query = "select * from client";
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
				echo "</div>";
		}


		public function insert_client($n, $fn, $dob, $cnic, $email, $ph, $mob, $ar, $bl, $ad, $pk, $fee, $ct)
		{
			global $con;
			$dt = date("Y-m-d");
			$q = mysqli_query($con, "INSERT INTO `client` (`id`, `name`, `fname`, `dob`, `cnic`, `email`, `phone`, `mobile`, `area`, `building`, `address`, 		`package`, `fees`, `costumer_type`, `costumer_status`, `date_of_reg`) VALUES (NULL, '$n', '$fn', '$dob', '$cnic', '$email', '$ph', '$mob', '$ar', '$bl', '$ad', '$pk', '$fee', '$ct', 'Active', '$dt')");
			if($q)
			{
				return 1;		
			}
			else
			{
				return 0;	
			}
		}

		public function sel_edit($id)
		{
			global $con;
			$arr = "";
			$q = mysqli_query($con, "SELECT * FROM `client` where id = '$id' ");
			while($r = mysqli_fetch_array($q))
			{
				$arr = array($r[0], $r[1], $r[2], $r[3], $r[4], $r[5], $r[6], $r[7], $r[8], $r[9], $r[10], $r[11], $r[12], $r[13], $r[14], $r[15]);
			}
			return $arr;
		}

		public function update($n, $fn, $dob, $cnic, $email, $ph, $mob, $ar, $bl, $ad, $pk, $fee, $ct, $cs, $id)
		{
			global $con;
			$q = mysqli_query($con, "UPDATE `client` SET `name` = '$n', `fname` = '$fn', `dob` = '$dob', `cnic` = '$cnic', `email` = '$email', `phone` = '$ph', `mobile` = '$mob', `area` = '$ar', `building` = '$bl', `address` = '$ad', `package` = '$pk', `fees` = '$fee', `costumer_type` = '$ct', `costumer_status` = '$cs' WHERE `client`.`id` = $id");
			if($q)
			{
				return 1;		
			}
			else
			{
				return 0;	
			}
		}

}



?>