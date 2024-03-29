<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/vitnav.css">
    <link rel="stylesheet" type="text/css" href="css/foot.css">
    <link rel="stylesheet" type="text/css" href="css/newpage.css">
    <link rel="icon" href="images/b2sLogofavi.png" type="image/gif">
   <script src="https://kit.fontawesome.com/8f045748b8.js" crossorigin="anonymous"></script>
    <title></title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<a class="navbar-brand" href="https://vit.ac.in"><img class="vit" src="images/vitlogo.png"></a>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav mr-auto">
<li class="nav-item active">
  <a class="nav-link" href="login.php" id="mathbee" style="color:white">Login<span class="sr-only">(current)</span></a>
</li>
<li class="nav-item active">
  <a class="nav-link ali" href="about.php" style="color:white">AboutUs<span class="sr-only">(current)</span></a>
</li>
<li class="nav-item active">
    <a class="navbar-brand" href="index.php"><img class="backs" src="images/B2S_Logo.png"></a>
  </li>
<li class="nav-item active">
  <a class="nav-link ali" href="about.php" style="color:white">ContactUs<span class="sr-only">(current)</span></a>
</li>
<li class="nav-item active">
  <a class="nav-link ali" href="http://info.vit.ac.in/gravitas2020/gravitas_login.asp" style="color:white">Register<span class="sr-only">(current)</span></a>
</li>
  <a class="navbar-brand" href="https://gravitas.vit.ac.in/index.html"><img class="gravi" src="images/graVITas20 Logo.png"></a>
</ul>
</div>
</div>
</nav>
<div class="container-fluid">
  <div class="row mirinda">
    <div class="col-md-4 col-11 pads">
      <img id="sidepic" src="images/happy-cute-little-kids-boy-girl-read-book_97632-2063.png">
    </div>
      <div class="col-md-8 col-12 pads">
        <div class="description">


      <h1 class="text">SPELL BEE</h1>
      <!-- <div class="row justify-content-center mirinda">
        <div col-md-3 col-1>
          <form class="" action="index.html" method="post">
            <button type="button" class="btn btn-lg categories">Category 1</button>
          </form>
        </div>
        <div col-md-3 col-1>
          <button type="button" class="btn btn-lg categories cat" >Category 2</button>
        </div>
        <div col-md-3 col-1>
          <button type="button" class="btn btn-lg categories cat" id="cat3">Category 3</button>
        </div>
      </div> -->
      <!-- <div class="row justify-content-center marginsss mirinda">
        <div col-md-3 col-1>
          <button type="button" class="btn btn-outline-danger btn-md" id="threeto">Class 3-5</button>
        </div>
        <div col-md-3 col-1>
          <button type="button" class="btn btn-md btn-outline-success" id="sixtoeight">Class 6-8</button>
        </div>
        <div col-md-3 col-1>
          <button type="button" class="btn btn-md btn-outline-primary" id="nineto">Class 9-10</button>
        </div>
      </div> -->

      <p>
        Spell Bee is a long-running custom that urges students from grade 3 - 10 , to build up their spelling aptitudes and vocabulary, and additionally building up their poise for public talking.

<!-- <h2>SPELL BEE</h2> -->
<ul>
  <li>Category I - Class 3, 4, 5</li>
  <li>Category II- Class  6,7,8</li>
  <li>Category III- Class 9, 10</li>

</ul>

There will be two rounds and   one will  be   written test and the other will be conducted orally .
First round will be conducted on the website and the latter one on any existing  virtual platform.

Spell Bee Top contestant from each category will fight their way to be  the ultimate winner of Spell Bee Competition , with the aim of getting to be champions.
<ul>
  <li>
    The rules and regulations will may be changed or amended in case the need arises.
  </li>
  <li>
      All participants will need to abide by the rules and regulations of the competition.
  </li>
</ul>


Registration fees to be deposited is ₹50 /- Per head.
      </p>
        </div>
    </div>
  </div>
</div>



  <footer id="contact"class="footer">
    <div class="container">
        <div class="row">

            <div class="col-12 col-sm-6 footer-joinus">
                <span class="footer-joinus-text">Have something to post or suggest?</span>
                <a class="footer-joinus_button" href="mailto:b2svit@gmail.com">Mail us</a>
            </div>
            <div class="col-12 col-sm-6 align-self-center ">
                <div class="text-center">
                    <a class="btn btn-social-icon btn-google" href="https://www.instagram.com/back2schoolvit/"><i class="fa fa-instagram fa-lg"></i></a>
                    <a class="btn btn-social-icon btn-google" href="tel:9445228496"><i class="fas fa-phone"></i></a>
                </div>
            </div>
       </div>
       <div class="row justify-content-center" style="margin-top: 10px;">
            <div class="col-auto">
                <p>© Copyright 2020 Back 2 School</p>
            </div>
       </div>
    </div>
</footer>
    <script>
        var burger = document.getElementById("burger");
var menu = document.getElementById("menu");
var mobileAdgLogo = document.getElementById("mobile-adg-logo");

burger.addEventListener("click", () => {
  $("#menu").slideToggle("medium");
  menu.classList.toggle("hidden");

  burger.classList.toggle('toggle');
});

    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
var contact=document.getElementById("contact");
  function scroll_contact()
  {contact.scrollIntoView({behavior: "smooth"});
  }
</script>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
