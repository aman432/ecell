<?php 
session_start();
include 'connection.php';
$b_id = $_POST['blo_id1'];
$sess = $_POST['session1'];
$et = $_POST['btn'];
if($et == 'like'){
$unlike_query = mysql_query("SELECT * FROM unlikers WHERE blog_id='".$b_id."' and unlikers_id ='".$sess."'");
if (mysql_num_rows($unlike_query)>0){
	mysql_query("DELETE FROM unlikers WHERE blog_id = '".$b_id."' and unlikers_id ='".$sess."'");
}
$blog_query = mysql_query("INSERT INTO likers (blog_id,likers_id) VALUES('".$b_id."','".$sess."')");
$result_likes=mysql_query("SELECT count(*) as total from likers where blog_id='".$b_id."'");
$data_likes=mysql_fetch_assoc($result_likes);
$result_unlikes=mysql_query("SELECT count(*) as sum from unlikers where blog_id='".$b_id."'");
$data_unlikes=mysql_fetch_assoc($result_unlikes);
$faltu_query = mysql_query("SELECT * FROM rating where blog_id='".$b_id."'");
if(mysql_num_rows($faltu_query)>0){
	$update = mysql_query("UPDATE rating SET likes= '".$data_likes['total']."' , dislikes='".$data_unlikes['sum']."' WHERE blog_id='".$b_id."'");
}
else{
mysql_query("INSERT INTO rating (blog_id,likes,dislikes) VALUES('".$b_id."','".$data_likes['total']."','".$data_unlikes['sum']."')");
}
 $ab1 = mysql_query("SELECT * FROM rating WHERE blog_id = '".$b_id."'"); 
                while($ab2 = mysql_fetch_array($ab1)){
                  $n_likes = $ab2['likes'];
                  $n_dislikes = $ab2['dislikes'];
                }
echo json_encode(array($n_likes,$n_dislikes)); 
}
else if($et == 'unlike'){
$like_query = mysql_query("SELECT * FROM likers WHERE blog_id='".$b_id."' and likers_id ='".$sess."'");
if (mysql_num_rows($like_query)>0){
	mysql_query("DELETE FROM likers WHERE blog_id = '".$b_id."' and likers_id ='".$sess."'");
}
$blog_query = mysql_query("INSERT INTO unlikers (blog_id,unlikers_id) VALUES('".$b_id."','".$sess."')");	
$result_likes=mysql_query("SELECT count(*) as total from likers where blog_id='".$b_id."'");
$data_likes=mysql_fetch_assoc($result_likes);
$result_unlikes=mysql_query("SELECT count(*) as sum from unlikers where blog_id='".$b_id."'");
$data_unlikes=mysql_fetch_assoc($result_unlikes);
$faltu_query = mysql_query("SELECT * FROM rating where blog_id='".$b_id."'");
if(mysql_num_rows($faltu_query)>0){
	$update = mysql_query("UPDATE rating SET likes= '".$data_likes['total']."' , dislikes='".$data_unlikes['sum']."' WHERE blog_id='".$b_id."'");
}
else{
mysql_query("INSERT INTO rating (blog_id,likes,dislikes) VALUES('".$b_id."','".$data_likes['total']."','".$data_unlikes['sum']."')");
}
 $ab1 = mysql_query("SELECT * FROM rating WHERE blog_id = '".$b_id."'"); 
                while($ab2 = mysql_fetch_array($ab1)){
                  $n_likes = $ab2['likes'];
                  $n_dislikes = $ab2['dislikes'];
                }
                 echo json_encode(array($n_likes,$n_dislikes)); 
             
}

?>
