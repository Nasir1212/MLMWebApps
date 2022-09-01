<?php 
session_start();
$db_host="localhost";
$db_user="root";
$db_pass="";
$db_name="db_cherrymlm";
$conn=mysqli_connect($db_host,$db_user,$db_pass,$db_name);
if(!$conn){
    echo "Not Connect";
}

if(isset($_SESSION['session_id']) && isset($_SESSION['user_id'])){
    $my_id=$_SESSION['user_id'];
}else{
    header("Location:index.php");

    echo "<script>
    window.location.href = 'index.php'
 </script>";
}
//error_reporting(0);

?>