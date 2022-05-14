<?php

$con = "";
class methods
{
		 
		function __construct()
		{
			global $con;
			$con = mysqli_connect("localhost","root","","mhk_db");
		}
		
		
		
		public function login($uname , $pass)
		{
			
			global $con;
			if($con != null || $con != "")
			{
				$sel_user = "SELECT * FROM user WHERE `email` = '$uname' AND `password` = '$pass' ";
				
				$run_user = mysqli_query($con, $sel_user);
				
				$check_user = mysqli_num_rows($run_user);
				
				
				if($check_user == 0)
				{								
					return 0;
				}
				else
				{
					return 1;
				}		
			}
					
		}
		
}

?>