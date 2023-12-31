<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>About Us</title>
<link rel="icon" href="images/logo6.png" type="image">
<script src="sweetalert.min.js"></script>
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

<div class="about-section">
  <a href="index.php">Back</a>
  <img src="images/logo6.png" alt="" width="180px">
  <h1>Tech Auto & Services</h1>
  <p1>Tech Auto & Sevices is web based application developed by three members which gives 
    user to enjoy two wheeler services online. This website provides various sections which 
    can fulfill all your automobile needs. User can book any two wheeler services of his choice
    and can even modify according to his needs. The user can also buy various accessories. We 
    accept second hand vehicles and sell to other customers.</p1>
</div>

<h3 style="text-align:center">Our Team</h3>
<div class="row">
  <div class="column">
    <div class="card">
      <div class="container"><br>
        <h2>Sudesh Shetty</h2>
        <p class="title"></p>
        <p><i class="fa fa-envelope" style="font-size:21px;"></i> &nbsp;sudeshshetty450@gmail.com</p>
        <p><i class="fa fa-instagram" style="font-size:23px;color: red;"></i> &nbsp;sudesh_s_shetty_</p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card"> 
      <div class="container"><br>
        <h2>P Sudhir Rao</h2>
        <p class="title"></p>
        <p><i class="fa fa-envelope" style="font-size:21px;"></i> &nbsp;raosudhir2k1@gmail.com</p>
        <p><i class="fa fa-instagram" style="font-size:23px;color: red;"></i> &nbsp;sudhir_padubidri</p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <div class="container"><br>
        <h2>U Vittal N Shenoy</h2>
        <p class="title"></p>
        <p><i class="fa fa-envelope" style="font-size:21px;"></i> &nbsp;vittalshenoy777@gmail.com</p>
        <p><i class="fa fa-instagram" style="font-size:23px;color: red;"></i> &nbsp;mr_shenoy_777</p>
      </div>
    </div>
  </div>
</div>
<form action="feedbackdb.php" method="post">
<div class="contact"><br><br>
  <div class="background">
    <div class="container">
      <div class="screen">
        <div class="screen-body">
          <div class="screen-body-item left">
            <div class="app-title">
              <span>FEEDBACK</span>
              
            </div>
            <div class="app-contact">techautoandservices@gmail.com</div>
          </div>
          <div class="screen-body-item">
            <div class="app-form">
              <div class="app-form-group">
                <input type="text" name="name" class="app-form-control" placeholder="NAME" required>
              </div>
              <div class="app-form-group">
                <input type="email" name="email" class="app-form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="EMAIL" required>
              </div>
              <div class="app-form-group">
                <input type="text" name="contact_no" class="app-form-control"  pattern="[0-9]{10}" placeholder="CONTACT NO" required>
              </div>
              <div class="app-form-group message">
                <input type="text" name="message" class="app-form-control" placeholder="MESSAGE" required>
              </div>
              <div class="app-form-group buttons">
                <input type="submit" name="send" value="SEND">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</form>
</body>
<style>
  .about-section a{
    text-decoration: none;
    float: right;
    font-size: 20px;
    border:1px solid black;
    background-color: #fff;
    padding:4px;
    border-radius:15px; 
    padding-left: 12px;
    padding-right: 12px;
    color:black;
  }

  .about-section img{
margin-left:5%;
  }

  .about-section a:hover{
    background-color: #000;
    color:#fff;
  }

.background {
  display: flex;
  min-height: 100vh;
}

.container {
  flex: 0 1 700px;
  margin: auto;
  padding: 10px;
}

.screen {
  position: relative;
  background: #3e3e3e;
  border-radius: 15px;
}

.screen-body {
  display: flex;
}

.screen-body-item {
  flex: 1;
  padding: 50px;
}

.screen-body-item.left {
  display: flex;
  flex-direction: column;
}

.app-title {
  display: flex;
  flex-direction: column;
  position: relative;
  color: #ea1d6f;
  font-size: 26px;
}
.app-contact {
  margin-top: auto;
  font-size: 8px;
  color: #888;
}

.app-form-group {
  margin-bottom: 15px;
}

.app-form-group.message {
  margin-top: 40px;
}

.app-form-group.buttons {
  margin-bottom: 0;
  text-align: right;
}
.app-form-group.buttons input[type=submit]{
  border:none;
  background-color: #ea1d6f;
  height:22px;
  width:25%;
  cursor: pointer;
}

.app-form-control {
  width: 100%;
  padding: 10px 0;
  background: none;
  border: none;
  border-bottom: 1px solid #666;
  color: #ddd;
  font-size: 14px;
  outline: none;
  transition: border-color .2s;
}

.app-form-control::placeholder {
  color: #666;
}

.app-form-control:focus {
  border-bottom-color: #ddd;
}

.app-form-button {
  background: none;
  border: none;
  color: #ea1d6f;
  font-size: 14px;
  cursor: pointer;
  outline: none;
}

.app-form-button:hover {
  color: #b9134f;
}

.credits {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: 20px;
  color: #ffa4bd;
  font-family: 'Roboto Condensed', sans-serif;
  font-size: 16px;
  font-weight: normal;
}

.credits-link {
  display: flex;
  align-items: center;
  color: #fff;
  font-weight: bold;
  text-decoration: none;
}

.dribbble {
  width: 20px;
  height: 20px;
  margin: 0 5px;
}

@media screen and (max-width: 520px) {
  .screen-body {
    flex-direction: column;
  }

  .screen-body-item.left {
    margin-bottom: 30px;
  }

  .app-title {
    flex-direction: row;
  }

  .app-title span {
    margin-right: 12px;
  }

  .app-title:after {
    display: none;
  }
}

@media screen and (max-width: 600px) {
  .screen-body {
    padding: 40px;
  }

  .screen-body-item {
    padding: 0;
  }
}

  a{
    color: blue;
  }
  .contact{
    font-size: large;
    text-align:center;
  }
  h3{
    font-size: 28px;
    background-color: gray;
  }

  .full{
    background-image: url(images/logo6.png);
  }
    .row{
        background-color: black; 
    }
    body {
      background-color: lightgray;
      font-family: Arial, Helvetica, sans-serif;
      margin: 0;
    }
    
    html {
      box-sizing: border-box;
    }
    
    * {
      box-sizing: inherit;
    }
    
    .column {
      float: left;
      width: 33.3%;
      margin-bottom: 16px;
      padding: 0 8px;
    }
    
    .card {
      background-color: #fff;
      margin: 8px;
    }
    
    .about-section {
      padding: 50px;
      text-align: center;
      background-color: #474e5d;
      color: white;
    }
    
    .container {
      padding: 0 16px;
    }
    
    .container::after, .row::after {
      content: "";
      clear: both;
      display: table;
    }
    h1{
      text-decoration: underline;
    }
    </style>
</html>
