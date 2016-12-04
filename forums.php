<?php 
session_start();
error_reporting(0);
include 'connection.php';
include 'post.php';
$dbServer = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'ecell';
$conn = mysqli_connect($dbServer, $dbUsername, $dbPassword, $dbName);
    if (!$conn) {
    die("Connection failed: " . $conn->connect_error);
    }
    else{
      $userTable='userl';
$sqli = "SELECT * FROM $userTable WHERE oauth_uid = '".$_SESSION['linkedin']."'";
$resultin = mysql_query($sqli); 
    while($h = mysql_fetch_array($resultin)) {
        $namo = $h[3].' '.$h[4];
    
}
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <?php 
    if($_SESSION['linkedin']){
    ?>
    <title><?php echo $namo;?></title>
    <?php }
    else{
    ?>
     <title>ECELL || JUIT</title>
     <?php } ?>
    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="images/android-desktop.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    <link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <link rel="shortcut icon" href="images/favicon.png">

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/material.min.css">
    <link rel="stylesheet" href="https://code.getmdl.io/1.1.1/material.indigo-pink.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/styleb.css">
    <link rel="stylesheet" href="css/modal.css">
    <script src="//cdn.ckeditor.com/4.5.11/basic/ckeditor.js"></script>
    <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
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
    <link href="generic.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
      .sticky {
  position: fixed;
  width: 100%;
  left: 0;
  top: 0;
  z-index: 100;
  border-top: 0;
}
 #editor1 {
      border: 1px solid #ccc;
      height: 150px;
      width: 381px;
      margin: 10px auto 0;
      overflow-y: auto;
      break-word:word-wrap;
      overflow-x:hidden;
      text-align: justify;
     }
    fieldset {
      margin: 2px auto 15px;
      width: 358px;
    }
    button {
      width: 5ex;
      text-align: center;
      padding: 1px 3px;
    }
 #myBtn {
      position: fixed;
      display: block;
      right: 0;
      bottom: 0;
      margin-right: 40px;
      margin-bottom: 40px;
      z-index: 900;
    }
    #sidenav{
      position: fixed;
      display: block;
      z-index: 900;
      margin-top: 100px;
      margin-left:-10px;
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

p{
  color:black;
}
    </style>
<script src="//cdn.ckeditor.com/4.5.11/basic/ckeditor.js"></script>
  </head>
  <body class="mdl-demo mdl-color--grey-100 mdl-color-text--grey-700 mdl-base">
   <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">

      <div class="android-header mdl-layout__header mdl-layout__header--waterfall">
        <div class="mdl-layout__header-row">
          <span class="android-title mdl-layout-title">
            <img class="android-logo-image" src="images/android-logo.png"  style="height:70px;width:150px;margin-top:0px;margin-left:0px;">
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
          
          <?php if(isset($_SESSION["loggedin_user_id"]) || !empty($_SESSION["user"])){
              $user = $_SESSION["user"];
              echo '<img src='.$user->pictureUrl.' style="height:50px;width:50px;border-radius:50px;" id="pro">';
              $logout = 'linkedin/logout.php?logout';
              $id = $user->id;
              $_SESSION['linkedin'] = $id;
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
          <a class="mdl-navigation__link" href="">About us</a>
           <div class="android-drawer-separator"></div>
          <a class="mdl-navigation__link" href="">Contact us</a>
          <div class="android-drawer-separator"></div>
          </nav>
      </div>

      <div class="android-content mdl-layout__content" style="overflow-x:hidden;width:100%;">
        <a name="top"></a>
        <?php 
        if($_SESSION['linkedin']){
  
$oauth_id = $_SESSION['linkedin'];
$id = $oauth_id;
$_SESSION['linkedin'] = $id;
$sql = "SELECT * FROM $userTable WHERE oauth_uid = '".$_SESSION['linkedin']."'";
$resultp = mysqli_query($conn,$sql); 
    while($row = mysqli_fetch_assoc($resultp)) {
        $pictureUrl = $row['picture_url'];
    }

}
?>
  
       <center><main class="mdl-layout__content ">
       <?php if($_SESSION['linkedin']){?>
              <div class="mdl-layout__tab-panel is-active" id="overview">
            <div id="wrapper">
    <div id="menu">
        <p class="welcome">Welcome, <b><?php echo " ".$namo;?></b></p>
        <p class="logout"><a id="exit" href="#">Exit Chat</a></p>
        <div style="clear:both"></div>
    </div>
     
<div id="chatbox" style="overflow:visible;width:600px;word-wrap: break-word;"><?php
if(file_exists("log.php") && filesize("log.php") > 0){
    $handle = fopen("log.php", "a");
    $contents = fread($handle, filesize("log.php"));
    fclose($handle);
     
    echo $contents;
}
?></div><br>     
    <form name="message" action="" width="100%">
        <textarea cols="20" rows="5" name="usermsg" type="text" id="usermsg" size="63" required ></textarea><br>
           
        <button name="submitmsg" type="submit" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" style="width:20%;" id="submitmsg" value="Send">Submit</button>
    </form>
</div>
<?php }
else{
?>
<br><br><br><br>
  <center><span class="mdl-chip mdl-chip--contact" style="width:100%;">
    <span class="mdl-chip__contact mdl-color--red mdl-color-text--white" style="margin-left:-4%;"><i class="material-icons">warning</i></span>
    <span class="mdl-chip__text">Sorry!! Please Login to use Forums.</span>
</span></center>
 <?php }?>
      </main></center>
    </div>

            
          </section>
     
<br><br>
          <br>
            
 <dialog class="mdl-dialog">
    <button type="button" class="mdl-button close">&#10006;</button>
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
<script type="text/javascript">
// jQuery Document
$(document).ready(function(){
 $("#exit").click(function(){
        var exit = confirm("Are you sure you want to end the session?");
        if(exit==true){window.location = 'index.php?logout=true';}      
    });
 //If user submits the form
    $("#submitmsg").click(function(){   
        var clientmsg = $("#usermsg").val();
        $.post("post.php", {text: clientmsg});              
        $("#usermsg").attr("value", "");
        return false;
    });
    function loadLog(){     

        $.ajax({
            url: "log.php",
            cache: false,
            success: function(html){        
                $("#chatbox").html(html); //Insert chat log into the #chatbox div               
            },
        });
    }
    //Load the file containing the chat log
    function loadLog(){     
        var oldscrollHeight = $("#chatbox").attr("scrollHeight") - 20; //Scroll height before the request
        $.ajax({
            url: "log.php",
            cache: false,
            success: function(html){        
                $("#chatbox").html(html); //Insert chat log into the #chatbox div   
                
                //Auto-scroll           
                var newscrollHeight = $("#chatbox").attr("scrollHeight") - 20; //Scroll height after the request
                if(newscrollHeight > oldscrollHeight){
                    $("#chatbox").animate({ scrollTop: newscrollHeight }, 'normal'); //Autoscroll to bottom of div
                }               
            },
        });
    }
    setInterval (loadLog, 1000);
});
</script>
     <script src="js/material.min.js"></script>
                <script src="js/modal.js"></script>

  </body>
</html>
