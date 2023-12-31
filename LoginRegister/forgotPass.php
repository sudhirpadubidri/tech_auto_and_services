<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" href="images/logo6.png" type="image">
    <script src="../sweetalert.min.js"></script>
    <link rel="stylesheet" href="stylelogin.css">
</head>
<body>
<form method="POST" action="forgot.php">
    <div class="box">
        <div class="innerbox">
            <h2>Recover Your Account</h2>
        <p>&emsp;&emsp;&emsp;&emsp;Please fill email id properly</p>
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
                <input type="email" placeholder="Email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required >
                <input type="submit" value="Send OTP" name="forgot_password">
</form>
    </div>
    </div>
    <style>
        input[type=submit]{
            cursor:pointer;
        }
        .closebtn{
            margin-left:15px;
            color:black;
            font-weight:bold;
            float:right;
            line-height:20px;
            font-size:22px;
            cursor:pointer;
            transition:0.3s;
        }
        #alert{
            height:auto;
            width :100%;
            background : lightcoral;
            padding: 0 15px;
            font-size:14px;
            line-height:40px;
            margin:10px 0;
            color:black;
            border-radius:4px;
        }
    </style>
</body>
</html>