<?php 
require('admindb.php');
if(isset($_SESSION['admin_name']))
{
    header('Location:registered_users.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="icon" href="images/logo6.png" type="image">
	<script src="../sweetalert.min.js"></script>
</head>
<body>
<?php 
        if(isset($_SESSION['status']))
            {
                ?>
                <script>
                swal({
  title: "<?php echo $_SESSION['status']; ?>",
  icon: "<?php echo $_SESSION['status_code']; ?>",
});
</script>
                <?php
                unset ($_SESSION['status']);
            }
        ?>
    <form method="POST">
 <div class="container">
 	<div class="header">
 		<h1>Admin Login</h1>
 	</div>
 	<div class="main">
 				<input type="email" placeholder="email" name="name" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
 			<br>
 				<input type="password" placeholder="password" name="password" required>
 			<br>
 				<input type="submit" name="submit" value="Submit">
 		</form>
 	</div>
 </div>
</body>
<style>
    body {
	font-family: sans-serif;	
	background-image: url(bg.jpeg);
	background-repeat: no-repeat;
	overflow: hidden;
	background-size: cover;
}

.container {
	width: 380px;
	margin:7% auto;
	border-radius: 25px;
	/* background-color: rgba(0,0,0,0.1); */
	/* box-shadow: 0 0 17px #333; */
}

.header {
	text-align: center;
	padding-top: 75px;
}

.header h1 {
	color: white;
	font-size: 45px;
	margin-bottom: 40px;
}

.main {
	text-align: center;
}

.main input,input[type=submit] {
	width: 300px;
	height: 40px;
	border:none;
	outline: none;
	padding-left: 40px;
	box-sizing: border-box;
	font-size: 15px;
	color: #333;
	margin-bottom: 40px;
}

.main input[type=submit] {
	padding-left: 0;
	background-color: #83acf1;
	letter-spacing: 1px;
	font-weight:bold;
	margin-bottom: 70px;
	cursor:pointer;
}

.main input[type=submit]:hover {
	box-shadow: 2px 2px 5px #555;
	background-color: #7799d4;
}
.main input:hover {
	box-shadow: 2px 2px 5px #555;
	background-color: #ddd;
}
</style>
</html>
<?php
if(isset($_POST['submit']))
    {
        $name="techautoandservices@gmail.com";
        $pass="admin";
        if($_POST['name']==$name)
            {
				if($_POST['password']==$pass)
					{
						$_SESSION['admin_name']=$name;
                		header("Location:registered_users.php");
					}
				else
					{
						$_SESSION['status']="Incorrect password";
                        $_SESSION['status_code']="error";
						echo "<script>
                			window.location.href='adminlogin.php';
                			</script>
                			";
					}
            }
        else
            {
				$_SESSION['status']="Invalid email";
            	$_SESSION['status_code']="error";
                echo "<script>
                window.location.href='adminlogin.php';
                </script>
                ";
            }
		}
?>