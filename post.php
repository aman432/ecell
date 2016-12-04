<?php
include 'connection.php';
date_default_timezone_set("Asia/Calcutta");
session_start();
if(isset($_SESSION['linkedin'])){
    $userTable='userl';
$sqli = "SELECT * FROM $userTable WHERE oauth_uid = '".$_SESSION['linkedin']."'";
$resultin = mysql_query($sqli); 
    while($h = mysql_fetch_array($resultin)) {
        $namo = $h[3].' '.$h[4];
        $pic_url = $h[8];
        $loc = $h[6];
    
}
    $text = $_POST['text'];
    if($text == '')
     fwrite($fp, " ");
	else{
    $fp = fopen("log.php", 'a');
    $time = date("H:i:s");
    $date = date("d-m-Y");
    $d = explode(":", $time);
    $h = $d[0];
    $m = $d[1];
    $s = $d[2];
   
    fwrite($fp, "<br><div class='msgln' style='background-color:#fff;height:auto;min-height:120px;color:#000;box-shadow: 5px 5px 3px #888888;overflow:auto;'> <img src='".$pic_url."' style='border-radius:25px;height:50px;width:50px;margin-top:1.5%;margin-left:-53%;'>&nbsp;&nbsp;&nbsp;<h5 style='color:#000;display:inline;margin-top:-5%;'>".$namo."</h5>
            <p style='margin-top:-4%;margin-left:-45%;font-size:14px;color:#757575;'><b>".$loc."</b></p><p style='margin-left:-76%;margin-top:4%;'><div style='width:80%;'><b>(".date("g:i A")."):</b><p style='word-break: break-all;'>".stripslashes(htmlspecialchars($text))."</div></p></p>"."</div>");
    if($_SESSION['linkedin'])
    	    fwrite($fp, "");
    else
    	    fwrite($fp, "<hr>");


    fclose($fp);
}
}

?>