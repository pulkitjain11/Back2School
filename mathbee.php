<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math Bee</title>
    <link rel="stylesheet" href="css/mathbee.css">
    <link rel="icon" href="images/b2sLogofavi.png" type="image/gif">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaina+2:wght@600&display=swap" rel="stylesheet">
</head>

<body>
  <nav>
    <div class="navbar">
      <div class="laptop">
        <ul class="nav-links">
          <li><a href="https://vit.ac.in" style="margin-top: 0.65rem;"><img class="vit" src="images/vitlogo.png" alt="vit"></a></li>
          <li><a href="login.php" style="margin-top: 0.65rem;">Login</a> </li>
            <li><a href="about.php" style="margin-top: 0.65rem;">About Us</a></li>
            <li><a href="index.php"><img src="images/B2S_Logo.png" class="b2s-logo" /></a></li>
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
<h1>MATH-BEE</h1>
 <div class="contain">
     <form action="instruction1.php" method="post">
     <div class="c c1">
         <p>CATEGORY 1</p>
         <button onclick="instruction1()"type="submit" value="mat_cat1"class="btn btn1">CLASS 3-5</button>
     </div>
    </form>
    <form action="instruction2.php" method="POST">
     <div class="c c2">
        <p>CATEGORY 2</p>
        <button type="submit" onclick="instruction2()" value="mat_cat2"class="btn btn2">CLASS 6-8</button>
    </div>
  </form>
  <form action="instruction3.php" method="POST">
    <div class="c c3">
        <p>CATEGORY 3</p>
        <button type="submit" onclick="instruction3()"value="mat_cat3"class="btn btn3">CLASS 9-10</button>
    </div>
  </form>

</div>
    <script>
        var burger = document.getElementById("burger");
var menu = document.getElementById("menu");
var mobileAdgLogo = document.getElementById("mobile-adg-logo");

burger.addEventListener("click", () => {
  $("#menu").slideToggle("medium");
  menu.classList.toggle("hidden");

  burger.classList.toggle('toggle');
});
var contact=document.getElementById("contact");
  function scroll_contact()
  {contact.scrollIntoView({behavior: "smooth"});
  }
  function instruction1(){
    window.location="instruction1.php";
  }
  function instruction2(){
    window.location="instruction2.php";
  }
  function instruction3(){
    window.location="instruction3.php";
  }
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>

</html>
