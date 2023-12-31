<?php require('admindb.php'); 
if(!isset($_SESSION['admin_name']))
{
    header('Location:adminlogin.php');
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../images/logo6.png" type="image">
    <title>Sell</title>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
});</script>
                <?php
                unset ($_SESSION['status']);
            }
        ?>
    <header>
        <div class="left-side">
            <h3>Admin</h3>
        </div>
    </header>
    <div class="side-nav">
        <div class="logo">
            <img src="../images/logo6.png" alt="not supported">
        </div>
        <a href="registered_users.php"><i class="fa fa-user-circle-o"><span>Registered Users</span></i></a>
        <a href="booked_services.php"><i class="fa fa-vcard-o"><span>Booked Services</span></i></a>
        <a href="accessories.php"><i class="fa fa-archive"><span>Accessories</span></i></a>
        <a href="buy.php"><i class="fa fa-th-large"><span>Buy</span></i></a>
        <a href="sell.php" class="active"><i class="fa fa-th-large"><span>Sell</span></i></a>
        <a href="feedback.php"><i class="fa fa-th-large"><span>Feedbacks</span></i></a>
        <a href="invoice.php"><i class="fa fa-th-large"><span>Invoice</span></i></a>
        <a href="adminlogout.php">Logout</a>
    </div>
    <section class="home-section">
        <form action="booked_users.php" method="POST">
        <input type="submit" class="btn" name="booked_users" value="Booked Users">
        </form>
        <form action="admindb.php" method="POST" enctype="multipart/form-data">
            <div class="container">
                    <h1>Enter product details</h1><br>
                        <input type="text" name="brand" placeholder="Enter brand" required /><br>
                        <input type="text" name="model" placeholder="Enter model" required /><br>
                        <input type="number" min="2000" name="year" placeholder="Enter year" required /><br>
                        <input type="number" min="1" name="ownership" placeholder="Enter Ownership" required /><br>
                        <input type="number" name="price" min="1" placeholder="Enter price" required /><br>                       
                        <p>Upload Photo</p> 
                        <input type="file" name="photo" id="choose_file"><br>
                        <input type="submit" name="upload" value="Upload">
                        </form>
            </div>
    </section>
</body>
<style>
* {
	box-sizing: border-box;
	margin: 0;
	padding: 0;
}
.side-nav .logo img{
        width: 100px;
        height: 60px;
        border-radius: 100px;
        margin-bottom: 10px;
    }
#choose_file{
        background: white;
        border:none;
        outline:none;
        box-shadow:2px 2px 2px black;
        border-radius:50px;
        height:34px;
    }
    ::-webkit-file-upload-button{
        border:none;
        background: #02744efa;
        border-radius:50px;
        height:34px;
        color:white;
        width:90px;
        box-shadow:3px 1px 1px gray;
        cursor:pointer;
    }
input{
    width: 100%;
    height: 40px;
}
input[type=submit].btn{
    margin-top: 15px;;
    margin-left: 80%;
    width:10%;
    border-radius: 8px;
    background-color: rgb(34, 232, 34);
    cursor:pointer;
}
input[type=submit]{
    cursor:pointer;
    border-radius: 8px;
    background-color: rgb(34, 232, 34);
}
input[type=submit]:hover{
    background-color: rgb(34, 164, 34);
}
.container {
    margin-left: 30%;
    margin-top: 5%;
    margin-bottom: 120px;
	width: 400px;
	height: 480px;
	background: rgb(160, 159, 159);
    border-radius: 10px;
	display: flex;
	flex-direction: column;
	padding: 1rem;
}
    body{
        margin: 0;
        padding: 0;
        font-family: sans-serif;
    }
    header{
        position: fixed;
        background: #22242a;
        padding: 20px;
        width: 100%;
        height: 70px;
    }
    .left-side h3{
        color: white;
        margin: 0;
        text-transform: uppercase;
        font-size: 22px;
        font-weight: 900;
    }
    .side-nav{
        background: #2f323a;
        padding-top: 30px;
        margin-top:70px;
        position: fixed;
        left: 0;
        width: 250px;
        height: 100%;
        transition: 0.5s;
        transition-property: left;
    }
    .logo{
        text-align: center;
    }
    .side-nav img{
        width: 120px;
        height: 100px;
        border-radius: 100px;
        margin-bottom: 10px;
    }
    .side-nav a{
        color: white;
        display: block;
        width: 100%;
        line-height: 60px;
        text-decoration: none;
        padding-left: 40px;
        box-sizing: border-box;
        transition: 0.4s;
    }
    .side-nav a.active{
        background:  #0a7e96;
    }
    .side-nav a:hover{
        background: #0a7e96;
    }
    .side-nav i{
        padding-right: 10px;
    }
    .side-nav span{
        margin-left: 15px;
        font-size: large;
    }
    .home-section{
  position: fixed;
  background:linear-gradient(#191654,#43C6AC);
  min-height: 100vh;
  width: calc(100% - 240px);
  left: 240px;
}

</style>
</html>