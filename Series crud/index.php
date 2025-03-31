<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    //insert query
    $sql = "insert into seriescrud (fname,lname,email, 
    mobile) values('$fname','$lname','$email','$mobile')";
    $result = mysqli_query($connect,$sql);

    if($result){
    echo 'data inserted succesfully';
    }else{
    die(mysqli_error($connect));
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>PHP crud series</title>
  </head>
  <body>
    <div class="container my-5">
      <form method = "post">
    <div class="mb-3">
          <label class="form-label">First name</label>
          <input type="text" class="form-control"
          placeholder="Enter your first name " name = "fname">
      </div>
      <div class="mb-3">
          <label class="form-label">Last name</label>
          <input type="text" class="form-control"
          placeholder="Enter your last name " name = "lname" autocomplete = "off">
      </div>
      <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="email" class="form-control"
          placeholder="Enter your email" name = "email" autocomplete = "off">
      </div>
      <div class="mb-3">
          <label class="form-label">Mobile</label>
          <input type="mobile" class="form-control"
          placeholder="Enter your mobile " name = "mobile" autocomplete = "off">
      </div>
      <button class="btn btn-dark btn-lg my-3" name = "submit">Submit</button>
      </form>
    </div>
    
  
  </body>
</html>