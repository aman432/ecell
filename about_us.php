<?php 
include_once("google/config.php");
include_once("google/includes/functions.php");

//print_r($_GET);die;

if(isset($_REQUEST['code'])){
  $gClient->authenticate();
  $_SESSION['token'] = $gClient->getAccessToken();
  header('Location: ' . filter_var($redirectUrl, FILTER_SANITIZE_URL));
}

if (isset($_SESSION['token'])) {
  $gClient->setAccessToken($_SESSION['token']);
}

if ($gClient->getAccessToken()) {
  $userProfile = $google_oauthV2->userinfo->get();
  //DB Insert
  $gUser = new Users();
  $gUser->checkUser('google',$userProfile['id'],$userProfile['given_name'],$userProfile['family_name'],$userProfile['email'],$userProfile['gender'],$userProfile['locale'],$userProfile['link'],$userProfile['picture']);
  $_SESSION['google_data'] = $userProfile; // Storing Google User Data in Session
  header("location: ");
  $_SESSION['token'] = $gClient->getAccessToken();
} else {
  $authUrl = $gClient->createAuthUrl();
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Introducing Lollipop, a sweet new take on Android.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>JUIT||E-CELL</title>

    <!-- Page styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/material.min.css">
    <link rel="stylesheet" href="https://code.getmdl.io/1.1.1/material.indigo-pink.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link href="themes/1/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="themes/1/js-image-slider.js" type="text/javascript"></script>
    <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
    <link href="generic.css" rel="stylesheet" type="text/css" />
    <style>
  
body{
  overflow-y:hidden ;
}
#dis{
   background-color: rgba(255,255,255,1);
    border-radius: 5px;
    box-shadow: 0 0 5px rgba(0,0,0,0.4);
    color: #fff;
    display: none;
    font-size: 12px;
    font-family: 'Helvetica',sans-serif;
    padding: 7px 10px;
    position: absolute;
    width: 10%;
    z-index: 4;
    margin-top:5%;
    margin-left:85%;
    overflow:auto;

}

.ho:hover{
  text-shadow: 0 0 5px rgba(118, 185, 0, 0.8);
  
}
.ho{
  color:black;
  margin-left:-20px;
}

    </style>
    <script type="text/javascript">
      $(document).ready(function(){
  $('#pro').mouseenter(function(){
   $('#dis').show();
  });
  $('#dis').mouseleave(function(){
   $('#dis').hide();
  });
});
    </script>
  </head>
  <body >
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">

      <div class="android-header mdl-layout__header mdl-layout__header--waterfall">
        <div class="mdl-layout__header-row">
          <span class="android-title mdl-layout-title">
            <img class="android-logo-image" src="images/android-logo.png"  style="height:70px;width:150px;margin-top:0px;margin-left:-45px;">
          </span>
          <!-- Add spacer, to align navigation to the right in desktop -->
          <div class="android-header-spacer mdl-layout-spacer"></div>
          <div class="android-search-box mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label mdl-textfield--align-right mdl-textfield--full-width">
            <label class="mdl-button mdl-js-button mdl-button--icon" for="search-field">
              <i class="material-icons">search</i>
            </label>
            <div class="mdl-textfield__expandable-holder">
              <input class="mdl-textfield__input" type="text" id="search-field">
            </div>
          </div>
          <!-- Navigation -->
        
          <span class="android-mobile-title mdl-layout-title">
            <img class="android-logo-image" src="images/android-logo.png">
          </span>
          
          <?php  if(isset($_SESSION["loggedin_user_id"]) || !empty($_SESSION["user"])){
              $user = $_SESSION["user"];
              echo '<img src='.$user->pictureUrl.' style="height:50px;width:50px;border-radius:50px;" id="pro">';
              $logout = 'linkedin/logout.php?logout';
              $_SESSION['linkedin'] = $user->id;
            }
              else{
             echo'
             <button class="android-more-button mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect" id="more-button">
            <i class="material-icons">more_vert</i>
          </button><ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right mdl-js-ripple-effect" for="more-button">
            <li class="mdl-menu__item"><button id="show-dialog" class="mdl-button" style="width:100%;">Login</a></li>
            <li class="mdl-menu__item"><button id="show-dialog1" class="mdl-button" style="width:100%;">Signup</a></li>            
          </ul>'; 
               } ?>
        </div>
        
      </div>
<div id="dis">
          <ul>
            <li style="list-style-type:none;"><a href=<?php echo $logout;?> style="text-decoration:none;" class="ho"><i class="material-icons" style="color:black;margin-left:-2%;">power_settings_new</i>&nbsp;&nbsp;<kbd style="margin-top:-50px;">Logout</kbd></a>
            </li>
            <li style="list-style-type:none;"><a href='profile.php' style="text-decoration:none;" class="ho"><i class="material-icons" style="color:black;margin-left:-2%;">account_circle</i>&nbsp;&nbsp;<kbd style="margin-top:-50px;">Profile</kbd></a>
            </li>
            </ul>
        </div>
      <div class="android-drawer mdl-layout__drawer">
        <span class="mdl-layout-title" style="background:#fff;">
          <img class="android-logo-image" src="images/android-logo.png"  style="height:100px;width:190px;margin-top:15px;margin-left:-35px;">
        </span>
         <nav class="mdl-navigation">
          <a class="mdl-navigation__link" href="index.php">Home</a>
          <div class="android-drawer-separator"></div>
          <span class="mdl-navigation__link" href="">Blogs &amp; Forums</span>
          <a class="mdl-navigation__link" href="blogs.php">Blogs</a>
          <a class="mdl-navigation__link" href="forums.php">Forums</a>
          <div class="android-drawer-separator"></div>
          <span class="mdl-navigation__link" href="">Galleries</span>
          <a class="mdl-navigation__link" href="photos.php">Photos</a>
          <a class="mdl-navigation__link" href="videos.php">Videos</a>
          <div class="android-drawer-separator"></div>
          
          <span class="mdl-navigation__link" href="">About</span>
          <a class="mdl-navigation__link" href="">Our Team</a>
          <a class="mdl-navigation__link" href="about_us.php">About us</a>
           <div class="android-drawer-separator"></div>
          <a class="mdl-navigation__link" href="">Contact us</a>
          <div class="android-drawer-separator"></div>
          </nav>
      </div>

      <div class="android-content mdl-layout__content" style="overflow-x:hidden;width:100%;">
        <a name="top"></a>
      </div>
<center><div id="cal" class="mdl-cell mdl-cell--6-col mdl-cell--2-col-tablet mdl-cell--2-col-phone mdl-shadow--2dp" style="margin-top: -25%;" ><iframe src="about_us.xml"></iframe>
</div></center>
        <footer class="android-footer mdl-mega-footer">
          <div class="mdl-mega-footer--top-section">
            <div class="mdl-mega-footer--left-section">
              <button class="mdl-mega-footer--social-btn" style="background:#fff;"><img src="images/facebook-logo.png" style="height: 30px;width: 30px;"></button>
              &nbsp;
              <button class="mdl-mega-footer--social-btn" style="background:#fff;"><img src="images/linkedin-logo.png" style="height: 30px;width: 30px;"></button>
              &nbsp;
              <button class="mdl-mega-footer--social-btn" style="background:#fff;"><img src="images/youtube-logo.png" style="height: 30px;width: 30px;"></button>
            </div>
            <div class="mdl-mega-footer--right-section">
              <a class="mdl-typography--font-light" href="#top">
                Back to Top
                <i class="material-icons">expand_less</i>
              </a>
            </div>
          </div>

          <div class="mdl-mega-footer--middle-section">
            <p class="mdl-typography--font-light"> © 2016 Ecell, JUIT</p>
            <p class="mdl-typography--font-light">Some features may not be available in all devices.</p>
          </div>


        </footer>
      </div>
    </div>
  
    <dialog class="mdl-dialog">
    <button type="button" class="mdl-button close" style="left:80%;">&#10006;</button>
<h4 class="mdl-dialog__title">Login</h4>
<div class="mdl-dialog__content">
<p>
<?php echo '<br>
<div class="linkedin_btn"><a href="linkedin/process.php"><img src="linkedin/images/sign-in-with-linkedin.png" width=100% /></a></div>
';?>
</p>
</div>
<div class="mdl-dialog__actions">

</div>
</dialog>
    <script src="js/material.min.js"></script>
        <script src="js/material.min.js"></script>
        <script type="text/javascript">
          var dialog = document.querySelector('dialog');
var showDialogButton = document.querySelector('#show-dialog');
if (! dialog.showModal) {
dialogPolyfill.registerDialog(dialog);
}
showDialogButton.addEventListener('click', function() {
dialog.showModal();
});
dialog.querySelector('.close').addEventListener('click', function() {
dialog.close();
});

        </script>

  </body>
</html>