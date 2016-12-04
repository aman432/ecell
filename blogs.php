<?php 
session_start();
error_reporting(0);
include 'connection.php';
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
if(isset($_POST['time'])){
$time = 1;
$most = 0;
$all = 0;
}
else if(isset($_POST['most'])){
$time = 0;
$most = 1;
$all = 0; 
}
else{
$time = 0;
$most = 0;
$all = 1;
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

    <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
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
body{
  overflow-y: hidden;
}
p{
  color:black;
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
        <script type="text/javascript">
function like(x){
var name = x;
var sess_val = $("#sess").val();
// Returns successful data submission message when the entered information is stored in database.
var dataString = 'blo_id1='+ name + '&session1='+sess_val + '&btn=like';
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "like.php",
data: dataString,
cache: false,
success: function(data){
  $("#like"+x).html(data[2]);
  $("#unlike"+x).html(data[6]);
  $("#ilike"+x).css("color","#2196F3");
  $("#iunlike"+x).css("color","#000");

}
  
});
return false;
}
    </script>
    <script type="text/javascript">
      function unlike(y){
var name = y;
var sess_val = $("#sess").val();
// Returns successful data submission message when the entered information is stored in database.
var dataString = 'blo_id1='+ name + '&session1='+sess_val + '&btn=unlike';
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "like.php",
data: dataString,
cache: false,
success: function(data){
   $("#like"+y).html(data[2]);
   $("#unlike"+y).html(data[6]);
   $("#iunlike"+y).css("color","#2196F3");
   $("#ilike"+y).css("color","#000");   
}
});
return false;
}
    </script>

<script src="//cdn.ckeditor.com/4.5.11/standard/ckeditor.js"></script>
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


      
if(isset($_POST['sub'])){
    if (!$conn) {
    die("Connection failed: " . $conn->connect_error);
    }
    try
  {

  $id = trim($_POST['id']);
  $head = trim($_POST['head']);
  $tag = trim($_POST['tag']);
  $blog_id = md5($id.''.$head.''.$tag);
  $blog = trim($_POST['editor1']);
  $time = time();
  $query = "INSERT into blogs (blog_id,uid,heading,tags,text,timestamp) values('".$blog_id."','".$id."','".$head."','".$tag."','".$blog."','".$time."')";
  if (mysqli_query($conn, $query)) {
    echo "";
      
} else {
    
}
}
catch(PDOException $e){
   echo $e->getMessage();
  }
}
?>
  
      <main class="mdl-layout__content ">
              <div class="mdl-layout__tab-panel is-active" id="overview">
   <div class="content-grid mdl-grid">
   <div class="mdl-cell mdl-cell--6-col mdl-cell--2-col-tablet mdl-cell--2-col-phone mdl-shadow--2dp" id="sidenav" style="background:#fff;width:5%;height:300px;">
   <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
      <?php if($time){?>
   <ul style="margin-left:-21px;list-style-type: none;">
    <li><button type="submit" name="all" style="background-color: Transparent;background-repeat:no-repeat;border: none;cursor:pointer;overflow: hidden;outline:none;height:90px;"><i class="material-icons">done_all</i>All</button> </li>
   <li><button type="submit" name="time" style="background-color: Transparent;background-repeat:no-repeat;border: none;cursor:pointer;overflow: hidden;outline:none;height:90px;"><i class="material-icons" style="color:#2196F3">low_priority</i>Time Add</button> </li>
    <li><button type="submit" name="most" style="background-color: Transparent;background-repeat:no-repeat;border: none;cursor:pointer;overflow: hidden;outline:none;height:90px;"><i class="material-icons">star</i>Most Rate</button> </li>
   </ul>
   <?php }
   else if($most){?>
   <ul style="margin-left:-21px;list-style-type: none;">
    <li><button type="submit" name="all" style="background-color: Transparent;background-repeat:no-repeat;border: none;cursor:pointer;overflow: hidden;outline:none;height:90px;"><i class="material-icons">done_all</i>All</button> </li>
   <li><button type="submit" name="time" style="background-color: Transparent;background-repeat:no-repeat;border: none;cursor:pointer;overflow: hidden;outline:none;height:90px;"><i class="material-icons">low_priority</i>Time Add</button> </li>
    <li><button type="submit" name="most" style="background-color: Transparent;background-repeat:no-repeat;border: none;cursor:pointer;overflow: hidden;outline:none;height:90px;"><i class="material-icons"  style="color:#2196F3">star</i>Most Rate</button> </li>
   </ul>
   <?php }
      else{?>
   <ul style="margin-left:-21px;list-style-type: none;">
    <li><button type="submit" name="all" style="background-color: Transparent;background-repeat:no-repeat;border: none;cursor:pointer;overflow: hidden;outline:none;height:90px;"><i class="material-icons" style="color:#2196F3">done_all</i>All</button> </li>
   <li><button type="submit" name="time" style="background-color: Transparent;background-repeat:no-repeat;border: none;cursor:pointer;overflow: hidden;outline:none;height:90px;"><i class="material-icons">low_priority</i>Time Add</button> </li>
    <li><button type="submit" name="most" style="background-color: Transparent;background-repeat:no-repeat;border: none;cursor:pointer;overflow: hidden;outline:none;height:90px;"><i class="material-icons">star</i>Most Rate</button> </li>
   </ul>
   <?php }?>
   </form>
  </div>
</div>
<div>
              <?php 
               
               if ( !$connect ) {
                die("Connection failed : " . mysql_error());
               }
               
               if ( !$dbcon ) {
                die("Database Connection failed : " . mysql_error());
               }
               if($all==1){
              $b_quer = "SELECT * FROM blogs ORDER BY timestamp DESC";
            }
            else if($time==1){
             $b_quer = "SELECT * FROM blogs ORDER BY timestamp"; 
            }
            else{
              $b_quer = 'SELECT m.* FROM blogs AS m JOIN rating AS p on p.blog_id = m.blog_id ORDER BY (p.likes - p.dislikes) DESC';
            }
              $run = mysql_query($b_quer);
              ?>
              <?php while($row = mysql_fetch_array($run)){
                ?>

          <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
            
            <?php 
              $img_url_query = "SELECT * FROM userl WHERE oauth_uid = '".$row[1]."'";
              $resultp = mysql_query($img_url_query); 
              while($r = mysql_fetch_assoc($resultp)) {
                  $img_url = $r['picture_url'];
                  $fname = $r['fname'];
                  $lname = $r['lname'];
                  $loc = $r['location'];
              }
              
            ?>
        
            <div class="mdl-card mdl-cell mdl-cell--9-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone" style="width:100%;"><div style="display: inline;">
            <img src=<?php echo $img_url;?> style="border-radius:25px;height:50px;width:50px;margin-top:1.5%;margin-left:1%;">&nbsp;&nbsp;&nbsp;<h5 style="color:#000;display:inline;margin-top:-5%;"><?php echo $fname;?>&nbsp;<?php echo $lname;?></h5>
            </div>
            <b style="color:$ccc;font-size:12px;margin-left:9%;margin-top: -2%;"><?php echo $loc; ?></b>
              <div class="mdl-card__supporting-text" style="width:100%;">
              <?php 
                $ab1 = mysql_query("SELECT * FROM rating WHERE blog_id = '".$row[0]."'"); 
                while($ab2 = mysql_fetch_array($ab1)){
                  $n_likes = $ab2['likes'];
                  $n_dislikes = $ab2['dislikes'];
                }
              ?>

                <h4><?php echo $row[2]?></h4>
                <?php echo $row[4]?>
              </div>
              <div class="mdl-card__actions">
                <a href="#" class="mdl-button">Read our features</a>
              <input type="hidden" id="<?php echo $row[0]?>" name="blog_id" value='<?php echo $row[0];?>' />  
              <input type="hidden" id="sess" name="sessi" value='<?php echo $id;?>' />  

              <?php 
                $like_query = mysql_query("SELECT * FROM likers WHERE blog_id = '".$row[0]."' AND likers_id='".$id."'");
                $unlike_query = mysql_query("SELECT * FROM unlikers WHERE blog_id = '".$row[0]."' AND unlikers_id='".$id."'");

              ?>
              <?php if(mysql_num_rows($like_query)>0) {?>
              <div style="margin-top:-4%;margin-left:90%;">
              <button type="submit" onclick="like('<?php echo $row[0]?>')" name='<?php echo 'like'.$row[0]; ?>' style="background-color: Transparent;background-repeat:no-repeat;border: none;cursor:pointer;overflow: hidden;outline:none;"><i id="ilike<?php echo $row[0];?>" class="material-icons" style="color:#2196F3">thumb_up</i><p id="like<?php echo $row[0];?>"><?php echo $n_likes; ?> </p></button>
              <button type="submit" onclick="unlike('<?php echo $row[0]?>')" name='<?php echo 'unlike'.$row[0]; ?>' style="background-color: Transparent;background-repeat:no-repeat;border: none;cursor:pointer;overflow: hidden;outline:none;"><i id="iunlike<?php echo $row[0];?>" class="material-icons">thumb_down</i><p id="unlike<?php echo $row[0];?>"><?php echo $n_dislikes ?></p></button>
              </div>
              <?php }
              elseif(mysql_num_rows($unlike_query)>0) {?>
            <div style="margin-top:-4%;margin-left:90%;">
              <button type="submit" onclick="like('<?php echo $row[0]?>')" name='<?php echo 'like'.$row[0]; ?>' style="background-color: Transparent;background-repeat:no-repeat;border: none;cursor:pointer;overflow: hidden;outline:none;"><i id="ilike<?php echo $row[0];?>" class="material-icons">thumb_up</i><p id="like<?php echo $row[0];?>"><?php echo $n_likes ?></p></button>
              <button type="submit" onclick="unlike('<?php echo $row[0]?>')" name='<?php echo 'unlike'.$row[0]; ?>' style="background-color: Transparent;background-repeat:no-repeat;border: none;cursor:pointer;overflow: hidden;outline:none;"><i id="iunlike<?php echo $row[0];?>" style="color:#2196F3" class="material-icons">thumb_down</i><p id="unlike<?php echo $row[0];?>"><?php echo $n_dislikes ?></p></button>
              </div>
            <?php }
            else{
            ?>
              <div style="margin-top:-4%;margin-left:90%;">
              <button type="submit" onclick="like('<?php echo $row[0]?>')" name='<?php echo 'like'.$row[0]; ?>' style="background-color: Transparent;background-repeat:no-repeat;border: none;cursor:pointer;overflow: hidden;outline:none;"><i id="ilike<?php echo $row[0];?>" class="material-icons">thumb_up</i><p id="like<?php echo $row[0];?>"><?php echo $n_likes ?></p></button>
              <button type="submit" onclick="unlike('<?php echo $row[0]?>')" name='<?php echo 'unlike'.$row[0]; ?>' style="background-color: Transparent;background-repeat:no-repeat;border: none;cursor:pointer;overflow: hidden;outline:none;"><i id="iunlike<?php echo $row[0];?>" class="material-icons">thumb_down</i><p id="unlike<?php echo $row[0];?>"><?php echo $n_dislikes ?></p></button>
              </div>
              <?php }?>
             
            </div>
            <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="btn1">
              <i class="material-icons">more_vert</i>
            </button>
            <ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right" for="btn1">
              <li class="mdl-menu__item"><b>Report</b></li>
            </ul>
            
          </section>
         <?php
          }?>
          <section class="section--footer mdl-color--white mdl-grid">
            <div class="section__circle-container mdl-cell mdl-cell--2-col mdl-cell--1-col-phone">
              <div class="section__circle-container__circle mdl-color--accent section__circle--big"></div>
            </div>
            <div class="section__text mdl-cell mdl-cell--4-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
              <h5>Lorem ipsum dolor sit amet</h5>
              Qui sint ut et qui nisi cupidatat. Reprehenderit nostrud proident officia exercitation anim et pariatur ex.
            </div>
            <div class="section__circle-container mdl-cell mdl-cell--2-col mdl-cell--1-col-phone">
              <div class="section__circle-container__circle mdl-color--accent section__circle--big"></div>
            </div>
            <div class="section__text mdl-cell mdl-cell--4-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
              <h5>Lorem ipsum dolor sit amet</h5>
              Qui sint ut et qui nisi cupidatat. Reprehenderit nostrud proident officia exercitation anim et pariatur ex.
            </div>
          </section>
        </div>
        <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored" id="myBtn"><i class="material-icons">mode_edit</i></button> 
        <div class="mdl-layout__tab-panel" id="features">
          <section class="section--center mdl-grid mdl-grid--no-spacing">
            <div class="mdl-cell mdl-cell--12-col">
              <h4>Features</h4>
              Minim duis incididunt est cillum est ex occaecat consectetur. Qui sint ut et qui nisi cupidatat. Reprehenderit nostrud proident officia exercitation anim et pariatur ex.
              <ul class="toc">
                <h4>Contents</h4>
                <a href="#lorem1">Lorem ipsum</a>
                <a href="#lorem2">Lorem ipsum</a>
                <a href="#lorem3">Lorem ipsum</a>
                <a href="#lorem4">Lorem ipsum</a>
                <a href="#lorem5">Lorem ipsum</a>
              </ul>

              <h5 id="lorem1">Lorem ipsum dolor sit amet</h5>
              Excepteur et pariatur officia veniam anim culpa cupidatat consequat ad velit culpa est non.
              <ul>
                <li>Nisi qui nisi duis commodo duis reprehenderit consequat velit aliquip.</li>
                <li>Dolor consectetur incididunt in ipsum laborum non et irure pariatur excepteur anim occaecat officia sint.</li>
                <li>Lorem labore proident officia excepteur do.</li>
              </ul>

              <p>
                Sit qui est voluptate proident minim cillum in aliquip cupidatat labore pariatur id tempor id. Proident occaecat occaecat sint mollit tempor duis dolor cillum anim. Dolore sunt ea mollit fugiat in aliqua consequat nostrud aliqua ut irure in dolore. Proident aliqua culpa sint sint exercitation. Non proident occaecat reprehenderit veniam et proident dolor id culpa ea tempor do dolor. Nulla adipisicing qui fugiat id dolor. Nostrud magna voluptate irure veniam veniam labore ipsum deserunt adipisicing laboris amet eu irure. Sunt dolore nisi velit sit id. Nostrud voluptate labore proident cupidatat enim amet Lorem officia magna excepteur occaecat eu qui. Exercitation culpa deserunt non et tempor et non.
              </p>
              <p>
                Do dolor eiusmod eu mollit dolore nostrud deserunt cillum irure esse sint irure fugiat exercitation. Magna sit voluptate id in tempor elit veniam enim cupidatat ea labore elit. Aliqua pariatur eu nulla labore magna dolore mollit occaecat sint commodo culpa. Eu non minim duis pariatur Lorem quis exercitation. Sunt qui ex incididunt sit anim incididunt sit elit ad officia id.
              </p>
              <p id="lorem2">
                Tempor voluptate ex consequat fugiat aliqua. Do sit et reprehenderit culpa deserunt culpa. Excepteur quis minim mollit irure nulla excepteur enim quis in laborum. Aliqua elit voluptate ad deserunt nulla reprehenderit adipisicing sint. Est in eiusmod exercitation esse commodo. Ea reprehenderit exercitation veniam adipisicing minim nostrud. Veniam dolore ex ea occaecat non enim minim id ut aliqua adipisicing ad. Occaecat excepteur aliqua tempor cupidatat aute dolore deserunt ipsum qui incididunt aliqua occaecat sit quis. Culpa sint aliqua aliqua reprehenderit veniam irure fugiat ea ad.
              </p>
              <p>
                Eu minim fugiat laborum irure veniam Lorem aliqua enim. Aliqua veniam incididunt consequat irure consequat tempor do nisi deserunt. Elit dolore ad quis consectetur sint laborum anim magna do nostrud amet. Ea nulla sit consequat quis qui irure dolor. Sint deserunt excepteur consectetur magna irure. Dolor tempor exercitation dolore pariatur incididunt ut laboris fugiat ipsum sunt veniam aute sunt labore. Non dolore sit nostrud eu ad excepteur cillum eu ex Lorem duis.
              </p>
              <p>
                Id occaecat velit non ipsum occaecat aliqua quis ut. Eiusmod est magna non esse est ex incididunt aute ullamco. Cillum excepteur sint ipsum qui quis velit incididunt amet. Qui deserunt anim enim laborum cillum reprehenderit duis mollit amet ad officia enim. Minim sint et quis aliqua aliqua do minim officia dolor deserunt ipsum laboris. Nulla nisi voluptate consectetur est voluptate et amet. Occaecat ut quis adipisicing ad enim. Magna est magna sit duis proident veniam reprehenderit fugiat reprehenderit enim velit ex. Ullamco laboris culpa irure aliquip ad Lorem consequat veniam ad ipsum eu. Ipsum culpa dolore sunt officia laborum quis.
              </p>

              <h5 id="lorem3">Lorem ipsum dolor sit amet</h5>

              <p id="lorem4">
                Eiusmod nulla aliquip ipsum reprehenderit nostrud non excepteur mollit amet esse est est dolor. Dolore quis pariatur sit consectetur veniam esse ullamco duis Lorem qui enim ut veniam. Officia deserunt minim duis laborum dolor in velit pariatur commodo ullamco eu. Aute adipisicing ad duis labore laboris do mollit dolor cillum sunt aliqua ullamco. Esse tempor quis cillum consequat reprehenderit. Adipisicing proident anim eu sint elit aliqua anim dolore cupidatat fugiat aliquip qui.
              </p>
              <p id="lorem5">
                Nisi eiusmod esse cupidatat excepteur exercitation ipsum reprehenderit nostrud deserunt aliqua ullamco. Anim est irure commodo eiusmod pariatur officia. Est dolor ipsum excepteur magna aliqua ad veniam irure qui occaecat eiusmod aute fugiat commodo. Quis mollit incididunt amet sit minim velit eu fugiat voluptate excepteur. Sit minim id pariatur ex cupidatat cupidatat nostrud nostrud ipsum.
              </p>
              <p>
                Enim ea officia excepteur ad veniam id reprehenderit eiusmod esse mollit consequat. Esse non aute ullamco Lorem aliqua qui dolore irure eiusmod aute aliqua proident labore aliqua. Ipsum voluptate voluptate exercitation laborum deserunt nulla elit aliquip et minim ex veniam. Duis cupidatat aute sunt officia mollit dolor ad elit ad aute labore nostrud duis pariatur. In est sint voluptate consectetur velit ea non labore. Ut duis ea aliqua consequat nulla laboris fugiat aute id culpa proident. Minim eiusmod laboris enim Lorem nisi excepteur mollit voluptate enim labore reprehenderit officia mollit.
              </p>
              <p>
                Cupidatat labore nisi ut sunt voluptate quis sunt qui ad Lorem esse nisi. Ex esse velit ullamco incididunt occaecat dolore veniam tempor minim adipisicing amet. Consequat in exercitation est elit anim consequat cillum sint labore cillum. Aliquip mollit laboris ad labore anim.
              </p>
            </div>
          </section>
          </div>
        </div>
 <footer class="mdl-mega-footer">
          <div class="mdl-mega-footer--middle-section">
            <div class="mdl-mega-footer--drop-down-section">
              <input class="mdl-mega-footer--heading-checkbox" type="checkbox" checked>
              <h1 class="mdl-mega-footer--heading">Features</h1>
              <ul class="mdl-mega-footer--link-list">
                <li><a href="#">About</a></li>
                <li><a href="#">Terms</a></li>
                <li><a href="#">Partners</a></li>
                <li><a href="#">Updates</a></li>
              </ul>
            </div>
            <div class="mdl-mega-footer--drop-down-section">
              <input class="mdl-mega-footer--heading-checkbox" type="checkbox" checked>
              <h1 class="mdl-mega-footer--heading">Details</h1>
              <ul class="mdl-mega-footer--link-list">
                <li><a href="#">Spec</a></li>
                <li><a href="#">Tools</a></li>
                <li><a href="#">Resources</a></li>
              </ul>
            </div>
            <div class="mdl-mega-footer--drop-down-section">
              <input class="mdl-mega-footer--heading-checkbox" type="checkbox" checked>
              <h1 class="mdl-mega-footer--heading">Technology</h1>
              <ul class="mdl-mega-footer--link-list">
                <li><a href="#">How it works</a></li>
                <li><a href="#">Patterns</a></li>
                <li><a href="#">Usage</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="#">Contracts</a></li>
              </ul>
            </div>
            <div class="mdl-mega-footer--drop-down-section">
              <input class="mdl-mega-footer--heading-checkbox" type="checkbox" checked>
              <h1 class="mdl-mega-footer--heading">FAQ</h1>
              <ul class="mdl-mega-footer--link-list">
                <li><a href="#">Questions</a></li>
                <li><a href="#">Answers</a></li>
                <li><a href="#">Contact us</a></li>
              </ul>
            </div>
          </div>
          <div class="mdl-mega-footer--bottom-section">
            <div class="mdl-logo">
              More Information
            </div>
            <ul class="mdl-mega-footer--link-list">
              <li><a href="https://developers.google.com/web/starter-kit/">Web Starter Kit</a></li>
              <li><a href="#">Help</a></li>
              <li><a href="#">Privacy and Terms</a></li>
            </ul>
          </div>
        </footer>
      </main>
    </div>
     
<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header" style="height:5%;">
      <span class="close" onclick="modal.style.display = 'none';">×</span>
      <h5>Add a Blog</h5>
    </div>
    <div class="modal-body">
    <br>
    <center>
    <div id="form-content">
    <form method="POST" id="reg-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
      <div class="mdl-textfield mdl-js-textfield" style="margin-left:-12%;">
            <input type="hidden" name="id" value="<?php echo $oauth_id;?>"/>
            <input class="mdl-textfield__input" type="text" name="head" id="username" style="width:381px;" required="required" />
            <label class="mdl-textfield__label" for="username">Heading</label>
          </div><br>
          <div class="mdl-textfield mdl-js-textfield" style="margin-left:-12%;">
            <input class="mdl-textfield__input" type="text" id="userpass" name="tag" style="width:381px;" required="required"/>
            <label class="mdl-textfield__label" for="userpass">Tags</label>
          </div><br>
          <textarea name = "editor1" rowspan="3" required="required">Add Something Interesting and useful here!</textarea>
           <script>
            CKEDITOR.replace( 'editor1' );
        </script><br>
   <button type="submit" name ="sub" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" style="width:20%;" onclick = "alert(document.getElementById('editor1').innerHTML)">Submit</button>&nbsp;&nbsp;&nbsp;<button type="reset" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" style="width:20%;" onclick="document.getElementById('editor1').innerHTML = '';">Reset</button><br><br>
      </form>
      </div>
      </center>
    </div>
  </div>

</div>
<?php }
else{
  ?>
     <br><br><br>         <?php 
               $b_quer = "SELECT * FROM blogs ORDER BY timestamp DESC";
              $run = mysql_query($b_quer);
              $i = 0;
              while($row = mysql_fetch_array($run)){
               
                if($i<3){
                   $i = $i+1;
                ?>
          <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
            
            <?php 
              $img_url_query = "SELECT * FROM userl WHERE oauth_uid = '".$row[1]."'";
              $resultp = mysql_query($img_url_query); 
              while($r = mysql_fetch_assoc($resultp)) {
                  $img_url = $r['picture_url'];
                  $fname = $r['fname'];
                  $lname = $r['lname'];
                  $loc = $r['location'];
              }
              
            ?>
        
            <div class="mdl-card mdl-cell mdl-cell--9-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone" style="width:100%;"><div style="display: inline;">
            <img src=<?php echo $img_url;?> style="border-radius:25px;height:50px;width:50px;margin-top:1.5%;margin-left:1%;">&nbsp;&nbsp;&nbsp;<h5 style="color:#000;display:inline;margin-top:-5%;"><?php echo $fname;?>&nbsp;<?php echo $lname;?></h5>
            </div>
            <b style="color:$ccc;font-size:12px;margin-left:9%;margin-top: -2%;"><?php echo $loc; ?></b>
              <div class="mdl-card__supporting-text" style="width:100%;">
              

                <h4><?php echo $row[2]?></h4>
                <?php echo $row[4]?>
              </div>
            
            <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="btn1">
              <i class="material-icons">more_vert</i>
            </button>
            <ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right" for="btn1">
              <li class="mdl-menu__item"><b>Report</b></li>
            </ul>
            
          </section>
          <?php } 
          else break;
          ?>
                <?php } ?>
<br><br>
          <center><span class="mdl-chip mdl-chip--contact" style="width:40%;">
    <span class="mdl-chip__contact mdl-color--red mdl-color-text--white" s><i class="material-icons">warning</i></span>
    <span class="mdl-chip__text">Sorry!! Please Login to view more</span>
</span></center><br><br><br>
                <?php } ?>
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
     <script src="js/material.min.js"></script>
                <script src="js/modal.js"></script>

  </body>
</html>
