<?php
require('coding/logincode.php');

session_start();
ob_start();


if(isset($_SESSION['user']) != "")
{
	header('location:dashboard.php');
}

?>


<html>
<head>
    <title>Login Panel</title>
    <link rel="stylesheet" type="text/css" href="Bootstrap/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="Bootstrap/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="Bootstrap/style.css">

</head>

<body>
<div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#">MHK</a>
                    </div>

                </div>
            </nav>
        </div>
    </div>
</div>



    <div class="container">
	
        <center>
            <h1 style="margin-top: 100px">Admin Panel Login</h1>
			
        </center>
        <hr>

        <form class="form-horizontal"  method="post" action="">

                        <div class="form-group">
                            <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                            <div class="col-md-6">
                                <input type="text" name="un" class="form-control" id="inputEmail" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword" class="col-lg-2 control-label">Password</label>
                            <div class="col-md-6">
                                <input type="password" name="ps" class="form-control" id="inputPassword" placeholder="Password">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-10 col-lg-offset-2">
                                <input type="submit" name="submit" value="Login" class="btn btn-primary">
                            </div>
                        </div>
                </form>
        <hr>
    </div>


</body>

</html>

<?php

if(isset($_POST['submit']))
{
	$un = $_POST['un'];
	$ps = $_POST['ps'];
	
	$obj = new methods();
	$h = $obj->login($un, $ps);
	
	if($h > 0)
	{
		$_SESSION['user'] = $un;
		header('location:dashboard.php');	
	}
	else
	{
		echo "<h1>WRONG INPUT</h1>";	
	}
}


?>
