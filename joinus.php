<?php

if($_POST["submit"]) {
    $recipient="cuimsociety@gmail.com";
    $subject="CUIMS Message";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>CUIMS</title>
  <link rel="shortcut icon" href="favicon.ico" />
  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo"><img src="CUIMS_logo_small.jpg"></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="index.html">Home</a></li>
        <li><a href="learnmore.html">About Us</a></li>
        <li><a href="ourpeople.html">Our People</a></li>
        <li><a href="joinus.php">Join Us</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="index.html">Home</a></li>
        <li><a href="learnmore.html">About Us</a></li>
        <li><a href="ourpeople.html">Our People</a></li>
        <li><a href="joinus.php">Join Us</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center white-text">Cambridge University Investment Management Society</h1>
        <div class="row center">
          <h5 class="header col s12 light">The UK's largest undergraduate-run investment fund</h5>
        </div>

        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="background1.jpg" alt="Unsplashed background img 1"></div>
  </div>

 <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>Keep in touch</h4>
          <p class="left-align light">We recruit analysts in Michaelmas following a two-stage interview process. Applications are competitive and are reviewed on a rolling basis. Please leave your details below if you want to sign up for our newsletter to hear about upcoming opportunities and events or just want to get in touch.</p>
        </div>
      </div>

    </div>
  </div>

 


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light black-text"></h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="background2.jpg" alt="Unsplashed background img 2"></div>
  </div>

 <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4></h4>
          <p class="left-align light"></p>
        </div>
      </div>

    </div>
  </div>

  <div class="container">
    <div class="section">

<div class="row">
  <?php =$thankYou ?>
    <form class="col s12" method="post" action="joinus.php">
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="First Name" id="first_name" type="text" class="validate" name="sender">
          <label for="first_name"></label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Last Name</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate" name="senderEmail">
          <label for="email">Email</label>
        </div>
      </div>

     <div class="row">
        <div class="input-field col s12">
          <textarea id="textarea1" class="materialize-textarea" name="message"></textarea>
          <label for="textarea1">Message</label>
        </div>
      </div>
      <input type="submit" name="submit">
    </form>
  </div>
        


    </div>
  </div>

  <footer class="page-footer indigo darken-3">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Work With Us</h5>
          <p class="grey-text text-lighten-4" style="text-align: left;">We are a team of university students passionate about investment management and would love to work with your firm. Feel free to email us with ideas or advice.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect With Us</h5>
          <ul class="socials">
            <li class="socials"><a class="socials" href="#!"><img src="f_logo_RGB-Grey_1024.png"></a></li>
            <li class="socials"><a class="socials" href="https://www.linkedin.com/company/cuims/"><img src="linkedin_small.png"></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
