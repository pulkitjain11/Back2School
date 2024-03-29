<?php
session_start();
include "connection.php";
 ?>
 <!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <link rel="stylesheet" href="css1/bootstrap.min.css">
    <link rel="stylesheet" href="css1/font-awesome.min.css">
    <link rel="stylesheet" href="css1/owl.carousel.css">
    <link rel="stylesheet" href="css1/owl.theme.css">
    <link rel="stylesheet" href="css1/owl.transitions.css">
    <link rel="stylesheet" href="css1/animate.css">
    <link rel="stylesheet" href="css1/normalize.css">
    <link rel="stylesheet" href="css1/main.css">
    <link rel="stylesheet" href="css1/style.css">
    <link rel="stylesheet" href="css1/responsive.css"> -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <link rel="icon" href="images/b2sLogofavi.png" type="image/gif">
    <link rel="stylesheet" href="css/login_page.css">
    <!-- <link rel="stylesheet" href="css/vitnav.css"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaina+2:wght@600&display=swap" rel="stylesheet">
</head>

<body>

	<!-- <div class="error-pagewrap">
		<div class="error-page-int">
			<div class="text-center m-b-md custom-login">
				<h1>LOGIN FORM</h3>

			</div>
			<div class="content-error">
				<div class="hpanel">
                    <div class="panel-body">
                        <form action=""name="form1" method="post">
                            <div class="form-group">
                                <label class="control-label" for="username">Username</label>
                                <input type="text" placeholder="username" title="Please enter you username" required="" value="" name="username" id="username" class="form-control">

                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password</label>
                                <input type="password" title="Please enter your password" placeholder="Enter Your Password" required="" value="" name="password" id="password" class="form-control">

                            </div>

                            <button type="submit" name="login" class="btn btn-success btn-block loginbtn">Login</button> -->
                            <!-- <a class="btn btn-default btn-block" href="register.php">Register</a> -->

                            <!-- <div class="alert alert-danger" id="failure" style="margin-top: 10px;display:none">
                              <strong>Does not Match Exist!</strong>Invalid Username Or Password!
                              </div>

                        </form>
                    </div>
                </div>
			</div>

		</div>
    </div> -->

    <nav>
        <div class="navbar">
          <div class="laptop">
            <ul class="nav-links">
              <li><a href="https://vit.ac.in" style="margin-top: 0.65rem;"><img class="vit" src="images/vitlogo.png" alt="vit"></a></li>
              <li><a href="login.php" style="margin-top: 0.65rem;">Login</a> </li>
                <li><a href="about.php" style="margin-top: 0.65rem;">About Us</a></li>
                <li><a href="index.php"style="margin-top: -0.75rem;"><img src="images/B2S_Logo.png" class="b2s-logo" /></a></li>
                <li><a href="about.php" style="margin-top: 0.65rem;">Contact Us</a> </li>
                <li><a href="http://info.vit.ac.in/gravitas2020/gravitas_login.asp" style="margin-top: 0.65rem;">Register</a></li>
                <li><a href="https://gravitas.vit.ac.in/index.html">
                    <img src="images/graVITas20 Logo.png" class="gra-logo" /></a>
                </li>
            </ul>
          </div>
          <div class="mobile">
            <div class="mobile-nav">
              <div id="mobile-gra-logo">
                  <img src="images/graVITas20 Logo.png" class="gra-logo" />

              </div>
              <div class="burger" id="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
              </div>
           </div>
            <div class="menu hidden" id="menu">
              <ul class="menu-links" id="menu-links">
                <hr style="margin: -10px 0 0 0;">
                <li><a href="login.php">Login</a> </li><hr>
                <li><a href="http://info.vit.ac.in/gravitas2020/gravitas_login.asp">Register</a></li><hr>
                <li><a href="about.php">About Us</a></li><hr>
                <li><a href="about.php" >Contact Us</a> </li><hr></ul>
            </div>
          </div>
        </div>
      </nav>

 <div class="container">
    <div class="container3" class="tilt">
        <img src="images\B2S_Logo.png" alt="2BS" class="img2">
    </div>
    <div class="container1">
        <div class="login-box">
            <form action=""name="form1"method="POST">
            <div class="textbox">
              <i class="fas fa-user"></i>
              <label for="username"></label>
              <input type="text" placeholder="Username" name="username" id="username"required>
            </div>
            <div class="textbox">
              <i class="fas fa-lock"></i>
              <input type="password" for="password" placeholder="Password" name="password" id="password"required>
            </div>
            <div class="selectbox">
            <select name="test" id="test" onchange="check()" required>
                <option>Select your test</option>
                <option value="mathbee">Math-Bee</option>
                <option value="spellbee">Spell-Bee</option>
            </select>
            </div>
            <button type="submit" name="login" class="btn btn-success btn-block loginbtn">Login</button>
            <!-- <a class="btn btn-default btn-block" href="register.php">Register</a> -->

            <div class="alert alert-danger" id="failure" style="font-size: 20px;margin-top: 5px;display:none">
              Does not Match!<br>Invalid Username Or Password!
              </div>
              <div class="alert alert-danger" id="selectexam" style="margin-top: 10px;display:none">
                <strong>Select Exam</strong><br>Please choose an exam.
                </div>
            </form>
        </div>

    </div>
    <div class="container2">
        <img src="images/B2S_Logo.png" alt="2BS" class="img1 tilt">
    </div>
</div>

    <?php
    if(isset($_POST["login"]))
    {
      $count=0;
      $res=mysqli_query($link,"select * from registration where username='$_POST[username]' && password='$_POST[password]'");
      $count=mysqli_num_rows($res);

      if($count==0)
      {
        ?>
          <script type="text/javascript">
              document.getElementById("failure").style.display = "block";
          </script>
        <?php

      }
      else {

        $_SESSION["username"]=$_POST["username"]
        ?>
        <script type="text/javascript">
        function check() {
         var val = document.getElementById('test').value;
         if(val=='mathbee') {
          window.location="mathbee.php"
        } else if(val=='spellbee') {
          window.location="spellbee.php";
         }
         else{
           document.getElementById("selectexam").style.display = "block";
         }
        }
        </script>
        <?php
      }
    }

     ?>

    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery-price-slider.js"></script>
    <script src="js/jquery.meanmenu.js"></script>
    <!-- <script src="js/owl.carousel.min.js"></script> -->
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>

    <script>
        var burger = document.getElementById("burger");
var menu = document.getElementById("menu");

burger.addEventListener("click", () => {
  $("#menu").slideToggle("medium");
  menu.classList.toggle("hidden");

  burger.classList.toggle('toggle');
});
    </script>



</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/tilt.min.js"></script>
<script>
  $(".tilt").tilt({
    scale: 1.2,
  });
</script>

</html>
