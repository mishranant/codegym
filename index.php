<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/index.css" rel="stylesheet" />
  <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body>
  <img src="images/logo.png" style="height: auto;width: 10%">
  <div class="introduction">
  <h1> Hello! </h1>
  <h2>Dosto, bhaiyo aur unki bahano...
  </h2>
  <h3>aaj ham laayein hain aapke liye saal ka lokpriya geet!</h3>
  <p>You asked me if we were in the meth business or the money business. Neither, I’m in the empire business. I was under the impression that you had this under control. Well, that's what this is - problem solving. Skyler this is a simple division of labor - I bring in the money, you launder the money. This is what you wanted. 

Who are you talking to right now? Who is it you think you see? Do you know how much I make a year? I mean, even if I told you, you wouldn't believe it. Do you know what would happen if I suddenly decided to stop going into work? 

A business big enough that it could be listed on the NASDAQ goes belly up. Disappears! It ceases to exist without me. No, you clearly don't know who you're talking to, so let me clue you in. I am not in danger, Skyler. I AM the danger! A guy opens his door and gets shot and you think that of me? No. I am the one who knocks! </p>
  </div>
  <div id="login-button">
    <h5 style="color:white; font-size: 1.5em; margin-left:-0.3em;margin-top:.2em;">login</h5>
  </div>
  <div id="register-button">
    <h5 style="color:white; font-size: 1.5em; margin-left:-0.9em;margin-top:.2em;">register</h5>
  </div>
  <div id="container">
    <h1>log in</h1>
    <span class="close-btn">
      <img src="https://cdn4.iconfinder.com/data/icons/miu/22/circle_close_delete_-128.png"></img>
    </span>
    <?php
    if(isset($_SESSION["loginerr"]))
      if($_SESSION["loginerr"] != "")
        echo $_SESSION["loginerr"]."<br><br>";
    ?>
    <form action="login.php" method="post">
      <input type="text" name="username" placeholder="username">
      <input type="password" name="password" placeholder="password">
      <input type="submit">
      <div id="remember-container">
        <input type="checkbox" id="checkbox-2-1" class="checkbox" checked="checked"/>
        <span id="remember">remember me</span>
        <span id="forgotten">forgotten password</span>
      </div>
    </form>
  </div>

  <div id="container2">
    <h1>register</h1>
    <span class="close-btn2">
      <img src="https://cdn4.iconfinder.com/data/icons/miu/22/circle_close_delete_-128.png"></img>
    </span>
    <form action="register.php" method="post">
      <input type="text" name="name" placeholder="name">
      <input type="text" name="username" placeholder="username">
      <input type="email" name="email" placeholder="email">
      <input type="password" name="password" placeholder="password">
      <input type="password" placeholder="confirm password">
      <input type="file" name="photo">
      <div id="tnc-container">
        <input type="checkbox" id="checkbox-2-1" class="checkbox" checked="checked"/><span style="color:#eee;"> I agree to terms and conditions</span><br />
      </div>
      <input type="submit"></a>
    </form>
  </div>

  <!-- Forgotten Password Container -->
  <div id="forgotten-container">
    <h1>forgotten</h1>
    <span class="close-btn">
      <img src="https://cdn4.iconfinder.com/data/icons/miu/22/circle_close_delete_-128.png"></img>
    </span>
    <form>
      <input type="email" name="email" placeholder="email">
      <a href="#" class="orange-btn">get new password</a>
    </form>
  </div>
  <script>
    $('#login-button').click(function(){
      $('#login-button').fadeOut("slow",function(){
        $("#container").fadeIn();
      });
    });

    $('#register-button').click(function(){
      $('#register-button').fadeOut("slow",function(){
        $("#container2").fadeIn();
      });
    });

    $(".close-btn").click(function(){
      $("#container, #forgotten-container").fadeOut(800, function(){
        $("#login-button").fadeIn(800);
      });
    });
    $(".close-btn2").click(function(){
      $("#container2").fadeOut(800, function(){
        $("#register-button").fadeIn(800);
      });
    });
    /* Forgotten Password */
    $('#forgotten').click(function(){
      $("#container").fadeOut(function(){
        $("#forgotten-container").fadeIn();
      });
    });
  </script>
  <script type="text/javascript" src="js/index.js"></script>
  <div id="particles-js"></div>
</body>
</html>
