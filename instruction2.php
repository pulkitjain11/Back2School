<?php
session_start();
if(!isset($_SESSION["username"]))
{
  ?>
  <script type="text/javascript">
  window.location="login.php"
  </script>
  <?php
}
?>
<?php
include "connection.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Instructions</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/instruct.css">
    <link rel="icon" href="images/b2sLogofavi.png" type="image/gif">
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&family=Fredericka+the+Great&family=Londrina+Outline&family=Luckiest+Guy&display=swap" rel="stylesheet">
    <style media="screen">
  .navbar{
    background-color: black;
  }
  .vit{
    height:5rem;
    width: 12rem;
  }
  .backs
  {
    width: 4rem;
    height: 3.5rem;
    margin-left: 300px;
  }
  .gravi{
    width: 12rem;
    margin-left: 450px;
  }
  @media only screen and (max-width: 1080px){
    .backs{
      width: 4rem;
      height: 3.5rem;
      margin-left: -2.5rem;
      margin-right: 0rem;
    }
    .gravi{
      margin-left: 0rem;
      width:10rem;
      margin-right: 2rem;
    }
    .vit{
      height:  0rem;
      width: 0rem;
    }
  }

  </style>
  </head>
  <body>
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-dark">
              <div class="container">
      <a href="https://vit.ac.in"><img class="vit"  src="images/vitlogo.png" alt="vit"></a>
      <a class="navbar-brand" href="index.php"><img class="backs" src="images/B2S_Logo.png"></a>
      <a class="navbar-brand" href="https://gravitas.vit.ac.in/index.html"><img class="gravi" src="images/graVITas20 Logo.png" ></a>
    </div>
    </nav>
 </div>
    <div class="container-fluid-hmmm">
      <h1 style="background-color: none; margin-bottom: 0px; padding-bottom: 0px;" class="inst text-center no">Instructions</h1>
       <div class="yes">
         <br>
         <p class="firstp">Please read the follow instructions and proceed accordingly:</p>
         <br>
        <p>1. Answer all the questions.</p>
        <p>2. There will be 20 questions in total and each question carries equal marks.</p>
        <p>3. The maximum time duration is 45 minutes.</p>
        <p>4. The students at the end of the exam should click on the SUBMIT button and submit the form without fail.</p>
        <p>5. There is no negative marking for any question.</p>
        <p>6. All the questions will have a single option correct, incase of multiple answers select the most appropriate one.</p>
        <p>7. You can skip a question and revert to it anytime later during the test.</p>
        <p>8. In case if two candidates have secured same marks then the candidate who took less time to complete the</p>
        <p class="plast">quiz will be given priority. So, it is adviced to submit the quiz as soon as u finish.</p>
         <br>
         <form action="" method="post">
          <input type="checkbox" id="verify"name="agree" required>
          <label class="checking" for="check"> I have read all the instructions carefully and I am ready to begin the quiz</label>
        <br>
        <?php $res=mysqli_query($link,"select * from exam_category where id='10'");
            while ($row=mysqli_fetch_array($res)) {
              ?>
        <button type="submit" value="<?php echo $row["category"]; ?>" class="btn btn-primary"onclick="set_exam_type_session(this.value);">NEXT</button>
        <?php
            }
            ?>
        </form>
       </div>
      </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <script type="text/javascript">
function set_exam_type_session(exam_category){
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function(){
    if(xmlhttp.readyState == 4 && xmlhttp.status ==200){
      window.location="dashboard.php";
    }
  };
  xmlhttp.open("GET","forajax/set_exam_type_session.php?exam_category="+ exam_category,true);
  xmlhttp.send(null);
}
  </script>
  </body>
</html>
