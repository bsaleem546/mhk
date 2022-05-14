<?php
$con = "";
class selection
{
		function __construct()
		{
			global $con;
			$con = mysqli_connect("localhost","root","","mhk_db");
		}

		public function sel_c_clients()
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
				$query = mysqli_query($con,"SELECT * FROM c_client ORDER BY `id` DESC  LIMIT $start_from, $per_page"); 
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
						echo "<td>"."<a href='update_c_clients.php?k=$row[0]'>Edit</a>"."</td>";
					echo "</tr>";
				}
				$next_query = "select * from c_client";
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

		public function insert($n,$c,$a)
		{
			global $con;
			$q = mysqli_query($con,"INSERT INTO `c_client` (`id`, `name`, `contact`, `address`, `status`) VALUES (NULL, '$n', '$c', '$a', 'Activated');");
			if($q)
			{
				return 1;	
			}
			else
			{
				return 0;
			}
		}
		
		public function sel_c_client_edti($id)
		{
				global $con;
				$q = mysqli_query($con,"select * from `c_client` where id = '$id'");
				$arr = "";
				while($row = mysqli_fetch_array($q))
				{
					$arr = array($row[0],$row[1] ,$row[2] ,$row[3] ,$row[4]);
				}
				return $arr; 
		}

		
		public function update($n,$c,$a,$s,$id)
		{
			global $con;
			$q = mysqli_query($con, "UPDATE `c_client` SET `name` = '$n', `contact` = '$c', `address` = '$a' , `status` = '$s' WHERE `c_client`.`id` = '$id' ");
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