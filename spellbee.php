<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spell Bee</title>
    <link rel="stylesheet" href="css/spell bee.css">
    <link rel="stylesheet" href="css/foot.css">
    <link rel="icon" href="images/b2sLogofavi.png" type="image/gif">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaina+2:wght@600&display=swap" rel="stylesheet">
</head>

<body>
    <nav>
        <div class="navbar">
          <div class="laptop">
            <ul class="nav-links">
                <li><a href="https://vit.ac.in" style="margin-top: 0.65rem;"><img class ="vit" src="images/vitlogo.png"height="75rem" alt="vit"></a></li>
                <li><a href="login.php"style="margin-top: 0.65rem;">Login</a></li>
                <li><a href="about.php"style="margin-top: 0.65rem;">About Us</a></li>
                <li>
                  <a href="index.php">
                    <img src="images/B2S_Logo.png" class="b2s-logo" />
                  </a>
                </li>
                <li><a href="about.php" style="margin-top: 0.65rem;">Contact Us</a> </li>
                <li><a href="http://info.vit.ac.in/gravitas2020/gravitas_login.asp"style="margin-top: 0.65rem;">Register</a></li>
                <li>
                  <a href="https://gravitas.vit.ac.in/index.html">
                    <img src="images/graVITas20 Logo.png" class="gra-logo" />
                  </a>
                </li>
            </ul>
          </div>
          <div class="mobile">
            <div class="mobile-nav">
              <div id="mobile-gra-logo">
                <a href="https://vit.ac.in">
                  <img src="images/graVITas20 Logo.png" class="gra-logo" />
                </a>
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
                <!-- <li><a href="/spellbee">Spell-Bee</a> </li><hr> -->
                <li><a href="login.php">Login</a> </li><hr>
                <li><a href="about.php">About Us</a></li><hr>
                <li><a href="http://info.vit.ac.in/gravitas2020/gravitas_login.asp">Register</a></li><hr>
                <li><a href="about.php">Contact Us</a> </li><hr></ul>
            </div>
          </div>
        </div>
      </nav>
<h1>SPELL-BEE</h1>
 <div class="contain">
   <form action="instruct_spell1.php" method="post">
     <div class="c c1">
         <p>CATEGORY 1</p>
         <button type="submit" onclick="instructspell1()" class="btn btn1">CLASS 3-5</button>
     </div>
    </form>
    <form action="instruct_spell2.php" method="post">
     <div class="c c2">
        <p>CATEGORY 2</p>
        <button type="submit" onclick="instruct_spell2()" class="btn btn2">CLASS 6-8</button>
    </div>
  </form>
    <form action="instruct_spell3.php" method="POST">
    <div class="c c3">
        <p>CATEGORY 3</p>
        <button type="submit" onclick="instruct_spell3()" class="btn btn3">CLASS 9-10</button>

  </div>
  </form>
  </div>
  <!-- <footer class="footer">
    <div class="container">
        <div class="row">

            <div class="col-12 col-sm-6 footer-joinus">
                <span class="footer-joinus-text">Have something to post or suggest?</span>
                <a class="footer-joinus_button" href="">Mail us</a>
            </div>
            <div class="col-12 col-sm-6 align-self-center ">
                <div class="text-center">
                    <a class="btn btn-social-icon btn-google" href="https://www.instagram.com/back2schoolvit/"><i class="fa fa-instagram fa-lg"></i></a>
                    <a class="btn btn-social-icon btn-google" href="http://google.com/+"><i class="fas fa-phone"></i></a>
                </div>
            </div>
       </div>
       <div class="row justify-content-center" style="margin-top: 10px;">
            <div class="col-auto">
                <p>© Copyright 2020 Back 2 School</p>
            </div>
       </div>
    </div>
</footer> -->
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
  function instruct_spell1(){
    window.location="instruct_spell1.php";
  }
  function instruct_spell2(){
    window.location="instruct_spell2.php";
  }
  function instruct_spell3(){
    window.location="instruct_spell3.php";
  }
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>

</html>
