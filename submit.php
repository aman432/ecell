<?php 
session_start();
if(isset($_POST['sub'])){
  $dbServer = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'ecell';
  $conn = mysqli_connect($dbServer, $dbUsername, $dbPassword, $dbName);
    if (!$conn) {
    die("Connection failed: " . $conn->connect_error);
    }
    try
  {
    $id = trim($_POST['id']);
  $head = trim($_POST['head']);
  $tag = trim($_POST['tag']);
  $doc = new DomDocument();
  $doc->loadHTMLFile('http://localhost/ecell/blogs.php');
  $thediv = $doc->getElementById('editor1');
  $blog = trim($thediv->textContent);
  $query = "INSERT into blogs (uid,heading,tags,text) values('".$id."','".$head."','".$tag."','".$blog."')";
  if (mysqli_query($conn, $query)) {
    echo "<center><div style='width:63.5%;height:%;background-color:rgba(92,184,92,0.6);color:#fff;margin-top:15px;' id='del'><kbd style='font-size:22px;'>Blog Added Successfully!</kbd></div></center>";
      
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}
}
catch(PDOException $e){
   echo $e->getMessage();
  }
}
?>