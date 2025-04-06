<?php
include 'connect.php';
$id=$_GET['updateid'];
//echo $id;
$sql="delete FROM seriescrud WHERE id=$id";
$result=mysqli_query($con,$sql); 
if($result){
    //echo "Deleted successfully";
    header('location:read.php');
}else{
    die(mysqli_error($con));
}
?>
