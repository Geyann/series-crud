<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $fName = $_POST['fName'];
    $lName = $_POST['lName'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    //insert query
    $sql = "insert into seriescrud (fname,lName,email,mobile) values ('$fName','$lName','$email','$mobile')";
    $result=mysqli_query($con,$sql);
    if($result){
      header('location:read.php');
    }else{
      die(mysqli_connect($con));
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>PHP series crud</title>
  </head>
  <body>
    <div class="container my-5">
      <form method = "post">
  <div class="mb-3">
      <label  class="fName">First Name</label>
      <input type="text" class="form-control"  
      placeholder="enter your first name" name = 'fName' autocomplete = "off">
  </div>
  <div class="mb-3">
      <label  class="lName">Last Name</label>
      <input type="text" class="form-control"  
      placeholder="enter your last name" name = 'lName' autocomplete = "off">
  </div>
  <div class="mb-3">
      <label  class="email">Email</label>
      <input type="email" class="form-control"  
      placeholder="enter your email" name = 'email' autocomplete = "off">
  </div>
  <div class="mb-3">
      <label  class="mobile">Mobile</label>
      <input type="mobile" class="form-control"  
      placeholder="enter your mobile" name = 'mobile' autocomplete = "off">
  </div>
  <button class="btn btn-dark btn-lg"
  name = 'submit'>Submit</button>
 </form> 
</div>
  
  </body>
</html>
